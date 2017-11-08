<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Support\Facades\DB;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password','verified','email_token','username','jmbg',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    public function verified()
    {
        $this->verified = 1;
        $this->email_token = null;
        $this->save();
    }

    public function isMod() {
        if($this->id){
            $usr=$this->id;
            $dali=0;

            $user_id = DB::table('moderator')->where('id',$usr )->first();
            if(isset($user_id)) {
                if ($user_id->id == $usr) $dali = 1;
            }
            if ($dali) {

                return 1;

            }
        }
        return 0;
    }

}
