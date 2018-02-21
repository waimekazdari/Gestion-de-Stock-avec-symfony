<?php
// src/AppBundle/Controller/SecurityController.php
namespace AppBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Security;

class SecurityController extends Controller
{
/**
* @Route("/login", name="login")
 */

public function loginAction(Request $request)
{
$authenticationUtils = $this->get('security.authentication_utils');
// get the login error if there is one
$error = $authenticationUtils->getLastAuthenticationError();
// last username entered by the user
$lastUsername = $authenticationUtils->getLastUsername();

return $this->render(
'gestionStock/security/login.html.twig',
array(
// last username entered by the user
'last_username' => $lastUsername,
'error' => $error,
)
);
}

/**
* @Route("/logout", name="logout")
*/
public function logoutAction()
    {
	if ($this->get('security.token_storage')->getToken()->getUser()) {
	$this->get('security.token_storage')->setToken(null);
	return $this->redirectToRoute("login");
	}
	return $this->redirectToRoute("login");
    }

}