@extends('layout.main')
@section('content')
<div class="container">
    <div class="shadow-lg mt-4">
        <div class="row">
        
            <p class="fs-3 fw-bold">{{$client->CNI}}</p>
            <p class="fs-3 fw-bold">{{$client->nom}}</p>
            <p class="fs-3 fw-bold">{{$client->prenom}}</p>
            <p class="fs-3 fw-bold">{{$client->adresse}}</p>
            <p class="fs-3 fw-bold">{{$client->naissance}}</p>
            
        </div>
    </div>
</div>
@endsection