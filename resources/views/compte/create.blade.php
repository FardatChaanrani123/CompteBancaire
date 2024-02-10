@extends('layout.main')
@section('content')
<div class="container">
    <form action="{{route('comptes.store')}}" class="form mb-4 col-md-4 m-auto alert alert-primary" method="POST">
        <h2 class="text-center">Formulaire</h2>
        @csrf
        <div class="mb-3">
            <label class="control-label">Solde</label>
            <input type="text" name="solde" class="form-control">
        </div>
        @error('solde')
        <div class="text-danger">{{$message}}</div>
            
        @enderror
        <div class="mb-3">
            <label for="" class="control-label">Client</label>
            <select name="client_id" id="" class="form-control">
            @foreach($clients as $cl)
            <option value="{{$cl->id}}">{{$cl->nom}}</option>
        
            @endforeach
        </select>
        </div>
        <div class="mb-3">
            <label for="" class="control-label">Type de Compte</label>
            <select name="type_account" id="" class="form-control">
                @foreach($comptes as $cpt)
                <option value="{{$cpt->id}}">{{$cpt->label}}</option>
            @endforeach
        </select>
        </div>
        <div class="mb-3">
            <button type="submit" class="btn btn-info">Enregistrer</button>
        </div>
    </form>
</div>
@endsection