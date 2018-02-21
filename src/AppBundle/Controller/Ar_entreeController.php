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
use AppBundle\Entity\Entree;
use AppBundle\Entity\Article;
use AppBundle\Entity\Ar_entree;
use AppBundle\Form\Ar_entreeType;
use AppBundle\Form\ArticleType;
use AppBundle\Pagination\Paginator;
use Symfony\Component\Form\Extension\Core\Type\HiddenType;


/**
 * Ar_entree controller.
 *
 */
class Ar_entreeController extends Controller
{
 /**
     * @Security("has_role('ROLE_ADMIN') or has_role('ROLE_MANAGER')")
    */
    public function indexAction(Request $request)
    {
        $em = $this->getDoctrine()->getManager();
        $entitiesLength = $em->getRepository('AppBundle:Ar_entree')->counter();
        $articles = $em->getRepository('AppBundle:Ar_entree')->getArticles();
        $entrees = $em->getRepository('AppBundle:Ar_entree')->getEntrees();
        $refEntrees = $em->getRepository('AppBundle:Ar_entree')->getRefEntrees();

        return $this->render('gestionStock/Ar_entree/index.html.twig', array(
            'articles' => $articles,
            'entrees' => $entrees,
            'refEntrees' => $refEntrees,
            'entitiesLength' => $entitiesLength));

           
    }

    /**
     * persons list using ajax
     */
    public function ajaxlisteAction(Request $request)
    {

        $em = $this->getDoctrine()->getManager();
        $searchParam = $request->get('searchParam');
        $entities = $em->getRepository('AppBundle:Ar_entree')->search($searchParam);
        $pagination = (new Paginator())->setItems(count($entities), $searchParam['perPage'])->setPage($searchParam['page'])->toArray();
        return $this->render('gestionStock/Ar_entree/ajaxliste.html.twig', array(
                    'entities' => $entities,
                    'pagination' => $pagination
                    ));
    }
    
     /**
     * @Security("has_role('ROLE_ADMIN') or has_role('ROLE_MANAGER')")
    */
    public function createAction(Request $request)
    {
        $entity = new Ar_entree();
        $form = $this->createForm(Ar_entreeType::class,$entity);
        $form->handleRequest($request);

        if($form->isSubmitted() && $form->isValid()){
            $em=$this->getDoctrine()->getManager();
            $em->persist($entity);
            $em->flush();

            $this->get('session')->getFlashBag()->add('info', "L'Entré a été ajouté avec succès.");
            return $this->redirect($this->generateUrl('ar_entree_show', array('id' => $entity->getId())));
        }
        
        $this->get('session')->getFlashBag()->add('danger', "Il y a des erreurs dans le formulaire soumis !");
        return $this->render('gestionStock/Ar_entree/new.html.twig', array(
            'entity' => $entity,
            'form'   => $form->createView(),
            // 'cities' => $cities,
        ));
    }

     /**
     * @Security("has_role('ROLE_ADMIN') or has_role('ROLE_MANAGER')")
    */
    public function newAction()
    {
        $entity = new Ar_entree();
        $form = $this->createForm(Ar_entreeType::class, $entity);
        $em = $this->getDoctrine()->getManager();

        return $this->render('gestionStock/Ar_entree/new.html.twig', array(
            'entity' => $entity,
            'form'   => $form->createView(),
        ));
    }

     /**
     * @Security("has_role('ROLE_ADMIN') or has_role('ROLE_MANAGER')")
    */
    public function showAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('AppBundle:Ar_entree')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find this entity.');
        }

        $deleteForm = $this->createDeleteForm($id);

        return $this->render('gestionStock/Ar_entree/show.html.twig', array(
            'entity'      => $entity,
            'delete_form' => $deleteForm->createView(),
        ));
    }

     /**
     * @Security("has_role('ROLE_ADMIN') or has_role('ROLE_MANAGER')")
    */
    public function editAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('AppBundle:Ar_entree')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Article entity.');
        }
        $editForm = $this->createForm(Ar_entreeType::class, $entity);
        $deleteForm = $this->createDeleteForm($id);
        // $cities = $em->getRepository('BenDoctorsBundle:Person')->getCities();

        return $this->render('gestionStock/Ar_entree/edit.html.twig', array(
            'entity'      => $entity,
            'form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

     /**
     * @Security("has_role('ROLE_ADMIN') or has_role('ROLE_MANAGER')")
    */
    public function updateAction(Request $request, $id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('AppBundle:Ar_entree')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find this entity.');
        }

        $deleteForm = $this->createDeleteForm($id);
        $editForm = $this->createForm(Ar_entreeType::class, $entity);
        $editForm->handleRequest($request);
        
       if($editForm->isValid()){
            $em->flush();

            $this->get('session')->getFlashBag()->add('info', "L'Entré a été mis à jour avec succès.");
            return $this->redirect($this->generateUrl('ar_entree_edit', array('id' => $id)));
        }

        $this->get('session')->getFlashBag()->add('danger', "Il y a des erreurs dans le formulaire soumis !");
        return $this->render('gestionStock/Ar_entree/edit.html.twig', array(
            'entity'      => $entity,
            'form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

     /**
     * @Security("has_role('ROLE_ADMIN') or has_role('ROLE_MANAGER')")
    */
    public function deleteAction(Request $request, $id)
    {
            $em = $this->getDoctrine()->getManager();
            $entity = $em->getRepository('AppBundle:Ar_entree')->find($id);

            if (!$entity) {
                throw $this->createNotFoundException('Unable to find Ar_entree entity.');
                return new Response('not valid');
            }

            $em->remove($entity);
            $em->flush();
            $this->get('session')->getFlashBag()->add('info', "Action effectué avec succès !");

        return $this->redirect($this->generateUrl('ar_entree'));
    }

    
     /**
     * @Security("has_role('ROLE_ADMIN') or has_role('ROLE_MANAGER')")
    */
    private function createDeleteForm($id)
    {
        return $this->createFormBuilder(array('id' => $id))
            ->add('id',HiddenType::class)
            ->getForm()
        ;
    }

     /**
     * @Security("has_role('ROLE_ADMIN') or has_role('ROLE_MANAGER')")
    */
    public function removeAction(Request $request)
    {
        $ids = $request->get('entities');
        $em = $this->getDoctrine()->getManager();
        $entities = $em->getRepository('AppBundle:Ar_entree')->search(array('ids'=>$ids));
        foreach( $entities as $entity) $em->remove($entity);
        $em->flush();

        return new Response('1');
    }
}