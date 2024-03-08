@extends('master.layout')

@section('title')
    Ajouter Employé
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
                        Ajouter un employé
                    </h3>   
                </div>
                <div class="card-body">
                    <form action="{{ route('empl.store') }}" method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="mb-3">
                            <label for="exampleFormControlInput1" class="form-label">DRPP</label>
                            <input type="number" class="form-control" placeholder="Entrer le DRPP" name="DRPP">
                        </div>
                        <div class="mb-3">
                            <label for="exampleFormControlInput1" class="form-label">Numero de poste</label>
                            <input type="text" class="form-control" placeholder="Entrer le numero de poste" name="Num_poste">
                        </div>
                        <div class="mb-3">
                            <label for="exampleFormControlInput1" class="form-label">Affiliation Financiere</label>
                            <input type="text" class="form-control" placeholder="Entrer l'affiliation financiere" name="Affiliation_Financiere">
                        </div>
                        <div class="mb-3">
                            <label for="exampleFormControlInput1" class="form-label">Nom employe</label>
                            <input type="text" class="form-control" placeholder="Entrer le nom" name="Nom">
                        </div>
                        <div class="mb-3">
                            <label for="exampleFormControlInput1" class="form-label">Prenom employe</label>
                            <input type="text" class="form-control" placeholder="Entrer le prenom " name="Prenom">
                        </div>
                        <div class="mb-3">
                            <label for="exampleFormControlInput1" class="form-label">Nom en français</label>
                            <input type="text" class="form-control" placeholder="Entrer le nom en français" name="Nom_Français">
                        </div>
                        <div class="mb-3">
                            <label for="exampleFormControlInput1" class="form-label">Prenom en français</label>
                            <input type="text" class="form-control" placeholder="Entrer le prenom en français" name="Prenom_Français">
                        </div>
                        <div class="mb-3">
                            <label for="exampleFormControlInput1" class="form-label">Affiliation Financiere</label>
                            <input type="text" class="form-control" placeholder="Entrer l'affiliation financiere" name="Affiliation_Financiere">
                        </div>
                        <div class="mb-3">
                            <label for="exampleFormControlInput1" class="form-label">CIN</label>
                            <input type="text" class="form-control" placeholder="Entrer le CIN" name="CIN">
                        </div>
                        <div class="mb-3">
                            <label for="exampleFormControlInput1" class="form-label">Date naissance</label>
                            <input type="date" class="form-control" name="date_naissance">
                        </div>
                        <div class="mb-3">
                            <label for="exampleFormControlInput1" class="form-label">Lieu de naissance</label>
                            <input type="text" class="form-control" placeholder="Entrer le lieu de naissance" name="Lieu_Naissance">
                        </div>
                        <div class="mb-3">
                            <label for="exampleFormControlInput1" class="form-label">Adresse</label>
                            <input type="text" class="form-control" placeholder="Entrer l'adresse" name="Adresse">
                        </div>
                        <div class="mb-3">
                            <label for="exampleFormControlInput1" class="form-label">Telephone</label>
                            <input type="text" class="form-control" placeholder="Entrer le numero de telephone" name="Telephone">
                        </div>
                        <div class="mb-3">
                            <label for="exampleFormControlInput1" class="form-label">Situation Familiale</label>
                            <input type="text" class="form-control" placeholder="Entrer la situation familiale" name="Situation_Familiale">
                        </div>
                        <div class="mb-3">
                            <label for="exampleFormControlInput1" class="form-label">Nombre d'enfants</label>
                            <input type="number" class="form-control" placeholder="Entrer le nombre d'enfants" name="Nombre_enfant">
                        </div>
                        <div class="mb-3">
                            <label for="exampleFormControlInput1" class="form-label">Lieu de travail</label>
                            <input type="text" class="form-control" placeholder="Entrer le lieu de travail" name="Lieu_Travail">
                        </div>
                        <div class="mb-3">
                            <label for="exampleFormControlInput1" class="form-label">Date d'emboche</label>
                            <input type="date" class="form-control" name="date_emboche">
                        </div>
                        <div class="mb-3">
                            <label for="exampleFormControlInput1" class="form-label">Situation administrative</label>
                            <input type="text" class="form-control" placeholder="Entrer la situation administrative" name="Situation_Administrative">
                        </div>
                        <div class="mb-3">
                            <label for="exampleFormControlInput1" class="form-label">Date du recrutement</label>
                            <input type="date" class="form-control" name="date_recrutement">
                        </div>
                        <div class="mb-3">
                            <label for="exampleFormControlInput1" class="form-label">Image</label>
                            <input type="file" class="form-control" name="image">
                        </div>
                        <div class="mb-3">
                            <br>
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