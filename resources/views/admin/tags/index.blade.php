@extends('adminlte::page')

@section('title', 'HAQ')

@section('content_header')

@if (session('info'))
     <div class="alert alert-success">
        <strong>{{ session('info')}}</strong>
     </div>
 @endif    

<a href="{{ route('admin.tags.create') }}" class="btn btn-primary btn-sm float-right">Nueva Etiqueta</a>
    <h1>MOSTRAR LISTADO DE ETIQUETAS</h1>
@stop

@section('content')
    <div class="card">
        <div class="card-body">
            <table class="table table-striped">
                <thead>
                    <th>ID</th>
                    <th>Name</th>
                    <th colspan="2"></th>
                    
                </thead>

                <tbody>
                      @foreach ($tags as $tag)
                          <tr>
                            <td>{{$tag ->id}} </td>
                            <td>{{$tag ->name}} </td>
                            <td width="10px">
                                <a class="btn btn-warning btn-sm" href="{{route('admin.tags.edit', $tag)}}">Editar</a>                               
                            </td>
                            <td width="10px">
                                <form action="{{ route('admin.tags.destroy',$tag) }}" method="POST">
                                @csrf
                                @method('delete') 
                                <button type="submit" class="btn btn-danger btn-sm">Eliminar</button>
                            </form>
                            </td>
                          </tr>
                      @endforeach  
                </tbody>
            </table>
        </div>
    </div>
@stop

