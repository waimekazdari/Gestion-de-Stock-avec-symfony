<?php

namespace AppBundle\Twig;

use Doctrine\ORM\EntityManager;
use AppBundle\Entity\Config;

class ConfigExtension extends \Twig_Extension {

    protected $em;

    public function __construct(EntityManager $em)
    {
        $this->em = $em;
    }

    public function getGlobals()
    {
        $logoConfig = $this->em->getRepository('AppBundle:Config')->findAll();
        $result= [];
        foreach ($logoConfig as $cf) {
            $result[$cf->getTheKey()] = $cf->getTheValue();
        }
      return array(
        'app_config'=> $result,
      );
    }

    /**
     * Returns the name of the extension.
     *
     * @return string The extension name
     */
    public function getName() {
        return 'config_extension';
    }

}