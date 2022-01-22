@extends('layout.back')

@section('content')
<h1 class="py-5 text-center text-primary">page admin Skills create</h1>
<button class="btn btn-danger"><a href="{{ route("admin") }}">retour</a></button>
<form action="{{ route("skills.store") }}" method="POST">

    @csrf

    <div class="mb-3">
      <label for="language" class="form-label">Language:</label>
      <input type="string" name="language" class="form-control" id="language">
    </div>
    <div class="mb-3">
      <label for="pourcentage" class="form-label">Pourcentage:</label>
      <input type="number" name="pourcentage" class="form-control" id="pourcentage">
    </div>
    <div class="mb-3">
        <label for="description" class="form-label">Description:</label>
        <input type="text" name="description" class="form-control" id="description">
      </div>

    <button type="submit" class="btn btn-primary">Submit</button>
  </form>


@endsection
