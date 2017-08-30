@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Dashboard</div>

                <div class="panel-body">
                    <div class="row">
                        <h4 class="col-md-8">Hello {{ Auth::user()->name }}! </h4>
                        <a href="/projects/create" class=" col-md-3 btn btn-primary">create a project</a>
                    </div>
                    <br>
                    <h3>your projects</h3>
                    @if(count($projects) > 0)
                        <table class="table table-striped">
                            <tr>
                                <th>Title</th>
                                <th></th>
                                <th></th>
                            </tr>
                            @foreach($projects as $project)
                                <tr>
                                    <td><a href="/projects/{{$project->id}}">{{$project->title}}</a></td>
                                    <td><a href="/projects/{{$project->id}}/edit" class="btn btn-default">edit</a> </td>
                                    <td>
                                        {!! Form::open
                                            ([
                                            'action' => ['ProjectsController@destroy', $project->id],
                                            'method' => 'POST',
                                            'class' => 'pull-right'
                                            ])!!}
                                        {{Form::hidden('_method', 'DELETE')}}
                                        {{Form::submit('delete', ['class' => 'btn btn-danger'])}}

                                        {!! Form::close()!!}
                                    </td>
                                </tr>
                            @endforeach
                        </table>
                    @else
                        <p>You have no posts.</p>
                    @endif
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
