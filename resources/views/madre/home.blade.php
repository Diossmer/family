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
<div class="card-header">{{"Integrant"}} Mother</div>
<div class="card-body">
<table border="2" width="100%">
    <thead>
        <tr>
            <th>Name</th>
            <th>Lastname</th>
            <th>Age</th>
            <th>Color</th>
            <th>Action</th>
        </tr>
    </thead>
    @foreach ($madres as $madre)
        <tbody>
            <tr>
                <td>{!!link_to('madre/'.$madre->id,$madre->name)!!}</td>
                <td>{{$madre->lastname}}</td>
                <td>{{$madre->age}}</td>
                <td>{{$madre->color}}</td>
                <td>
                    {!!Form::open(['url' => 'madre/'.$madre->id, 'method' => 'DELETE'])!!}
                    {!!Form::button(link_to_route('family.madre.edit','editar',$madre->id))!!}
                    {!!Form::submit('Eliminar')!!}
                    {{Form::close()}}
                </td>   
            </tr>            
        </tbody>
    @endforeach
</table>
{!!Form::button(link_to_route('family.madre.create','Add Mother'))!!}
{!!Form::button(link_to_route('family.padre.index','Go Father'))!!}
{!!Form::button(link_to_route('family.hijo.store','Go Hijo'))!!}
{{-- {{madres->links()}} --}}
composer require laravelcollective/html "5.8.*" -> "laravelcollective"
</div>
</div>
</div>
</div>
</div>
@endsection