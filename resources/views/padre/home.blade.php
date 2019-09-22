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
<div class="card-header">{{"Integrant"}} Father</div>
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
    @if($padres)
    @foreach ($padres as $padre)
        <tbody>
            <tr>
                <td>{!!link_to('padre/'.$padre->id,$padre->name)!!}</td>
                <td>{{$padre->lastname}}</td>
                <td>{{$padre->age}}</td>
                <td>{{$padre->color}}</td>
                <td>
                    {!!Form::open(['url' => 'padre/'.$padre->id, 'method' => 'DELETE'])!!}
                    {!!Form::button(link_to_route('family.padre.edit','editar',$padre->id))!!}
                    {!!Form::submit('Eliminar')!!}
                    {{Form::close()}}
                </td>   
            </tr>            
        </tbody>
    @endforeach
    @endif
</table>
{!!Form::button(link_to_route('family.padre.create','Add Father'))!!}
{!!Form::button(link_to_route('family.madre.index','Go Mother'))!!}
{!!Form::button(link_to_route('family.hijo.store','Go Hijo'))!!}
{{-- {{padres->links()}} --}}
composer require laravelcollective/html "5.8.*" -> "laravelcollective"
</div>
</div>
</div>
</div>
</div>
@endsection