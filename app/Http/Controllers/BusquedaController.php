<?php

namespace App\Http\Controllers;

use App\Models\activity;
use App\Models\reservation;
use Illuminate\Http\Request;
use Illuminate\Support\Arr;

class BusquedaController extends Controller
{
    public function index (Request $request) {
        //observar que tengamos respuesta del formulario
        //validacion
        $this->validate($request,[
            'actividad'=> 'required',
            'personas'=>'required|',
            'fecha'=>'required'
        ]);

        $busqueda = activity::where('tipo',$request->actividad)
            ->where('status','activo')->get();


        $reservacion=$request;
        //$reservacion= Arr::add($reservacion,'id_activity',$busqueda->id);

        return view('busqueda',[
            'busquedas'=>$busqueda,
            'reservacion'=>$reservacion

        ]);
    }

    public function store($id,$reservacion,$personas ){
        $reservacion = reservation::create([
                'id_activity'=>$id,
                'ocupantes'=>$personas,
                'reservacion_ini'=>$reservacion,
                'reservacion_fin'=>$reservacion
            ]);

        return redirect('/');
    }

}
