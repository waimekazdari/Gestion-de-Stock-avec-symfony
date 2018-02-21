<?php

namespace AppBundle\Controller;

use AppBundle\Form\UserType;
use AppBundle\Entity\User;
use AppBundle\Entity\Employe;
use AppBundle\Entity\Image;
use AppBundle\Entity\ImageType;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\RedirectResponse;
use Symfony\Component\HttpFoundation\Response;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Security;

class RegistrationController extends Controller
{
		
		public function registerAction(Request $request)
		{
		// 1) build the form
		$user = new User();
		//$employe = new Employe();
		//$image = new Image();
		$form = $this->createForm(UserType::class, $user);
		$img = new Image();
        //$imgform   = $this->createForm(ImageType::class, $img);
        
        //$imgform->handleRequest($request);

		// 2) handle the submit (will only happen on POST)
		$form->handleRequest($request);
		if ($form->isSubmitted()){
			if ($form->isValid()) {

				if( $user->getImage()->upload()){
                     $img->setPath($user->getImage()->getWebPath());
                     $user->setImage($img);}

		// 3) Encode the password (you could also do this via Doctrine listener)
		$password = $this->get('security.password_encoder')
		->encodePassword($user, $user->getPlainPassword());
		$user->setPassword($password);
		// 4) save the User!
		$em = $this->getDoctrine()->getManager();
		$em->persist($user);
		$em->flush();
		// ... do any other work - like sending them an email, etc
		// maybe set a "flash" success message for the user
		//return $this->redirectToRoute('replace_with_some_route');
		$this->get('session')->getFlashBag()->add('info', "L'utilisateur a été ajouté avec succès.");
        return $this->redirect($this->generateUrl('login'));
             }
        $this->get('session')->getFlashBag()->add('danger', "Il y a des erreurs dans le formulaire soumis !");
         }
		return $this->render(
		'gestionStock/Registration/register.html.twig',
		array('form' => $form->createView())
		);
		}
}