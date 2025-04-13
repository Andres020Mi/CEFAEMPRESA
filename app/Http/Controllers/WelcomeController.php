<?php

namespace App\Http\Controllers;

use App\Models\App;
use App\Models\Keyword;
use Illuminate\Http\Request;

class WelcomeController extends Controller
{
    public function index()
    {
        $apps = App::all();
        $keyword = Keyword::where('keyword', 'nombre oficial de sena empresa')->first(); 
       
        return view('welcome', compact('apps','keyword'));
        // O incluye en tu vista principal, por ejemplo:
        // return view('home', compact('apps'));
    }
}
