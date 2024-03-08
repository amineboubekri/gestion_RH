@extends('master.layout')

@section('title')
    Liste des congés
@endsection

@section('content')
    <div class="row my-5">
        <div class="col-md-8 mx-auto">
            @if(session()->has('success'))
                <div class="alert alert-success">
                    {{ session()->get('success') }}
                </div>
            @endif

            <div class="d-flex justify-content-between">
                <div class="input-group mb-3">
                    <form method="GET" action="{{ route('conge.list') }}" class="form-inline">
                        @csrf
                        <div class="form-group mr-2">
                            <label for="year-filter" class="mr-2"></label>
                            <div class="input-group">
                                <select name="year-filter" id="year-filter" class="form-control">
                                    <option value="">Choisir l'année</option>
                                    @foreach($years as $year)
                                        <option value="{{ $year }}" @if($year == $selectedYear) selected @endif>{{ $year }}</option>
                                    @endforeach
                                </select>
                                <div class="input-group-append">
                                    <button type="submit" class="btn btn-primary">Filtrer</button>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>

            <div class="table-responsive">
                <table class="table table-striped table-bordered" id="congeTable">
                    <thead>
                        <tr>
                            <th>Nom</th>
                            <th>Nombre de jours</th>
                            <th>Année</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($conges as $conge)
                            <tr>
                                <td>{{ $conge->Nom_Français }}</td>
                                <td>{{ $conge->nbj }}</td>
                                <td>{{ $conge->AnneeConge }}</td>
                                <td><a href="{{ route('conge.show', $conge->DRPP) }}" class="btn btn-primary">Voir</a></td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
                <a class="btn btn-success" href="{{ route('imprimer.conge') }}">Imprimer</a>
                
            </div>

        </div>
    </div>
@endsection