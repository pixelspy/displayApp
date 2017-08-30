@extends('layouts.app')
@section('content')
    <h1>create project</h1>
    {!! Form::open(['action' => 'ProjectsController@store', 'method' => 'POST']) !!}
    <div class="form-group">
        {{Form::label('title', 'title')}}
        {{Form::text('title', '', ['class' => 'form-control', 'placeholder' => 'title'])}}
    </div>

    <div class="form-group">
        {{--here will come the layout id--}}
        {{Form::textarea('body', '', ['class' => 'form-control', 'placeholder' => 'layout'])}}
    </div>
    {{Form::submit('Submit', ['class' => 'btn btn-primary'])}}

    {!! Form::close() !!}
@endsection