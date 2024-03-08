@extends('master.layout')

@section('title')
    {{$missions->Ref_mission}}
@endsection

@section('content')
    <div class="row my-5">
        <div class="col-md-8 mx-auto">
            <div class="table-responsive">
                <table class="table table-striped table-bordered">
                    <tbody>
                        <tr>
                            <th>Reference</th>
                            <td>{{ $missions->Ref_mission }}</td>
                        </tr>
                        <tr>
                            <th>DRPP</th>
                            <td>{{ $missions->DRPP }}</td>
                        </tr> 
                        <tr>
                            <th>Nom</th>
                            <td>{{ $missions->Nom_Français }}</td>
                        </tr>  
                        <tr>
                            <th>Prenom</th>
                            <td>{{ $missions->Prenom_Français }}</td>
                        </tr>   
                        <tr>
                            <th>Objet de mission</th>
                            <td>{{ $missions->Objet_mission }}</td>
                        </tr>
                        <tr>
                            <th>Ville</th>
                            <td>{{ $missions->Ville_mission }}</td>
                        </tr>
                      
                        <tr>
                            <th>Date debut</th>
                            <td>{{ $missions->Date_debut }}</td>
                        </tr>
                        <tr>
                            <th>Date retour</th>
                            <td>{{ $missions->Date_retour }}</td>
                        </tr>
                    </tbody>
                </table>
            </div>
            <div class="d-flex justify-content-between">
                <a href="{{route('mission.edit',$missions->Ref_mission)}}" class="btn btn-warning">
                    Modifier
                </a>
                <form id="{{ $missions->Ref_mission }}" action="{{route('mission.delete',$missions->Ref_mission)}}" method="post">
                    @csrf
                    @method('DELETE')
                    <button onclick="event.preventDefault();if(confirm('êtes-vous sûr ?'))document.getElementById({{ $missions->Ref_mission }}).submit();" 
                    class="btn btn-danger" type="submit"> Supprimer 
                    </button>
                    </form>
                    <a href="{{ route('imprimer.mission2', $missions->DRPP) }}"> <button class="btn btn-primary">imprimer</button> </a>
             </div>
        </div>        
    </div>
@endsection