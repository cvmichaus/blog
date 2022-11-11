@extends('adminlte::page')

@section('title', 'HAQ')

@section('content_header')
    <h1>Lista de Categorias</h1>
@stop

@if (session('info'))
     <div class="alert alert-success">
        <strong>{{ session('info')}}</strong>
     </div>
 @endif   

@section('content')
    <div class="card">
        <div class="card-header">
            <a href="{{ route('admin.categories.create')}}" class="btn btn-success btn-sm">Agregar Categoria</a>
        </div>
        <div class="card-body">
          <table class="table table-striped">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Name</th>
                    <th colspan="2"></th>
                </tr>
            </thead>

            <tbody>
                @foreach ($categories as $category)
                    <tr>
                        <td>{{$category->id}}</td>
                        <td>{{$category->name}}</td>
                        <td width="10px">
                            <a href="{{ route('admin.categories.edit', $category) }}" class="btn btn-warning btn-sm">Editar</a>
                        </td>
                        <td width="10px">
                            <form action="{{ route('admin.categories.destroy', $category) }}" method="POST">
                                @csrf
                                @method('delete')

                                <button class="btn btn-danger btn-sm">Eliminar</button>
                            </form>
                           
                        </td>
                    </tr>
                @endforeach
            </tbody>
          </table>
        </div>
    </div>

@stop
