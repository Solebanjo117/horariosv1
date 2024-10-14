<title>Alumnos</title>
@extends('plantillas/plantilla1')
@section('contenido')

@if (@session('status'))
<div class="alert alert-success" role="alert">
    {{session('status')}}
</div>
@endif
@if (@session('alumno'))
<div class="alert alert-danger" role="alert">
    Alumno borrado {{session('alumno')->id }}{{' '.session('alumno')->nombre}}
</div>
@endif
@yield('contenido2')
<center><a
    style="width: 25%"
    name=""
    id=""
    class="btn btn-outline-dark"
    href="{{route('alumnos.create')}}"
    role="button"
    >Nuevo</a
></center>

{{$alumnos->links()}}


<div
        class="table-responsive-sm"
    >
        <table
            class="table table-striped table-hover table-borderless table-primary align-middle"
        >
            <thead class="table-light">
                <caption>
                    Alumnos
                </caption>
                <tr >
                    <th scope="col">ID</th>
                    <th scope="col">Nombre</th>
                    <th scope="col">Apellido</th>
                    <th scope="col">Email</th>
                    <th scope="col">Editar</th>
                    <th scope="col">Eliminar</th>
                    <th scope="col">Ver</th>
                </tr>
            </thead>
            <tbody class="table-group-divider">
                @foreach ($alumnos as $item)
          <tr class="">
            <td scope="row">{{$item->id}}</td>
            <td>{{$item->nombre}}</td>
            <td>{{$item->apellido}}</td>
            <td>{{$item->email}}</td>
            <td><a
                name=""
                id=""
                class="btn btn-primary"
                href="{{route('alumnos.edit',$item)}}"
                role="button"
                >Editar</a
            >
            </td>
            <td>
                <form method="post" onsubmit="return confirm('tai seguro pa? vasa borrar el {{$item->nombre}}')" action="{{route('alumnos.destroy',$item)}}">
                    <!-- here the '1' is the id of the post which you want to delete -->
                
                    @csrf
                    @method('DELETE')
                    <input type="hidden" name="cityId" >
                    <button type="submit" class="btn btn-outline-danger" >X</button>
                  
                </form>
               
            </td>
            <td><a
                name=""
                id=""
                class="btn btn-outline-success"
                href="{{route('alumnos.show',$item)}}"
                role="button"
                >Ver</a
            >
            </td>
        </tr> 
          @endforeach
            </tbody>
            <tfoot>
                
            </tfoot>
        </table>
        
    </div>
    @endsection
