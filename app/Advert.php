<?php

use Illuminate\Database\Eloquent\Model;

class Advert extends Model {

    private $id;
    private $title;
    private $description;
    private $image;
    private $start_t;
    private $end_t;

    public function __construct($title, $description, $image, $start_t, $end_t, $id)
    {
        $this->title = $title;
        $this->description = $description;
        $this->image = $image;
        $this->start_t = $start_t;
        $this->end_t = $end_t;
        $this->id = $id;
    }

    /**
     * @return mixed
     */
    public function getTitle()
    {
        return $this->title;
    }

    /**
     * @param mixed $title
     * @return Advert
     */
    public function setTitle($title)
    {
        $this->title = $title;
        return $this;
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
     * @return Advert
     */
    public function setDescription($description)
    {
        $this->description = $description;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getImage()
    {
        return $this->image;
    }

    /**
     * @param mixed $image
     * @return Advert
     */
    public function setImage($image)
    {
        $this->image = $image;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getStartT()
    {
        return $this->start_t;
    }

    /**
     * @param mixed $start_t
     * @return Advert
     */
    public function setStartT($start_t)
    {
        $this->start_t = $start_t;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getEndT()
    {
        return $this->end_t;
    }

    /**
     * @param mixed $end_t
     * @return Advert
     */
    public function setEndT($end_t)
    {
        $this->end_t = $end_t;
        return $this;
    }


    public function getId() {
        return $this->id;
    }

}