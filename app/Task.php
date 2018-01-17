<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Task extends Model
{
    //
    protected $fillable = [
        'title', 'body', 'archive','public', 'done', 'priority', 'finished_at', 'due_at'
    ];

    protected $dates = [
        'created_at', 'updated_at', 'finished_at', 'due_at'
    ];

    public function user(){
        return $this->belongsTo('App\User');
    }
    
    public function path(){
        return '/tasks/' . $this -> id;
    }

    public function done(){
        return '/tasks/' . $this -> id . '/done';
    }
}
