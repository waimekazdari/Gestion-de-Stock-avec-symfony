<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\ParamConverter;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use AppBundle\Entity\Article;
use AppBundle\Entity\Ligne;
use AppBundle\Entity\Livraison;
use AppBundle\Form\LivraisonType;
use AppBundle\Pagination\Paginator;
use Symfony\Component\Form\Extension\Core\Type\HiddenType;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Security;

/**
 * Livraison controller.
 *
 */
class LivraisonController extends Controller
{

/**
     * @Security("has_role('ROLE_ADMIN') or has_role('ROLE_MANAGER')")
    */
public function indexAction(Request $request)
    {
        $em = $this->getDoctrine()->getManager();
        $entitiesLength = $em->getRepository('AppBundle:Livraison')->counter();
        $fournisseurs = $em->getRepository('AppBundle:Livraison')->getFournisseurs();

        return $this->render('gestionStock/Livraison/index.html.twig', array(
            'fournisseurs' => $fournisseurs,
            'entitiesLength' => $entitiesLength));

           
    }

    /**
     * @Security("has_role('ROLE_ADMIN') or has_role('ROLE_MANAGER')")
    */
    public function ajaxlisteAction(Request $request)
    {

        $em = $this->getDoctrine()->getManager();
        $searchParam = $request->get('searchParam');
        $entities = $em->getRepository('AppBundle:Livraison')->search($searchParam);
        $pagination = (new Paginator())->setItems(count($entities), $searchParam['perPage'])->setPage($searchParam['page'])->toArray();
        return $this->render('gestionStock/Livraison/ajaxliste.html.twig', array(
                    'entities' => $entities,
                    'pagination' => $pagination
                    ));
    }

    /**
     * @Security("has_role('ROLE_ADMIN') or has_role('ROLE_MANAGER')")
    */
      public function newMultipleAction()
    {
        $entity = new Livraison();
        $form = $this->createForm(LivraisonType::class, $entity);
        $em = $this->getDoctrine()->getManager();
        $articles = $em->getRepository('AppBundle:Article')->findAll();
        $livraison = $em->getRepository('AppBundle:Livraison')->findAll();
       /* $countee = $em->getRepository('AppBundle:Livraison')->count($livraison);
        $BL = new \DateTime('y');
        $BL = "BL/".$BL."/".$countee;*/

        return $this->render('gestionStock/Livraison/new.html.twig', array(
            'entity' => $entity,
            'articles' => $articles,
           // '$BL' => $BL,
            'form'   => $form->createView()));
    }


    /**
     * @Security("has_role('ROLE_ADMIN') or has_role('ROLE_MANAGER')")
    */
  public function createMultipleAction(Request $request)
    {
        $em = $this->getDoctrine()->getManager();
        $livraison  = new Livraison();
        $form = $this->createForm(LivraisonType::class,$livraison);
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
                        $date=$value['dateGarantie'];
                        $data['ar'] = $ar;
                        $data['livraison'] = $livraison;
                        $data['quantite'] = $value['quantite'];
                        $data['prix'] = $value['prix'];
                        $data['duree'] = $value['duree'];
                        $data['date'] = $date;
                        $ligne = new Ligne();
                        $ligne->setData($data);
                        $lignes[]= $ligne;
                        $key++;
                    }
                      foreach ($lignes as $lignee) {
                    $em->persist($lignee);
                         }
                    $em->persist($livraison);
                    $em->flush();



            $this->get('session')->getFlashBag()->add('success', "La Livraison a été ajouté avec succée.");
            return $this->redirect($this->generateUrl('livraison_show', array('id' => $livraison->getId())));
                }
           
        }
        $this->get('session')->getFlashBag()->add('error', "Il y a des erreurs dans le formulaire soumis !");
        return $this->render('gestionStock/Livraison/new.html.twig', array(
            'entity' => $livraison,
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

        $entity = $em->getRepository('AppBundle:Livraison')->find($id);
        $lignes = $em->getRepository('AppBundle:Ligne')->searchh($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Livraison entity.');
        }

        $deleteForm = $this->createDeleteForm($id);

        return $this->render('gestionStock/Livraison/show.html.twig', array(
            'entity'      => $entity,
            'lignes'      => $lignes,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * @Security("has_role('ROLE_ADMIN') or has_role('ROLE_MANAGER')")
    */
    public function editAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('AppBundle:Livraison')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Livraison entity.');
        }
        $editForm = $this->createForm(LivraisonType::class, $entity);
        $deleteForm = $this->createDeleteForm($id);

        return $this->render('gestionStock/Livraison/edit.html.twig', array(
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

        $entity = $em->getRepository('AppBundle:Livraison')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Livraison entity.');
        }

        $deleteForm = $this->createDeleteForm($id);
        $editForm = $this->createForm(LivraisonType::class, $entity);
        $editForm->handleRequest($request);
        
       if($editForm->isValid()){
            $em->flush();

            $this->get('session')->getFlashBag()->add('info', "La Livraison a été mis à jour avec succès.");
            return $this->redirect($this->generateUrl('livraison_edit', array('id' => $id)));
        }

        $this->get('session')->getFlashBag()->add('danger', "Il y a des erreurs dans le formulaire soumis !");
        return $this->render('gestionStock/Livraison/edit.html.twig', array(
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
            $entity = $em->getRepository('AppBundle:Livraison')->find($id);

            if (!$entity) {
                throw $this->createNotFoundException('Unable to find Livraison entity.');
                return new Response('not valid');
            }

            $em->remove($entity);
            $em->flush();
            $this->get('session')->getFlashBag()->add('info', "Action effectué avec succès !");
       // }

        return $this->redirect($this->generateUrl('livraison'));
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
        $entities = $em->getRepository('AppBundle:Livraison')->search(array('ids'=>$ids));
        foreach( $entities as $entity) $em->remove($entity);
        $em->flush();

        return new Response('1');
    }

}