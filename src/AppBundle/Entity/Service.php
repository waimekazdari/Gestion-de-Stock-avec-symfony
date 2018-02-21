<?php
namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Doctrine\Common\Collections\ArrayCollection;
/* use AppBundle\Entity\Employe.php;
use AppBundle\Entity\Departement.php;*/
/**
 * @ORM\Entity
 * @ORM\Table(name="service")
  * @ORM\Entity(repositoryClass="AppBundle\Entity\ServiceRepository")
 */

class Service{

/**
     * @ORM\Column(type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=100)
     */
    private $libele;

    /**
     * @ORM\OneToMany(targetEntity="User", mappedBy="service" , cascade={"remove", "persist"})
     */
    private $employes;

    /**
     * @ORM\ManyToOne(targetEntity="Departement", inversedBy="services")
     * @ORM\JoinColumn(name="departement_id", referencedColumnName="id")
     */
    private $departement;

    function __construct()
    {
        $this->employes=new ArrayCollection();
    }

    /**
     * Get id
     *
     * @return integer
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set libele
     *
     * @param string $libele
     *
     * @return Service
     */
    public function setLibele($libele)
    {
        $this->libele = $libele;

        return $this;
    }

    /**
     * Get libele
     *
     * @return string
     */
    public function getLibele()
    {
        return $this->libele;
    }

    /**
     * Add employe
     *
     * @param \AppBundle\Entity\Employe $employe
     *
     * @return Service
     */
    public function addEmploye(\AppBundle\Entity\Employe $employe)
    {
        $this->employes[] = $employe;

        return $this;
    }

    /**
     * Remove employe
     *
     * @param \AppBundle\Entity\Employe $employe
     */
    public function removeEmploye(\AppBundle\Entity\Employe $employe)
    {
        $this->employes->removeElement($employe);
    }

    /**
     * Get employes
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getEmployes()
    {
        return $this->employes;
    }

    /**
     * Set departement
     *
     * @param \AppBundle\Entity\Departement $departement
     *
     * @return Service
     */
    public function setDepartement(\AppBundle\Entity\Departement $departement = null)
    {
        $this->departement = $departement;

        return $this;
    }

    /**
     * Get departement
     *
     * @return \AppBundle\Entity\Departement
     */
    public function getDepartement()
    {
        return $this->departement;
    }
}
