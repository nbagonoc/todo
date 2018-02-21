@extends('layouts.app')
@section('content')
    <a href="/" class="btn btn-default">Back</a>
    <h1 class="text-center text-capitalize">{{$todo->text}}</h1>
    <div class="text-center">
        <p class="label label-danger text-center">{{$todo->due}}</p>
        <p>{{$todo->body}}</p>
    </div>
    <hr>
    <a href="/todo/{{$todo->id}}/edit" class="btn btn-default">Edit</a>
    {!! Form::open(['action' => ['TodosController@destroy', $todo->id], 'method' => 'POST', 'class' => 'pull-right']) !!}
        {{ Form::hidden('_method', 'DELETE') }}    
        {{ Form::bsSubmit('Delete', ['class' => 'btn btn-danger']) }}
    {!! Form::close() !!}
@endsection