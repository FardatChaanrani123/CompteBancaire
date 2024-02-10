@extends('layout.main')
@section('content')
<br>
<br>
    <div class="container">
        <a href="{{route('clients.create')}}" class="btn btn-info">Ajout Client</a>
       
        @if (session('success'))
        <div class="alert alert-success">
            {{session('success')}}
        </div>
        @endif
        @if (session('danger'))
        <div class="alert alert-danger">
            {{session('danger')}}
        </div>
        @endif
        <div class="row justify-content-center">
            <div class="col-sm-10">
                <table class="table table-bordered border-dark table-striped table-hover">
                    <caption class="text-dark text-uppercase fw-bold fs-3 caption-top text-center mb-4">
                        <strong>Affichage des Clients</strong>
                    </caption>
                    <thead class="table-dark text-center">
                <tr>
                    <td>Id</td>
                    <td>CNI</td>
                    <td>Nom</td>
                    <td>Prenom</td>
                    <td>Adresse</td>
                    <td>Naissance</td>
                    <td>Action1</td>
                    <td>Action2</td>
                    <td>show Client</td>
                </tr>
            </thead>
            <tbody>
                @foreach($client as $cl)
                    <tr>
                        <td>{{$cl->id}}</td>
                        <td>{{$cl->CNI}}</td>
                        <td>{{$cl->nom}}</td>
                        <td>{{$cl->prenom}}</td>
                        <td>{{$cl->adresse}}</td>
                        <td>{{$cl->naissance}}</td>
                        <td><a href="{{route('clients.edit',$cl->id)}}" class="btn btn-primary" >Edit</a></td>  
                        <form action="{{route('clients.destroy',$cl->id)}}" method="POST">
                            @csrf
                            @method('DELETE')
                            <td>
                               <button type="submit" class="btn btn-danger">Delete</button>
                            </td>
                        </form>
                        <td>
                            <a href="{{route('clients.show',$cl->id)}}" class="btn btn-success">Display</a>
                        </td>  
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
    </div>
</body>
</html>
@endsection