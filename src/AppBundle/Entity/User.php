<?php
// src/AppBundle/Entity/User.php

namespace AppBundle\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Bridge\Doctrine\Validator\Constraints\UniqueEntity;
use Symfony\Component\Security\Core\User\UserInterface;
use Symfony\Component\Security\Core\User\AdvancedUserInterface;
use Symfony\Component\Validator\Constraints as Assert;
/**
 * @ORM\Entity
 * @ORM\Entity(repositoryClass="UserRepository")
 * @ORM\Table(name="user")
* @UniqueEntity(fields="email", message="Email already taken")
* @UniqueEntity(fields="username", message="Username already taken")
 */
class User implements AdvancedUserInterface, \Serializable
{
    /**
     * @ORM\Id
     * @ORM\Column(type="integer")
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    protected $id;

        /**
        * @ORM\Column(type="string", length=255, unique=true)
        * @Assert\NotBlank(message="l\'email est obligatoire")
        * @Assert\Email()
        */
        private $email;
        /**
        * @ORM\Column(type="string", length=255, unique=true)
        * @Assert\NotBlank(message="le username est obligatoire")
        */
        private $username;
        /**
        * @Assert\NotBlank(message="le mot de passe est obligatoire")
        * @Assert\Length(max=4096)
        */
        private $plainPassword;
        /**
        * The below length depends on the "algorithm" you use for encoding
        * the password, but this works well with bcrypt.
        *
        * @ORM\Column(type="string", length=64)
        */
        private $password;

        /**
        * @ORM\Column(type="string", length=255, nullable=false)
        */
        private $salt;

        /**
         * @ORM\Column(name="roles", type="array", nullable=false)
         */
        private $roles;

    /**
    *@Assert\Valid()
    * @ORM\OneToOne(targetEntity="Image", cascade={"remove", "persist"})
    */
    protected $image;

    /**
     * @var \DateTime $created
     *
     * @ORM\Column(name="created", type="datetime")
     */
    protected $created;

    /**
     * @var \DateTime $lastActivity
     *
     * @ORM\Column(name="lastActivity", type="datetime")
     */
    protected $lastActivity;

    /**
    * @ORM\Column(name="is_active", type="boolean")
    */
    protected $isActive;

     /**
     *@Assert\Valid()
     * @ORM\OneToOne(targetEntity="Employe" ,cascade={"persist","remove"})
     * @ORM\JoinColumn(name="employe_id", referencedColumnName="id")
     */
    protected $employe;

    /**
     * @ORM\ManyToOne(targetEntity="Service", inversedBy="employes")
     * @ORM\JoinColumn(name="service_id", referencedColumnName="id")
     */
    private $service;

    public function __construct(/*$username, $password, $salt,*/$roles =array('ROLE_ADMIN'))
    {
        $this->isActive = true;
        $this->created=new \DateTime('NOW');
        $this->lastActivity=new \DateTime('NOW');
        $this->image= new \AppBundle\Entity\Image();
        // may not be needed, see section on salt below
        $this->salt = md5(uniqid(null, true));
       /* $this->username = $username;
        $this->password = $password;
        $this->salt = $salt;
        $this->roles = $roles;*/
        //$ar=array('ROLE_USER');
        //$this->setRoles($ar);
        $this->roles = array('ROLE_ADMIN');
        
    }
        public function getSalt()
    {
    // you *may* need a real salt depending on your encoder
    // see section on salt below
    //return null;
        return $this->salt;
    }

    
    public function getRoles()
    {
        return $this->roles;
        /*$rol=$this->roles;
        $arr = array($rol);
        return $arr;*/
    }
    public function setRoles(array $roles)
{
    $this->roles = $roles;

    // allows for chaining
    return $this;
}

   /* public function setRoles($roles)
    {
        $this->roles = $roles;
        return $this;
    }*/

    public function isEqualTo(UserInterface $user)
        {
        if (!$user instanceof WebserviceUser) {
        return false;
        }
        if ($this->password !== $user->getPassword()) {
        return false;
        }
        if ($this->salt !== $user->getSalt()) {
        return false;
        }
        if ($this->username !== $user->getUsername()) {
        return false;
        }
        return true;}

    public function eraseCredentials()
    {
    }

    public function isCredentialsNonExpired()
    {
    return true;
    }

