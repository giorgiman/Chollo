@section('cuerpo')
<div class="titulo">
<h1>@yield('titulo')</h1>
</div>
<div class="chollo">
<table>
    <thead>
        <tr>
            <th>Id</th>
            <th>Título</th>
            <th>Descripción</th>
            <th>Enlace</th>
            <th>Categoría</th>
            <th>Puntuación</th>
            <th>Precio</th>
            <th>Descuento</th>
            <th>Disponibilidad</th>
            <th>Acción</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($chollos as $chollo)
        <tr onclick="document.location = '{{ route('chollos.detalle', $chollo->id) }}';">
            <td>{{ $chollo->id }}</td>
            <td>{{ $chollo->titulo }}</td>
            <td>{{ $chollo->descripcion }}</td>
            <td>{{ $chollo->url }}</td>
            <td>{{ $chollo->categoria }}</td>
            <td>{{ $chollo->puntuacion }}</td>
            <td>{{ $chollo->precio }}</td>
            <td>{{ $chollo->precio_descuento }}</td>
            <td>{{ $chollo->disponible }}</td>
            <td>
            <form action="{{ route('chollos.eliminar', $chollo->id) }}" method="POST" class="d-inline">
                @method('DELETE')
                @csrf
              
                <button class="btn btn-danger btn-sm" type="submit">Eliminar</button>
              </form>

              <a href="{{ route('chollos.editar', $chollo->id) }}" class="btn btn-warning btn-sm editar">
                Editar
              </a>

            </td>
        </tr>
        @endforeach
    </tbody>
</table>
</div>