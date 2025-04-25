<?php

namespace Modules\Analisis\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\App;
use App\Models\Keyword;
use Illuminate\Http\Request;

class AnalisisController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {

        $apps = App::all();
        $keyword = Keyword::where('keyword', 'nombre oficial de sena empresa')->first(); 
       
        return view('analisis::index', compact('apps','keyword'));
        
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('analisis::create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request) {}

    /**
     * Show the specified resource.
     */
    public function show($id)
    {
        return view('analisis::show');
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        return view('analisis::edit');
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id) {}

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id) {}
}
