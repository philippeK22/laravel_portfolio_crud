@extends('layout.back')

@section('content')
<h1 class="text-center text-danger">profils</h1>
<div class="content w-74 p-3">
    <a class="btn btn-primary" href="{{ route("profils.create") }}">create</a>
</div>
@if ($message = Session::get('success'))
<div class="alert alert-primary">
    <strong>{{ $message }}</strong>
</div>

@endif
@if ($message = Session::get('warning'))
<div class="alert alert-danger">
    <strong>{{ $message }}</strong>
</div>

@endif
@include('partials.tableProfil')
@endsection
