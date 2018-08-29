@extends('layout')
@section('content')
<div class="row">
    <div class="bg-light col-md-8 offset-md-2 border p-5">
        <h1>Edit {{ $contact->name }}'s contact info <a class="btn btn-sm btn-primary" href="/contacts"><b>&larr;</b> Go to all Contacts</a></h1>
        {!! Form::model($contact, ['route' => ['contacts.update', $contact->id], 'class' => 'form-horizontal', 'method' => 'PATCH'] ) !!}
            @include('contacts._form')
            {!! Form::submit('Update Contact Info', ['class'=>'btn btn-sm btn-primary']) !!}
        {!! Form::close() !!}
    </div>
</div>
@stop