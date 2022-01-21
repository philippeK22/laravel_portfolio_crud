@extends('layout.back')

@section('content')

<h1 class="py-5 text-center text-primary">page admin Profils create</h1>
<button class="btn btn-danger"><a href="{{ route("admin") }}">retour</a></button>
@include('partials.forms')

@endsection
