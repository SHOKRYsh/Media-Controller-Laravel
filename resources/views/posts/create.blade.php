@extends('Layouts.app')

@section('content')
    <h1>Create Post</h1>
    {!! Form::open(['action' => 'App\Http\Controllers\PostsController@store', 'method' => 'post','files'=>true]) !!}

    <div class="form-group">
        {{ Form::label('title', 'Title') }}
        {{ Form::text('title', '', ['class' => 'form-control']) }}
    </div>

    <div class="form-group">
        {{ Form::label('body', 'Body') }}
        {{ Form::textarea('body', '', ['class' => 'form-control', 'rows' => '5']) }}
    </div>
    <br>
    <div class="form-group">
        {{ Form::file('cover_image') }}
    </div>
    <br>
    <div class="form-group">
        {{ Form::submit('Submit', ['class' => 'btn btn-primary']) }}
    </div>

    {!! Form::close() !!}
@endsection
