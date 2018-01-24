<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    protected $fillable = [
        'title', 'description', 'finished_at', 'due_at'
    ];

    protected $dates = [
        'due_at'
    ];

    //
    public function tasks(){
        return $this->hasMany('App\ProjectTask');
    }

    public function users(){
        return $this -> belongsToMany('App\User');
    }

    public function path(){
        return '/projects/' . $this -> id;
    }

    public function done(){
        return '/projects/' . $this -> id . '/done';
    }

}
