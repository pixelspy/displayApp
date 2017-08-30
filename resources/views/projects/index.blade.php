@extends('layouts.app')
@section('content')
    {{--Bootstrap and JQUERY Carousel classes--}}
    <div id="myCarousel" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
            <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
            <li data-target="#myCarousel" data-slide-to="1"></li>
            <li data-target="#myCarousel" data-slide-to="2"></li>
            <li data-target="#myCarousel" data-slide-to="3"></li>
        </ol>
        <div class="carousel-inner">
            <div class="item active">
                <div class="row">
                    <div class="centerBox col-md-12 col-sm-12 row">
                        <div class="smCenterBox col-md-4 col-md-offset-4 IndexContainer">
                            <div class="text-center">
                                <h1>all projects</h1>
                                <p>here are all the project created via this app by creators from all over the world.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            @foreach($projects as $project)
                <div class="item">
                    <div class="row">
                        <div class="centerBox col-md-12 col-sm-12 row">
                            <div class="smCenterBox col-md-4 col-md-offset-4 IndexContainer">
                                <div class="text-center">
                                    <a href="/projects/{{$project->id}}">
                                        <h1>{{$project->title}}</h1>
                                        <p>written on {{$project->created_at}}</p>
                                        <p>by {{$project->user->name}}</p>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
        <a class="carousel-control left" href="#myCarousel" data-slide="prev">
            <span class="icon-prev"></span>
        </a>
        <a class="carousel-control right" href="#myCarousel" data-slide="next">
            <span class="icon-next"></span>
        </a>
    </div>
@endsection