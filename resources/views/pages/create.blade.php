@extends('layout')

@section('content')

    {!! Form::open(['route' => 'pages.store']) !!}

    <div class="form-group">
        {!! Form::label('title', "Title:") !!}
        {!! Form::text('title', null, ['class'=>'form-control']) !!}
    </div>

    {!! Form::close() !!}

@endsection