<?php

namespace App\Http\Controllers;

use App\Projects;
use App\Http\Controllers\Controller;

class PortfolioController extends Controller {

    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        $project = Projects::all();

        return view('home')
            ->with('project', $project);

    }



    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function show($id)
    {
        $project = Projects::findOrFail($id);

        $tags = \DB::table('project_tags')
            ->join('project', 'project.id', '=', 'project_tags.projectID')
            ->join('tags', 'tags.ID', '=', 'project_tags.tagID')
            ->select('tags.name')
            ->get();


        return view('portfolio-item')
            ->with('project', $project)
            ->with('tags',$tags);


    }




}