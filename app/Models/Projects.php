<?php

namespace App;

use Illuminate\Database\Eloquent\Model as Eloquent;

class Projects extends Eloquent
{
    protected $table = 'project';
    public $timestamps = false;
}