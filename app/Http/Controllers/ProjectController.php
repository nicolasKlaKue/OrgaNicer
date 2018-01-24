<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Project;
use Carbon\Carbon;
use Auth;

class ProjectController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $project = new Project;

        if(request('done') == 'on'){
            $done = true;
            $project -> finished_at = Carbon::now();
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

        $project -> title = request('title');
        $project -> description = request('description');
        $project -> due_at = request('date');
        $project -> creater_id = Auth::user()->id;
        $project -> finished_at = null;
        $project -> done = $done;
        $project -> public = $public;
        $project -> archive = $archive;
       
        $project -> save();

        $project -> users() -> attach(Auth::user()->id);
        return back();
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

    public function done(Task $task){
        $task -> done = true;
        $task -> finished_at = Carbon::now();
        $task -> save();
        return back();
    }
}
