<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Child extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['name', 'lastname', 'dateBorn', 'users_tutor_id', 'users_professor_id'];

    public function records(){
        return $this->hasMany('App\Record', 'child_id');
    }
}
