<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\ParamConverter;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use AppBundle\Entity\Fournisseur;
use AppBundle\Form\FournisseurType;
use AppBundle\Pagination\Paginator;
use Symfony\Component\Form\Extension\Core\Type\HiddenType;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Security;


/**
 * Fournisseur controller.
 *
 */
class FournisseurController extends Controller
{

    /**
     * @Security("has_role('ROLE_ADMIN')")
    */
    public function indexAction(Request $request)
    {
        $em = $this->getDoctrine()->getManager();
        $entitiesLength = $em->getRepository('AppBundle:Fournisseur')->counter();
        return $this->render('gestionStock/Fournisseur/index.html.twig', array(
            'entitiesLength' => $entitiesLength));

           
    }

    /**
     * @Security("has_role('ROLE_ADMIN')")
    */
    public function ajaxlisteAction(Request $request)
    {

        $em = $this->getDoctrine()->getManager();
        $searchParam = $request->get('searchParam');
        $entities = $em->getRepository('AppBundle:Fournisseur')->search($searchParam);
        $pagination = (new Paginator())->setItems(count($entities), $searchParam['perPage'])->setPage($searchParam['page'])->toArray();
        return $this->render('gestionStock/Fournisseur/ajaxliste.html.twig', array(
                    'entities' => $entities,
                    'pagination' => $pagination
                    ));
    }

    /**
     * @Security("has_role('ROLE_ADMIN')")
    */
    public function createAction(Request $request)
    {
        $entity = new Fournisseur();
        $form = $this->createForm(FournisseurType::class,$entity);
        $form->handleRequest($request);

        if($form->isSubmitted() && $form->isValid()){
            $em=$this->getDoctrine()->getManager();
            $em->persist($entity);
            $em->flush();

            $this->get('session')->getFlashBag()->add('info', "Le Fournisseur a été ajouté avec succès.");
            return $this->redirect($this->generateUrl('fournisseur_show', array('id' => $entity->getId())));
        }

        $this->get('session')->getFlashBag()->add('danger', "Il y a des erreurs dans le formulaire soumis !");
        return $this->render('gestionStock/Fournisseur/new.html.twig', array(
            'entity' => $entity,
            'form'   => $form->createView(),
            // 'cities' => $cities,
        ));
    }

    /**
     * @Security("has_role('ROLE_ADMIN')")
    */
    public function newAction()
    {
        $entity = new Fournisseur();
        $form = $this->createForm(FournisseurType::class, $entity);
        $em = $this->getDoctrine()->getManager();

        return $this->render('gestionStock/Fournisseur/new.html.twig', array(
            'entity' => $entity,
            'form'   => $form->createView(),
        ));
    }

    /**
     * @Security("has_role('ROLE_ADMIN')")
    */
    public function showAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('AppBundle:Fournisseur')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Fournisseur entity.');
        }

        $deleteForm = $this->createDeleteForm($id);

        return $this->render('gestionStock/Fournisseur/show.html.twig', array(
            'entity'      => $entity,
            'delete_form' => $deleteForm->createView(),
        ));
    }

   /**
     * @Security("has_role('ROLE_ADMIN')")
    */
    public function editAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('AppBundle:Fournisseur')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Fournisseur entity.');
        }
        $editForm = $this->createForm(FournisseurType::class, $entity);
        $deleteForm = $this->createDeleteForm($id);

        return $this->render('gestionStock/Fournisseur/edit.html.twig', array(
            'entity'      => $entity,
            'form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }
    
    /**
     * @Security("has_role('ROLE_ADMIN')")
    */
    public function updateAction(Request $request, $id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('AppBundle:Fournisseur')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Fournisseur entity.');
        }

        $deleteForm = $this->createDeleteForm($id);
        $editForm = $this->createForm(FournisseurType::class, $entity);
        $editForm->handleRequest($request);

       if($editForm->isValid()){
            $em->flush();


            $this->get('session')->getFlashBag()->add('info', "Le Fournisseur a été mis à jour avec succès.");
            return $this->redirect($this->generateUrl('fournisseur_edit', array('id' => $id)));
        }

        $this->get('session')->getFlashBag()->add('danger', "Il y a des erreurs dans le formulaire soumis !");
        return $this->render('gestionStock/Fournisseur/edit.html.twig', array(
            'entity'      => $entity,
            'form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }
   
   /**
     * @Security("has_role('ROLE_ADMIN')")
    */
    public function deleteAction(Request $request, $id)
    {
       // $form = $this->createDeleteForm($id);
        //$form->handleRequest($request);

        //if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $entity = $em->getRepository('AppBundle:Fournisseur')->find($id);

            if (!$entity) {
                throw $this->createNotFoundException('Unable to find Fournisseur entity.');
                return new Response('not valid');
            }

            $em->remove($entity);
            $em->flush();
            $this->get('session')->getFlashBag()->add('info', "Action effectué avec succès !");
       // }

        return $this->redirect($this->generateUrl('fournisseur'));
    }

   
   /**
     * @Security("has_role('ROLE_ADMIN')")
    */
    private function createDeleteForm($id)
    {
        return $this->createFormBuilder(array('id' => $id))
            ->add('id',HiddenType::class)
            ->getForm()
        ;
    }

    /**
     * @Security("has_role('ROLE_ADMIN')")
    */
    public function removeAction(Request $request)
    {
        $ids = $request->get('entities');
        $em = $this->getDoctrine()->getManager();
        $entities = $em->getRepository('AppBundle:Fournisseur')->search(array('ids'=>$ids));
        foreach( $entities as $entity) $em->remove($entity);
        $em->flush();

        return new Response('1');
    }
}