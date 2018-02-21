<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\ParamConverter;
use Symfony\Component\Security\Core\Authentication\Token\Storage\TokenStorageInterface;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Security;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use AppBundle\Entity\Article;
use AppBundle\Entity\User;
use AppBundle\Entity\Ar_EB;
use AppBundle\Form\Ar_EBType;
use AppBundle\Entity\Expression_besoin;
use AppBundle\Form\Expression_besoinType;
use AppBundle\Pagination\Paginator;
use Symfony\Component\Form\Extension\Core\Type\HiddenType;

/**
 * Expression besoin controller.
 *
 */
class MesExpression_besoinController extends Controller
{

/**
     * @Security("has_role('ROLE_USER')")
    */
public function indexAction(Request $request)
    {
         $user = null;
        $employe = null;
        $tokenStorage = $this->get('security.token_storage');
        $em = $this->getDoctrine()->getManager();
        $token = $tokenStorage->getToken();
        if (null !== $token && is_object($token->getUser())) {
            $user = $token->getUser();}

        else{
            throw $this->createNotFoundException('Vous avez pas le droit, essayer d\'authentifier ');
        }
        $entitiesLength = $em->getRepository('AppBundle:Expression_besoin')->counterMesBesoins($user);
        return $this->render('gestionStock/MesExpression_besoin/index.html.twig', array(
            'user' => $user,
            'entitiesLength' => $entitiesLength));

           
    }

    /**
     * @Security("has_role('ROLE_USER')")
    */
    public function ajaxlisteAction(Request $request)
    {
        $user = null;
        $employe = null;
        $tokenStorage = $this->get('security.token_storage');
        $em = $this->getDoctrine()->getManager();
        $token = $tokenStorage->getToken();
        if (null !== $token && is_object($token->getUser())) {
            $user = $token->getUser();}

        else{
            throw $this->createNotFoundException('Vous avez pas le droit, essayer d\'authentifier ');
        }
        $searchParam = $request->get('searchParam');
        $entities = $em->getRepository('AppBundle:Expression_besoin')->searchMesBesoins($searchParam,$user);
        $pagination = (new Paginator())->setItems(count($entities), $searchParam['perPage'])->setPage($searchParam['page'])->toArray();
        return $this->render('gestionStock/MesExpression_besoin/ajaxliste.html.twig', array(
                    'entities' => $entities,
                    'pagination' => $pagination
                    ));
    }

    /**
     * @Security("has_role('ROLE_USER')")
    */
    public function showAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('AppBundle:Expression_besoin')->find($id);
        $ar_ebs = $em->getRepository('AppBundle:Ar_EB')->searchh($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Expression de besoin entity.');
        }

        $deleteForm = $this->createDeleteForm($id);

        return $this->render('gestionStock/MesExpression_besoin/show.html.twig', array(
            'entity'      => $entity,
            'ar_ebs'      => $ar_ebs,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * @Security("has_role('ROLE_USER')")
    */
     public function newMultipleAction()
    {
        $entity = new Expression_besoin();
        $ar_eb = new Ar_EB();
        $form = $this->createForm(Ar_EBType::class,$ar_eb);
        $em = $this->getDoctrine()->getManager();
        $articles = $em->getRepository('AppBundle:Article')->findAll();

        return $this->render('gestionStock/MesExpression_besoin/new.html.twig', array(
            'ar_eb' => $ar_eb,
            'articles' => $articles,
            'form'   => $form->createView()
            ));
    }


    /**
     * @Security("has_role('ROLE_USER')")
    */
  public function createMultipleAction(Request $request)
    {
        $user = null;
        $employe = null;
        $tokenStorage = $this->get('security.token_storage');
        $token = $tokenStorage->getToken();

        $em = $this->getDoctrine()->getManager();
        $expression_besoin  = new Expression_besoin();
        $ar_eb = new Ar_EB();
        $form = $this->createForm(Ar_EBType::class,$ar_eb);
        $form->handleRequest($request);
        $articlees = $em->getRepository('AppBundle:Article')->findAll();

        //if ($form->isSubmitted() && $form->isValid()) {
            $articles = $request->get('article');
            
            if (null !== $token && is_object($token->getUser())) {
            $user = $token->getUser();
            $employe = $user->getEmploye();
            $expression_besoin->setEmploye($employe);
            $em->persist($expression_besoin);
            $ar_eb->setExpressionBesoin($expression_besoin);
            $em->persist($ar_eb);
            if(count($articles) > 1){
                foreach ($articles as $key => $value ) {
                        $ar=$em->getRepository('AppBundle:Article')->searchh($value['ref']);
                        if (!$ar) {
                            throw $this->createNotFoundException('Unable to find Article entity.');
                        }
                        $data['ar'] = $ar;
                        $data['expression_besoin'] = $expression_besoin;
                        $data['quantite'] = $value['quantite'];
                        $ar_eb = new Ar_EB();
                        $ar_eb->setData($data);
                        $ar_ebs[]= $ar_eb;
                        $key++;
                    }
                     foreach ($ar_ebs as $ar_ebb) {
                    $em->persist($ar_ebb);
                         } 
                }
                 $em->flush();

            $this->get('session')->getFlashBag()->add('success', "L'Expression de besoin a été ajouté avec succée.");
            return $this->redirect($this->generateUrl('mesExpression_besoin_show', array('id' => $expression_besoin->getId())));

        }else{
                throw $this->createNotFoundException('Vous n\'avez pas le droit, vous devrez étre authentifiée');
            }
           
        //}
        $this->get('session')->getFlashBag()->add('error', "Il y a des erreurs dans le formulaire soumis !");
        return $this->render('gestionStock/MesExpression_besoin/new.html.twig', array(
            'ar_eb' => $ar_eb,
            'articles' => $articlees,
            'form'   => $form->createView(),
        ));
    }

    /**
     * @Security("has_role('ROLE_USER')")
    */
    public function deleteAction(Request $request, $id)
    {
       // $form = $this->createDeleteForm($id);
        //$form->handleRequest($request);

        //if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $entity = $em->getRepository('AppBundle:Expression_besoin')->find($id);

            if (!$entity) {
                throw $this->createNotFoundException('Unable to find Expression de besoin entity.');
                return new Response('not valid');
            }

            $em->remove($entity);
            $em->flush();
            $this->get('session')->getFlashBag()->add('info', "Action effectué avec succès !");
       // }

        return $this->redirect($this->generateUrl('mesExpression_besoin'));
    }


    /**
     * @Security("has_role('ROLE_USER')")
    */
    private function createDeleteForm($id)
    {
        return $this->createFormBuilder(array('id' => $id))
            ->add('id',HiddenType::class)
            ->getForm()
        ;
    }

    /**
     * @Security("has_role('ROLE_USER')")
    */
    public function removeAction(Request $request)
    {
        $ids = $request->get('entities');
        $em = $this->getDoctrine()->getManager();
        $entities = $em->getRepository('AppBundle:Expression_besoin')->search(array('ids'=>$ids));
        foreach( $entities as $entity) $em->remove($entity);
        $em->flush();

        return new Response('1');
    }

}