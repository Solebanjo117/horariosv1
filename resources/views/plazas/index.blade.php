
<title>Plazas</title>
@extends('plantillas/plantilla1')
@section('contenido')
<center>@yield('contenido2')</center>
<a type="button" 
href="{{route('plazas.create')}}" 
class="btn btn-dark">Nueva plaza</a>
<div class="table-responsive">
@if (@session('status'))
<div class="alert alert-success" role="alert">
    {{session('status')}}
</div>
@endif
{{$plazas->links()}}
<table style="text-align: center"
    class="table table-striped table-hover table-borderless table-primary align-middle"
>
    <thead class="table-light">
        <caption>
            Plazas
        </caption>
        <tr>
            <th>ID</th>
            <th>Plaza</th>
            <th>Editar</th>
            <th>Eliminar</th>
        </tr>
    </thead>
    <tbody class="table-group-divider">
       
            @foreach ($plazas as $item)
              <tr
            class="table-primary"
        >  
    <td>{{$item->id}}</td>
    <td>{{$item->nombrePlaza}}</td>
    <td><a type="button" href="#" class="btn btn-success">Editar</a></td>
    <td>
        <form action="{{route('plazas.destroy',$item)}}" method="POST">
            @csrf
            @method('DELETE')
            <button type="submit" class="btn btn-danger">Eliminar</button>
        </form>
    </td>
    </tr>
            @endforeach
        
        
    </tbody>
    <tfoot>
        
    </tfoot>
</table>
</div>
@endsection