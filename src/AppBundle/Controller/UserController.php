<?php

namespace AppBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\RedirectResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Httpfoundation\Response;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Security;
class UserController extends Controller {

    

    public function loginFbAction(Request $request) {
        return $this->redirect($this->generateUrl("home"));
    }

    /**
     * @Template()
     */
    public function whoIsOnlineAction() {
        $users = $this->getDoctrine()->getManager()->getRepository('AppBundle:User')->getActive();

        return array('users' => $users);
    }
    /**
     * user json list
     */
    public function autocompleteAction() {
        $request = $this->get('request');
        $keyword = $request->get('term');
        $em = $this->getDoctrine()->getManager();
        $entities = $em->getRepository('AppBundle:User')->autocomplete($keyword);
        return $this->render('AppBundle:User:autocomplete.json.twig', array(
                    'entities' => $entities
                ));
    }

}