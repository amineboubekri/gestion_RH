@extends('master.layout')

@section('title')
    Modifier demande 
@endsection

@section('content')
    <div class="row my-4" align="center">
        <div class="col-md-8 mx-auto">
            @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
            <div class="card">
                <div class="class-header my-4">
                    <h3 align="center" class="class-title ">
                        Modifier une demande 
                    </h3>   
                </div>
                <div class="card-body">
                    <form action="{{ route('conge.update',$conge->type_conge) }}" method="post">
                        @csrf
                        @method('PUT')
                        <div class="mb-3">
                            <label for="exampleFormControlInput1" class="form-label">Type Conge</label>
                            <input type="text" class="form-control" placeholder="Entrer le type de congé" 
                            value="{{ $conge->type_conge }}"
                            name="type_conge">
                        </div>
                        <div class="mb-3">
                            <label for="exampleFormControlInput1" class="form-label">Nom du Remplaçant</label>
                            <input type="text" class="form-control" placeholder="Entrer le nom du remplaçant" 
                            value="{{ $conge->NomRemplacent }}"
                            name="NomRemplacent">
                        </div>
                        <div class="mb-3">
                            <label for="exampleFormControlInput1" class="form-label">Nombre des jours</label>
                            <input type="number" class="form-control" placeholder="" 
                            value="{{ $conge->nbj }}"
                            name="nbj">
                        </div>
                        <div class="mb-3">
                            <label for="exampleFormControlInput1" class="form-label">Annee Conge</label>
                            <input type="number" class="form-control" placeholder="Entrer l'annee'" 
                            value="{{ $conge->AnneeConge }}"
                            name="AnneeConge">
                        </div>
                        <div class="mb-3">
                            <label for="exampleFormControlInput1" class="form-label">Date debut</label>
                            <input type="date" class="form-control" 
                            value="{{ $conge->date_debut }}"
                            name="date_debut">
                        </div>
                        <div class="mb-3">
                            <label for="exampleFormControlInput1" class="form-label">Date retour</label>
                            <input type="date" class="form-control" 
                            value="{{ $conge->date_retour }}"
                            name="date_retour">
                        </div>
                        <div class="mb-3">
                            <button class="btn btn-primary">
                                Valider
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>        
    </div>
    
@endsection