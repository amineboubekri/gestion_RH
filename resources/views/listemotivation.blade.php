@extends('master.layout')

@section('title')
    Liste des motivations
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
                            <th>Type de motivation</th>
                            <th>Nom</th>
                            <th>Prenom</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($motivations as $motivation)
                            <tr>
                                <td>{{ $motivation["Type_motivation"] }}</td>
                                <td>{{ $motivation["Nom_Français"] }}</td>
                                <td>{{ $motivation["Prenom_Français"] }}</td>
                                <td><a href="{{ route('motivation.show', $motivation->Ref_motivation) }}" class="btn btn-primary">Voir</a></td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
            <a class="btn btn-success" href="{{route('imprimer.motivation')}}">Imprimer</a>
            <div class="d-flex justify-content-center my-4">
                {{ $motivations->links() }}
            </div>
        </div>        
    </div>
@endsection