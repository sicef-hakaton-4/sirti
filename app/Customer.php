<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    protected $id;
    protected $firstName;
    protected $description;
    protected $profilePicture;


    /**
     * Customer constructor.
     * @param $id
     * @param $firstName
     * @param $lastName
     * @param $jmbg
     * @param $pib
     * @param $rating
     * @param $description
     * @param $profilePicture
     */
    public function __construct($id, $firstName, $profilePicture, $description)
    {
        $this->id = $id;
        $this->firstName = $firstName;
        $this->profilePicture = $profilePicture;
        $this->description= $description;
    }

    /**
     * @return array
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param array $id
     */
    public function setId($id)
    {
        $this->id = $id;
    }

    /**
     * @return mixed
     */
    public function getFirstName()
    {
        return $this->firstName;
    }

    /**
     * @param mixed $firstName
     */
    public function setFirstName($firstName)
    {
        $this->firstName = $firstName;
    }


    /**
     * @return mixed
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * @param mixed $description
     */
    public function setDescription($description)
    {
        $this->description = $description;
    }

    /**
     * @return mixed
     */
    public function getProfilePicture()
    {
        return $this->profilePicture;
    }

    /**
     * @param mixed $profilePicture
     */
    public function setProfilePicture($profilePicture)
    {
        $this->profilePicture = $profilePicture;
    }
}
