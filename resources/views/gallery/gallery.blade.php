@extends('layouts.app')

@section('content')
    <div class="row">
        <div class="col-md-12">
            <h1>gallery</h1>
        </div>
    </div>

    <div class="row">
        <div class="col-md-8">
            @if ($galleries->count() > 0)
                <table class="table table-striped table-bordered table-responsive">
                    <thead>
                    <tr class="info">
                        <th>name of gallery</th>
                        <th></th>
                    </tr>
                    </thead>
                    <tbody>
                        @foreach($galleries as $gallery)
                    <tr>
                        <td>{{$gallery->name}}</td>
                        <td>view</td>
                    </tr>
                        @endforeach
                    </tbody>
                </table>
            @endif
        </div>
        
        <div class="col-md-4">
            <form action="{{url('gallery/save')}}" class="form" method="POST">
                <input type="hidden" name="_token" value="{{ csrf_token() }}" class="">

                <div class="form-group">
                    <input type="text" name="gallery_name" id="" placeholder="" class="form-control">
                </div>

                <button class="btn btn-primary">Save</button>
            </form>
        </div>
    </div>
@endsection