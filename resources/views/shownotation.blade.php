@extends('master.layout')

@section('title')
    Notation N {{$notations->Ref_note}}
@endsection

@section('content')
    <div class="row my-5">
        <div class="col-md-8 mx-auto">
            <div class="table-responsive">
                <table class="table table-striped table-bordered">
                    <tbody>
                        
                        <tr>
                            <th>Reference</th>
                            <td>{{ $notations->Ref_note }}</td>
                        </tr>
                        <tr>
                            <th>DRPP</th>
                            <td>{{ $notations->DRPP }}</td>
                        </tr>
                        <tr>
                            <th>Nom</th>
                            <td>{{ $notations->Nom_Français }}</td>
                        </tr>
                        <tr>
                            <th>Prenom</th>
                            <td>{{ $notations->Prenom_Français }}</td>
                        </tr>
                        <tr>
                            <th>Note appliquée</th>
                            <td>{{ $notations->Note_appliquee }}</td>
                        </tr>
                        <tr>
                            <th>Note de rentabilité</th>
                            <td>{{ $notations->Note_rentabilite }}</td>
                        </tr>
                        <tr>
                            <th>Note de capacite</th>
                            <td>{{ $notations->Note_capacite }}</td>
                        </tr>
                        <tr>
                            <th>Note du comportement professionnel</th>
                            <td>{{ $notations->Note_comportement_professionnel }}</td>
                        </tr>
                        <tr>
                            <th>Note de recherche</th>
                            <td>{{ $notations->Note_recherche }}</td>
                        </tr>
                        <tr>
                            <th>Mention</th>
                            <td>{{ $notations->Mention }}</td>
                        </tr>
                        <tr>
                            <th>Commentaire</th>
                            <td>{{ $notations->Commentaire }}</td>
                        </tr>
                        <tr>
                            <th>Annee</th>
                            <td>{{ $notations->Annee }}</td>
                        </tr>
                        
                    </tbody>
                </table>
            </div>
            <div class="d-flex justify-content-between">
            <a href="{{route('notation.edit', $notations->Ref_note )}}" class="btn btn-warning">
                    Modifier
            </a>
            <form id="{{ $notations->Ref_note }}" action="{{route('notation.delete',$notations->Ref_note)}}" method="post">
                    @csrf
                    @method('DELETE')
                    <button onclick="event.preventDefault();if(confirm('êtes-vous sûr ?'))document.getElementById({{ $notations->Ref_note }}).submit();" 
                    class="btn btn-danger" type="submit"> Supprimer 
                    </button>
            </form>
            <a href="{{ route('imprimer.notation2', $notations->DRPP) }}"> <button class="btn btn-primary">imprimer</button> </a>
            </div>     
    </div>
@endsection