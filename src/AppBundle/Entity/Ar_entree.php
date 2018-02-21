<?php
namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Doctrine\Common\Collections\ArrayCollection;

/**
 * @ORM\Entity
 * @ORM\Table(name="entree_article")
  * @ORM\Entity(repositoryClass="AppBundle\Entity\Ar_entreeRepository")
 */


class Ar_entree 
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
     * @ORM\ManyToOne(targetEntity="Entree", inversedBy="Ar_entrees")
     * @ORM\JoinColumn(name="entree_id", referencedColumnName="id")
     */
    private $entree;

    /**
     * @ORM\ManyToOne(targetEntity="Article", inversedBy="Ar_entrees")
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
     * @return Ar_entree
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
     * Set entree
     *
     * @param \AppBundle\Entity\Entree $entree
     *
     * @return Ar_entree
     */
    public function setEntree(\AppBundle\Entity\Entree $entree = null)
    {
        $this->entree = $entree;

        return $this;
    }

    /**
     * Get entree
     *
     * @return \AppBundle\Entity\Entree
     */
    public function getEntree()
    {
        return $this->entree;
    }

    /**
     * Set article
     *
     * @param \AppBundle\Entity\Article $article
     *
     * @return Ar_entree
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
        $this->setEntree($data['entree']);
        $this->setQuantite($data['quantite']);
        return $this;
    }
}
