<?php
namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Doctrine\Common\Collections\ArrayCollection;

/**
 * @ORM\Entity
 * @ORM\Table(name="sortie_article")
 * @ORM\Entity(repositoryClass="AppBundle\Entity\Ar_sortieRepository")
 */


class Ar_sortie 
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
     * @ORM\ManyToOne(targetEntity="Sortie", inversedBy="Ar_sorties")
     * @ORM\JoinColumn(name="sortie_id", referencedColumnName="id")
     */
    private $sortie;

    /**
     * @ORM\ManyToOne(targetEntity="Article", inversedBy="Ar_sorties")
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
     * @return Ar_sortie
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
     * Set sortie
     *
     * @param \AppBundle\Entity\Sortie $sortie
     *
     * @return Ar_sortie
     */
    public function setSortie(\AppBundle\Entity\Sortie $sortie = null)
    {
        $this->sortie = $sortie;

        return $this;
    }

    /**
     * Get sortie
     *
     * @return \AppBundle\Entity\Sortie
     */
    public function getSortie()
    {
        return $this->sortie;
    }

    /**
     * Set article
     *
     * @param \AppBundle\Entity\Article $article
     *
     * @return Ar_sortie
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
        $this->setSortie($data['sortie']);
        $this->setQuantite($data['quantite']);
        return $this;
    }
}
