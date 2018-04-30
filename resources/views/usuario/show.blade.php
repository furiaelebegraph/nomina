@extends('scaffold-interface.layouts.app')
@section('title','Show')
@section('content')

<section class="content">
    <h1>
        Show usuario
    </h1>
    <br>
    <a href='{!!url("usuario")!!}' class = 'btn btn-primary'><i class="fa fa-home"></i>Usuario Index</a>
    <br>
    <table class = 'table table-bordered'>
        <thead>
            <th>Key</th>
            <th>Value</th>
        </thead>
        <tbody>
            <tr>
                <td> <b>nombre</b> </td>
                <td>{!!$usuario->nombre!!}</td>
            </tr>
            <tr>
                <td> <b>correo</b> </td>
                <td>{!!$usuario->correo!!}</td>
            </tr>
            <tr>
                <td> <b>password</b> </td>
                <td>{!!$usuario->password!!}</td>
            </tr>
            <tr>
                <td> <b>telefono</b> </td>
                <td>{!!$usuario->telefono!!}</td>
            </tr>
            <tr>
                <td> <b>verificado</b> </td>
                <td>{!!$usuario->verificado!!}</td>
            </tr>
            <tr>
                <td> <b>direccion</b> </td>
                <td>{!!$usuario->direccion!!}</td>
            </tr>
            <tr>
                <td> <b>nss</b> </td>
                <td>{!!$usuario->nss!!}</td>
            </tr>
        </tbody>
    </table>
</section>
@endsection