<?php
namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Doctrine\Common\Collections\ArrayCollection;

/**
 * @ORM\Entity
 * @ORM\Table(name="Ar_EB")
 * @ORM\Entity(repositoryClass="AppBundle\Entity\Ar_EBRepository")
 */


class Ar_EB 
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
     * @ORM\ManyToOne(targetEntity="Expression_besoin", inversedBy="Ar_EBs")
     * @ORM\JoinColumn(name="EB_id", referencedColumnName="id")
     */
    private $expression_besoin;

    /**
     * @ORM\ManyToOne(targetEntity="Article", inversedBy="Ar_EBs")
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
     * @return Ar_EB
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
     * Set expressionBesoin
     *
     * @param \AppBundle\Entity\Expression_besoin $expressionBesoin
     *
     * @return Ar_EB
     */
    public function setExpressionBesoin(\AppBundle\Entity\Expression_besoin $expressionBesoin = null)
    {
        $this->expression_besoin = $expressionBesoin;

        return $this;
    }

    /**
     * Get expressionBesoin
     *
     * @return \AppBundle\Entity\Expression_besoin
     */
    public function getExpressionBesoin()
    {
        return $this->expression_besoin;
    }

    /**
     * Set article
     *
     * @param \AppBundle\Entity\Article $article
     *
     * @return Ar_EB
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
        $this->setExpressionBesoin($data['expression_besoin']);
        $this->setQuantite($data['quantite']);
        return $this;
    }
}
