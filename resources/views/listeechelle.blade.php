@extends('master.layout')

@section('title')
    Liste des echelles
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
                            <th>Designation d'echelle</th>
                            <th>Echellon</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($echelles as $echelle)
                            <tr>
                                <td>{{ $echelle["DRPP"] }}</td>
                                <td>{{ $echelle["Designation_echelle"] }}</td>
                                <td>{{ $echelle["echellon"] }}</td>
                                <td><a href="{{ route('echelle.show', $echelle->Ref_echelle) }}" class="btn btn-primary">Voir</a></td> 
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
            <a class="btn btn-success" href="{{route('imprimer.echelle')}}">Imprimer</a>
            <div class="d-flex justify-content-center my-4">
                {{ $echelles->links() }}
            </div>
        </div>        
    </div>
@endsection