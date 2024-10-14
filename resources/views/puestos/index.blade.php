@extends('plantillas.plantilla1')
@section('contenido')
    <title>Puestos</title>

<body>
    <a href="{{route('puestos.create')}}" class="btn btn-dark">Nuevo</a>
    {{$registros->links()}}

    @session('status')
    <div 
    @if(session('alert-type')) class="alert alert-{{session('alert-type')}}" 
    @else class="alert alert-success" @endif
    role="alert">
        {{session('status')}}
      </div>
    @endsession

    <div
        class="table-responsive">
        <table style="text-align: center"
            class="table table-striped table-hover table-borderless table-dark align-middle"
        >
            <thead class="table-light">
                <caption>
                    Puestos
                </caption>
                <tr >
                    <th>id puesto</th>
                    <th>Nombre</th>
                    <th>Tipo</th>
                    <th>Editar</th>
                    <th>Eliminar</th>
                    <th>Ver</th>
                </tr>
            </thead>
            <tbody class="table-group-divider">
                @foreach ($registros as $item)
                <tr
                class="table-success"
            >
              <td>{{$item->idPuesto}}</td>
              <td>{{$item->nombre}}</td>
              <td>{{$item->tipo}}</td>
              <td ><a class="btn btn-success" href="{{route('puestos.edit',$item)}}">Edit</a></td>
              <td class="table-danger"><form action="{{route('puestos.destroy',$item)}}"
                 onsubmit="return confirm('¿Quieres eliminar el registro: {{$item->nombre}}?')" method="post">
                @csrf
                @method('DELETE')
                <button class="btn btn-danger" type="submit">Delete</button>
            </form></td>
            <td><a href="{{route('puestos.show',$item)}} " class="btn btn-outline-dark">Ver papu</a></td>
            </tr>
                @endforeach
            </tbody>
            <tfoot>
                
            </tfoot>
        </table>
    </div>
    
</body>
@endsection