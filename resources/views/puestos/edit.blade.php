@extends('plantillas.plantilla1')
@section('contenido')
<form action="{{route('puestos.update',$registro)}}" method="post">
    @csrf
    @method('PUT')
    <div class="mb-3">
        <label for="formGroupExampleInput" class="form-label">IDPUESTO</label>
        <input type="text" class="form-control" readonly value="{{$registro->idPuesto}}" id="formGroupExampleInput" name="idPuesto" placeholder="id de puesto">
      </div>

    <div class="mb-3">
        <label for="formGroupExampleInput" class="form-label">Nombre</label>
        <input type="text" class="form-control" value="{{$registro->nombre}}" id="formGroupExampleInput" name="nombre" placeholder="Nombre de puesto">
      </div>
      <div class="mb-3">
        <label for="formGroupExampleInput2" class="form-label">Tipo</label>
        <input type="text" class="form-control" value="{{$registro->tipo}}" id="formGroupExampleInput2" name="tipo" placeholder="Tipo de puesto">

      </div>
      <button class="btn btn-danger" type="submit">Grabar</button>
</form>
@endsection