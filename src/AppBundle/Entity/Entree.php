<?php
namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Doctrine\Common\Collections\ArrayCollection;
/*use AppBundle\Entity\Article.php;
use AppBundle\Entity\Employe.php;*/

/**
 * @ORM\Entity
 * @ORM\Table(name="entree")
 * @ORM\Entity(repositoryClass="AppBundle\Entity\EntreeRepository")
 */

class Entree{

/**
     * @ORM\Column(type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=100)
     */
    private $ref;


    /**
     * @ORM\Column(type="date")
     */
    private $date;

    /**
     * @ORM\OneToMany(targetEntity="Ar_entree", mappedBy="entree" , cascade={"remove", "persist"})
     */
    private $Ar_entrees;
    

    function __construct()
    {
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
     * Set date
     *
     * @param \DateTime $date
     *
     * @return Entree
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
     * Add arEntree
     *
     * @param \AppBundle\Entity\Ar_entree $arEntree
     *
     * @return Entree
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

    /**
     * Set ref
     *
     * @param string $ref
     *
     * @return Entree
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
}
