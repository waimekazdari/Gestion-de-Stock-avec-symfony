<?php
namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Doctrine\Common\Collections\ArrayCollection;
/*use AppBundle\Entity\Article.php;
use AppBundle\Entity\Employe.php;*/

/**
 * @ORM\Entity
 * @ORM\Table(name="sortie")
 * @ORM\Entity(repositoryClass="AppBundle\Entity\SortieRepository")
 */

class Sortie{

/**
     * @ORM\Column(type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=100)
     */
    private $IdSortie;

    /**
     * @ORM\Column(type="date")
     */
    private $date;

    /**
     * @ORM\OneToMany(targetEntity="Ar_sortie", mappedBy="sortie" , cascade={"remove", "persist"})
     */
    private $Ar_sorties;
    

    /**
     * @ORM\ManyToOne(targetEntity="Employe", inversedBy="sorties")
     * @ORM\JoinColumn(name="employe_id", referencedColumnName="id")
     */
    private $employe;


    function __construct()
    {
        $this->Ar_sorties=new ArrayCollection();
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
     * @param string $date
     *
     * @return Sortie
     */
    public function setDate($date)
    {
        $this->date = $date;

        return $this;
    }

    /**
     * Get date
     *
     * @return string
     */
    public function getDate()
    {
        return $this->date;
    }

    /**
     * Add arSorty
     *
     * @param \AppBundle\Entity\Ar_sortie $arSorty
     *
     * @return Sortie
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
     * Set employe
     *
     * @param \AppBundle\Entity\Employe $employe
     *
     * @return Sortie
     */
    public function setEmploye(\AppBundle\Entity\Employe $employe = null)
    {
        $this->employe = $employe;

        return $this;
    }

    /**
     * Get employe
     *
     * @return \AppBundle\Entity\Employe
     */
    public function getEmploye()
    {
        return $this->employe;
    }

    /**
     * Set idSortie
     *
     * @param string $idSortie
     *
     * @return Sortie
     */
    public function setIdSortie($idSortie)
    {
        $this->IdSortie = $idSortie;

        return $this;
    }

    /**
     * Get idSortie
     *
     * @return string
     */
    public function getIdSortie()
    {
        return $this->IdSortie;
    }
}
