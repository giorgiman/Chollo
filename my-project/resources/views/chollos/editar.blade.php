@extends('plantilla')

@section('cuerpo')
<div class="crearchollo">
<h2>Editando el chollo {{ $chollo -> id }}</h2>

@if (session('mensaje'))
  <div class="alert alert-success">{{ session('mensaje')}}</div>
@endif

<form action="{{ route('chollos.actualizar', $chollo -> id) }}" method="POST">
  @method('PUT') {{-- Necesitamos cambiar al método PUT para editar --}}
  @csrf {{-- Cláusula para obtener un token de formulario al enviarlo --}}

  @error('titulo')
      <div class="alert alert-danger">
          El título es obligatorio
      </div>
  @enderror

  @error('descripcion')
      <div class="alert alert-danger">
          La descripción es obligatoria
      </div>
  @enderror

  @error('url')
      <div class="alert alert-danger">
          El enlace es obligatorio
      </div>
  @enderror

  @error('categoria')
        <div class="alert alert-danger">
            La categoría es obligatoria
        </div>
  @enderror

  @error('puntuacion')
        <div class="alert alert-danger">
            La puntuación es obligatoria
        </div>
  @enderror

  @error('precio')
        <div class="alert alert-danger">
            El precio es obligatorio
        </div>
  @enderror

  @error('precio_descuento')
        <div class="alert alert-danger">
            El precio de descuento es obligatorio
        </div>
  @enderror

  @error('disponible')
        <div class="alert alert-danger">
            Tienes que marcar que sigue disponible, si no no sirve el chollo :D
        </div>
  @enderror

  <input 
  type="text" 
  required name="titulo" 
  placeholder="Nombre del chollo" 
  class="form-control mb-2" 
  value="{{ $chollo -> titulo }}"
  autofocus
  >      

  <input 
   type="text"
   required name="descripcion" 
   placeholder="Descripción del chollo" 
   class="form-control mb-2"
   value="{{ $chollo -> descripcion }}"
   >

   <input 
   type="text" 
   required name="url" 
   placeholder="Enlace del chollo" 
   class="form-control mb-2"
   value="{{ $chollo -> url }}"
   >

   <input 
   type="text" 
   required name="categoria" 
   placeholder="Categoría" 
   class="form-control mb-2"
   value="{{ $chollo -> categoria }}"
   >
   
   <input 
   type="number" 
   required name="puntuacion" 
   placeholder="Puntuación del chollo" 
   class="form-control mb-2"
   value="{{ $chollo -> puntuacion }}"
   >

   <input 
   type="number" 
   required name="precio" 
   placeholder="El precio" 
   class="form-control mb-2"
   value="{{ $chollo -> precio }}"
   >

   <input 
   type="number" 
   name="precio_descuento" 
   placeholder="El descuento" 
   class="form-control mb-2"
   value="{{ $chollo -> precio_descuento }}"
   >

   <input 
   type="checkbox" 
   name="disponible" 
   value="{{ $chollo -> disponible }}"
   >
   <label for="disponible"> Está disponible</label>

  <button class="btn btn-primary btn-block" type="submit">Guardar cambios</button>
</form>
</div>
@endsection