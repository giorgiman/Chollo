@extends('plantilla')


@section('cuerpo')
<div class="inicio">
<h1>Bienvenido en CholloGiorgi.com</h1>
<a href="{{ route('chollos') }}"><img src="{{ asset('assets/img/buscachollo.png') }}" alt=""></a>

</div>
@endsection

<!--
id
$table->string('titulo');
$table->text('descripcion');
$table->string('url');
$table->string('categoria');
$table->integer('puntuacion');
$table->float('precio', 8, 2);
$table->float('precio_descuento', 8, 2);
$table->boolean('disponible');
-->

