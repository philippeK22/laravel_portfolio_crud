@extends('layout.back')

@section('content')

<h1 class="text-primary">show</h1>
<div class="row">
    <div class="col-12">
        <div class="card my-4">
            <div class="card-body">
                <h4 class="card-title">Titre : {{$id->titre}}</h4>
                <h5 class="card-title">Description: {{ $id->description }}</h5>
                <h6 class="card-subtitle mb-2 text-muted">Adresse :{{$id->adresse}}</h6>
                <p class="card-text text-primary">Telephone: {{$id->telephone}}</p>
                <p class="card-text text-success">Email: {{$id->email}}</p>
                <a href="{{route('contacts.index')}}" class="btn btn-success">Retour</a>

                <form action="{{route('contacts.destroy', $id->id)}}" method="POST">
                    @csrf
                    @method('DELETE')
                    <button class="btn btn-danger">Delete</button>
                </form>
            </div>
        </div>
    </div>
</div>


@endsection
