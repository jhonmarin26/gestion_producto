<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CalidadRevistaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        
        return view("admin.configuracion.calidad_revista.index");
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view("admin.configuracion.calidad_revista.create");
    }
}
