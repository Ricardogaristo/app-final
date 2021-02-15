<?php


namespace App\Http\Controllers;

use App\Models\Project;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;

class PagesController extends Controller
{
    public function create(){
        return view('addperson');

    }
    public function store(Request $request){


        $project = new Project();

        $project->nombre = $request->get('nombre');
        $project->apellido = $request->get('apellido');
        $project->localidad = $request->get('localidad');
        $project->comentario = $request->get('comentario');

        $project->save();

        return view('admin/addperson');
    }
}
