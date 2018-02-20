@extends('layouts.app')
@section('content')
    <h1 class="text-center text-uppercase">add new</h1>
    {!! Form::open(['action' => 'TodosController@store', 'method' => 'POST']) !!}
        {{ Form::bsText('text') }}
        {{ Form::bsTextArea('body') }}
        {{ Form::bsText('due') }}
        {{ Form::bsSubmit('submit', ['class' => 'btn btn-primary']) }}
    {!! Form::close() !!}
@endsection