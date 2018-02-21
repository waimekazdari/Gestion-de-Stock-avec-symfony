<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\ParamConverter;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use AppBundle\Entity\Service;
use AppBundle\Entity\Departement;
use AppBundle\Form\ServiceType;
use AppBundle\Pagination\Paginator;
use Symfony\Component\Form\Extension\Core\Type\HiddenType;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Security;


/**
 * Service controller.
 *
 */
class ServiceController extends Controller
{

    /**
     * @Security("has_role('ROLE_ADMIN')")
    */

    public function indexAction(Request $request)
    {
        $em = $this->getDoctrine()->getManager();
        $entitiesLength = $em->getRepository('AppBundle:Service')->counter();
        $departements = $em->getRepository('AppBundle:Service')->getDepartements();

        return $this->render('gestionStock/Service/index.html.twig', array(
            'departements' => $departements,
            'entitiesLength' => $entitiesLength));

           
    }

   /**
     * @Security("has_role('ROLE_ADMIN')")
    */

    public function ajaxlisteAction(Request $request)
    {

        $em = $this->getDoctrine()->getManager();
        $searchParam = $request->get('searchParam');
        $entities = $em->getRepository('AppBundle:Service')->search($searchParam);
        $pagination = (new Paginator())->setItems(count($entities), $searchParam['perPage'])->setPage($searchParam['page'])->toArray();
        return $this->render('gestionStock/Service/ajaxliste.html.twig', array(
                    'entities' => $entities,
                    'pagination' => $pagination
                    ));
    }
    
    /**
     * @Security("has_role('ROLE_ADMIN')")
    */

    public function createAction(Request $request)
    {
        $entity = new Service();
        $form = $this->createForm(ServiceType::class,$entity);
        $form->handleRequest($request);

        if($form->isSubmitted() && $form->isValid()){
            $em=$this->getDoctrine()->getManager();
            $em->persist($entity);
            $em->flush();

            $this->get('session')->getFlashBag()->add('info', "Le Service a été ajouté avec succès.");
            return $this->redirect($this->generateUrl('service_show', array('id' => $entity->getId())));
        }

        $this->get('session')->getFlashBag()->add('danger', "Il y a des erreurs dans le formulaire soumis !");
        return $this->render('gestionStock/Service/new.html.twig', array(
            'entity' => $entity,
            'form'   => $form->createView(),
        ));
    }

    /**
     * @Security("has_role('ROLE_ADMIN')")
    */
    public function newAction()
    {
        $entity = new Service();
        $form = $this->createForm(ServiceType::class, $entity);
        $em = $this->getDoctrine()->getManager();
        // $cities = $em->getRepository('BenDoctorsBundle:Person')->getCities();

        return $this->render('gestionStock/Service/new.html.twig', array(
            'entity' => $entity,
            'form'   => $form->createView(),
            // 'cities' => $cities,
        ));
    }


    /**
     * @Security("has_role('ROLE_ADMIN')")
    */
    public function showAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('AppBundle:Service')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Service entity.');
        }

        $deleteForm = $this->createDeleteForm($id);

        return $this->render('gestionStock/Service/show.html.twig', array(
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

        $entity = $em->getRepository('AppBundle:Service')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Service entity.');
        }
        $editForm = $this->createForm(ServiceType::class, $entity);
        $deleteForm = $this->createDeleteForm($id);
        // $cities = $em->getRepository('BenDoctorsBundle:Person')->getCities();

        return $this->render('gestionStock/Service/edit.html.twig', array(
            'entity'      => $entity,
            'form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
            // 'cities' => $cities,
        ));
    }
    
    /**
     * @Security("has_role('ROLE_ADMIN')")
    */
    public function updateAction(Request $request, $id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('AppBundle:Service')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Service entity.');
        }

        $deleteForm = $this->createDeleteForm($id);
        $editForm = $this->createForm(ServiceType::class, $entity);
        $editForm->handleRequest($request);
        
       if($editForm->isValid()){
            $em->flush();

            $this->get('session')->getFlashBag()->add('info', "La Service a été mis à jour avec succès.");
            return $this->redirect($this->generateUrl('service_edit', array('id' => $id)));
        }

        $this->get('session')->getFlashBag()->add('danger', "Il y a des erreurs dans le formulaire soumis !");
        return $this->render('gestionStock/Service/edit.html.twig', array(
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
            $entity = $em->getRepository('AppBundle:Service')->find($id);

            if (!$entity) {
                throw $this->createNotFoundException('Unable to find Service entity.');
                return new Response('not valid');
            }

            $em->remove($entity);
            $em->flush();
            $this->get('session')->getFlashBag()->add('info', "Action effectué avec succès !");
       // }

        return $this->redirect($this->generateUrl('service'));
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
        $entities = $em->getRepository('AppBundle:Service')->search(array('ids'=>$ids));
        foreach( $entities as $entity) $em->remove($entity);
        $em->flush();

        return new Response('1');
    }
}