    public function isEnabled()
    {
    return $this->isActive;
    }


    /** @see \Serializable::serialize() */
    public function serialize()
    {
    return serialize(array(
    $this->id,
    $this->username,
    $this->password,
    // see section on salt below
    $this->salt,
    $this->isActive
    ));
    }
    /** @see \Serializable::unserialize() */
    public function unserialize($serialized)
    {
    list (
    $this->id,
    //$this->username,
    //$this->password,
    // see section on salt below
    //$this->salt,
    //$this->isActive
    ) = unserialize($serialized);
    }

    /**
     * Set image
     *
     * @param \AppBundle\Entity\Image $image
     *
     * @return User
     */
    public function setImage(\AppBundle\Entity\Image $image = null)
    {
        $this->image = $image;

        return $this;
    }

    /**
     * Get image
     *
     * @return \AppBundle\Entity\Image
     */
    public function getImage()
    {
        return $this->image;
    }

    /**
     * Add employe
     *
     * @param \AppBundle\Entity\Employe $employe
     *
     * @return User
     */
    public function addEmploye(\AppBundle\Entity\Employe $employe)
    {
        $this->employes[] = $employe;

        return $this;
    }

    /**
     * Remove employe
     *
     * @param \AppBundle\Entity\Employe $employe
     */
    public function removeEmploye(\AppBundle\Entity\Employe $employe)
    {
        $this->employes->removeElement($employe);
    }

    /**
     * Get employes
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getEmployes()
    {
        return $this->employes;
    }

    /**
     * Set employe
     *
     * @param \AppBundle\Entity\Employe $employe
     *
     * @return User
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
     * Get avatar
     *
     * @return string 
     */
    public function getAvatar() {

        return $this->image->getWebPath();
    }


    /**
     * Set created
     *
     * @param \DateTime $created
     * @return User
     */
    public function setCreated($created) {
        $this->created = $created;

        return $this;
    }

    /**
     * Get created
     *
     * @return \DateTime 
     */
    public function getCreated() {
        return $this->created;
    }

    /**
     * Set lastActivity
     *
     * @param \DateTime $lastActivity
     * @return User
     */
    public function setLastActivity($lastActivity) {
        $this->lastActivity = $lastActivity;

        return $this;
    }

    /**
     * Get lastActivity
     *
     * @return \DateTime 
     */
    public function getLastActivity() {
        return $this->lastActivity;
    }

    /**
     * Set lastActivity
     *
     * @param \DateTime $lastActivity
     * @return User
     */
    public function isActiveNow() {
        $this->lastActivity = new \DateTime();

        return $this;
    }

            public function getEmail()
        {
        return $this->email;
        }
        public function setEmail($email)
        {
        $this->email = $email;
        }
        public function getUsername()
        {
            return $this->username;
        }
        public function setUsername($username)
        {
        $this->username = $username;
        }
        public function getPlainPassword()
        {
        return $this->plainPassword;
        }
        public function setPlainPassword($password)
        {
        $this->plainPassword = $password;
        }
        public function setPassword($password)
        {
        $this->password = $password;
        }
        public function getPassword()
        {
        return $this->password;
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
     * Set isActive
     *
     * @param boolean $isActive
     *
     * @return User
     */
    public function setIsActive($isActive)
    {
        $this->isActive = $isActive;

        return $this;
    }

    /**
     * Get isActive
     *
     * @return boolean
     */
    public function getIsActive()
    {
        return $this->isActive;
    }

    public function isAccountNonExpired()
        {
        return true;
        }
    public function isAccountNonLocked()
        {
            return true;
        }

    /**
     * Set salt
     *
     * @param string $salt
     *
     * @return User
     */
    public function setSalt($salt)
    {
        $this->salt = $salt;

        return $this;
    }

    /**
     * Set service
     *
     * @param \AppBundle\Entity\Service $service
     *
     * @return User
     */
    public function setService(\AppBundle\Entity\Service $service = null)
    {
        $this->service = $service;

        return $this;
    }

    /**
     * Get service
     *
     * @return \AppBundle\Entity\Service
     */
    public function getService()
    {
        return $this->service;
    }

    /**
     * Set roles
     *
     * @param array $roles
     *
     * @return User
     */
    /*public function setRoles($roles)
    {
        $this->roles = $roles;

        return $this;
    }*/
}
