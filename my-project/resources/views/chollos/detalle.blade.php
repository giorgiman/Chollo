@extends('plantilla')

@section('cuerpo')
<div class="chollo">
<table border="2">
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
</table>
</div>
@endsection