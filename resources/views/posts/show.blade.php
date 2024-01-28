@extends('Layouts.app')

@section('content')
<a href="/posts" class="btn btn-outline-secondary">Go Back</a>
<h1 style="padding: 15px 0px;">{{ $post->title }}</h1>
<img style="width: 100% ;max-height: 400px;" src="/covers/{{ $post->cover_image }}" alt="{{ $post->cover_image }}">
<br><br>
<p>{!! $post->body !!}</p>
<hr>
<small>Created At: {{ $post->created_at }} by {{ $post->user->name }}</small>
<hr>

{{-- @if (Auth::user())
    @if (Auth::user()->id == $post->user->id)
        <a href="/posts/{{ $post->id }}/edit"class="btn btn-outline-secondary">Edit</a>
        <br><br>

        {!! Form::open([
            'action' => ['App\Http\Controllers\PostsController@destroy', $post->id],
            'method' => 'post',
            'class' => 'd-inline float-right',
        ]) !!}
        {{ form::hidden('_method', 'DELETE') }}
        <div class="form-group">
            {{ Form::submit('Delete', ['class' => 'btn btn-outline-danger']) }}
        </div>
        {!! Form::close() !!}
    @endif
@endif --}}




    @if (Auth::user())
        @if (Auth::user()->id == $post->user->id)
            <table class="table">
                <tbody>
                    <tr>
                        <td>
                            <a href="/posts/{{ $post->id }}/edit"class="btn btn-outline-secondary">Edit</a>
                        </td>
                        <td>
                            {!! Form::open([
                                'action' => ['App\Http\Controllers\PostsController@destroy', $post->id],
                                'method' => 'post',
                                'class' => 'd-inline float-right',
                            ]) !!}
                            {{ form::hidden('_method', 'DELETE') }}
                            <div class="form-group">
                                {{ Form::submit('Delete', ['class' => 'btn btn-outline-danger']) }}
                            </div>
                            {!! Form::close() !!}
                        </td>
                    </tr>
                </tbody>
            </table>
        @endif
    @endif





@endsection
