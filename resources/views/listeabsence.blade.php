@extends('master.layout')

@section('title')
    Liste des absences
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
                            <th>Nom</th>
                            <th>Date d'absence</th>
                            <th>Justification</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($absences as $absence)
                            <tr>
                                <td>{{ $absence["Nom_Français"] }}</td>
                                <td>{{ $absence["date_absence"] }}</td>
                                <td>{{ $absence["justification"] }}</td>
                                <td><a href="{{ route('absence.show', $absence->Ref_absence) }}" class="btn btn-primary">Voir</a></td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
            <a class="btn btn-success" href="{{route('imprimer.absence')}}">Imprimer</a>
            <div class="d-flex justify-content-center my-4">
                {{ $absences->links() }}
            </div>
        </div>        
    </div>
@endsection