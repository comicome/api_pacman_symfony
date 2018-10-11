<?php

namespace AppBundle\Entity;

use FOS\UserBundle\Model\User as BaseUser;
use Doctrine\ORM\Mapping as ORM;
use Doctrine\Common\Collections\ArrayCollection;

/**
 * @ORM\Entity
 * @ORM\Table(name="fos_user")
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
     * @ORM\Column(type="integer")
     */
    protected $age;

    /**
     * @ORM\Column(type="string")
     */
    protected $famille;

    /**
     * @ORM\Column(type="string")
     */
    protected $couleur;

    /**
     * @ORM\Column(type="string")
     */
    protected $nourriture;

    /**
     * Many Users have Many Users.
     * @ORM\ManyToMany(targetEntity="User", mappedBy="myFriends")
     */
    private $friendsWithMe;

    /**
     * Many Users have many Users.
     * @ORM\ManyToMany(targetEntity="User", inversedBy="friendsWithMe")
     * @ORM\JoinTable(name="friends",
     *      joinColumns={@ORM\JoinColumn(name="user_id", referencedColumnName="id")},
     *      inverseJoinColumns={@ORM\JoinColumn(name="friend_user_id", referencedColumnName="id")}
     *      )
     */
    private $myFriends;

    /**
     * Constructor.
     */
    public function __construct()
    {
        parent::__construct();
        $this->friendsWithMe = new ArrayCollection();
        $this->myFriends = new ArrayCollection();
    }
    /**
     * @return mixed
     */
    public function getAge()
    {
        return $this->age;
    }

    /**
     * @param mixed $age
     */
    public function setAge($age)
    {
        $this->age = $age;
    }

    /**
     * @return mixed
     */
    public function getCouleur()
    {
        return $this->couleur;
    }

    /**
     * @param mixed $couleur
     */
    public function setCouleur($couleur)
    {
        $this->couleur = $couleur;
    }

    /**
     * @return mixed
     */
    public function getFamille()
    {
        return $this->famille;
    }

    /**
     * @param mixed $famille
     */
    public function setFamille($famille)
    {
        $this->famille = $famille;
    }

    /**
     * @return string
     */
    public function getUsername()
    {
        return $this->username;
    }

    /**
     * @param string $username
     */
    public function setUsername($username)
    {
        $this->username = $username;
    }

    /**
     * @return mixed
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param mixed $id
     */
    public function setId($id)
    {
        $this->id = $id;
    }

    /**
     * @return mixed
     */
    public function getNourriture()
    {
        return $this->nourriture;
    }

    /**
     * @param mixed $nourriture
     */
    public function setNourriture($nourriture)
    {
        $this->nourriture = $nourriture;
    }


    public function addFriendsWithMe(User $friendsWithMe)
    {
        $this->friendsWithMe[] = $friendsWithMe;

        return $this;
    }


    public function removeFriendsWithMe(User $friendsWithMe)
    {
        $this->friendsWithMe->removeElement($friendsWithMe);
    }


    public function getFriendsWithMe()
    {
        return $this->friendsWithMe;
    }

    public function getMyFriends()
    {
        return $this->myFriends;
    }


    public function addMyFriend(User $myFriend)
    {
        $this->myFriends[] = $myFriend;

        return $this;
    }

    public function removeMyFriend(User $myFriend)
    {
        if (!$this->myFriends->contains($myFriend)) {
            return;
        }
        $this->myFriends->removeElement($myFriend);
    }


}