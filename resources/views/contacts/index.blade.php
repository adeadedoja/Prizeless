@extends('layout')
@section('content')
<div>
    <h1>All Contacts</h1>
    <table>
        <tr>
            <td>Name</td>
            <td>Email</td>
            <td>Phone Number</td>
            <td>Subject</td>
            <td>Message</td>
        </tr>
        @foreach($contacts as $contact)
            <tr>
                <td>{{ $contact->name }}</td>
                <td>{{ $contact->email }}</td>
                <td>{{ $contact->phone }}</td>
                <td>{{ $contact->subject }}</td>
                <td>{{ $contact->message }}</td>
            </tr>
        @endforeach
    </table>
</div>
@stop