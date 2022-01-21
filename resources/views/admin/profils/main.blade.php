@extends('layout.back')

@section('content')
<h1 class="text-center text-danger">profils principal</h1>
<div class="content w-74 p-3">
    <a class="btn btn-primary" href="{{ route("profils.create") }}">create</a>
</div>
@include('partials.tableProfil')
@endsection
