<?php

namespace AppBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
//use JMS\SecurityExtraBundle\Annotation\Secure;
use Symfony\Component\Form\Extension\Core\Type\HiddenType;
use AppBundle\Entity\Image;
use AppBundle\Form\ImageType;
use AppBundle\Entity\Config;
use AppBundle\Form\ConfigType;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Security;

/**
 * config controller.
 *
 */
class ConfigController extends Controller
{
    /**
     * @Security("has_role('ROLE_ADMIN')")
    */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $img = new Image();
        $imgform   = $this->createForm(ImageType::class, $img);

        return $this->render('gestionStock/Config/index.html.twig', array(
            'imgform' => $imgform->createView()
        ));
    }

    /**
     * @Security("has_role('ROLE_ADMIN')")
    */
    public function showAction(Config $entity)
    {
        $deleteForm = $this->createDeleteForm($entity->getId());

        return $this->render('gestionStock/Config/show.html.twig', array(
            'entity'      => $entity,
            'delete_form' => $deleteForm->createView(),        ));
    }

    /**
     * @Security("has_role('ROLE_ADMIN')")
    */
    public function newAction()
    {
        $entity = new Config();
        $form   = $this->createForm(ConfigType::class, $entity);

        return $this->render('gestionStock/Config/new.html.twig', array(
            'entity' => $entity,
            'form'   => $form->createView(),
        ));
    }

    /**
     * @Security("has_role('ROLE_ADMIN')")
    */
    public function createAction(Request $request)
    {
        $entity  = new Config();
        $form = $this->createForm(ConfigType::class, $entity);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($entity);
            $em->flush();

            return $this->redirect($this->generateUrl('config_show', array('id' => $entity->getId())));
        }

        return $this->render('gestionStock/Config/new.html.twig', array(
            'entity' => $entity,
            'form'   => $form->createView(),
        ));
    }

    /**
     * @Security("has_role('ROLE_ADMIN')")
    */
    public function editAction(Config $entity)
    {
        $editForm = $this->createForm(ConfigType::class, $entity);
        $deleteForm = $this->createDeleteForm($entity->getId());

        return $this->render('gestionStock/Config/edit.html.twig', array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * @Security("has_role('ROLE_ADMIN')")
    */
    public function updateAction(Request $request)
    {
        $em = $this->getDoctrine()->getManager();
        $config = $request->get('config');

        /* handle img */
        $img = new Image();
        $imgform   = $this->createForm(ImageType::class, $img);
        
        $imgform->handleRequest($request);
        if($img->upload())
            $config['app_logo'] = $img->getWebPath();

        foreach ($config as $key => $value) {
            $em->getRepository('AppBundle:Config')->updateBy($key, $value);
        }

        $this->get('session')->getFlashBag()->add('success', "Vos modifications ont été enregistré avec succée.");
        return $this->redirect($this->generateUrl('config'));
    }

    /**
     * @Security("has_role('ROLE_ADMIN')")
    */
    public function deleteAction(Request $request, Config $entity)
    {
        $form = $this->createDeleteForm($entity->getId());
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->remove($entity);
            $em->flush();
            $this->get('session')->getFlashBag()->add('success', "Action effectué avec succée.");
        }

        return $this->redirect($this->generateUrl('config'));
    }
 /**
     * @Security("has_role('ROLE_ADMIN')")
    */
    private function createDeleteForm($id)
    {
        return $this->createFormBuilder(array('id' => $id))
            ->add('id', HiddenType::class)
            ->getForm()
        ;
    }
}
