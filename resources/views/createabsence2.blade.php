@extends('master.layout')

@section('title')
    Ajouter absence
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
            @if(auth()->check())
            <div class="card">
                <div class="class-header my-4">
                    <h3 align="center" class="class-title ">
                        Ajouter une absence
                    </h3>   
                </div>
                <div class="card-body">
                    <form action="{{ route('absence.store', $personne->DRPP) }}" method="post">
                        @csrf
                        
                        <div class="mb-3">
                            <label for="exampleFormControlInput1" class="form-label">DRPP</label>
                            <input type="text" class="form-control" placeholder="Entrer le DRPP d'employé" 
                            value="{{ $personne->DRPP }}" 
                            name="DRPP" readonly>
                        </div>
                        <div class="mb-3">
                            <label for="exampleFormControlInput1" class="form-label">Nom</label>
                            <input type="text" class="form-control" placeholder="Entrer " 
                            value="{{ $personne->Nom_Français }}" 
                            name="Nom_Français" readonly>
                        </div>
                        <div class="mb-3">
                            <label for="exampleFormControlInput1" class="form-label">Prenom</label>
                            <input type="text" class="form-control" placeholder="Entrer" 
                            value="{{ $personne->Prenom_Français }}" 
                            name="Prenom_Français" readonly>
                        </div>
                        <div class="mb-3">
                            <label for="exampleFormControlInput1" class="form-label">Date absence</label>
                            <input type="date" class="form-control" placeholder="" name="date_absence">
                        </div>
                        <div class="mb-3">
                            <label for="exampleFormControlInput1" class="form-label">Date de retour</label>
                            <input type="date" class="form-control" placeholder="" name="date_retour">
                        </div>
                        
                        <div class="mb-3">
                            <label for="exampleFormControlInput1" class="form-label">Justification</label>
                            <input type="text" class="form-control" placeholder="Entrer la justification" name="justification">
                        </div>
                        <div class="mb-3">
                            <label for="exampleFormControlInput1" class="form-label">Cause d'absence</label>
                            <input type="text" class="form-control" placeholder="Entrer la cause d'absence" name="cause">
                        </div>
                        <div class="mb-3">
                            <label for="exampleFormControlInput1" class="form-label">Commentaire</label>
                            <input type="text" class="form-control" placeholder="Saisir un commentaire" name="commentaire">
                        </div>
                        <div class="mb-3">
                            <button class="btn btn-primary">
                                Valider
                            </button>
                        </div>
                    </form>
                </div>
            </div>
            @else
            <h1>Veuillez se connecter</h1>
            <a href="{{ route('login') }}">Se connecter</a>
            @endif
        </div>        
    </div>
@endsection