<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{asset('bootstrap/css/bootstrap.min.css')}}">
    <title>Document</title>
</head>
<body>
    <div class="container">
        <h1 class="text-center text-primary">Formulaire</h1>
        <form action="{{route('clients.update',$client->id)}}" class="form col-md-6 m-auto" method="POST">
            @csrf
            @method('PATCH')
            <div class="mb-3">
                <label for="" class="contol-label">CNI</label>
                <input type="text" class="form-control input-lg" name="CNI" value="{{$client->CNI}}">
            </div>
            <div class="mb-3">
                <label for="" class="contol-label">Nom</label>
                <input type="text" class="form-control input-lg" name="nom" value="{{$client->nom}}">
            </div>
            <div class="mb-3">
                <label for="" class="contol-label">Preom</label>
                <input type="text" class="form-control input-lg" name="prenom" value="{{$client->prenom}}">
            </div>
            <div class="mb-3">
                <label for="" class="contol-label">Adresse</label>
                <input type="text" class="form-control input-lg" name="adresse" value="{{$client->adresse}}">
            </div>
            <div class="mb-3">
                <label for="" class="contol-label">Naissance</label>
                <input type="date" class="form-control input-lg" name="naissance" value="{{$client->naissance}}">
            </div>
            <div class="mb-3">
                <button type="submit"  class="btn btn-success">
                    Modifier
                </button>
            </div>
        </form>
    </div>
</body>
</html>