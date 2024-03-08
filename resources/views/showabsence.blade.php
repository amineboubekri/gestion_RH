@extends('master.layout')

@section('title')
    {{$absence->Ref_absence}}
@endsection

@section('content')
    <div class="row my-5">
        <div class="col-md-8 mx-auto">
            <div class="table-responsive">
                <table class="table table-striped table-bordered">
                    <tbody>
                        <tr>
                            <th>Reference</th>
                            <td>{{ $absence->Ref_absence }}</td>
                        </tr>
                        <tr>
                            <th>DRPP</th>
                            <td>{{ $absence->DRPP }}</td>
                        </tr>
                        <tr>
                            <th>Nom</th>
                            <td>{{ $absence->Nom_Français }}</td>
                        </tr>
                        <tr>
                            <th>Prenom</th>
                            <td>{{ $absence->Prenom_Français }}</td>
                        </tr>
                        <tr>
                            <th>Date absence</th>
                            <td>{{ $absence->date_absence }}</td>
                        </tr>
                        <tr>
                            <th>Date retour</th>
                            <td>{{ $absence->date_retour }}</td>
                        </tr>
                        
                        <tr>
                            <th>Justification</th>
                            <td>{{ $absence->justification }}</td>
                        </tr>
                        <tr>
                            <th>Cause d'absence</th>
                            <td>{{ $absence->cause }}</td>
                        </tr>
                        <tr>
                            <th>Commentaire</th>
                            <td>{{ $absence->commentaire }}</td>
                        </tr>
                    </tbody>
                </table>
            </div>
            <div class="d-flex justify-content-between">
                <a href="{{route('absence.edit',$absence->Ref_absence)}}" class="btn btn-warning">
                    Modifier
                </a>
                <form id="{{ $absence->Ref_absence }}" action="{{route('absence.delete',$absence->Ref_absence)}}" method="post">
                    @csrf
                    @method('DELETE')
                    <button onclick="event.preventDefault();if(confirm('êtes-vous sûr ?'))document.getElementById({{ $absence->Ref_absence }}).submit();" 
                    class="btn btn-danger" type="submit"> Supprimer 
                    </button>
            </form>
            <a href="{{ route('imprimer.absence2', $absence->DRPP) }}"> <button class="btn btn-primary">imprimer</button> </a>
            </div>
        </div>        
    </div>
@endsection