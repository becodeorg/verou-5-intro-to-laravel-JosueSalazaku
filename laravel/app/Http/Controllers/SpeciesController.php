<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SpeciesController extends Controller
{
    public function index()
    {
        // Do stuff here ...

        // Returning the "welcome.blade.php" file as a view.
        return view("species");
        
    }
}
