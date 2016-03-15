<?php

namespace App;

use Illuminate\Database\Eloquent\Model as Eloquent;

class Projects extends Eloquent
{
    protected $table = 'project';
    public $timestamps = false;


    protected $fillable = [
        'name',
        'url_to_image',
        'description',
        'short_description',
        'url'
    ];

}