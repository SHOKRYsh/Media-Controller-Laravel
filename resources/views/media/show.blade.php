@extends('Layouts.app')


@section('content')
    <h1>Media Preview</h1>
    <hr>
    {{-- <a href="/media" class="btn btn-outline-secondary">Go Back</a>
    @if (Auth::user())
        @if (Auth::user()->id == $media->user->id)
            <br><br>
            {!! Form::open([
                'action' => ['App\Http\Controllers\MediaController@destroy', $media->id],
                'method' => 'post',
                'class' => 'd-inline float-right',
            ]) !!}
            {{ form::hidden('_method', 'DELETE') }}
            <div class="form-group">
                {{ Form::submit('Delete', ['class' => 'btn btn-outline-danger']) }}
            </div>
            {!! Form::close() !!}
        @endif
    @endif
    <hr>
 --}}




    <table class="table">
        <tbody>
            <tr>
                <td>
                    <a href="/media" class="btn btn-outline-secondary">Go Back</a>
                </td>
                <td>
                    @if (Auth::user())
                        @if (Auth::user()->id == $media->user->id)

                            {!! Form::open([
                                'action' => ['App\Http\Controllers\MediaController@destroy', $media->id],
                                'method' => 'post',
                                'class' => 'd-inline float-right',
                            ]) !!}
                            {{ form::hidden('_method', 'DELETE') }}
                            <div class="form-group">
                                {{ Form::submit('Delete', ['class' => 'btn btn-outline-danger']) }}
                            </div>
                            {!! Form::close() !!}
                        @endif
                    @endif
                </td>
            </tr>
        </tbody>
    </table>




    <div class="row">
        <div class="col-md-8 col-md-offset-2 col-sm-6 col-sm-offset-4">
            <img src="/photos/{{ $media->name }}" style="width:100%;height:100%">
        </div>
        <small>Created At: {{ $media->created_at }} by {{ $media->user->name }}</small>
    </div>
@endsection
