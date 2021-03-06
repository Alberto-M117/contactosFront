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
                            <li>Electrificaci??n en media tensi??n fraccionamiento playa azul </li>
                            <li>Proyecto ejecutivo de fraccionamiento el encuentro. Media tensi??n, baja tensi??n y
                                alumbrado p??blico. </li>
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
                            <li> Tr??mites, proyecto y construcci??n de Tao Residencial</li>
                            <li> Tramites, proyecto y construcci??n de tao Ocean</li>
                            <li> Tramites, proyecto y construcci??n Tao Tulum Az</li>
                            <li> Tramites y construcci??n Tao Sirenis La Luna</li>
                            <li> Tramites, proyecto y construcci??n Playa 26</li>
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
                            <li> Proyecto, tramites y gestiones ante CFE para servicios en media tensi??n y servicios de
                                asesor??a. </li>
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
                            <li> Construcci??n de red provisional en media y baja tensi??n para circuitos de 15 kv. </li>
                            <li> Construcci??n de mejoras en red exterior de CFE para circuitos de 15 y 35 kv,
                                instalaciones de Telmex y Cablemas. </li>
                            <li> Construcci??n de obra espec??fica, re-calibraci??n de 3.7 km de red a??rea 3f-4h, 35 kv.
                                Construcci??n de red de media tensi??n interior con circuitos en 35 kv </li>
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
                            <li> Remodelaci??n con equipos de seccionamiento 15 kv en subestaci??n principal </li>
                            <li> Construcci??n de mejoras de 1.7 km de l??nea a??rea a subterr??nea en media tensi??n para
                                circuito de 15 kv, instalaciones de Telmex y Cablemas. </li>
                            <li>Remodelaci??n de 217 habitaciones para sistemas el??ctricos y especiales. .</li>
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
                            DE C???. V </h5>
                    </div>
                    <div>
                        <ul class="list-disc text-black mt-2 text-xl">
                            <li> Tramites, proyecto y construcci??n Paramar Terra </li>
                            <li> Tramites, proyecto y construcci??n Paramar Indigo </li>
                            <li> Tramites, proyecto y construcci??n Paramar Jade </li>
                            <li> Tramites, proyecto y construcci??n Paramar Viva </li>
                            <li> Tramites, proyecto y construcci??n L Condos </li>
                            <li> Tramites, proyecto y construcci??n Volta </li>
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
                            <li> Tramites, proyecto y construcci??n Marea 34 </li>
                            <li> Tramites, proyecto y construcci??n Solea </li>
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