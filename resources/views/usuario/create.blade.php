@extends('scaffold-interface.layouts.app')
@section('title','Create')
@section('content')

<section class="content">
    <h1>
        Create usuario
    </h1>
    <a href="{!!url('usuario')!!}" class = 'btn btn-danger'><i class="fa fa-home"></i> Usuario Index</a>
    <br>
    <form method = 'POST' action = '{!!url("usuario")!!}'>
        <input type = 'hidden' name = '_token' value = '{{Session::token()}}'>
        <div class="form-group">
            <label for="nombre">nombre</label>
            <input id="nombre" name = "nombre" type="text" class="form-control">
        </div>
        <div class="form-group">
            <label for="correo">correo</label>
            <input id="correo" name = "correo" type="text" class="form-control">
        </div>
        <div class="form-group">
            <label for="password">password</label>
            <input id="password" name = "password" type="text" class="form-control">
        </div>
        <div class="form-group">
            <label for="telefono">telefono</label>
            <input id="telefono" name = "telefono" type="text" class="form-control">
        </div>
        <div class="form-group">
            <label for="verificado">verificado</label>
            <input id="verificado" name = "verificado" type="text" class="form-control">
        </div>
        <div class="form-group">
            <label for="direccion">direccion</label>
            <input id="direccion" name = "direccion" type="text" class="form-control">
        </div>
        <div class="form-group">
            <label for="nss">nss</label>
            <input id="nss" name = "nss" type="text" class="form-control">
        </div>
        <button class = 'btn btn-success' type ='submit'> <i class="fa fa-floppy-o"></i> Save</button>
    </form>
</section>
@endsection