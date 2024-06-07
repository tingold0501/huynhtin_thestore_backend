<?php

namespace App\Http\Controllers;

abstract class Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        echo("Controller already created");
    }

    
}
