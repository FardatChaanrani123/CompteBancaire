
@extends('layout.main')

@section('content')
<br>
<br>
        <div class="container">
            <form action="{{route('clients.store')}}" class="form col-md-6 m-auto alert alert-primary" method="POST">
                @csrf
                <div class="mb-3">
                    <label for="" class="contol-label">CNI</label>
                    <input type="text" class="form-control input-lg" name="CNI">
                </div>
                <div class="mb-3">
                    <label for="" class="contol-label">Nom</label>
                    <input type="text" class="form-control input-lg" name="nom">
                </div>
                <div class="mb-3">
                    <label for="" class="contol-label">Preom</label>
                    <input type="text" class="form-control input-lg" name="prenom">
                </div>
                <div class="mb-3">
                    <label for="" class="contol-label">Adresse</label>
                    <input type="text" class="form-control input-lg" name="adresse">
                </div>
                <div class="mb-3">
                    <label for="" class="contol-label">Naissance</label>
                    <input type="date" class="form-control input-lg" name="naissance">
                </div>
                <div class="mb-3">
                    <button type="submit" name="envoyer" class="btn btn-success">
                        Envoyer
                    </button>
                </div>
            </form>
        </div>
        @endsection
 