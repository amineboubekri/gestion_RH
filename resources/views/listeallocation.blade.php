@extends('master.layout')

@section('title')
    Liste des allocations familiales
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
                            <th>Reference d'allocation</th>
                            <th>Type d'allocation</th>
                            <th>DRPP</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($allocations as $allocation)
                            <tr>
                                <td>{{ $allocation["Ref_allocation_familiale"] }}</td>
                                <td>{{ $allocation["Type_allocation_familiale"] }}</td>
                                <td>{{ $allocation["DRPP"] }}</td>
                                <td><a href="{{ route('allocation.show', $allocation->Ref_allocation_familiale) }}" class="btn btn-primary">Voir</a></td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
            <a class="btn btn-success" href="{{route('imprimer.allo')}}">Imprimer</a>
            <div class="d-flex justify-content-center my-4">
                {{ $allocations->links() }}
            </div>
        </div>        
    </div>
@endsection