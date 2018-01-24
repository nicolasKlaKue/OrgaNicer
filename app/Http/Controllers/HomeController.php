<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Task;
use App\Project;
use App\User;
use Carbon\Carbon;
use Auth;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
        Carbon::setLocale('de');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $tasks = Task::latest()->where('owner_id', Auth::user()->id)->where('done', "false")->orderBy('created_at', 'DESC')->get();

        
        $tasks1 = $tasks->filter(function($value){
            $now = Carbon::now();
            if($now -> diffInDays($value->due_at, false)<1){
                return true;
            }
            return false;
        });
        $tasks2 = $tasks->filter(function($value){
            $now = Carbon::now();
            if($now -> diffInWeeks($value->due_at)<1 && $now -> diffInDays($value->due_at)>=1){
                return true;
            }
            return false;
        });
        $tasks3 = $tasks->filter(function($value){
            $now = Carbon::now();
            if($now -> diffInMonths($value->due_at)<1 && $now -> diffInWeeks($value->due_at)>=1){
                return true;
            }
            return false;
        });
        $tasks4 = $tasks->filter(function($value){
            $now = Carbon::now();
            if($now -> diffInMonths($value->due_at)<7 && $now -> diffInMonths($value->due_at)>=1){
                return true;
            }
            return false;
        });
        $tasks5 = $tasks->filter(function($value){
            $now = Carbon::now();
            if($now -> diffInMonths($value->due_at)>=7){
                return true;
            }
            return false;
        });

        return view('home', compact(['tasks1','tasks2','tasks3','tasks4','tasks5']));
    }

    public function doneTasks(){
        $tasks = Task::latest()->where('owner_id', Auth::user()->id)->get();

        $doneTasks = $tasks->filter(function($value){
            return $value->done == 1;
        });
        $tasks1 = $doneTasks -> filter(function($value){
            return $value->priority == 1;
        });
        $tasks2 = $doneTasks->filter(function($value){
            return $value->priority == 2;
        });
        $tasks3 = $doneTasks->filter(function($value){
            return $value->priority == 3;
        });
        $tasks4 = $doneTasks->filter(function($value){
            return $value->priority == 4;
        });
        $tasks5 = $doneTasks->filter(function($value){
            return $value->priority == 5;
        });

        return view('done', compact(['tasks1','tasks2','tasks3','tasks4','tasks5']));
    }

    public function projects(){
        $projects = Project::latest() -> where('creater_id', Auth::user()->id)->get();
        return view('projects', compact('projects'));
    }
}
