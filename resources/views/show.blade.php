@extends('master.layout')

@section('title')
    {{$conge->DRPP}}
@endsection

@section('content')
    <div class="row my-5">
        <div class="col-md-8 mx-auto">
            <div class="table-responsive">
                <table class="table table-striped table-bordered" id="congeTable">
                    <tbody>
                        <tr>
                            <th>ID</th>
                            <td>{{ $conge->id }}</td>
                        </tr>
                        <tr>
                            <th>DRPP</th>
                            <td>{{ $conge->DRPP }}</td>
                        </tr>
                        <tr>
                            <th>Nom</th>
                            <td>{{ $conge->Nom_Français }}</td>
                        </tr>
                        <tr>
                            <th>Prenom</th>
                            <td>{{ $conge->Prenom_Français }}</td>
                        </tr>
                        <tr>
                            <th>Nombre de jours</th>
                            <td>{{ $conge->nbj }}</td>
                        </tr>
                        <tr>
                            <th>Type de congé</th>
                            <td>{{ $conge->type_conge }}</td>
                        </tr>
                        <tr>
                            <th>Nom du remplaçant</th>
                            <td>{{ $conge->NomRemplacent }}</td>
                        </tr>
                        <tr>
                            <th>Année de congé</th>
                            <td>{{ $conge->AnneeConge }}</td>
                        </tr>
                        <tr>
                            <th>Date de début</th>
                            <td>{{ $conge->date_debut }}</td>
                        </tr>
                        <tr>
                            <th>Date de retour</th>
                            <td>{{ $conge->date_retour }}</td>
                        </tr>
                        <tr>
                            <th>Motif</th>
                            <td>{{ $conge->Motif }}</td>
                        </tr>
                    </tbody>
                </table>
            </div>
            <div class="d-flex justify-content-between">
                <a href="{{route('conge.edit',$conge->type_conge)}}" class="btn btn-warning">
                    Modifier
                </a>
                <form id="{{ $conge->id }}" action="{{route('conge.delete',$conge->type_conge)}}" method="post">
                    @csrf
                    @method('DELETE')
                    <button onclick="event.preventDefault();if(confirm('êtes-vous sûr ?'))document.getElementById({{ $conge->id }}).submit();" class="btn btn-danger">
                        Supprimer
                    </button>
                </form> 
                <a href="{{ route('imprimer.conge2', $conge->DRPP) }}"> <button class="btn btn-primary">imprimer</button> </a>
            </div>
            
           
            
        </div>
    </div>
   
@endsection