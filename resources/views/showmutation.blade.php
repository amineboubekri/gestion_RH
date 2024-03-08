@extends('master.layout')

@section('title')
    {{$mutation->Ref_Mutation}}
@endsection

@section('content')
    <div class="row my-5">
        <div class="col-md-8 mx-auto">
            <div class="table-responsive">
                <table class="table table-striped table-bordered">
                    <tbody>
                        <tr>
                            <th>Reference</th>
                            <td>{{ $mutation->Ref_Mutation }}</td>
                        </tr>
                        <tr>
                            <th>DRPP</th>
                            <td>{{ $mutation->DRPP }}</td>
                        </tr>
                        <tr>
                            <th>Nom</th>
                            <td>{{ $mutation->Nom_Français }}</td>
                        </tr>
                        <tr>
                            <th>Prenom</th>
                            <td>{{ $mutation->Prenom_Français }}</td>
                        </tr>
                        <tr>
                            <th>Date de mutation</th>
                            <td>{{ $mutation->date_mutation }}</td>
                        </tr>
                        <tr>
                            <th>Lieu de travail</th>
                            <td>{{ $mutation->lieu_Travail }}</td>
                        </tr>
                        <tr>
                            <th>Ville de mutation</th>
                            <td>{{ $mutation->ville_Mutation }}</td>
                        </tr>
                        
                    </tbody>
                </table>
            </div>
            <div class="d-flex justify-content-between">
            <a href="{{route('mutation.edit', $mutation->Ref_Mutation )}}" class="btn btn-warning">
                    Modifier
            </a>
            <form id="{{ $mutation->Ref_Mutation }}" action="{{route('mutation.delete',$mutation->Ref_Mutation)}}" method="post">
                    @csrf
                    @method('DELETE')
                    <button onclick="event.preventDefault();if(confirm('êtes-vous sûr ?'))document.getElementById({{ $mutation->Ref_Mutation }}).submit();" 
                    class="btn btn-danger" type="submit"> Supprimer 
                    </button>
            </form>
            <a href="{{ route('imprimer.mutation2', $mutation->DRPP) }}"> <button class="btn btn-primary">imprimer</button> </a>
            </div>     
    </div>
@endsection