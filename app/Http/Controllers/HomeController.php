<?php

namespace App\Http\Controllers;
use App\Models\Project;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


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
        $mostrar_datos = DB::table('projects')->get();
       // var_dump($mostrar_datos);
      //  return view('home', compact('mostrar_datos'));
        return view('home')->with('mostrar_datos',$mostrar_datos);
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
