@extends('master.layout')

@section('title')
    Ajouter demande
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
                        Ajouter une demande 
                    </h3>   
                </div>
                <div class="card-body">
                    <form action="{{ route('conge.store')}}" method="post">
                        @csrf
    
                        <div class="mb-3">
                            <label for="exampleFormControlInput1" class="form-label">Type Conge</label>
                            <input type="text" class="form-control" placeholder="Entrer le type de congé" name="type_conge" id="type-conge-input">
                        </div>
                        <div class="mb-3">
                            <label for="exampleFormControlInput1" class="form-label">DRPP</label>
                            <input type="texr" class="form-control" placeholder="Entrer le DRPP de l'employé" name="DRPP" id="drpp-input">
                        </div>
                        <div class="mb-3">
                            <label for="exampleFormControlInput1" class="form-label">Nom du Remplaçant</label>
                            <input type="text" class="form-control" placeholder="Entrer le nom du remplaçant" name="NomRemplacent">
                        </div>
                        <div class="mb-3">
                            <label for="exampleFormControlInput1" class="form-label">Date debut</label>
                            <input type="date" class="form-control" name="date_debut" id="date-debut-input">
                        </div>
                        <div class="mb-3">
                            <label for="exampleFormControlInput1" class="form-label">Date retour</label>
                            <input type="date" class="form-control" name="date_retour" id="date-retour-input">
                        </div>
                        <div class="mb-3">
                            <label for="exampleFormControlInput1" class="form-label">Nombre des jours</label>
                            <input type="number" class="form-control" placeholder="" name="nbj" id="nbj-input" readonly>
                        </div>
                        <div class="mb-3">
                            <label for="exampleFormControlInput1" class="form-label">Annee Conge</label>
                            <input type="number" class="form-control" placeholder="Entrer l'année" name="AnneeConge">
                        </div>
                        
                        <div class="mb-3">
                            <label for="exampleFormControlInput1" class="form-label">Motif</label>
                            <input type="text" class="form-control" name="Motif">
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
    <script>
        $(document).ready(function(){
            $('#date-debut-input, #date-retour-input').on('change', function() {
                var dateDebut = new Date($('#date-debut-input').val());
                var dateRetour = new Date($('#date-retour-input').val());

                if (dateDebut && dateRetour && dateDebut <= dateRetour) {
                    var diffInTime = dateRetour.getTime() - dateDebut.getTime();
                    var diffInDays = Math.ceil(diffInTime / (1000 * 3600 * 24)) + 1;
                    $('#nbj-input').val(diffInDays);
                } else {
                    $('#nbj-input').val('');
                }
            });

            $('#type-conge-input').on('input', function() {
                var typeConge = $(this).val();
                var nbj;

                if (typeConge == 'conge annuel') {
                    nbj = 60; 
                } else if (typeConge == 'maladie') {
                    nbj = 7; 
                } else if (typeConge == 'congé de naissance') {
                    nbj = 15; 
                } else {
                    nbj = 0;
                }

                $('#nbj-input').val(nbj);
            });

            $('#drpp-input').on('input', function() {
                var drpp = $(this).val();
                // Perform any desired validation or calculation based on the DRPP value
            });
        });
    </script>
@endsection
