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
use AppBundle\Entity\Sortie;
use AppBundle\Entity\Article;
use AppBundle\Entity\Ar_sortie;
use AppBundle\Form\Ar_sortieType;
use AppBundle\Form\ArticleType;
use AppBundle\Pagination\Paginator;
use Symfony\Component\Form\Extension\Core\Type\HiddenType;


/**
 * Ar_sortie controller.
 *
 */
class Ar_sortieController extends Controller
{

     /**
     * @Security("has_role('ROLE_ADMIN') or has_role('ROLE_MANAGER')")
    */
    public function indexAction(Request $request)
    {
        $em = $this->getDoctrine()->getManager();
        $entitiesLength = $em->getRepository('AppBundle:Ar_sortie')->counter();
        $articles = $em->getRepository('AppBundle:Ar_sortie')->getArticles();
        $sorties = $em->getRepository('AppBundle:Ar_sortie')->getSorties();
        $refSorties = $em->getRepository('AppBundle:Ar_sortie')->getRefSorties();

        return $this->render('gestionStock/Ar_sortie/index.html.twig', array(
            'articles' => $articles,
            'sorties' => $sorties,
            'refSorties' => $refSorties,
            'entitiesLength' => $entitiesLength));

           
    }

     /**
     * @Security("has_role('ROLE_ADMIN') or has_role('ROLE_MANAGER')")
    */
    public function ajaxlisteAction(Request $request)
    {

        $em = $this->getDoctrine()->getManager();
        $searchParam = $request->get('searchParam');
        $entities = $em->getRepository('AppBundle:Ar_sortie')->search($searchParam);
        $pagination = (new Paginator())->setItems(count($entities), $searchParam['perPage'])->setPage($searchParam['page'])->toArray();
        return $this->render('gestionStock/Ar_sortie/ajaxliste.html.twig', array(
                    'entities' => $entities,
                    'pagination' => $pagination
                    ));
    }
    
     /**
     * @Security("has_role('ROLE_ADMIN') or has_role('ROLE_MANAGER')")
    */
    public function createAction(Request $request)
    {
        $entity = new Ar_sortie();
        $form = $this->createForm(Ar_sortieType::class,$entity);
        $form->handleRequest($request);

        if($form->isSubmitted() && $form->isValid()){
            $em=$this->getDoctrine()->getManager();
            $em->persist($entity);
            $em->flush();

            $this->get('session')->getFlashBag()->add('info', "L'Entré a été ajouté avec succès.");
            return $this->redirect($this->generateUrl('ar_sortie_show', array('id' => $entity->getId())));
        }

        $this->get('session')->getFlashBag()->add('danger', "Il y a des erreurs dans le formulaire soumis !");
        return $this->render('gestionStock/Ar_sortie/new.html.twig', array(
            'entity' => $entity,
            'form'   => $form->createView(),
        ));
    }

     /**
     * @Security("has_role('ROLE_ADMIN') or has_role('ROLE_MANAGER')")
    */
    public function newAction()
    {
        $entity = new Ar_sortie();
        $form = $this->createForm(Ar_sortieType::class, $entity);
        $em = $this->getDoctrine()->getManager();

        return $this->render('gestionStock/Ar_sortie/new.html.twig', array(
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

        $entity = $em->getRepository('AppBundle:Ar_sortie')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find this entity.');
        }

        $deleteForm = $this->createDeleteForm($id);

        return $this->render('gestionStock/Ar_sortie/show.html.twig', array(
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

        $entity = $em->getRepository('AppBundle:Ar_sortie')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Article entity.');
        }
        $editForm = $this->createForm(Ar_sortieType::class, $entity);
        $deleteForm = $this->createDeleteForm($id);

        return $this->render('gestionStock/Ar_sortie/edit.html.twig', array(
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

        $entity = $em->getRepository('AppBundle:Ar_sortie')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find this entity.');
        }

        $deleteForm = $this->createDeleteForm($id);
        $editForm = $this->createForm(Ar_sortieType::class, $entity);
        $editForm->handleRequest($request);
        
       if($editForm->isValid()){
            $em->flush();

            $this->get('session')->getFlashBag()->add('info', "L'Entré a été mis à jour avec succès.");
            return $this->redirect($this->generateUrl('ar_sortie_edit', array('id' => $id)));
        }

        $this->get('session')->getFlashBag()->add('danger', "Il y a des erreurs dans le formulaire soumis !");
        return $this->render('gestionStock/Ar_sortie/edit.html.twig', array(
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
            $entity = $em->getRepository('AppBundle:Ar_sortie')->find($id);

            if (!$entity) {
                throw $this->createNotFoundException('Unable to find Ar_sortie entity.');
                return new Response('not valid');
            }

            $em->remove($entity);
            $em->flush();
            $this->get('session')->getFlashBag()->add('info', "Action effectué avec succès !");

        return $this->redirect($this->generateUrl('ar_sortie'));
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
        $entities = $em->getRepository('AppBundle:Ar_sortie')->search(array('ids'=>$ids));
        foreach( $entities as $entity) $em->remove($entity);
        $em->flush();

        return new Response('1');
    }
}