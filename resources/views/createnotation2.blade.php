@extends('master.layout')

@section('title')
    Ajouter notation
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
                        Ajouter une notation
                    </h3>   
                </div>
                <div class="card-body">
                    <form action="{{ route('notation.store', $personne->DRPP) }}" method="post">
                        @csrf
                        <div class="mb-3">
                            <label for="exampleFormControlInput1" class="form-label">DRPP</label>
                            <input type="text" class="form-control" placeholder="Inserez le DRPP" 
                            value="{{ $personne->DRPP }}"
                            name="DRPP" readonly>
                        </div>
                        <div class="mb-3">
                            <label for="exampleFormControlInput1" class="form-label">Nom</label>
                            <input type="text" class="form-control" placeholder="Inserez le DRPP" 
                            value="{{ $personne->Nom_Français }}"
                            name="Nom_Français" readonly>
                        </div>
                        <div class="mb-3">
                            <label for="exampleFormControlInput1" class="form-label">Prenom</label>
                            <input type="text" class="form-control" placeholder="Inserez le DRPP" 
                            value="{{ $personne->Prenom_Français }}"
                            name="Prenom_Français" readonly>
                        </div>
                        <div class="mb-3">
                            <label for="exampleFormControlInput1" class="form-label">Note appliquée</label>
                            <input type="text" class="form-control" placeholder="Inserez la note" name="Note_appliquee">
                        </div>
                        <div class="mb-3">
                            <label for="exampleFormControlInput1" class="form-label">Note de rentabilite</label>
                            <input type="text" class="form-control" placeholder="Inserez la note" name="Note_rentabilite">
                        </div>
                        <div class="mb-3">
                            <label for="exampleFormControlInput1" class="form-label">Note de capacite</label>
                            <input type="text" class="form-control" placeholder="Inserez la note" name="Note_capacite">
                        </div>
                        <div class="mb-3">
                            <label for="exampleFormControlInput1" class="form-label">Note du comportement professionnel</label>
                            <input type="text" class="form-control" placeholder="Inserez la note" name="Note_comportement_professionnel">
                        </div>
                        <div class="mb-3">
                            <label for="exampleFormControlInput1" class="form-label">Note du recherche</label>
                            <input type="text" class="form-control" placeholder="Inserez la note" name="Note_recherche">
                        </div>
                        <div class="mb-3">
                            <label for="exampleFormControlInput1" class="form-label">Mention</label>
                            <input type="text" class="form-control" placeholder="Inserez la mention" name="Mention">
                        </div>
                        <div class="mb-3">
                            <label for="exampleFormControlInput1" class="form-label">Commentaire</label>
                            <input type="text" class="form-control" placeholder="Inserez le Commentaire" name="Commentaire">
                        </div>
                        <div class="mb-3">
                            <label for="exampleFormControlInput1" class="form-label">Année</label>
                            <input type="text" class="form-control" placeholder="Inserez l'annee" name="Annee">
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