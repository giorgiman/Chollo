@extends('plantilla')

@section('cuerpo')
<h2>ID</h2>
<p>Texto</p>
<h2>Nombre</h2>
<p>Texto</p>
<div class="chollo">
<table border="2">
  <thead>
<tr>
    <th>ID</th>
    <th>Nombre</th>
    <th>Descripción</th>
    <th>Enlace</th>
    <th>Categoría</th>
    <th>Puntuación</th>
    <th>Precio</th>
    <th>Descuento</th>
    <th>Disponible</th>
    <th>Acción</th>
</tr>
</thead>
<tbody>
<tr>
    <td>{{ $chollo->id }}</td>
    <td>{{ $chollo->titulo }}</td>
    <td>{{ $chollo->descripcion }}</td>
    <td>{{ $chollo->url }}</td>
    <td>{{ $chollo->categoria }}</td>
    <td>{{ $chollo->puntuacion }}</td>
    <td>{{ $chollo->precio }}</td>
    <td>{{ $chollo->precio_descuento }}</td>
    <td>{{ $chollo->disponible }}</td>
    {{ auth()->user() -> name; }} 
    <td><form action="{{ route('chollos.eliminar', $chollo) }}" method="POST" class="d-inline">
        @method('DELETE')
        @csrf
      
        <button class="btn btn-danger btn-sm" type="submit">Eliminar</button>
      </form>

      <a href="{{ route('chollos.editar', $chollo) }}" class="btn btn-warning btn-sm editar">
        Editar
      </a>
    </td>
</tr>
</tbody>
</table>
</div>
<div class="margen"></div>
@endsection