@extends('layouts.app')
@section('content')
    @if(Auth::user())
        <a href="/dashboard" class="btn btn-default">Go Back</a>
    @else
        <a href="/projects" class="btn btn-default">Go Back</a>
    @endif
    <h1>{{$project->title}}</h1>
    <p>{{$project->body}}</p>
@endsection