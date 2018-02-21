<?php
namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Doctrine\Common\Collections\ArrayCollection;
//use AppBundle\Entity\Fournisseur.php;

/**
 * @ORM\Entity
 * @ORM\Table(name="livraison")
 * @ORM\Entity(repositoryClass="AppBundle\Entity\LivraisonRepository")
 */

class Livraison{

/**
     * @ORM\Column(type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=100)
     */
    private $refMarche;

    /**
     * @ORM\Column(type="date")
     */
    private $date;

    /**
     * @ORM\OneToMany(targetEntity="Ligne", mappedBy="livraison" , cascade={"remove", "persist"})
     */
    private $lignes;

    /**
     * @ORM\ManyToOne(targetEntity="Fournisseur", inversedBy="livraisons")
     * @ORM\JoinColumn(name="fournisseur_id", referencedColumnName="id")
     */
    private $fournisseur;


    function __construct()
    {
    	$this->lignes=new ArrayCollection();
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
     * Set date
     *
     * @param \DateTime $date
     *
     * @return Livraison
     */
    public function setDate($date)
    {
        $this->date = $date;

        return $this;
    }

    /**
     * Get date
     *
     * @return \DateTime
     */
    public function getDate()
    {
        return $this->date;
    }

    /**
     * Add article
     *
     * @param \AppBundle\Entity\Article $article
     *
     * @return Livraison
     */
    public function addArticle(\AppBundle\Entity\Article $article)
    {
        $this->articles[] = $article;

        return $this;
    }

    /**
     * Remove article
     *
     * @param \AppBundle\Entity\Article $article
     */
    public function removeArticle(\AppBundle\Entity\Article $article)
    {
        $this->articles->removeElement($article);
    }

    /**
     * Get articles
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getArticles()
    {
        return $this->articles;
    }

    /**
     * Set fournisseur
     *
     * @param \AppBundle\Entity\Fournisseur $fournisseur
     *
     * @return Livraison
     */
    public function setFournisseur(\AppBundle\Entity\Fournisseur $fournisseur = null)
    {
        $this->fournisseur = $fournisseur;

        return $this;
    }

    /**
     * Get fournisseur
     *
     * @return \AppBundle\Entity\Fournisseur
     */
    public function getFournisseur()
    {
        return $this->fournisseur;
    }

    /**
     * Add ligne
     *
     * @param \AppBundle\Entity\Ligne $ligne
     *
     * @return Livraison
     */
    public function addLigne(\AppBundle\Entity\Ligne $ligne)
    {
        $this->lignes[] = $ligne;

        return $this;
    }

    /**
     * Remove ligne
     *
     * @param \AppBundle\Entity\Ligne $ligne
     */
    public function removeLigne(\AppBundle\Entity\Ligne $ligne)
    {
        $this->lignes->removeElement($ligne);
    }

    /**
     * Get lignes
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getLignes()
    {
        return $this->lignes;
    }

    /**
     * Set refMarche
     *
     * @param string $refMarche
     *
     * @return Livraison
     */
    public function setRefMarche($refMarche)
    {
        $this->refMarche = $refMarche;

        return $this;
    }

    /**
     * Get refMarche
     *
     * @return string
     */
    public function getRefMarche()
    {
        return $this->refMarche;
    }
}
