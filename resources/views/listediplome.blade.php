@extends('master.layout')

@section('title')
    Liste des diplomes
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
                            <th>Nom de diplome</th>
                            <th>Specialité</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($diplomes as $diplome)
                            <tr>
                                <td>{{ $diplome["DRPP"] }}</td>
                                <td>{{ $diplome["Nom_diplome"] }}</td>
                                <td>{{ $diplome["Specialite"] }}</td>
                                <td><a href="{{ route('diplome.show', $diplome->Ref_diplome) }}" class="btn btn-primary">Voir</a></td> 
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
            <a class="btn btn-success" href="{{route('imprimer.diplome')}}">Imprimer</a>
            <div class="d-flex justify-content-center my-4">
                {{ $diplomes->links() }}
            </div>
        </div>        
    </div>
@endsection