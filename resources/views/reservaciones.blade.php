@extends('layouts.base')
@section('titulo')

@endsection

@section('contenido')
    <div>
        <div class="w-full bg-gray-100 py-0.5">
            <div class="bg-gray-20 mb-5 text-center my-16">
                <h2 id="actividad" class="mb-2 block uppercase text-gray-500 font-bold text-2xl mt-2 font-mono">
                    Estas son las actividades reservadas...
                </h2>
            </div>
        </div>


        <div class="bg-white container px-10  py-10 w-full">
                <table class="table-fixed w-full border-separate ms:border-collapse">
                    <thead >
                        <tr>
                            <th class="border border-gray-600 px-2 py-3 text-center text-white bg-gray-800">Titulo</th>
                            <th class="border border-gray-600 px-2 py-3 text-center text-white bg-gray-800">Tipo</th>
                            <th class="border border-gray-600 px-2 py-3 text-center text-white bg-gray-800">Ocupantes</th>
                            <th class="border border-gray-600 px-2 py-3 text-center text-white bg-gray-800">Fecha de reservación</th>
                        </tr>
                    </thead>
                    <tbody>
                    @foreach($reservaciones as $reservacion)
                        <tr>
                            <td class="border border-gray-600 px-2 py-3 text-center">{{$reservacion->titulo}}</td>
                            <td class="border border-gray-600 px-2 py-3 text-center">{{$reservacion->tipo}}</td>
                            <td class="border border-gray-600 px-2 py-3 text-center">{{$reservacion->ocupantes}}</td>
                            <td class="border border-gray-600 px-2 py-3 text-center">{{$reservacion->reservacion_ini}}</td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>

    </div>





@endsection
