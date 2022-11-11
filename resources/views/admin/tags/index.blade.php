@extends('adminlte::page')

@section('title', 'HAQ')

@section('content_header')
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
                            <td>
                                <a class="btn btn-warning btn-sm" href="{{route('admin.tags.edit', $tag)}}">Editar</a>
                               
                            </td>
                            <td></td>
                          </tr>
                      @endforeach  
                </tbody>
            </table>
        </div>
    </div>
@stop

