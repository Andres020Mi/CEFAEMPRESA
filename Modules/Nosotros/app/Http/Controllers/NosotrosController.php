<?php

namespace Modules\Nosotros\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\App;
use App\Models\Keyword;
use Illuminate\Http\Request;

class NosotrosController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return redirect()->away('https://gestorasig.wixsite.com/senaempresa');
    
    
        $apps = App::all();
        $keyword = Keyword::where('keyword', 'nombre oficial de sena empresa')->first(); 
       
        return view('nosotros::index', compact('apps','keyword'));
      
    }

}
