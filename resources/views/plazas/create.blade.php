<title>Creacion de plaza</title>
@extends('plazas.index')
@section('contenido2')
<form action="{{route('plazas.store')}}" method="post">
    @csrf
<div class="mb-3" style="width: 50%">
    <label for="" class="form-label">Id de la plaza</label>
    <input
        type="text"
        value="{{old('id')}}"
        class="form-control"
        name="id"
        id="id"
        aria-describedby="helpId"
        placeholder=""
    />
    <br>
    @error('id')
    <div class="alert alert-danger" role="alert">
       {{$message}}
      </div>
    @enderror
    <label for="" class="form-label">Nombre de la plaza</label>
    <input
        type="text"
        class="form-control"
        value="{{old('nombrePlaza')}}"
        name="nombrePlaza"
        id=""
        aria-describedby="helpId"
        placeholder=""
    />
    <br>
    @error('nombrePlaza')
    <div class="alert alert-danger" role="alert">
        {{$message}}
      </div>
@enderror
    
<button type="submit" class="btn btn-success">Enviar</button>
    
    
</div>

</form>
@endsection