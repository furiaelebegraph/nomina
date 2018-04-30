@extends('scaffold-interface.layouts.app')
@section('title','Edit')
@section('content')

<section class="content">
    <h1>
        Edit nomina
    </h1>
    <a href="{!!url('nomina')!!}" class = 'btn btn-primary'><i class="fa fa-home"></i> Nomina Index</a>
    <br>
    <form method = 'POST' action = '{!! url("nomina")!!}/{!!$nomina->
        id!!}/update'> 
        <input type = 'hidden' name = '_token' value = '{{Session::token()}}'>
        <div class="form-group">
            <label for="fecha">fecha</label>
            <input id="fecha" name = "fecha" type="text" class="form-control" value="{!!$nomina->
            fecha!!}"> 
        </div>
        <div class="form-group">
            <label for="pdf">pdf</label>
            <input id="pdf" name = "pdf" type="text" class="form-control" value="{!!$nomina->
            pdf!!}"> 
        </div>
        <div class="form-group">
            <label for="xml">xml</label>
            <input id="xml" name = "xml" type="text" class="form-control" value="{!!$nomina->
            xml!!}"> 
        </div>
        <button class = 'btn btn-success' type ='submit'><i class="fa fa-floppy-o"></i> Update</button>
    </form>
</section>
@endsection