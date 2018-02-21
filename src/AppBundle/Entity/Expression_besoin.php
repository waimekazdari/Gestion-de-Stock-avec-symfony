<?php
namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Doctrine\Common\Collections\ArrayCollection;
//use AppBundle\Entity\Employe.php;
/**
 * @ORM\Entity
 * @ORM\Table(name="expression_besoin")
  * @ORM\Entity(repositoryClass="AppBundle\Entity\Expression_besoinRepository")
 */

class Expression_besoin{

/**
     * @ORM\Column(type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @ORM\Column(type="date")
     */
    private $dateEmission;

    /**
     * @ORM\Column(type="boolean" )
     */
    private $accord;

    /**
     * @ORM\OneToMany(targetEntity="Ar_EB", mappedBy="expression_besoin" , cascade={"remove", "persist"})
     */
    private $Ar_EBs;
    /**
     * @ORM\ManyToOne(targetEntity="Employe", inversedBy="expression_besoins")
     * @ORM\JoinColumn(name="employe_id", referencedColumnName="id")
     */
    private $employe;

    function __construct()
    {
        $this->accord = false;
        $this->dateEmission=new \DateTime('NOW');
        $this->Ar_EBs=new ArrayCollection();
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
     * Set dateEmission
     *
     * @param \DateTime $dateEmission
     *
     * @return Expression_besoin
     */
    public function setDateEmission($dateEmission)
    {
        $this->dateEmission = $dateEmission;

        return $this;
    }

    /**
     * Get dateEmission
     *
     * @return \DateTime
     */
    public function getDateEmission()
    {
        return $this->dateEmission;
    }

    /**
     * Set accord
     *
     * @param boolean $accord
     *
     * @return Expression_besoin
     */
    public function setAccord($accord)
    {
        $this->accord = $accord;

        return $this;
    }

    /**
     * Get accord
     *
     * @return boolean
     */
    public function getAccord()
    {
        return $this->accord;
    }

    /**
     * Add arEB
     *
     * @param \AppBundle\Entity\Ar_EB $arEB
     *
     * @return Expression_besoin
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
     * Set employe
     *
     * @param \AppBundle\Entity\Employe $employe
     *
     * @return Expression_besoin
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
}
