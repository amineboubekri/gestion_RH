@extends('master.layout')

@section('title')
    {{$diplomes->Ref_diplome}}
@endsection

@section('content')
    <div class="row my-5">
        <div class="col-md-8 mx-auto">
            <div class="table-responsive">
                <table class="table table-striped table-bordered">
                    <tbody>
                        <tr>
                            <th>Reference</th>
                            <td>{{ $diplomes->Ref_diplome }}</td>
                        </tr>
                        <tr>
                            <th>Nom diplome</th>
                            <td>{{ $diplomes->Nom_diplome }}</td>
                        </tr>
                        <tr>
                            <th>Nom</th>
                            <td>{{ $diplomes->Nom_Français }}</td>
                        </tr>
                        <tr>
                            <th>Nom diplome</th>
                            <td>{{ $diplomes->Prenom_Français }}</td>
                        </tr>
                        <tr>
                            <th>Specialité</th>
                            <td>{{ $diplomes->Specialite }}</td>
                        </tr>
                        <tr>
                            <th>Date d'obtention</th>
                            <td>{{ $diplomes->Date_obtention }}</td>
                        </tr>
                        <tr>
                            <th>Ville</th>
                            <td>{{ $diplomes->Ville_diplome }}</td>
                        </tr>
                        <tr>
                            <th>DRPP</th>
                            <td>{{ $diplomes->DRPP }}</td>
                        </tr>
                    </tbody>
                </table>
            </div>
            <div class="d-flex justify-content-between">
                <a href="{{route('diplome.edit',$diplomes->Ref_diplome)}}" class="btn btn-warning">
                    Modifier
                </a>
                <form id="{{ $diplomes->Ref_diplome }}" action="{{route('diplome.delete',$diplomes->Ref_diplome)}}" method="post">
                    @csrf
                    @method('DELETE')
                    <button onclick="event.preventDefault();if(confirm('êtes-vous sûr ?'))document.getElementById({{ $diplomes->Ref_diplome }}).submit();" 
                    class="btn btn-danger" type="submit"> Supprimer 
                    </button>
                    </form>
                    <a href="{{ route('imprimer.diplome2', $diplomes->DRPP) }}"> <button class="btn btn-primary">imprimer</button> </a>
             </div>
        </div>        
    </div>
@endsection