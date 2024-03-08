@extends('master.layout')

@section('title')
    Liste des mutations
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
                            <th>Reference de mutation</th>
                            <th>Date de mutation</th>
                            <th>DRPP</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($mutations as $mutation)
                            <tr>
                                <td>{{ $mutation["Ref_Mutation"] }}</td>
                                <td>{{ $mutation["date_mutation"] }}</td>
                                <td>{{ $mutation["DRPP"] }}</td>
                                <td><a href="{{ route('mutation.show', $mutation->Ref_Mutation) }}" class="btn btn-primary">Voir</a></td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
            <a class="btn btn-success" href="{{route('imprimer.muta')}}">Imprimer</a>
            <div class="d-flex justify-content-center my-4">
                {{ $mutations->links() }}
            </div>
        </div>        
    </div>
@endsection