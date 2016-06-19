<?php

namespace MessengerBundle\Entity;

use FOS\UserBundle\Model\User as BaseUser;
use Doctrine\ORM\Mapping as ORM;

/**
 * Class User
 *
 * @ORM\Entity
 * @ORM\Table(name="users")
 */
class User extends BaseUser
{
    /**
     * @ORM\Id
     * @ORM\Column(type="integer")
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    protected $id;

    /**
     * @ORM\Column(
     *     type="string",
     *     length=25,
     *     nullable=true
     * )
     * @var string
     */
    private $title;

    /**
     * @ORM\Column(
     *     type="string",
     *     nullable=true
     * )
     * 
     * @var string
     */
    private $about;

    /**
     * @ORM\Column(
     *     type="string"
     * )
     *
     * @var string
     */
    private $image;

    /**
     * @ORM\Column(
     *    type="boolean"
     *)
     *
     * @var bool
     */
    private $gender;

    public function __construct()
    {
        parent::__construct();
        $this->gender = true;
        $this->image = 'user.png';
    }

    /**
     * Get id
     *
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Get title
     * 
     * @return string
     */
    public function getTitle()
    {
        return $this->title;
    }

    /**
     * Get gender
     *
     * @return bool
     */
    public function getGender()
    {
        return $this->gender;
    }

    /**
     * Get about
     * 
     * @return string
     */
    public function getAbout()
    {
        return $this->about;
    }

    /**
     * Get image name
     *
     * @return string
     */
    public function getImage()
    {
        return $this->image;
    }

    /**
     * Set title
     * 
     * @param $title
     * 
     * @return User
     */
    public function setTitle($title)
    {
        $this->title = $title;
        
        return $this;
    }

    /**
     * Set gender
     *
     * @param $gender
     *
     * @return User
     */
    public function setGender($gender)
    {
        $this->gender = $gender;

        return $this;
    }

    /**
     * Set about
     * 
     * @param $about
     * 
     * @return User
     */
    public function setAbout($about)
    {
        $this->about = $about;
        
        return $this;
    }

    /**
     * Set image name
     *
     * @param $image
     *
     * @return User
     */
    public function setImage($image)
    {
        $this->image = $image;

        return $this;
    }
}