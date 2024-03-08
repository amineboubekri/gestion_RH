@extends('master.layout')

@section('title')
    Liste des grades
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
                            <th>Designation de grade</th>
                            <th>DRPP</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($grades as $grade)
                            <tr>
                                <td>{{ $grade["Designation_grade"] }}</td>
                                <td>{{ $grade["DRPP"] }}</td>
                                <td><a href="{{ route('grade.show', $grade->Ref_grade) }}" class="btn btn-primary">Voir</a></td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
            <div class="d-flex justify-content-center my-4">
                {{ $grades->links() }}
            </div>
        </div>        
    </div>
@endsection