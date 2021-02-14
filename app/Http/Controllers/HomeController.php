<?php

namespace App\Http\Controllers;
use App\Models\Project;


class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
        /*Si está logeado agregaremos esta ruta*/
        $this->middleware('soloadmin',['only'=>'index']);
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('home');
    }
    public function getUser()
    {
        return view('user');
    }

    public function getStore()
    {

        return view('project');
    }

}
