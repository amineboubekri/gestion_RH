@extends('master.layout')

@section('title')
    {{$echelles->Ref_echelle}}
@endsection

@section('content')
    <div class="row my-5">
        <div class="col-md-8 mx-auto">
            <div class="table-responsive">
                <table class="table table-striped table-bordered">
                    <tbody>
                        <tr>
                            <th>Reference</th>
                            <td>{{ $echelles->Ref_echelle }}</td>
                        </tr>
                        <tr>
                            <th>DRPP</th>
                            <td>{{ $echelles->DRPP }}</td>
                        </tr>
                        <tr>
                            <th>Designation d'echelle</th>
                            <td>{{ $echelles->Designation_echelle }}</td>
                        </tr>
                        <tr>
                            <th>Echellon</th>
                            <td>{{ $echelles->echellon }}</td>
                        </tr>
                        <tr>
                            <th>Date d'echelle</th>
                            <td>{{ $echelles->Date_echelle }}</td>
                        </tr>
                    </tbody>
                </table>
            </div>
            <div class="d-flex justify-content-between">
                <a href="{{route('echelle.edit',$echelles->Ref_echelle)}}" class="btn btn-warning">
                    Modifier
                </a>
                <form id="{{ $echelles->Ref_echelle }}" action="{{route('echelle.delete',$echelles->Ref_echelle)}}" method="post">
                    @csrf
                    @method('DELETE')
                    <button onclick="event.preventDefault();if(confirm('êtes-vous sûr ?'))document.getElementById({{ $echelles->Ref_echelle }}).submit();" 
                    class="btn btn-danger" type="submit"> Supprimer 
                    </button>
                    </form>
                    <a href="{{ route('imprimer.echelle2', $echelles->DRPP) }}"> <button class="btn btn-primary">imprimer</button> </a>
             </div>
        </div>        
    </div>
@endsection