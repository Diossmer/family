@extends('layouts.app')
@section('title', 'home')
@section('navbar')
@include('include.navbar')
@endsection
@section('sidebar')
@include('include.sidebar')
@endsection
@section('footer')
@include('include.footer')
@endsection
@section('content')
<div class="container">
<div class="row justify-content-center">
<div class="col-md-8">
<div class="card">
<div class="card-header">{{"Integrant"}}</div>
<div class="card-body">
<table border="1">
    <thead>
        <tr>
            <th>Name</th>
            <th>Email</th>
            <th>Action</th>
        </tr>
    </thead>
    @foreach ($datos as $dato)
        <tbody>
            <tr>
                <td>{!!link_to('index/'.$dato->id,$dato->name)!!}</td>
                <td>{{$dato->email}}</td>
                <td>
                    {!!Form::button(link_to_route('todowebsie.index.edit','editar',$dato->id))!!}
                    &#5210;
                    {!!Form::open(['url' => 'index/'.$dato->id, 'method' => 'DELETE'])!!}
                    {!!Form::submit('Eliminar')!!}
                    {{Form::close()}}
                </td>   
            </tr>            
        </tbody>
    @endforeach
</table>
<td>{!!Form::button(link_to_route('todowebsie.index.create','Add User'))!!}</td>
{{$datos->links()}}
</div>
</div>
</div>
</div>
</div>
@endsection