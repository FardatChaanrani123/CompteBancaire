@extends('layout.main')

@section('content')
    <a href="{{route('comptes.create')}}" class="btn btn-primary mt-3" >Nouveau Compte</a>
    @if(session('success'))
        <div class="alert alert-success mt-2">
            {{session('success')}}
        </div>
    @endif
<h3 class="text-center text-primary">Liste des comptes</h3>
<table class="table table-bordered table-striped">
    <thead>
      <tr>
        <th scope="col">Id</th>
        <th scope="col">Solde</th>
        <th scope="col">Nom complet</th>
        <th scope="col">Type compte</th>
          {{-- <th scope="col">Action</th>  --}}
      </tr>
    </thead>
    <tbody>
        @foreach ($comptes as $cpt)
        <tr>
            <td>{{$cpt->id}}</td>
            <td>{{$cpt->solde}}</td>
            <td>{{$cpt->client->nom}} {{$cpt->client->prenom}}</td>
            <td>{{$cpt->accountType->label}}</td>
            {{-- <td>
                <a href="#" class="btn btn-info">Modifier</a>
                <a href="#" onclick="return confirm('Are you sure')" class="btn btn-danger">Supprimer</a>
            </td> --}}
        </tr>
      @endforeach
    </tbody>
</table>
@endsection
