<?php

namespace App;

use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password',
    ];

    /**
     * The attributes excluded from the model's JSON form.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    public function vote(){
      return $this->hasOne('App\Vote','voter_id');
    }

    public function designEntries(){
      return $this->belongsToMany('App\DesignEntry','votes','voter_id','design_entry_id');
    }
}
