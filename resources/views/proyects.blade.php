@extends('layouts.plantilla')

@section('title', 'Proyectos')

@section('content')


<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss/dist/tailwind.min.css" rel="stylesheet">
    <title>Inicio</title>
</head>

<body>

    {{-- inicia Titulo con imagen de fondo   --}}

    <section class="bg-gray-800 pg-lib-item relative text-white">
        <img class="absolute h-full inset-0 object-center object-cover w-full opacity-60 "
            src="{{ url('images/sliderproyectos.png') }}" alt="fondo seccion" />

        <div class="container mx-auto px-4 py-40 relative">
            <div class="flex flex-wrap -mx-4">
                <div class="mx-auto px-4 text-center w-full lg:w-8/12">

                    <h1 class="font-semibold mb-4 text-6xl"> Obras y Proyectos</h1>
                </div>
            </div>
        </div>
    </section>

    {{-- Termina Titulo con imagen de fondo   --}}

    {{-- inicia texto con imagenes    --}}

    <section class="bg-white pg-lib-item py-20 text-gray-500">
        <div data-pg-class-style="container"
            class="container mx-auto px-4 relative pg-lib-item  lg:text-left text-center"
            data-pg-class-style-inline=" lg:text-left text-center">


            <div class="flex flex-wrap -mx-4  items-center" data-pg-class-style="column_parent"
                data-pg-class-style-inline=" items-center">
                <div class="p-4 w-full lg:order-2 lg:w-6/12">
                    <img class="text-black" src="images/{{$datos->url_img}}" alt="imagen-ilustrativa">
                </div>
                <div class="p-4 w-full lg:order-1 lg:w-6/12">
                    <div class="py-4">
                        <h5 class="mt-2 text-3xl leading-8  tracking-tight text-blue-900 sm:text-4xl">{{$datos->nombre}}
                        </h5>
                    </div>
                    <div>

                        <ul class="list-disc text-black mt-2 text-xl">
                            <li>{{$datos->servicio1}}</li>
                            <li>{{$datos->servicio2}}</li>
                            <li>{{$datos->servicio3}}</li>
                            <li>{{$datos->servicio4}}</li>
                        </ul>
                    </div>
                </div>
            </div>

            <div class="flex flex-wrap -mx-4  items-center" data-pg-class-style="column_parent"
                data-pg-class-style-inline=" items-center">
                <div class="p-4 w-full lg:w-6/12">
                    <img class="text-black" src="{{ url('images/imagen2.jpg') }}" alt="imagen-ilustrativa">
                </div>
                <div class="p-4 w-full lg:w-6/12">
                    <div class="py-4">
                        <h5 class="mt-2 text-3xl leading-8  tracking-tight text-blue-900 sm:text-4xl"> INMOBILIARIA
                            CAME, S. A. DE C.V </h5>
                    </div>
                    <div class="text-xl">
                        <ul class="list-disc text-black mt-2 text-xl">
                            <li>Electrificación en media tensión fraccionamiento playa azul </li>
                            <li>Proyecto ejecutivo de fraccionamiento el encuentro. Media tensión, baja tensión y
                                alumbrado público. </li>
                        </ul>
                    </div>
                </div>
            </div>


            <div class="flex flex-wrap -mx-4  items-center" data-pg-class-style="column_parent"
                data-pg-class-style-inline=" items-center">
                <div class="p-4 w-full lg:order-2 lg:w-6/12">
                    <img class="text-black" src="{{ url('images/imagen1.jpg') }}" alt="imagen-ilustrativa">
                </div>
                <div class="p-4 w-full lg:order-1 lg:w-6/12">
                    <div class="py-4">
                        <h5 class="mt-2 text-3xl leading-8  tracking-tight text-blue-900 sm:text-4xl"> CONDO HOTEL GBP,
                            S. A. DE C. V </h5>
                    </div>
                    <div>
                        <ul class="list-disc text-black mt-2 text-xl">
                            <li> Trámites, proyecto y construcción de Tao Residencial</li>
                            <li> Tramites, proyecto y construcción de tao Ocean</li>
                            <li> Tramites, proyecto y construcción Tao Tulum Az</li>
                            <li> Tramites y construcción Tao Sirenis La Luna</li>
                            <li> Tramites, proyecto y construcción Playa 26</li>
                        </ul>
                    </div>
                </div>
            </div>

            <div class="flex flex-wrap -mx-4  items-center" data-pg-class-style="column_parent"
                data-pg-class-style-inline=" items-center">
                <div class="p-4 w-full lg:w-6/12">
                    <img class="text-black" src="{{ url('images/imagen2.jpg') }}" alt="imagen-ilustrativa">
                </div>
                <div class="p-4 w-full lg:w-6/12">
                    <div class="py-4">
                        <h5 class="mt-2 text-3xl leading-8  tracking-tight text-blue-900 sm:text-4xl"> PARAISO AKUMAL
                            RESORT, S. A. DE C. V. </h5>
                    </div>
                    <div>
                        <ul class="list-disc text-black mt-2 text-xl">
                            <li> Proyecto, tramites y gestiones ante CFE para servicios en media tensión y servicios de
                                asesoría. </li>
                        </ul>
                    </div>
                </div>
            </div>

            <div class="flex flex-wrap -mx-4  items-center" data-pg-class-style="column_parent"
                data-pg-class-style-inline=" items-center">
                <div class="p-4 w-full lg:order-2 lg:w-6/12">
                    <img class="text-black" src="{{ url('images/imagen1.jpg') }}" alt="imagen-ilustrativa">
                </div>
                <div class="p-4 w-full lg:order-1 lg:w-6/12">
                    <div class="py-4">
                        <h5 class="mt-2 text-3xl leading-8  tracking-tight text-blue-900 sm:text-4xl"> PARAISO AKUMAL
                            RESORT, S. A. DE C. V. </h5>
                    </div>
                    <div>
                        <ul class="list-disc text-black mt-2 text-xl">
                            <li> Construcción de red provisional en media y baja tensión para circuitos de 15 kv. </li>
                            <li> Construcción de mejoras en red exterior de CFE para circuitos de 15 y 35 kv,
                                instalaciones de Telmex y Cablemas. </li>
                            <li> Construcción de obra específica, re-calibración de 3.7 km de red aérea 3f-4h, 35 kv.
                                Construcción de red de media tensión interior con circuitos en 35 kv </li>
                        </ul>
                    </div>
                </div>
            </div>

            <div class="flex flex-wrap -mx-4  items-center" data-pg-class-style="column_parent"
                data-pg-class-style-inline=" items-center">
                <div class="p-4 w-full lg:w-6/12">
                    <img class="text-black" src="{{ url('images/imagen2.jpg') }}" alt="imagen-ilustrativa">
                </div>
                <div class="p-4 w-full lg:w-6/12">
                    <div class="py-4">
                        <h5 class="mt-2 text-3xl leading-8  tracking-tight text-blue-900 sm:text-4xl"> PLAYA MAROMA
                            INMUEBLES, S. A. DE C. V. </h5>
                    </div>
                    <div>
                        <ul class="list-disc text-black mt-2 text-xl">
                            <li> Remodelación con equipos de seccionamiento 15 kv en subestación principal </li>
                            <li> Construcción de mejoras de 1.7 km de línea aérea a subterránea en media tensión para
                                circuito de 15 kv, instalaciones de Telmex y Cablemas. </li>
                            <li>Remodelación de 217 habitaciones para sistemas eléctricos y especiales. .</li>
                        </ul>
                    </div>
                </div>
            </div>

            <div class="flex flex-wrap -mx-4  items-center" data-pg-class-style="column_parent"
                data-pg-class-style-inline=" items-center">
                <div class="p-4 w-full lg:order-2 lg:w-6/12">
                    <img class="text-black" src="{{ url('images/imagen1.jpg') }}" alt="imagen-ilustrativa">
                </div>
                <div class="p-4 w-full lg:order-1 lg:w-6/12">
                    <div class="py-4">
                        <h5 class="mt-2 text-3xl leading-8  tracking-tight text-blue-900 sm:text-4xl"> GRUPO GW, S. A.
                            DE C​. V </h5>
                    </div>
                    <div>
                        <ul class="list-disc text-black mt-2 text-xl">
                            <li> Tramites, proyecto y construcción Paramar Terra </li>
                            <li> Tramites, proyecto y construcción Paramar Indigo </li>
                            <li> Tramites, proyecto y construcción Paramar Jade </li>
                            <li> Tramites, proyecto y construcción Paramar Viva </li>
                            <li> Tramites, proyecto y construcción L Condos </li>
                            <li> Tramites, proyecto y construcción Volta </li>
                        </ul>
                    </div>
                </div>
            </div>

            <div class="flex flex-wrap -mx-4  items-center" data-pg-class-style="column_parent"
                data-pg-class-style-inline=" items-center">
                <div class="p-4 w-full lg:w-6/12">
                    <img class="text-black" src="{{ url('images/imagen2.jpg') }}" alt="imagen-ilustrativa">
                </div>
                <div class="p-4 w-full lg:w-6/12">
                    <div class="py-4">
                        <h5 class="mt-2 text-3xl leading-8  tracking-tight text-blue-900 sm:text-4xl"> GRUPO KAUA S.A.
                            DE C.V. </h5>
                    </div>
                    <div>
                        <ul class="list-disc text-black mt-2 text-xl">
                            <li> Tramites, proyecto y construcción Marea 34 </li>
                            <li> Tramites, proyecto y construcción Solea </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{-- Termina texto con imagenes    --}}

</body>

</html>

@endsection