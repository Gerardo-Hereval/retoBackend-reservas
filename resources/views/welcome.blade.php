
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

            <div>

                <div class="pt-6">
                    <h2 id="actividad" class="mb-2 block uppercase text-gray-500 font-bold text-2xl mt-2 font-mono text-center">
                        Actividad sugerida...

                    </h2>

                    <!-- Image gallery -->
                    <div class="mx-auto mt-6 max-w-2xl sm:px-6 lg:grid lg:max-w-7xl lg:grid-cols-3 lg:gap-x-8 lg:px-8 md:flex w-full justify-center">
                        <div>

                        </div>

                        <div class="aspect-w-3 aspect-h-4 hidden overflow-hidden rounded-lg lg:block justify-center">
{{--                            <img src="{{asset('uploads').'/'.$sugerencia->img}}" width="50" height="50" alt="{{$sugerencia->titulo}}" class="h-full w-full object-cover object-center">--}}
                        </div>
                    </div>

                    <!-- Product info -->
                    <div class="mx-auto max-w-2xl px-4 pt-10 pb-16 sm:px-6 lg:grid lg:max-w-7xl lg:grid-cols-1 lg:grid-rows-[auto,auto,1fr] lg:gap-x-8 lg:px-8 lg:pt-16 lg:pb-24">
                        <div class="lg:col-span-2 lg:border-r lg:border-gray-200 lg:pr-8">
                            <h1 class="text-2xl font-bold tracking-tight text-gray-900 sm:text-3xl">{{$sugerencia[0]->titulo}}</h1>
                            <h2 class="sr-only">Informacion</h2>
                            <p class="text-2xl tracking-tight text-gray-900">${{$sugerencia[0]->precio_unitario}} por persona</p>


                            <!-- Reviews -->
                            <div class="mt-6">
                                <h3 class="sr-only">opiniones</h3>
                                <div class="flex items-center">
                                    <div class="flex items-center">
                                        <!--
                                          Heroicon name: mini/star

                                          Active: "text-gray-900", Default: "text-gray-200"
                                        -->
                                        <svg class="text-gray-900 h-5 w-5 flex-shrink-0" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                                            <path fill-rule="evenodd" d="M10.868 2.884c-.321-.772-1.415-.772-1.736 0l-1.83 4.401-4.753.381c-.833.067-1.171 1.107-.536 1.651l3.62 3.102-1.106 4.637c-.194.813.691 1.456 1.405 1.02L10 15.591l4.069 2.485c.713.436 1.598-.207 1.404-1.02l-1.106-4.637 3.62-3.102c.635-.544.297-1.584-.536-1.65l-4.752-.382-1.831-4.401z" clip-rule="evenodd" />
                                        </svg>

                                        <!-- Heroicon name: mini/star -->
                                        <svg class="text-gray-900 h-5 w-5 flex-shrink-0" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                                            <path fill-rule="evenodd" d="M10.868 2.884c-.321-.772-1.415-.772-1.736 0l-1.83 4.401-4.753.381c-.833.067-1.171 1.107-.536 1.651l3.62 3.102-1.106 4.637c-.194.813.691 1.456 1.405 1.02L10 15.591l4.069 2.485c.713.436 1.598-.207 1.404-1.02l-1.106-4.637 3.62-3.102c.635-.544.297-1.584-.536-1.65l-4.752-.382-1.831-4.401z" clip-rule="evenodd" />
                                        </svg>

                                        <!-- Heroicon name: mini/star -->
                                        <svg class="text-gray-900 h-5 w-5 flex-shrink-0" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                                            <path fill-rule="evenodd" d="M10.868 2.884c-.321-.772-1.415-.772-1.736 0l-1.83 4.401-4.753.381c-.833.067-1.171 1.107-.536 1.651l3.62 3.102-1.106 4.637c-.194.813.691 1.456 1.405 1.02L10 15.591l4.069 2.485c.713.436 1.598-.207 1.404-1.02l-1.106-4.637 3.62-3.102c.635-.544.297-1.584-.536-1.65l-4.752-.382-1.831-4.401z" clip-rule="evenodd" />
                                        </svg>

                                        <!-- Heroicon name: mini/star -->
                                        <svg class="text-gray-900 h-5 w-5 flex-shrink-0" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                                            <path fill-rule="evenodd" d="M10.868 2.884c-.321-.772-1.415-.772-1.736 0l-1.83 4.401-4.753.381c-.833.067-1.171 1.107-.536 1.651l3.62 3.102-1.106 4.637c-.194.813.691 1.456 1.405 1.02L10 15.591l4.069 2.485c.713.436 1.598-.207 1.404-1.02l-1.106-4.637 3.62-3.102c.635-.544.297-1.584-.536-1.65l-4.752-.382-1.831-4.401z" clip-rule="evenodd" />
                                        </svg>

                                        <!-- Heroicon name: mini/star -->
                                        <svg class="text-gray-200 h-5 w-5 flex-shrink-0" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                                            <path fill-rule="evenodd" d="M10.868 2.884c-.321-.772-1.415-.772-1.736 0l-1.83 4.401-4.753.381c-.833.067-1.171 1.107-.536 1.651l3.62 3.102-1.106 4.637c-.194.813.691 1.456 1.405 1.02L10 15.591l4.069 2.485c.713.436 1.598-.207 1.404-1.02l-1.106-4.637 3.62-3.102c.635-.544.297-1.584-.536-1.65l-4.752-.382-1.831-4.401z" clip-rule="evenodd" />
                                        </svg>
                                    </div>
                                    <p class="sr-only"></p>
                                    <a href="#" class="ml-3 text-sm font-medium text-indigo-600 hover:text-indigo-500"></a>
                                </div>
                            </div>

                            <div class="space-y-4 p-4">
                                <h3 class="">Descripcion</h3>
                                <p class="text-base text-gray-900">{{$sugerencia[0]->descripcion}}</p>
                            </div>

                            <form class="mt-10" action="{{route('reservacion',[$sugerencia[0]->id,now(),'1'])}}" method="POST">
                                @csrf
                                <button type="submit" class="mt-10 flex w-full items-center justify-center rounded-md border border-transparent bg-gray-800  py-3 px-8 text-base font-medium text-white hover:bg-gray-700 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2">Comprar</button>
                            </form>
                        </div>
                    </div>
                </div>

            </div>


        </div>
    </div>



@endsection


