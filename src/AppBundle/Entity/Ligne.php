<?php
namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Doctrine\Common\Collections\ArrayCollection;
use Symfony\Component\Validator\Constraints as Assert;
/**
 * @ORM\Entity
 * @ORM\Table(name="ligne")
 * @ORM\Entity(repositoryClass="AppBundle\Entity\LigneRepository")
 */


class Ligne 
{
	/**
     * @ORM\Column(type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;


    /**
     * @ORM\Column(type="string", length=100)
     */
    private $quantite;

    /**
     * @ORM\Column(type="string", length=100)
     */
    private $prix;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $duree;

    /**
     * @ORM\Column(type="date")
     */
    private $dateGarantie;

    /**
     * @Assert\Valid()
     * @Assert\Type(type="AppBundle\Entity\Livraison")
     * @ORM\ManyToOne(targetEntity="Livraison", inversedBy="lignes")
     * @ORM\JoinColumn(name="livraison_id", referencedColumnName="id")
     */
    private $livraison;

    /**
     * @Assert\Valid()
     * @Assert\Type(type="AppBundle\Entity\Article")
     * @ORM\ManyToOne(targetEntity="Article", inversedBy="lignes")
     * @ORM\JoinColumn(name="article_id", referencedColumnName="id")
     */
    private $article;

	function __construct()
	{
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
     * Set quantite
     *
     * @param string $quantite
     *
     * @return Ligne
     */
    public function setQuantite($quantite)
    {
        $this->quantite = $quantite;

        return $this;
    }

    /**
     * Get quantite
     *
     * @return string
     */
    public function getQuantite()
    {
        return $this->quantite;
    }

    /**
     * Set prix
     *
     * @param string $prix
     *
     * @return Ligne
     */
    public function setPrix($prix)
    {
        $this->prix = $prix;

        return $this;
    }

    /**
     * Get prix
     *
     * @return string
     */
    public function getPrix()
    {
        return $this->prix;
    }

    /**
     * Set duree
     *
     * @param string $duree
     *
     * @return Ligne
     */
    public function setDuree($duree)
    {
        $this->duree = $duree;

        return $this;
    }

    /**
     * Get duree
     *
     * @return string
     */
    public function getDuree()
    {
        return $this->duree;
    }
    

    /**
     * Set livraison
     *
     * @param \AppBundle\Entity\Livraison $livraison
     *
     * @return Ligne
     */
    public function setLivraison(\AppBundle\Entity\Livraison $livraison = null)
    {
        $this->livraison = $livraison;

        return $this;
    }

    /**
     * Get livraison
     *
     * @return \AppBundle\Entity\Livraison
     */
    public function getLivraison()
    {
        return $this->livraison;
    }

    /**
     * Set article
     *
     * @param \AppBundle\Entity\Article $article
     *
     * @return Ligne
     */
    public function setArticle(\AppBundle\Entity\Article $article = null)
    {
        $this->article = $article;

        return $this;
    }

    /**
     * Get article
     *
     * @return \AppBundle\Entity\Article
     */
    public function getArticle()
    {
        return $this->article;
    }

      public function setData($data)
    {

        $this->setArticle($data['ar']);
        $this->setLivraison($data['livraison']);
        $this->setQuantite($data['quantite']);
        $this->setPrix($data['prix']);
        $this->setDuree($data['duree']);
        $this->setDateGarantie(new \DateTime($data['date']));
        return $this;
    }

    /**
     * Set dateGarantie
     *
     * @param \DateTime $dateGarantie
     *
     * @return Ligne
     */
    public function setDateGarantie($dateGarantie)
    {
        $this->dateGarantie = $dateGarantie;

        return $this;
    }

    /**
     * Get dateGarantie
     *
     * @return \DateTime
     */
    public function getDateGarantie()
    {
        return $this->dateGarantie;
    }
}
