<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\ParamConverter;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use AppBundle\Entity\Article;
use AppBundle\Entity\Ar_entree;
use AppBundle\Entity\Entree;
use AppBundle\Form\EntreeType;
use AppBundle\Pagination\Paginator;
use Symfony\Component\Form\Extension\Core\Type\HiddenType;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Security;

/**
 * Entree controller.
 *
 */
class EntreeController extends Controller
{

/**
     * @Security("has_role('ROLE_ADMIN') or has_role('ROLE_MANAGER')")
    */
public function indexAction(Request $request)
    {
        $em = $this->getDoctrine()->getManager();
        $entitiesLength = $em->getRepository('AppBundle:Entree')->counter();
        return $this->render('gestionStock/Entree/index.html.twig', array(
            'entitiesLength' => $entitiesLength));

           
    }

    /**
     * @Security("has_role('ROLE_ADMIN') or has_role('ROLE_MANAGER')")
    */
    public function ajaxlisteAction(Request $request)
    {

        $em = $this->getDoctrine()->getManager();
        $searchParam = $request->get('searchParam');
        $entities = $em->getRepository('AppBundle:Entree')->search($searchParam);
        $pagination = (new Paginator())->setItems(count($entities), $searchParam['perPage'])->setPage($searchParam['page'])->toArray();
        return $this->render('gestionStock/Entree/ajaxliste.html.twig', array(
                    'entities' => $entities,
                    'pagination' => $pagination
                    ));
    }


    /**
     * @Security("has_role('ROLE_ADMIN') or has_role('ROLE_MANAGER')")
    */
      public function newMultipleAction()
    {
        $entity = new Entree();
        $form = $this->createForm(EntreeType::class, $entity);
        $em = $this->getDoctrine()->getManager();
        $articles = $em->getRepository('AppBundle:Article')->findAll();

        return $this->render('gestionStock/Entree/new.html.twig', array(
            'entity' => $entity,
            'articles' => $articles,
            'form'   => $form->createView()));
    }


/**
     * @Security("has_role('ROLE_ADMIN') or has_role('ROLE_MANAGER')")
    */
  public function createMultipleAction(Request $request)
    {
        $em = $this->getDoctrine()->getManager();
        $entree  = new Entree();
        $form = $this->createForm(EntreeType::class,$entree);
        $form->handleRequest($request);
        $articlees = $em->getRepository('AppBundle:Article')->findAll();

        if ($form->isSubmitted() && $form->isValid()) {
            $articles = $request->get('article');
            if(count($articles) > 0){
                foreach ($articles as $key => $value ) {
                        $ar=$em->getRepository('AppBundle:Article')->searchh($value['ref']);
                        if (!$ar) {
                            throw $this->createNotFoundException('Unable to find Article entity.');
                        }
                        $data['ar'] = $ar;
                        $data['entree'] = $entree;
                        $data['quantite'] = $value['quantite'];
                        $ar_entree = new Ar_entree();
                        $ar_entree->setData($data);
                        $ar_entrees[]= $ar_entree;
                        $key++;
                    }
                      foreach ($ar_entrees as $ar_entre) {
                    $em->persist($ar_entre);
                         }
                    $em->persist($entree);
                    $em->flush();



            $this->get('session')->getFlashBag()->add('success', "L'Entree a été ajouté avec succée.");
            return $this->redirect($this->generateUrl('entree_show', array('id' => $entree->getId())));
                }
           
        }
        $this->get('session')->getFlashBag()->add('error', "Il y a des erreurs dans le formulaire soumis !");
        return $this->render('gestionStock/Entree/new.html.twig', array(
            'entity' => $entree,
            'articles' => $articlees,
            'form'   => $form->createView(),
        ));
    }

    /**
     * @Security("has_role('ROLE_ADMIN') or has_role('ROLE_MANAGER')")
    */
    public function showAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('AppBundle:Entree')->find($id);
        $ar_entrees = $em->getRepository('AppBundle:ar_entree')->searchh($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Entree entity.');
        }

        $deleteForm = $this->createDeleteForm($id);

        return $this->render('gestionStock/Entree/show.html.twig', array(
            'entity'      => $entity,
            'entrees'      => $ar_entrees,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * @Security("has_role('ROLE_ADMIN') or has_role('ROLE_MANAGER')")
    */
    public function editAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('AppBundle:Entree')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Entree entity.');
        }
        $editForm = $this->createForm(EntreeType::class, $entity);
        $deleteForm = $this->createDeleteForm($id);

        return $this->render('gestionStock/Entree/edit.html.twig', array(
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

        $entity = $em->getRepository('AppBundle:Entree')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Entree entity.');
        }

        $deleteForm = $this->createDeleteForm($id);
        $editForm = $this->createForm(EntreeType::class, $entity);
        $editForm->handleRequest($request);
        
       if($editForm->isValid()){
            $em->flush();

            $this->get('session')->getFlashBag()->add('info', "La Entree a été mis à jour avec succès.");
            return $this->redirect($this->generateUrl('entree_edit', array('id' => $id)));
        }

        $this->get('session')->getFlashBag()->add('danger', "Il y a des erreurs dans le formulaire soumis !");
        return $this->render('gestionStock/Entree/edit.html.twig', array(
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
       // $form = $this->createDeleteForm($id);
        //$form->handleRequest($request);

        //if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $entity = $em->getRepository('AppBundle:Entree')->find($id);

            if (!$entity) {
                throw $this->createNotFoundException('Unable to find Entree entity.');
                return new Response('not valid');
            }

            $em->remove($entity);
            $em->flush();
            $this->get('session')->getFlashBag()->add('info', "Action effectué avec succès !");
       // }

        return $this->redirect($this->generateUrl('entree'));
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
        $entities = $em->getRepository('AppBundle:Entree')->search(array('ids'=>$ids));
        foreach( $entities as $entity) $em->remove($entity);
        $em->flush();

        return new Response('1');
    }

}