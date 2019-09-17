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
            <th>Apellido</th>
            <th>hijo</th>
            <th>Action</th>
        </tr>
    </thead>
   {{--  @foreach ($hijos as $hijo)
        <tbody>
            <tr>
                {{$hijo->id}}
                <td>{!!link_to('index/'.$hijo->id,$hijo->name)!!}</td>
                <td>{{$hijo->apellido}}</td>
                <td>{{$hijo->user_id}}</td>
                <td>
                    {!!Form::button(link_to_route('todowebsite.padre.edit','editar',$hijo->id))!!}
                    &#5210;
                    {!!Form::open(['url' => 'index/'.$hijo->id, 'method' => 'DELETE'])!!}
                    {!!Form::submit('Eliminar')!!}
                    {{Form::close()}}
                </td>    
            </tr>            
        </tbody>
    @endforeach--}}
</table>
{{-- <td>{!!Form::button(link_to_route('todowebsite.padre.create','Add User'))!!}</td> --}}
{{-- {{$hijos->links()}} --}}
composer require laravelcollective/html "5.8.*" -> "laravelcollective"
</div>
</div>
</div>
</div>
</div>
@endsection