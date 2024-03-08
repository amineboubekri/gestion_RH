@extends('master.layout')

@section('title')
    Ajouter mission
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
                        Ajouter une mission 
                    </h3>   
                </div>
                <div class="card-body">
                    <form action="{{ route('mission.store', $personne->DRPP) }}" method="post">
                        @csrf
                        <div class="mb-3">
                            <label for="exampleFormControlInput1" class="form-label">DRPP</label>
                            <input type="text" class="form-control" placeholder="Entrer le DRPP" 
                            value="{{ $personne->DRPP }}"
                            name="DRPP" readonly>
                        </div>
                        <div class="mb-3">
                            <label for="exampleFormControlInput1" class="form-label">Nom</label>
                            <input type="text" class="form-control" placeholder="Entrer le DRPP" 
                            value="{{ $personne->Nom_Français }}"
                            name="Nom_Français" readonly>
                        </div>
                        <div class="mb-3">
                            <label for="exampleFormControlInput1" class="form-label">Prenom</label>
                            <input type="text" class="form-control" placeholder="Entrer le DRPP" 
                            value="{{ $personne->Prenom_Français }}"
                            name="Prenom_Français" readonly>
                        </div>
                        <div class="mb-3">
                            <label for="exampleFormControlInput1" class="form-label">Objet de mission</label>
                            <input type="text" class="form-control" placeholder="Entrer l'objet de mission" name="Objet_mission">
                        </div>
                        <div class="mb-3">
                            <label for="exampleFormControlInput1" class="form-label">Ville </label>
                            <input type="text" class="form-control" placeholder="Entrer la ville de mission " name="Ville_mission">
                        </div>
                        <div class="mb-3">
                            <label for="exampleFormControlInput1" class="form-label">Date du debut</label>
                            <input type="date" class="form-control" placeholder="" name="Date_debut">
                        </div>
                        <div class="mb-3">
                            <label for="exampleFormControlInput1" class="form-label">Date du retour</label>
                            <input type="date" class="form-control" placeholder="" name="Date_retour">
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