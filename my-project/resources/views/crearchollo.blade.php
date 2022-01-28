@extends('plantilla')

@section('cuerpo')
<div class="crearchollo">
<h2>Agrega un chollo</h2>
<form action="{{ route('chollos.crear') }}" method="POST">
    @csrf {{-- Cláusula para obtener un token de formulario al enviarlo --}}
    
    <input type="text" required name="titulo" placeholder="Nombre del chollo" class="form-control mb-2" autofocus>
    <textarea type="text" required name="descripcion" placeholder="Descripción del chollo" class="form-control mb-2"></textarea>
    <input type="text" required name="url" placeholder="Enlace del chollo" class="form-control mb-2">
    <input type="text" required name="categoria" placeholder="Categoría" class="form-control mb-2">
    <input type="number" required name="puntuacion" placeholder="Puntuación del chollo" class="form-control mb-2">
    <input type="number" required name="precio" placeholder="El precio" class="form-control mb-2">
    <!--Agregar default 0 luego-->
    <input type="number" name="precio_descuento" placeholder="El descuento" class="form-control mb-2">
    <input type="checkbox" name="disponible" value="1">
    <label for="disponible"> Está disponible</label><br>
    <button class="btn btn-primary btn-block boton" type="submit">
        Crear nuevo chollo
    </button>
</form>
</div>
@endsection