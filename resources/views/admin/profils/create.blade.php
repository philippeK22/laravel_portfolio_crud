@extends('layout.back')

@section('content')

<h1 class="py-5 text-center text-primary">page admin Profils create</h1>
<a class="btn btn-danger" href="{{ route("admin") }}">retour</a>

@if ($errors->any())
      <div class="alert alert-danger">
          <ul>
              @foreach ($errors->all() as $error)
              <li>{{ $error }}</li>
              @endforeach
          </ul>
      </div>
@endif

@include('partials.forms')

@endsection
