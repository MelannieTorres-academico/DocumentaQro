
@extends('layouts.app')

<link rel="stylesheet" href="/css/sys.css">


@section('content')


    @if (Auth::user()->can('find-datasheet'))
    <section class="block ">
    <div class="products_top_text color_a"> <a href='/filtros'><h1 class="axis-el white">Buscar Peliculas</h1></a></div>
    </section>
    @endif



 @if (Auth::user()->can('admin-datasheets'))

    <section class="block">
        <div class="products_top_text color_b"><a href='/datasheet'><h1 class="axis-el white">Administrar Fichas Técnicas</h1></a></div>
    </section>
    @endif


    @if (Auth::user()->can('admin-events'))

    <section class="block ">
    <div class="products_top_text color_c"><a href="/evento"><h1 class="axis-el white">Administrar Eventos</h1></a></div>
    </section>
    @endif

    @if (Auth::user()->can('admin-events'))
    <section class="block ">
    <div class="products_top_text color_d"><a href="/funciones"><h1 class="axis-el white">Administrar Funciones</h1></a></div>
    </section>
    @endif


      @if (Auth::user()->can('admin-sede'))
    <section class="block ">
    <div class="products_top_text color_a"><a href='/sedes'><h1 class="axis-el white">Administrar Sede</h1></a></div>
    </section>
    @endif


    @if (Auth::user()->can('admin-slider'))
    <section class="block ">

        <div class="products_top_text color_b"><a href='/slider'><h1 class="axis-el white">Administrar Slider</h1></a></div>

    </section>
    @endif



    @if (Auth::user()->can('admin-programas'))
    <section class="block ">
    <div class="products_top_text color_c"><a href="/programas"><h1 class="axis-el white">Administrar Programas</h1></a></div>
    </section>
    @endif


    @if (Auth::user()->can('admin-sponsors'))
    <section class="block ">
    <div class="products_top_text color_d"><a href="/patrocinadores"><h1 class="axis-el white">Administrar Patrocinadores</h1></a></div>
    </section>
    @endif

        @if (Auth::user()->can('super_admin'))
    <section class="block ">
        <div class="products_top_text color_a"><a href='/root'><h1 class="axis-el white">Editar Cuenta Super Usuario</h1></a></div>
    </section>
     @endif


    @if (Auth::user()->can('admin-users'))
    <section class="block ">
        <div class="products_top_text color_b"><a href='/users'><h1 class="axis-el white">Administrar Usuarios</h1></a></div>
    </section>
    @endif

    <!-- sysPane 1 -->
    @if (Auth::user()->can('admin-roles'))
    <section class="block ">

        <div class="products_top_text color_c"><a href='/roles'><h1 class="axis-el white">Administrar Roles</h1></a></div>

    </section>
    @endif


  @endsection
