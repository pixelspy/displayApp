@extends('layouts.app')
@section('content')
    <h1>edit project</h1>
    {!! Form::open(['action' => ['ProjectsController@update', $project->id], 'method' => 'POST']) !!}
    <div class="form-group">
        {{Form::label('title', 'title')}}
        {{Form::text('title', $project->title, ['class' => 'form-control', 'placeholder' => 'title'])}}
    </div>

    <div class="form-group">
        {{--here will come the layout id--}}
        {{Form::textarea('body', $project->body, ['class' => 'form-control', 'placeholder' => 'layout'])}}
    </div>
    {{Form::hidden('_method', 'PUT')}}
    {{--this allows the POST to be a PUT for--}}
    {{Form::submit('Submit', ['class' => 'btn btn-primary'])}}

    {!! Form::close() !!}
@endsection