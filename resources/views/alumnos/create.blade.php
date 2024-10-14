
@extends('alumnos.index')
@section('contenido2')

    <center>
      @if (Route::currentRouteName() == 'alumnos.create')
      <!-- Mostrar contenido específico para la ruta .create -->
      <form action="{{route('alumnos.store')}}" method="post" style="width: 26rem;">
  @elseif (Route::currentRouteName() == 'alumnos.edit')
      <!-- Mostrar contenido específico para la ruta .edit -->
      <form action="{{route('alumnos.update',$alumno)}}" method="post" style="width: 26rem;">
        @method('PUT')
  @endif
    
        @csrf
        @include('alumnos.frml')
</form>
   </center>
    
@endsection