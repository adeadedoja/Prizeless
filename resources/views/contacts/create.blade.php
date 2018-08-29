@extends('layout')
@section('content')

{!! Form::open(['route' => 'contacts.store']) !!}
    @include('contacts._form')
    {!! Form::submit('Create Contact', ['class'=>'']) !!}

{!! Form::close() !!}

@stop