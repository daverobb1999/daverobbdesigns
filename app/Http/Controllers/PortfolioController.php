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
        $projects = Projects::all();

        return view('Projects.index', ['projects' => $projects]);
    }



    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function show($id)
    {
        // get the nerd
        $projects = Projects::show($id);

        return view('Projects.show', ['projects' => $projects]);
    }




}