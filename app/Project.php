<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    protected $fillable = [
        'title', 'description', 'finished_at', 'due_at'
    ];

    //
    public function tasks(){
        return $this->hasMany('App\ProjectTask');
    }

}
