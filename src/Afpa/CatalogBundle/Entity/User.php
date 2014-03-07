<?php

namespace Afpa\CatalogBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use FOS\UserBundle\Model\User as BaseUser;

<<<<<<< HEAD

=======
>>>>>>> FETCH_HEAD
/**
 * User
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="Afpa\CatalogBundle\Entity\UserRepository")
 */
<<<<<<< HEAD
class User extends BaseUser
=======
class User  extends BaseUser
>>>>>>> FETCH_HEAD
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
<<<<<<< HEAD
    protected  $id;

    /**
     * @var string
     *
     * @ORM\Column(name="name", type="string", length=255, nullable=true)
     */
    private $name;


    public function __construct()
    {
        parent::__construct();
        // your own logic
    }

=======
    protected $id;

    /**
     * @var Category
     *
     * @ORM\ManyToOne(targetEntity="Afpa\CatalogBundle\Entity\Category", cascade={"persist"})
     */
    private $category;
    
>>>>>>> FETCH_HEAD

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
<<<<<<< HEAD
     * Set name
     *
     * @param string $name
     * @return User
     */
    public function setName($name)
    {
        $this->name = $name;

        return $this;
    }

    /**
     * Get name
     *
     * @return string 
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Set email
     *
     * @param string $email
     * @return User
     */
    public function setEmail($email)
    {
        $this->email = $email;

        return $this;
    }

    /**
     * Get email
     *
     * @return string 
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * Set password
     *
     * @param string $password
     * @return User
     */
    public function setPassword($password)
    {
        $this->password = $password;
=======
     * Set category
     *
     * @param \Afpa\CatalogBundle\Entity\Category $category
     * @return User
     */
    public function setCategory(\Afpa\CatalogBundle\Entity\Category $category = null)
    {
        $this->category = $category;
>>>>>>> FETCH_HEAD

        return $this;
    }

    /**
<<<<<<< HEAD
     * Get password
     *
     * @return string 
     */
    public function getPassword()
    {
        return $this->password;
=======
     * Get category
     *
     * @return \Afpa\CatalogBundle\Entity\Category 
     */
    public function getCategory()
    {
        return $this->category;
>>>>>>> FETCH_HEAD
    }
}
