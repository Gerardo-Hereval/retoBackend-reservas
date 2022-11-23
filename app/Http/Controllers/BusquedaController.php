<?php

namespace App\Http\Controllers;

use App\Models\activity;
use App\Models\reservation;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

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

        return redirect('reservaciones');
    }

    public function show(){
        //$reservaciones = reservation::where('reservacion_ini','>',now())->get();
        $reservaciones = DB::table('view_reservations')->where('reservacion_ini','>=',now())->orderBy('reservacion_ini','asc')->get();
        return view('reservaciones',['reservaciones'=>$reservaciones]);
    }

    public function create(){
        $actividad= random_int(1,5);
        $ocupantes= random_int(1,8);
        $reservacion = reservation::create ([
            'id_activity'=>$actividad,
            'ocupantes'=>$ocupantes,
            'reservacion_ini'=>now(),
            'reservacion_fin'=> now()
        ]);

        return redirect('reservaciones');
    }



}
