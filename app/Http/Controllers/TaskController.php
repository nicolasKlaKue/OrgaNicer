<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Task;
use Auth;
use Carbon\Carbon;

class TaskController extends Controller
{
    //
    public function store(Request $request){

        $task = new Task;

        if(request('done') == 'on'){
            $done = true;
            $task -> finished_at = Carbon::now();
        }else{
            $done = false;
        }

        if(request('archive') == 'on'){
            $archive = true;
        }else{
            $archive = false;
        }

        if(request('public') == 'on'){
            $public = true;
        }else{
            $public = false;
        }
        
        $task -> title = request('title');
        $task -> description = request('description');
        $task -> priority = request('priority');
        $task -> due_at = request('date');
        $task -> archive = $archive;
        $task -> public = $public;
        $task -> done = $done;
        $task -> owner_id = Auth::user()->id;

        $task -> save();
        return back();

    }

    public function delete(Task $task){
        $task -> delete();
        return back();
    }

    public function done(Task $task){
        $task -> done = true;
        $task -> finished_at = Carbon::now();
        $task -> save();
        return back();
    }

    public function notDone(Task $task){
        $task -> done = false;
        $task -> finished_at = null;
        $task -> save();
        return back();
    }

    private function checkBoxToBool($checkBoxName){
        if(request($checkBoxName) == 'on'){
            return true;
        }else{
            return false;
        }
    }
}
