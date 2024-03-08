@extends('master.layout')

@section('title')
    {{$motivations->Ref_motivation}}
@endsection

@section('content')
    <div class="row my-5">
        <div class="col-md-8 mx-auto">
            <div class="table-responsive">
                <table class="table table-striped table-bordered">
                    <tbody>
                        <tr>
                            <th>Reference</th>
                            <td>{{ $motivations->Ref_motivation }}</td>
                        </tr>
                        <tr>
                            <th>DRPP</th>
                            <td>{{ $motivations->DRPP }}</td>
                        </tr> 
                        <tr>
                            <th>Nom</th>
                            <td>{{ $motivations->Nom_Français }}</td>
                        </tr>  
                        <tr>
                            <th>Prenom</th>
                            <td>{{ $motivations->Prenom_Français }}</td>
                        </tr>   
                        <tr>
                            <th>Type de motivation</th>
                            <td>{{ $motivations->Type_motivation }}</td>
                        </tr>
                        <tr>
                            <th>Occasion</th>
                            <td>{{ $motivations->Occasion }}</td>
                        </tr>
                      
                        <tr>
                            <th>Date motivation</th>
                            <td>{{ $motivations->Date_motivation }}</td>
                        </tr>
                        <tr>
                            <th>Commentaire</th>
                            <td>{{ $motivations->Commentaire }}</td>
                        </tr>
                    </tbody>
                </table>
            </div>
            <div class="d-flex justify-content-between">
                <a href="{{route('motivation.edit',$motivations->Ref_motivation)}}" class="btn btn-warning">
                    Modifier
                </a>
                <form id="{{ $motivations->Ref_motivation }}" action="{{route('motivation.delete',$motivations->Ref_motivation)}}" method="post">
                    @csrf
                    @method('DELETE')
                    <button onclick="event.preventDefault();if(confirm('êtes-vous sûr ?'))document.getElementById({{ $motivations->Ref_motivation }}).submit();" 
                    class="btn btn-danger" type="submit"> Supprimer 
                    </button>
                    </form>
                    <a href="{{ route('imprimer.motivation2', $motivations->DRPP) }}"> <button class="btn btn-primary">imprimer</button> </a>
             </div>
        </div>        
    </div>
@endsection