@extends('layout.back')

@section('content')
<h1 class="text-center text-danger">Contacts</h1>
<div class="content w-74 p-3">
    <a class="btn btn-primary" href="{{ route("contacts.create") }}">create</a>
</div>
@include('partials.tableContact')

@endsection
