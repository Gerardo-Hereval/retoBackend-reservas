
@extends('layouts.base')
@section('titulo')

@endsection

@section('contenido')
    <div class="md:flex w-full" >
        <div class="w-full bg-gray-100 p-7">
            <form action="{{route('busqueda')}}" method="GET">
                @csrf
                <div class="bg-gray-20 mb-5 text-center my-16">
                    <label id="actividad" class="mb-2 block uppercase text-gray-500 font-bold text-2xl mt-2 font-mono">
                        ¿Qué tipo de actividad quieres realizar?
                    </label>
                    <input id="actividad" name="actividad" type="texto" list="activities" placeholder="Por ejemplo... acutatico, terrestre, taller..."
                           class=" border p-3 rounded-lg focus:ring-gray-800 p-4 mx-auto w-9/12  my-10 @error('actividad') border-red-500 @enderror"
                    />
                    <datalist id="activities">
                        <option >Acuaticos</option>
                        <option >Terrestres</option>
                        <option >Talleres</option>
                    </datalist>
                    @error('actividad')
                    <p class="bg-red-500 text-white my-2 rounded-lg text-sm p-2 text-center"> {{$message}}</p>
                    @enderror

                    <div class="md:flex">
                        <div class="md:w-1/2 ">
                            <label id="personas" class="mb-2 block uppercase text-gray-500 font-bold mt-2 font-mono">
                                ¿Número de personas?
                            </label>
                            <input id="personas" name="personas" type="number" placeholder="1" min="1"
                                   class=" border p-3 rounded-lg focus:ring-gray-800 p-4 mx-auto w-9/12  my-10 @error('actividad') border-red-500 @enderror "
                                   value={{old('personas')}}
                            />
                            @error('personas')
                            <p class="bg-red-500 text-white my-2 rounded-lg text-sm p-2 text-center"> {{$message}}</p>
                            @enderror
                        </div>
                        <div class="md:w-1/2">
                            <label id="fecha" class="mb-2 block uppercase text-gray-500 font-bold mt-2 font-mono">
                                ¿Cúando quieres realizar la actividad?
                            </label>

                            <input id="fecha" name="fecha" type="date" min={{now()}}""
                                   class="border p-3 rounded-lg focus:ring-gray-800 p-4 mx-auto w-9/12  my-10 @error('actividad') border-red-500 @enderror"
                                   value={{old('fecha')}}
                            />
                            @error('fecha')
                            <p class="bg-red-500 text-white my-2 rounded-lg text-sm p-2 text-center"> {{$message}}</p>
                            @enderror
                        </div>
                    </div>

                </div>
                <div class="text-center">
                    <button class="transform hover:scale-110 motion-reduce:transform-none transition-ease-in duration-700 bg-gray-800 text-white hover:bg-gray-700
                    rounded-lg py-2 px-4 mx-4 my-10 ">
                        Buscar
                    </button>
                </div>
            </form>
        </div>
    </div>

@endsection


