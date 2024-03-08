@extends('master.layout')

@section('title')
    Liste des notations
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
                            <th>Nom</th>
                            <TH>Mention</TH>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($notations as $notation)
                            <tr>
                                <td>{{ $notation["DRPP"] }}</td>
                                <td>{{ $notation["Nom_Français"] }}</td>
                                <td>{{ $notation["Mention"] }}</td>
                                <td><a href="{{ route('notation.show', $notation->Ref_note) }}" class="btn btn-primary">Voir</a></td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
            <a class="btn btn-success" href="{{route('imprimer.notation')}}">Imprimer</a>
            <div class="d-flex justify-content-center my-4">
                {{ $notations->links() }}
            </div>
        </div>        
    </div>
@endsection