@extends('layout')
@section('content')

{!! Form::model($contact, ['route' => ['contacts.update', $contact->id], 'class' => 'form-horizontal', 'method' => 'PATCH'] ) !!}
    @include('contacts._form')
    {!! Form::submit('Update Contact Info', ['class'=>'']) !!}

{!! Form::close() !!}

@stop