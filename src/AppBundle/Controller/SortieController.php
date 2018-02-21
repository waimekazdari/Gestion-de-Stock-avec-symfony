<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\ParamConverter;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use AppBundle\Entity\Article;
use AppBundle\Entity\Ar_sortie;
use AppBundle\Entity\Sortie;
use AppBundle\Form\SortieType;
use AppBundle\Pagination\Paginator;
use Symfony\Component\Form\Extension\Core\Type\HiddenType;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Security;

/**
 * Sortie controller.
 *
 */
class SortieController extends Controller
{

/**
     * @Security("has_role('ROLE_ADMIN') or has_role('ROLE_MANAGER') ")
    */
public function indexAction(Request $request)
    {
        $em = $this->getDoctrine()->getManager();
        $entitiesLength = $em->getRepository('AppBundle:Sortie')->counter();
        $employes = $em->getRepository('AppBundle:Sortie')->getEmployes();
        return $this->render('gestionStock/Sortie/index.html.twig', array(
            'employes' => $employes,
            'entitiesLength' => $entitiesLength));

           
    }

    /**
     * @Security("has_role('ROLE_ADMIN') or has_role('ROLE_MANAGER') ")
    */
    public function ajaxlisteAction(Request $request)
    {

        $em = $this->getDoctrine()->getManager();
        $searchParam = $request->get('searchParam');
        $entities = $em->getRepository('AppBundle:Sortie')->search($searchParam);
        $pagination = (new Paginator())->setItems(count($entities), $searchParam['perPage'])->setPage($searchParam['page'])->toArray();
        return $this->render('gestionStock/Sortie/ajaxliste.html.twig', array(
                    'entities' => $entities,
                    'pagination' => $pagination
                    ));
    }


    /**
     * @Security("has_role('ROLE_ADMIN') or has_role('ROLE_MANAGER') ")
    */
      public function newMultipleAction()
    {
        $entity = new Sortie();
        $form = $this->createForm(SortieType::class, $entity);
        $em = $this->getDoctrine()->getManager();
        $articles = $em->getRepository('AppBundle:Article')->findAll();

        return $this->render('gestionStock/Sortie/new.html.twig', array(
            'entity' => $entity,
            'articles' => $articles,
            'form'   => $form->createView()));
    }


    /**
     * @Security("has_role('ROLE_ADMIN') or has_role('ROLE_MANAGER') ")
    */
  public function createMultipleAction(Request $request)
    {
        $em = $this->getDoctrine()->getManager();
        $sortie  = new Sortie();
        $form = $this->createForm(SortieType::class,$sortie);
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
                        $data['sortie'] = $sortie;
                        $data['quantite'] = $value['quantite'];
                        $ar_sortie = new Ar_sortie();
                        $ar_sortie->setData($data);
                        $ar_sorties[]= $ar_sortie;
                        $key++;
                    }
                      foreach ($ar_sorties as $ar_sorti) {
                    $em->persist($ar_sorti);
                         }
                    $em->persist($sortie);
                    $em->flush();



            $this->get('session')->getFlashBag()->add('success', "La Sortie a été ajouté avec succée.");
            return $this->redirect($this->generateUrl('sortie_show', array('id' => $sortie->getId())));
                }
           
        }
        $this->get('session')->getFlashBag()->add('error', "Il y a des erreurs dans le formulaire soumis !");
        return $this->render('gestionStock/Sortie/new.html.twig', array(
            'entity' => $sortie,
            'articles' => $articlees,
            'form'   => $form->createView(),
        ));
    }


    /**
     * @Security("has_role('ROLE_ADMIN') or has_role('ROLE_MANAGER') ")
    */
    public function showAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('AppBundle:Sortie')->find($id);
        $ar_sorties = $em->getRepository('AppBundle:ar_sortie')->searchh($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Sortie entity.');
        }

        $deleteForm = $this->createDeleteForm($id);

        return $this->render('gestionStock/Sortie/show.html.twig', array(
            'entity'      => $entity,
            'sorties'      => $ar_sorties,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    
    /**
     * @Security("has_role('ROLE_ADMIN') or has_role('ROLE_MANAGER') ")
    */
    public function editAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('AppBundle:Sortie')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Sortie entity.');
        }
        $editForm = $this->createForm(SortieType::class, $entity);
        $deleteForm = $this->createDeleteForm($id);

        return $this->render('gestionStock/Sortie/edit.html.twig', array(
            'entity'      => $entity,
            'form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }
    
    /**
     * @Security("has_role('ROLE_ADMIN') or has_role('ROLE_MANAGER') ")
    */
    public function updateAction(Request $request, $id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('AppBundle:Sortie')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Sortie entity.');
        }

        $deleteForm = $this->createDeleteForm($id);
        $editForm = $this->createForm(SortieType::class, $entity);
        $editForm->handleRequest($request);
        
       if($editForm->isValid()){
            $em->flush();

            $this->get('session')->getFlashBag()->add('info', "La Sortie a été mis à jour avec succès.");
            return $this->redirect($this->generateUrl('sortie_edit', array('id' => $id)));
        }

        $this->get('session')->getFlashBag()->add('danger', "Il y a des erreurs dans le formulaire soumis !");
        return $this->render('gestionStock/Sortie/edit.html.twig', array(
            'entity'      => $entity,
            'form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }
    
    /**
     * @Security("has_role('ROLE_ADMIN') or has_role('ROLE_MANAGER') ")
    */
    public function deleteAction(Request $request, $id)
    {
       // $form = $this->createDeleteForm($id);
        //$form->handleRequest($request);

        //if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $entity = $em->getRepository('AppBundle:Sortie')->find($id);

            if (!$entity) {
                throw $this->createNotFoundException('Unable to find Sortie entity.');
                return new Response('not valid');
            }

            $em->remove($entity);
            $em->flush();
            $this->get('session')->getFlashBag()->add('info', "Action effectué avec succès !");
       // }

        return $this->redirect($this->generateUrl('sortie'));
    }

    
    /**
     * @Security("has_role('ROLE_ADMIN') or has_role('ROLE_MANAGER') ")
    */
    private function createDeleteForm($id)
    {
        return $this->createFormBuilder(array('id' => $id))
            ->add('id',HiddenType::class)
            ->getForm()
        ;
    }

    /**
     * @Security("has_role('ROLE_ADMIN') or has_role('ROLE_MANAGER') ")
    */
    public function removeAction(Request $request)
    {
        $ids = $request->get('entities');
        $em = $this->getDoctrine()->getManager();
        $entities = $em->getRepository('AppBundle:Sortie')->search(array('ids'=>$ids));
        foreach( $entities as $entity) $em->remove($entity);
        $em->flush();

        return new Response('1');
    }

}