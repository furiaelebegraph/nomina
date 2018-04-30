@extends('scaffold-interface.layouts.app')
@section('title','Index')
@section('content')

<section class="content">
    <h1>
        Usuario Index
    </h1>
    <a href='{!!url("usuario")!!}/create' class = 'btn btn-success'><i class="fa fa-plus"></i> New</a>
    <br>
    <br>
    <table class = "table table-striped table-bordered table-hover" style = 'background:#fff'>
        <thead>
            <th>nombre</th>
            <th>correo</th>
            <th>password</th>
            <th>telefono</th>
            <th>verificado</th>
            <th>direccion</th>
            <th>nss</th>
            <th>actions</th>
        </thead>
        <tbody>
            @foreach($usuarios as $usuario) 
            <tr>
                <td>{!!$usuario->nombre!!}</td>
                <td>{!!$usuario->correo!!}</td>
                <td>{!!$usuario->password!!}</td>
                <td>{!!$usuario->telefono!!}</td>
                <td>{!!$usuario->verificado!!}</td>
                <td>{!!$usuario->direccion!!}</td>
                <td>{!!$usuario->nss!!}</td>
                <td>
                    <a data-toggle="modal" data-target="#myModal" class = 'delete btn btn-danger btn-xs' data-link = "/usuario/{!!$usuario->id!!}/deleteMsg" ><i class = 'fa fa-trash'> delete</i></a>
                    <a href = '#' class = 'viewEdit btn btn-primary btn-xs' data-link = '/usuario/{!!$usuario->id!!}/edit'><i class = 'fa fa-edit'> edit</i></a>
                    <a href = '#' class = 'viewShow btn btn-warning btn-xs' data-link = '/usuario/{!!$usuario->id!!}'><i class = 'fa fa-eye'> info</i></a>
                </td>
            </tr>
            @endforeach 
        </tbody>
    </table>
    {!! $usuarios->render() !!}

</section>
@endsection