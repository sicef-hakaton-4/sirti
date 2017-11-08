<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Kategorija extends Model
{
    protected $id;
    protected $name;
    protected $mods;
    protected $ads;

    public function __construct($p_id, $p_name, $p_mods, $p_ads) {
        $this->id = $p_id;
        $this->name = $p_name;
        $this->mods = $p_mods;
        $this->ads = $p_ads;
    }

    public function get_id() {
        return $this->id;
    }

    public function set_id($p_id) {
        $this->id = $p_id;
    }

    public function get_name() {
        return $this->name;
    }

    public function set_name($p_name) {
        return $this->name = $p_name;
    }

    public function get_mods() {
        return $this->mods;
    }

    public function set_mods($p_mods) {
        $this->mods = $p_mods;
    }

    public function get_ads() {
        return $this->ads;
    }

    public function set_ads($p_ads) {
        $this->mods = $p_ads;
    }

}
