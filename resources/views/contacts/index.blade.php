@extends('layout')
@section('content')
<div>
    <h1>All Contacts <a class="btn btn-sm btn-primary" href="/contacts/create"><b>+</b> Add New Contact</a></h1>
    <div class="row">
        @foreach($contacts as $contact)
            <div class="col-md-4">
                        <div class="contacts_card text-center p-4 border">                            
                            <div class="contact__card__image">
                                <img src="img/profile-pic.svg" class="img-fluid" alt="user image" />
                            </div>
                            <h4 class="text-primary">{{ $contact->name }}</h4>
                            <p class="bold p-0 m-0"><i class="fa fa-envelope-o"></i> {{ $contact->email }}</p>
                            <p class="bold p-0 m-0"><i class="fa fa-phone"></i> {{ $contact->phone }}</p>
                            <hr>
                            <p class="text-primary m-0"><b>Subject: </b>{{ $contact->subject }} </p>
                            <p class="my-2">{{ nl2br($contact->message) }}</p>
                            <p class="bold"><i class="fa fa-clock-o"></i> {{ $contact->created_at->diffForHumans() }}</p>
                            <div class="row">
                                <div class="col-6 pr-1 text-right">
                                    <a class="btn btn-sm btn-success text-white" href="/contacts/{{ $contact->id}}/edit">Edit Contact</a>
                                </div>
                                <div class="col-6 pl-1 text-left">
                                    <form action="{{url('contacts', [$contact->id])}}" method="POST">
                                        @csrf
                                        @method('DELETE')  
                                        <button type="submit" class="btn btn-sm btn-danger"><b>X</b> Delete Contact</button>    
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
        @endforeach
    </div>
</div>
@stop