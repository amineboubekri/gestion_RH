@extends('master.layout')

@section('title')
    {{$allocations->Ref_allocation_familiale}}
@endsection

@section('content')
    <div class="row my-5">
        <div class="col-md-8 mx-auto">
            <div class="table-responsive">
                <table class="table table-striped table-bordered">
                    <tbody>
                        <tr>
                            <th>DRPP</th>
                            <td>{{ $allocations->DRPP }}</td>
                        </tr>
                        <tr>
                            <th>Nom</th>
                            <td>{{ $allocations->Nom_Français }}</td>
                        </tr>
                        <tr>
                            <th>Prenom</th>
                            <td>{{ $allocations->Prenom_Français }}</td>
                        </tr>
                        <tr>
                            <th>Reference</th>
                            <td>{{ $allocations->Ref_allocation_familiale }}</td>
                        </tr>
                        <tr>
                            <th>Type</th>
                            <td>{{ $allocations->Type_allocation_familiale }}</td>
                        </tr>
                        <tr>
                            <th>Valeur</th>
                            <td>{{ $allocations->Valeur_allocation_familiale }}</td>
                        </tr>
                        <tr>
                            <th>Date d'allocation</th>
                            <td>{{ $allocations->date_allocation }}</td>
                        </tr>
                        
                    </tbody>
                </table>
            </div>
            <div class="d-flex justify-content-between">
                <a href="{{route('allocation.edit',$allocations->Ref_allocation_familiale)}}" class="btn btn-warning">
                    Modifier
                </a>
                <form id="{{ $allocations->Ref_allocation_familiale }}" action="{{route('allocation.delete',$allocations->Ref_allocation_familiale)}}" method="post">
                    @csrf
                    @method('DELETE')
                    <button onclick="event.preventDefault();if(confirm('êtes-vous sûr ?'))document.getElementById({{ $allocations->Ref_allocation_familiale }}).submit();" 
                    class="btn btn-danger" type="submit"> Supprimer 
                    </button>
            </form>
            <a href="{{ route('imprimer.allo2', $allocations->DRPP) }}"> <button class="btn btn-primary">imprimer</button> </a>
            </div>
        </div>        
    </div>
@endsection