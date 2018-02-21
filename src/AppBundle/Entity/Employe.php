<?php
namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Doctrine\Common\Collections\ArrayCollection;
/*use AppBundle\Entity\Expression_besoin.php;
use AppBundle\Entity\Sortie.php;*/

/**
 * @ORM\Entity
 * @ORM\Table(name="employe")
 */

class Employe{

/**
     * @ORM\Column(type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=100)
     */
    private $nom;

     /**
     * @ORM\Column(type="string", length=100)
     */
    private $CIN;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $adresse;

    /**
     * @ORM\Column(type="string", length=100)
     */
    private $tel;

    /**
     * @ORM\OneToMany(targetEntity="Sortie", mappedBy="employe" , cascade={"remove", "persist"})
     */
    private $sorties;

    /**
     * @ORM\OneToMany(targetEntity="Expression_besoin", mappedBy="employe" , cascade={"remove", "persist"})
     */
    private $expression_besoins;


    function __construct()
    {
        $this->sorties=new ArrayCollection();
        $this->expression_besoins=new ArrayCollection();
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
     * Set nom
     *
     * @param string $nom
     *
     * @return Employe
     */
    public function setNom($nom)
    {
        $this->nom = $nom;

        return $this;
    }

    /**
     * Get nom
     *
     * @return string
     */
    public function getNom()
    {
        return $this->nom;
    }

    /**
     * Set cIN
     *
     * @param string $cIN
     *
     * @return Employe
     */
    public function setCIN($cIN)
    {
        $this->CIN = $cIN;

        return $this;
    }

    /**
     * Get cIN
     *
     * @return string
     */
    public function getCIN()
    {
        return $this->CIN;
    }

    /**
     * Set adresse
     *
     * @param string $adresse
     *
     * @return Employe
     */
    public function setAdresse($adresse)
    {
        $this->adresse = $adresse;

        return $this;
    }

    /**
     * Get adresse
     *
     * @return string
     */
    public function getAdresse()
    {
        return $this->adresse;
    }

    /**
     * Set tel
     *
     * @param string $tel
     *
     * @return Employe
     */
    public function setTel($tel)
    {
        $this->tel = $tel;

        return $this;
    }

    /**
     * Get tel
     *
     * @return string
     */
    public function getTel()
    {
        return $this->tel;
    }

    /**
     * Add sorty
     *
     * @param \AppBundle\Entity\Sortie $sorty
     *
     * @return Employe
     */
    public function addSorty(\AppBundle\Entity\Sortie $sorty)
    {
        $this->sorties[] = $sorty;

        return $this;
    }

    /**
     * Remove sorty
     *
     * @param \AppBundle\Entity\Sortie $sorty
     */
    public function removeSorty(\AppBundle\Entity\Sortie $sorty)
    {
        $this->sorties->removeElement($sorty);
    }

    /**
     * Get sorties
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getSorties()
    {
        return $this->sorties;
    }

    /**
     * Add expressionBesoin
     *
     * @param \AppBundle\Entity\Expression_besoin $expressionBesoin
     *
     * @return Employe
     */
    public function addExpressionBesoin(\AppBundle\Entity\Expression_besoin $expressionBesoin)
    {
        $this->expression_besoins[] = $expressionBesoin;

        return $this;
    }

    /**
     * Remove expressionBesoin
     *
     * @param \AppBundle\Entity\Expression_besoin $expressionBesoin
     */
    public function removeExpressionBesoin(\AppBundle\Entity\Expression_besoin $expressionBesoin)
    {
        $this->expression_besoins->removeElement($expressionBesoin);
    }

    /**
     * Get expressionBesoins
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getExpressionBesoins()
    {
        return $this->expression_besoins;
    }

    /**
     * Set service
     *
     * @param \AppBundle\Entity\Service $service
     *
     * @return Employe
     */
    public function setService(\AppBundle\Entity\Service $service = null)
    {
        $this->service = $service;

        return $this;
    }

    /**
     * Get service
     *
     * @return \AppBundle\Entity\Service
     */
    public function getService()
    {
        return $this->service;
    }

    /**
     * Set user
     *
     * @param \AppBundle\Entity\User $user
     *
     * @return Employe
     */
    public function setUser(\AppBundle\Entity\User $user)
    {
        $this->user = $user;

        return $this;
    }

    /**
     * Get user
     *
     * @return \AppBundle\Entity\User
     */
    public function getUser()
    {
        return $this->user;
    }
}
