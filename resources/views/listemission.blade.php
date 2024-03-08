@extends('master.layout')

@section('title')
    Liste des missions
@endsection

@section('content')
    <div class="row my-5">
        <div class="col-md-8 mx-auto">
            @if( session()->has('success') )
                <div class="alert alert-success">
                    {{ session()->get('success') }}
                </div>
            @endif
            <div class="table-responsive">
                <table class="table table-striped table-bordered">
                    <thead>
                        <tr>
                            <th>DRPP</th>
                            <th>Objet de mission</th>
                            <th>Ville</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($missions as $mission)
                            <tr>
                                <td>{{ $mission["DRPP"] }}</td>
                                <td>{{ $mission["Objet_mission"] }}</td>
                                <td>{{ $mission["Ville_mission"] }}</td>
                                <td><a href="{{ route('mission.show', $mission->Ref_mission) }}" class="btn btn-primary">Voir</a></td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
            <a class="btn btn-success" href="{{route('imprimer.mission')}}">Imprimer</a>
            <div class="d-flex justify-content-center my-4">
                {{ $missions->links() }}
            </div>
        </div>        
    </div>
@endsection