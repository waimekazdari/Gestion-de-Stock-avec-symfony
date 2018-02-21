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
//use JMS\SecurityExtraBundle\Annotation\Secure;
use AppBundle\Pagination\Paginator;

class AdminController extends Controller
{
    /**
     * @Security("has_role('ROLE_ADMIN')")
    */

    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();
        $entitiesLength = $em->getRepository('AppBundle:User')->counter();
        return $this->render('gestionStock/admin/index.html.twig', array(
                'entitiesLength' => $entitiesLength[1]));
    }

    /**
     * @Security("has_role('ROLE_ADMIN')")
    */
    
    public function ajaxListAction(Request $request)
    {
        $em = $this->getDoctrine()->getManager();
        $searchParam = $request->get('searchParam');
        $entities = $em->getRepository('AppBundle:User')->search($searchParam);
        $pagination = (new Paginator())->setItems(count($entities), $searchParam['perPage'])->setPage($searchParam['page'])->toArray();
        return $this->render('gestionStock/admin/ajax_list.html.twig', array(
                    'entities' => $entities,
                    'pagination' => $pagination
                    ));
    }

    /**
     * @Security("has_role('ROLE_ADMIN')")
    */
    public function newAction(Request $request)
    {
        // 1) build the form
        $user = new User();
        $img = new Image();
        //$employe = new Employe();
        //$image = new Image();
        $form = $this->createForm(UserType::class, $user);
        // 2) handle the submit (will only happen on POST)
        $form->handleRequest($request);
        if ($form->isSubmitted()) {
             if($form->isValid()){
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
        //$em->persist($employe);
        //$em->persist($image);
        $em->flush();
        // ... do any other work - like sending them an email, etc
        // maybe set a "flash" success message for the user
        //return $this->redirectToRoute('replace_with_some_route');
        $this->get('session')->getFlashBag()->add('info', "L'utilisateur a été ajouté avec succès.");
        return $this->redirect($this->generateUrl('ben_show_user', array('id' => $user->getId())));
             }
        
         $this->get('session')->getFlashBag()->add('danger', "Il y a des erreurs dans le formulaire soumis !");
        }
        return $this->render(
        'gestionStock/Admin/new.html.twig',
        array('entity' => $user,'form' => $form->createView())
        );
    }

    /**
     * @Security("has_role('ROLE_ADMIN')")
    */
    public function showAction($id)
    {
        $em = $this->getDoctrine()->getManager();
        $entity = $em->getRepository('AppBundle:User')->find($id);
        if (!$entity) throw $this->createNotFoundException('Unable to find posts entity.');

        return $this->render('gestionStock/admin/show.html.twig', array('entity' => $entity));
    }

    /**
     * @Security("has_role('ROLE_ADMIN')")
    */
    public function editAction($id)
    {


        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('AppBundle:User')->find($id);
        $deleteForm = $this->createDeleteForm($id);

        $img = new Image();
        $imgform   = $this->createForm(ImageType::class, $img);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find User entity.');
        }
        return $this->render('gestionStock/Admin/edit.html.twig', array(
            'entity'      => $entity,
            'delete_form' => $deleteForm->createView(),
             'imgform' => $imgform->createView(),
            // 'cities' => $cities,
        ));
    }

    /**
     * @Security("has_role('ROLE_ADMIN')")
    */
    public function updateAction(Request $request, $id) {


         $em = $this->getDoctrine()->getManager();
         $user = $em->getRepository('AppBundle:User')->find($id);
         //$user = new User();
         $employee= new Employe();
        $emp = $request->get('emp');

        /* handle img */
        $img = new Image();
        $imgform   = $this->createForm(ImageType::class, $img);
        
        $imgform->handleRequest($request);

        //in_array('ROLE_ADMIN', $user->getRoles())

        if ($user->getRoles()=='ROLE_ADMIN'){
            $this->get('session')->getFlashBag()->add('danger', "impossible de modifier les informations d'un administrateur de cette interface");
            return $this->redirect($this->generateUrl('ben_users'));
        }
        else{
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
        return $this->redirect($this->generateUrl('ben_users'));
        }

    }

    /**
     * @Security("has_role('ROLE_ADMIN')")
    */
    public function deleteAction($user)
    {
    	$entity = array();
        return $this->render('gestionStock/admin/new.html.twig', array('entity' => $entity));
    }
 
     /**
     * @Security("has_role('ROLE_ADMIN')")
    */
    public function removeUsersAction(Request $request)
    {
        $ids = $request->get('entities');
        $em = $this->getDoctrine()->getManager();
        $entities = $em->getRepository('AppBundle:User')->search(array('ids'=>$ids));
        foreach( $entities as $entity) $em->remove($entity);
        $em->flush();

        //return new Response('1');
        return new Response('supression effectué avec succès');
    } 

    /**
     * @Security("has_role('ROLE_ADMIN')")
    */
    public function enableUsersAction(Request $request, $etat)
    {
        $ids = $request->get('entities');
        $em = $this->getDoctrine()->getManager();
        $entities = $em->getRepository('AppBundle:User')->search(array('ids'=>$ids));
        $etat = ($etat==1);
        foreach( $entities as $entity) {
            $entity->setIsActive($etat);
            $em->persist($entity);
        }
         $em->flush();
        return new Response('1');
    }

       /**
     * @Security("has_role('ROLE_ADMIN')")
    */
    public function setRoleAction(Request $request, $role)
    {
        $ids = $request->get('entities');
        $role = (in_array($role, ['ADMIN', 'MANAGER'])) ? 'ROLE_'.$role : 'ROLE_USER';
        $em = $this->getDoctrine()->getManager();
        $entities = $em->getRepository('AppBundle:User')->search(array('ids'=>$ids));
        foreach( $entities as $entity) {
            $entity->setRoles(array($role));
            $em->persist($entity);
        }
        $em->flush();
        return new Response('1');
    }

      /**
     * @Security("has_role('ROLE_ADMIN')")
    */
    public function exportAction()
    {
        $em = $this->getDoctrine()->getEntityManager();
        
        $entities = $em->getRepository('AppBundle:User')->getUsers();
        $response = $this->render('gestionStock/admin/list.csv.twig',array(
                    'entities' => $entities,
                    ));
         $response->headers->set('Content-Type', 'text/csv');
         $response->headers->set('Content-Disposition', 'attachment; filename="contacts.csv"');

        return $response;
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

}