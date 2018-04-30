@extends('scaffold-interface.layouts.app')
@section('title','Show')
@section('content')

<section class="content">
    <h1>
        Show nomina
    </h1>
    <br>
    <a href='{!!url("nomina")!!}' class = 'btn btn-primary'><i class="fa fa-home"></i>Nomina Index</a>
    <br>
    <table class = 'table table-bordered'>
        <thead>
            <th>Key</th>
            <th>Value</th>
        </thead>
        <tbody>
            <tr>
                <td> <b>fecha</b> </td>
                <td>{!!$nomina->fecha!!}</td>
            </tr>
            <tr>
                <td> <b>pdf</b> </td>
                <td>{!!$nomina->pdf!!}</td>
            </tr>
            <tr>
                <td> <b>xml</b> </td>
                <td>{!!$nomina->xml!!}</td>
            </tr>
        </tbody>
    </table>
</section>
@endsection