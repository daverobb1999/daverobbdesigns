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

        return view('portfolio-item')
            ->with('project', $project);
    }




}