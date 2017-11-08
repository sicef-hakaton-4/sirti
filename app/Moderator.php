<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Moderator extends Model
{
    protected $id;
    protected $nick;
    protected $cats;

    public function __construct($p_id, $p_nick, $p_cats) {
        $this->id = $p_id;
        $this->nick = $p_nick;
        $this->cats = $p_cats;
    }

    public function get_id() {
        return $this->id;
    }

    public function set_id($p_id) {
        $this->id = $p_id;
    }

    public function get_nick() {
        return $this->nick;
    }

    public function set_nick($p_nick) {
        return $this->nick = $p_nick;
    }

    public function get_cats() {
        return $this->cats;
    }

    public function add_cats($p_cats) {
        $this->cats = $p_cats;
    }

}
