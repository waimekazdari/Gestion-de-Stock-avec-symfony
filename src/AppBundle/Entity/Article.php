<?php
namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Doctrine\Common\Collections\ArrayCollection;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * @ORM\Entity
 * @ORM\Table(name="article")
 * @ORM\Entity(repositoryClass="AppBundle\Entity\ArticleRepository")
 */

class Article{

	/**
     * @ORM\Column(type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;


    /**
     * @ORM\Column(type="string", length=100)
     * @Assert\NotBlank(message="Le Référence de l'Article est obligatoire")
     */
    private $ref;

    /**
     * @ORM\Column(type="string", length=100)
     * @Assert\NotBlank(message="Le code de l'Article est obligatoire")
     */
    private $code;

    /**
     * @ORM\Column(type="string", length=100)
     * @Assert\NotBlank(message="Le Nom de l'Article est obligatoire")
     */
    private $libele;

/**
     * @Assert\Valid()
     * @Assert\NotNull(message="Il faut choisir une catégorie")
     * @Assert\Type(type="AppBundle\Entity\Category")
     * @ORM\ManyToOne(targetEntity="Category", inversedBy="articles")
     * @ORM\JoinColumn(name="category_id", referencedColumnName="id", nullable=false)
     */
    private $category;

     /**
     * @ORM\OneToMany(targetEntity="Ar_EB", mappedBy="article")
     */
    private $Ar_EBs;

    /**
     * @ORM\OneToMany(targetEntity="Ligne", mappedBy="article")
     */
    private $lignes;

    /**
     * @ORM\OneToMany(targetEntity="Ar_sortie", mappedBy="article" , cascade={"remove", "persist"})
     */
    private $Ar_sorties;

    /**
     * @ORM\OneToMany(targetEntity="Ar_entree", mappedBy="article" , cascade={"remove", "persist"})
     */
    private $Ar_entrees;
    


function __construct()
    {
    	$this->Ar_EBs= new ArrayCollection(); 
    	$this->lignes= new ArrayCollection(); 
    	$this->Ar_sorties= new ArrayCollection();
        $this->Ar_entrees=new ArrayCollection();
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
     * Set ref
     *
     * @param string $ref
     *
     * @return Article
     */
    public function setRef($ref)
    {
        $this->ref = $ref;

        return $this;
    }

    /**
     * Get ref
     *
     * @return string
     */
    public function getRef()
    {
        return $this->ref;
    }

    /**
     * Set code
     *
     * @param string $code
     *
     * @return Article
     */
    public function setCode($code)
    {
        $this->code = $code;

        return $this;
    }

    /**
     * Get code
     *
     * @return string
     */
    public function getCode()
    {
        return $this->code;
    }

    /**
     * Set libele
     *
     * @param string $libele
     *
     * @return Article
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
     * Set category
     *
     * @param \AppBundle\Entity\Category $category
     *
     * @return Article
     */
    public function setCategory(\AppBundle\Entity\Category $category)
    {
        $this->category = $category;

        return $this;
    }

    /**
     * Get category
     *
     * @return \AppBundle\Entity\Category
     */
    public function getCategory()
    {
        return $this->category;
    }

    /**
     * Add arEB
     *
     * @param \AppBundle\Entity\Ar_EB $arEB
     *
     * @return Article
     */
    public function addArEB(\AppBundle\Entity\Ar_EB $arEB)
    {
        $this->Ar_EBs[] = $arEB;

        return $this;
    }

    /**
     * Remove arEB
     *
     * @param \AppBundle\Entity\Ar_EB $arEB
     */
    public function removeArEB(\AppBundle\Entity\Ar_EB $arEB)
    {
        $this->Ar_EBs->removeElement($arEB);
    }

    /**
     * Get arEBs
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getArEBs()
    {
        return $this->Ar_EBs;
    }

    /**
     * Add ligne
     *
     * @param \AppBundle\Entity\Ligne $ligne
     *
     * @return Article
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
     * Add arSorty
     *
     * @param \AppBundle\Entity\Ar_sortie $arSorty
     *
     * @return Article
     */
    public function addArSorty(\AppBundle\Entity\Ar_sortie $arSorty)
    {
        $this->Ar_sorties[] = $arSorty;

        return $this;
    }

    /**
     * Remove arSorty
     *
     * @param \AppBundle\Entity\Ar_sortie $arSorty
     */
    public function removeArSorty(\AppBundle\Entity\Ar_sortie $arSorty)
    {
        $this->Ar_sorties->removeElement($arSorty);
    }

    /**
     * Get arSorties
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getArSorties()
    {
        return $this->Ar_sorties;
    }

    /**
     * Add arEntree
     *
     * @param \AppBundle\Entity\Ar_entree $arEntree
     *
     * @return Article
     */
    public function addArEntree(\AppBundle\Entity\Ar_entree $arEntree)
    {
        $this->Ar_entrees[] = $arEntree;

        return $this;
    }

    /**
     * Remove arEntree
     *
     * @param \AppBundle\Entity\Ar_entree $arEntree
     */
    public function removeArEntree(\AppBundle\Entity\Ar_entree $arEntree)
    {
        $this->Ar_entrees->removeElement($arEntree);
    }

    /**
     * Get arEntrees
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getArEntrees()
    {
        return $this->Ar_entrees;
    }
}
