@extends('plantilla')

@section('cuerpo')
    @section('titulo')
        Chollos
    @endsection
        @include('chollos/tabla')

        <div class="paginacion">

        <!--Paginación por defecto no siempre sale todo-->
        {{-- $chollos->links() --}}
    
            {{$chollos->links()}}
        </div>

@endsection



