@extends('Layouts.app')

@section('styles')
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/dropzone/5.7.6/min/dropzone.min.css">
@endsection

@section('content')
    <h1>Upload Media</h1>

    <div class="row">
        <div class="col-md-8">

            {!! Form::open([
                'action' => 'App\Http\Controllers\MediaController@store',
                'method' => 'post',
                'files' => true,
                'class' => 'dropzone',
            ]) !!}

            {!! Form::close() !!}

        </div>
    </div>
@endsection


@section('scripts')
    <script src="https://cdnjs.cloudflare.com/ajax/libs/dropzone/5.7.6/min/dropzone.min.js"></script>
@endsection
