<?php

namespace AppBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\Security\Core\Authentication\Token\Storage\TokenStorageInterface;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Security;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpKernel\Exception\HttpException;
use AppBundle\Entity\User;
use Symfony\Component\Form\Extension\Core\Type\HiddenType;
use AppBundle\Form\UserType;
use AppBundle\Entity\Employe;
use AppBundle\Entity\Image;
use AppBundle\Form\ImageType;
use Symfony\Component\Form\Extension\Core\Type\RepeatedType;
use Symfony\Component\Form\Extension\Core\Type\PasswordType;
//use JMS\SecurityExtraBundle\Annotation\Secure;
use AppBundle\Pagination\Paginator;

class MyprofileController extends Controller
{


/**
     * @Security("has_role('ROLE_USER') or has_role('ROLE_MANAGER') or has_role('ROLE_ADMIN')")
    */
	public function showAction($id)
    {
        $em = $this->getDoctrine()->getManager();
        $entity = $em->getRepository('AppBundle:User')->find($id);
        if (!$entity) throw $this->createNotFoundException('Unable to find posts entity.');

        return $this->render('gestionStock/MyProfile/show.html.twig', array('entity' => $entity));
    }

/**
     * @Security("has_role('ROLE_USER') or has_role('ROLE_MANAGER') or has_role('ROLE_ADMIN')")
    */
	public function editAction() {
        $deleteForm =null;
        $img = new Image();
        $imgform   = $this->createForm(ImageType::class, $img);
        $user = null;
        $tokenStorage = $this->get('security.token_storage');
        $token = $tokenStorage->getToken();
        if (null !== $token && is_object($token->getUser())) {
        $user = $token->getUser();
        $deleteForm = $this->createDeleteForm($user->getId());
    }
        //$isAdmin = $this->get('security.context')->isGranted('ROLE_ADMIN');
        return $this->render('gestionStock/MyProfile/edit.html.twig', array(
                    'entity' => $user,
                    'delete_form' => $deleteForm->createView(),
                    'imgform' => $imgform->createView(),
                ));
    }


    /**
     * @Security("has_role('ROLE_USER') or has_role('ROLE_MANAGER') or has_role('ROLE_ADMIN')")
    */
    public function updateAction(Request $request, $id) {
        
         $em = $this->getDoctrine()->getManager();
         $user = $em->getRepository('AppBundle:User')->find($id);
         $deleteForm = $this->createDeleteForm($user->getId());
         //$user = new User();
         $employee= new Employe();
        $emp = $request->get('emp');

        /* handle img */
        $img = new Image();
        $imgform   = $this->createForm(ImageType::class, $img);
        
        $imgform->handleRequest($request);

        
            if( $img->upload()){
            $emp['emp_img'] = $img->getWebPath();
             $img->setPath($emp['emp_img']);
             $user->setImage($img);}

        $employee->setNom($emp['emp_name']);
        $employee->setCin($emp['emp_cin']);
        $employee->setAdresse($emp['emp_adresse']);
        $employee->setTel($emp['emp_tel']);
        $user->setUsername($emp['emp_username']);
        $user->setEmail($emp['emp_email']);
        $user->setEmploye($employee);

        //$em->persist($employee);
        //$em->persist($img);
        $em->persist($user);

        $em->flush();


        $this->get('session')->getFlashBag()->add('success', "Vos modifications ont été enregistré avec succée.");
        //return $this->redirect($this->generateUrl('ben_users'));
        return $this->redirect($this->generateUrl('myprofile_show', array('id' => $user->getId())));

    }

/**
     * @Security("has_role('ROLE_USER') or has_role('ROLE_MANAGER') or has_role('ROLE_ADMIN')")
    */
      public function changePasswordFormAction()
    {
        $entity = new User();
        $form = $this->createFormBuilder($entity)
                ->add('plainPassword', RepeatedType::class, array(
                    'type' => PasswordType::class,
                    'first_options' => array('label' => 'Nouveau mot de passe'),
                    'second_options' => array('label' => 'Confirmer votre mot de passe'),
                    ))
            ->getForm();

        return $this->render('gestionStock/MyProfile/changePassword.html.twig', array(
            'entity' => $entity,
            'form'   => $form->createView(),
        ));
    }

/**
     * @Security("has_role('ROLE_USER') or has_role('ROLE_MANAGER') or has_role('ROLE_ADMIN')")
    */
    public function changePasswordAction(Request $request)
    {
    	$em = $this->getDoctrine()->getManager();
    	$user = new User();
        $tokenStorage = $this->get('security.token_storage');
        $token = $tokenStorage->getToken();
        if (null !== $token && is_object($token->getUser())) {
        $user = $token->getUser();
        $form = $this->createFormBuilder($user)
                ->add('plainPassword', RepeatedType::class, array(
                    'type' => PasswordType::class,
                    'first_options' => array('label' => 'Nouveau mot de passe'),
                    'second_options' => array('label' => 'Confirmer votre mot de passe'),
                    ))
            ->getForm();
        $form->handleRequest($request);

          if ($form->isValid()) {
          	$password = $this->get('security.password_encoder')
		         	    ->encodePassword($user, $user->getPlainPassword());
						$user->setPassword($password);
        	$em->flush();
        	$this->get('session')->getFlashBag()->add('info', "Mise à jour effectué avec succée");
          		return $this->render('gestionStock/MyProfile/changePassword.html.twig', array(
                'entity' => $user,
                'form'   => $form->createView(),
        ));

          }
          $this->get('session')->getFlashBag()->add('error', "Il y a des erreurs dans le formulaire soumis !");
          		return $this->render('gestionStock/MyProfile/changePassword.html.twig', array(
                'entity' => $user,
                'form'   => $form->createView(),
        ));

      }
      throw $this->createNotFoundException('Vous n\'avez pas le droit, vous devrez étre authentifiée');
    }


    /**
     * @Security("has_role('ROLE_USER') or has_role('ROLE_MANAGER') or has_role('ROLE_ADMIN')")
    */
    private function createDeleteForm($id)
    {
        return $this->createFormBuilder(array('id' => $id))
            ->add('id',HiddenType::class)
            ->getForm()
        ;
    }


  }