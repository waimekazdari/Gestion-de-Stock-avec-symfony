<?php
namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Doctrine\Common\Collections\ArrayCollection;
//use AppBundle\Entity\Livraison.php;

/**
 * @ORM\Entity
 * @ORM\Table(name="fournisseur")
  * @ORM\Entity(repositoryClass="AppBundle\Entity\FournisseurRepository")
 */

class Fournisseur{

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
     * @ORM\Column(type="string", length=100)
     */
    private $ville;

    /**
     * @ORM\Column(type="string", length=100)
     */
    private $pays;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $email;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $adresse;

    /**
     * @ORM\Column(type="string", length=100)
     */
    private $tel;

    /**
     * @ORM\OneToMany(targetEntity="Livraison", mappedBy="fournisseur" , cascade={"remove", "persist"})
     */
    private $livraisons;

    function __construct()
    {
        $this->livraisons=new ArrayCollection();
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
     * @return Fournisseur
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
     * @return Fournisseur
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
     * Set langue
     *
     * @param string $langue
     *
     * @return Fournisseur
     */
    public function setLangue($langue)
    {
        $this->langue = $langue;

        return $this;
    }

    /**
     * Get langue
     *
     * @return string
     */
    public function getLangue()
    {
        return $this->langue;
    }

    /**
     * Set ville
     *
     * @param string $ville
     *
     * @return Fournisseur
     */
    public function setVille($ville)
    {
        $this->ville = $ville;

        return $this;
    }

    /**
     * Get ville
     *
     * @return string
     */
    public function getVille()
    {
        return $this->ville;
    }

    /**
     * Set pays
     *
     * @param string $pays
     *
     * @return Fournisseur
     */
    public function setPays($pays)
    {
        $this->pays = $pays;

        return $this;
    }

    /**
     * Get pays
     *
     * @return string
     */
    public function getPays()
    {
        return $this->pays;
    }

    /**
     * Set email
     *
     * @param string $email
     *
     * @return Fournisseur
     */
    public function setEmail($email)
    {
        $this->email = $email;

        return $this;
    }

    /**
     * Get email
     *
     * @return string
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * Set adresse
     *
     * @param string $adresse
     *
     * @return Fournisseur
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
     * @return Fournisseur
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
     * Add livraison
     *
     * @param \AppBundle\Entity\Livraison $livraison
     *
     * @return Fournisseur
     */
    public function addLivraison(\AppBundle\Entity\Livraison $livraison)
    {
        $this->livraisons[] = $livraison;

        return $this;
    }

    /**
     * Remove livraison
     *
     * @param \AppBundle\Entity\Livraison $livraison
     */
    public function removeLivraison(\AppBundle\Entity\Livraison $livraison)
    {
        $this->livraisons->removeElement($livraison);
    }

    /**
     * Get livraisons
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getLivraisons()
    {
        return $this->livraisons;
    }
}
