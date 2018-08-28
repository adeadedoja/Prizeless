@extends('layout')
@section('content')

{!! Form::open(['route' => 'contacts.store']) !!}
    {!! Form::text('name', null , array('class' => 'form-control', 'placeholder' => 'Enter Full Name')) !!}
    {!! Form::input('email', 'email', null , array('class' => 'form-control border-input', 'placeholder' => 'Enter Email Address')) !!}
    {!! Form::text('phone', null , array('class' => 'form-control', 'placeholder' => 'Enter Phone Number')) !!}
    {!! Form::text('subject', null , array('class' => 'form-control', 'placeholder' => 'Enter Subject')) !!}
    {!! Form::textarea('message', null , array('class' => 'form-control', 'placeholder' => 'Enter Message')) !!}
    {!! Form::submit('Create Contact', ['class'=>'']) !!}

{!! Form::close() !!}

@stop