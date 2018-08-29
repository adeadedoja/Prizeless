@extends('layout')
@section('content')
<div class="row">
    <div class="bg-light col-md-8 offset-md-2 border p-5">
        <h1>Add New Contact <a class="btn btn-sm btn-primary" href="/contacts"><b>&larr;</b> Go to all Contacts</a></h1>
        {!! Form::open(['route' => 'contacts.store']) !!}
            @include('contacts._form')
            {!! Form::submit('Create Contact', ['class'=>'btn btn-primary']) !!}

        {!! Form::close() !!}
    </div>
</div>
@stop