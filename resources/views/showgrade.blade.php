@extends('master.layout')

@section('title')
    {{$grades->Ref_grade}}
@endsection

@section('content')
    <div class="row my-5">
        <div class="col-md-8 mx-auto">
            <div class="table-responsive">
                <table class="table table-striped table-bordered">
                    <tbody>
                        <tr>
                            <th>Reference</th>
                            <td>{{ $grades->Ref_grade }}</td>
                        </tr>
                        <tr>
                            <th>DRPP</th>
                            <td>{{ $grades->DRPP }}</td>
                        </tr>  
                        <tr>
                            <th>Designation du grade</th>
                            <td>{{ $grades->Designation_grade }}</td>
                        </tr>
                        <tr>
                            <th>Enum</th>
                            <td>{{ $grades->Enum_grade }}</td>
                        </tr>
                      
                        <tr>
                            <th>Date du grade</th>
                            <td>{{ $grades->Date_grade }}</td>
                        </tr>
                    </tbody>
                </table>
            </div>
            <div class="d-flex justify-content-between">
                <a href="{{route('grade.edit',$grades->Ref_grade)}}" class="btn btn-warning">
                    Modifier
                </a>
                <form id="{{ $grades->Ref_grade }}" action="{{route('grade.delete',$grades->Ref_grade)}}" method="post">
                    @csrf
                    @method('DELETE')
                    <button onclick="event.preventDefault();if(confirm('êtes-vous sûr ?'))document.getElementById({{ $grades->Ref_grade }}).submit();" 
                    class="btn btn-danger" type="submit"> Supprimer 
                    </button>
                    </form>
             </div>
        </div>        
    </div>
@endsection