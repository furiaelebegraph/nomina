@extends('scaffold-interface.layouts.app')
@section('title','Create')
@section('content')

<section class="content">
    <h1>
        Create nomina
    </h1>
    <a href="{!!url('nomina')!!}" class = 'btn btn-danger'><i class="fa fa-home"></i> Nomina Index</a>
    <br>
    <form method = 'POST' action = '{!!url("nomina")!!}'>
        <input type = 'hidden' name = '_token' value = '{{Session::token()}}'>
        <div class="form-group">
            <label for="fecha">fecha</label>
            <input id="fecha" name = "fecha" type="text" class="form-control">
        </div>
        <div class="form-group">
            <label for="pdf">pdf</label>
            <input id="pdf" name = "pdf" type="text" class="form-control">
        </div>
        <div class="form-group">
            <label for="xml">xml</label>
            <input id="xml" name = "xml" type="text" class="form-control">
        </div>
        <button class = 'btn btn-success' type ='submit'> <i class="fa fa-floppy-o"></i> Save</button>
    </form>
</section>
@endsection