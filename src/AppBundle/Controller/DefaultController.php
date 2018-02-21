<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\ParamConverter;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use AppBundle\Entity\User;
use AppBundle\Entity\Product;
use Symfony\Component\HttpFoundation\Response;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Security;

class DefaultController extends Controller
{
    /**
     * @Route("/", name="homepage")
     */
  public function indexAction(Request $request)
    {
       return $this->redirectToRoute("login");
    }

      /**
     * @Route("/helo", name="helo")
     */
  public function heloAction(Request $request)
    {
        // replace this example code with whatever you need
        return $this->render('default/hello.html.twig');
    }

    /**
     * @Route("/Accueil", name="Accueil")
     */
  public function AccueilAction(Request $request)
    {
       return $this->render('gestionStock/Accueil.html.twig');
    }

    /**
     * @Route("/ana", name="ana")
     */
  public function createAction()
{
  #lIn this section, you instantiate and work with the $product object like any other normal PHP object.
    $product = new Product();
    $product->setName('Keyboard');
    $product->setPrice(19.99);
    $product->setDescription('Ergonomic and stylish!');

    #This line fetches Doctrine's entity manager object, which is responsible for the process of persisting objects to, and fetching objects from, the database

    $em = $this->getDoctrine()->getManager();

    // tells Doctrine you want to (eventually) save the Product (no queries yet)
    #The persist($product) call tells Doctrine to "manage" the $product object. This does not cause a query to be made to the database.
    $em->persist($product);

    // actually executes the queries (i.e. the INSERT query)
    #When the flush() method is called, Doctrine looks through all of the objects that it's managing to see if they need to be persisted to the database. In this example, the $product object's data doesn't exist in the database, so the entity manager executes an INSERT query, creating a new row in the product table.
    $em->flush();

    return new Response('Saved new product with id '.$product->getId());
}

    /**
     * @Route("/showProducts/{productId}", name="showProduct")
     */

#la deuxieme methode avec param convertor ..it's not working yet ...in annotation of action :@ParamConverter("product", class="AppBundle:Product")
/*
public function showAction(Product $product)
{
  $request->attributes->get('product');
}
*/
#fetching Objects from database
# la premiere méthode

public function showAction($productId)
{
    $product = $this->getDoctrine()
    #When you query for a particular type of object, you always use what's known as its "repository". You can think of a repository as a PHP class whose only job is to help you fetch entities of a certain class.
        ->getRepository('AppBundle:Product')
        ->find($productId);

    if (!$product) {
       #throw $this->createNotFoundException(
        #    'No product found for id '.$productId
       # );
 return new Response('hhh not found');       
    }
return new Response('hhh find');
    // ... do something, like pass the $product object into a template
}

#Once you have a repository object, you can access all sorts of helpful methods:
/*
// query for a single product by its primary key (usually "id")
$product = $repository->find($productId);

// dynamic method names to find a single product based on a column value
$product = $repository->findOneById($productId);
$product = $repository->findOneByName('Keyboard');

// dynamic method names to find a group of products based on a column value
$products = $repository->findByPrice(19.99);

// find *all* products
$products = $repository->findAll();

// query for a single product matching the given name and price
$product = $repository->findOneBy(
    array('name' => 'Keyboard', 'price' => 19.99)
);

// query for multiple products matching the given name, ordered by price
$products = $repository->findBy(
    array('name' => 'Keyboard'),
    array('price' => 'ASC')
);
*/

    /**
     * @Route("/updateProduct/{productId}", name="updateProduct")
     */

/*
Updating an object involves just three steps:

fetching the object from Doctrine;
modifying the object;
calling flush() on the entity manager
*/
public function updateAction($productId)
{
    $em = $this->getDoctrine()->getManager();
    $product = $em->getRepository('AppBundle:Product')->find($productId);

    if (!$product) {
        throw $this->createNotFoundException(
            'No product found for id '.$productId
        );
    }

    $product->setName('New product name!');
    $em->flush();

    return $this->redirectToRoute('homepage');

}

/*
Deleting an Object¶
Deleting an object is very similar, but requires a call to the remove() method of the entity manager:

$em->remove($product);
$em->flush();

As you might expect, the remove() method notifies Doctrine that you'd like to remove the given object from the database. The actual DELETE query, however, isn't actually executed until the flush() method is called.
*/


/**
* @Route("/tesssssteRepository", name="testRepository")
*/
public function ironow(){
  $em=$this->getDoctrine()->getManager();
  $products = $em->getRepository('AppBundle:Product')->findAllOrdredByName();

    if (!$products) {
       #throw $this->createNotFoundException(
        #    'No product found for id '.$productId
       # );
 return new Response('hhh not good not found');       
    }
return new Response('hhh its good ..find');
}
}
