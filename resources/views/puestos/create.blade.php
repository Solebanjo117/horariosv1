@extends('plantillas.plantilla1')
@section('contenido')
<form action="{{route('puestos.store')}}" method="post">
    @csrf
    <div class="mb-3">
        <label for="formGroupExampleInput" class="form-label">IDPUESTO</label>
        <input type="text" class="form-control" id="formGroupExampleInput" name="idPuesto" placeholder="id de puesto">
      </div>

    <div class="mb-3">
        <label for="formGroupExampleInput" class="form-label">Nombre</label>
        <input type="text" class="form-control" id="formGroupExampleInput" name="nombre" placeholder="Nombre de puesto">
      </div>
      <div class="mb-3">
        <label for="formGroupExampleInput2" class="form-label">Tipo</label>
        <input type="text" class="form-control" id="formGroupExampleInput2" name="tipo" placeholder="Tipo de puesto">

      </div>
      <button class="btn btn-danger" type="submit">Grabar</button>
</form>
@endsection