@extends('scaffold-interface.layouts.app')
@section('title','Index')
@section('content')

<section class="content">
    <h1>
        Nomina Index
    </h1>
    <a href='{!!url("nomina")!!}/create' class = 'btn btn-success'><i class="fa fa-plus"></i> New</a>
    <br>
    <br>
    <table class = "table table-striped table-bordered table-hover" style = 'background:#fff'>
        <thead>
            <th>fecha</th>
            <th>pdf</th>
            <th>xml</th>
            <th>actions</th>
        </thead>
        <tbody>
            @foreach($nominas as $nomina) 
            <tr>
                <td>{!!$nomina->fecha!!}</td>
                <td>{!!$nomina->pdf!!}</td>
                <td>{!!$nomina->xml!!}</td>
                <td>
                    <a data-toggle="modal" data-target="#myModal" class = 'delete btn btn-danger btn-xs' data-link = "/nomina/{!!$nomina->id!!}/deleteMsg" ><i class = 'fa fa-trash'> delete</i></a>
                    <a href = '#' class = 'viewEdit btn btn-primary btn-xs' data-link = '/nomina/{!!$nomina->id!!}/edit'><i class = 'fa fa-edit'> edit</i></a>
                    <a href = '#' class = 'viewShow btn btn-warning btn-xs' data-link = '/nomina/{!!$nomina->id!!}'><i class = 'fa fa-eye'> info</i></a>
                </td>
            </tr>
            @endforeach 
        </tbody>
    </table>
    {!! $nominas->render() !!}

</section>
@endsection