<table class="table">
    <thead>
      <tr>
        <th scope="col">#</th>
        <th scope="col">Nom</th>
        <th scope="col">Prenom</th>
        <th scope="col">Age</th>
        <th scope="col">Profil</th>
        <th scope="col">Email</th>
        <th scope="col">Telephone</th>

      </tr>
    </thead>
    <tbody>
        @forelse ($myProfil as $item)
      <tr>
          <th scope="row">{{ $item->id }}</th>
          <td>{{ $item->nom }}</td>
          <td>{{ $item->prenom }}</td>
          <td>{{ $item->age }}</td>
          <td>{{ $item->titre }}</td>
          <td>{{ $item->email }}</td>
          <td>{{ $item->telephone}}</td>
          <td>
              <form action="{{ route("animal.destroy",$item->id) }}" method="POST">
                @csrf
                @method("DELETE")
                <button class="btn btn-danger">Delete</button>
            </form>
            {{-- show --}}
            <a class="btn btn-primary" href="{{ route("animal.show",$item->id) }}">show</a>

            {{-- edit --}}
            {{-- <a class="btn btn-success" href="{{ route("animal.edit",$item->id) }}">edit</a> --}}

          </td>
          @empty
          <p>comming soon</p>

          @endforelse
      </tr>
    </tbody>
  </table>
