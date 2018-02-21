@extends('layouts.app')
@section('content')
<h1 class="text-center text-uppercase">Todos</h1>
@if(count($todos) > 0)
    @foreach($todos as $todo)
        <div class="well">
            <h3 class="text-capitalize"><a href="todo/{{$todo->id}}">{{$todo->text}}</a></h3>
            <span class="label label-danger">{{$todo->due}}</span>
        </div>
    @endforeach
@endif
@endsection