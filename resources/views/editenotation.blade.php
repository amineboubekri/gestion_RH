@extends('master.layout')

@section('title')
    Modifier mutation
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
                        Modifier une mutation
                    </h3>   
                </div>
                <div class="card-body">
                    <form action="{{ route('notation.update',$notations->Ref_note) }}" method="post" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')
                        <div class="mb-3">
                            <label for="exampleFormControlInput1" class="form-label">Note appliquée</label>
                            
                            <input type="number" class="form-control" placeholder="Inserez la note" 
                            value="{{ $notations->Note_appliquee }}"
                            name="Note_appliquee">
                        </div>
                        <div class="mb-3">
                            <label for="exampleFormControlInput1" class="form-label">Note de rentabilité</label>
                            <input type="number" class="form-control" placeholder="Inserez la note" 
                            value="{{ $notations->Note_rentabilite }}"
                            name="Note_rentabilite">
                        </div>
                        <div class="mb-3">
                            <label for="exampleFormControlInput1" class="form-label">Note de capacité</label>
                            <input type="number" class="form-control" placeholder="Inserez la note" 
                            value="{{ $notations->Note_capacite }}"
                            name="Note_capacite">
                        </div>
                        <div class="mb-3">
                            <label for="exampleFormControlInput1" class="form-label">Note du comportement professionnel</label>
                            <input type="number" class="form-control" placeholder="Inserez la note" 
                            value="{{ $notations->Note_comportement_professionnel }}"
                            name="Note_comportement_professionnel">
                        </div>
                        <div class="mb-3">
                            <label for="exampleFormControlInput1" class="form-label">Note du recherche</label>
                            <input type="number" class="form-control" placeholder="Inserez la note" 
                            value="{{ $notations->Note_recherche }}"
                            name="Note_recherche">
                        </div>
                        <div class="mb-3">
                            <label for="exampleFormControlInput1" class="form-label">Mention</label>
                            <input type="text" class="form-control" placeholder="Inserez la mention" 
                            value="{{ $notations->Mention }}"
                            name="Mention">
                        </div>
                        <div class="mb-3">
                            <label for="exampleFormControlInput1" class="form-label">Commentaire</label>
                            <input type="text" class="form-control" placeholder="Inserez le commentaire" 
                            value="{{ $notations->Commentaire }}"
                            name="Commentaire">
                        </div>
                        <div class="mb-3">
                            <label for="exampleFormControlInput1" class="form-label">Année</label>
                            <input type="number" class="form-control" placeholder="Inserez l'année" 
                            value="{{ $notations->Annee }}"
                            name="Annee">
                        </div>
                        <div class="mb-3">
                            <label for="exampleFormControlInput1" class="form-label">DRPP</label>
                            <input type="text" class="form-control" placeholder="Inserez le DRPP" 
                            value="{{ $notations->DRPP }}"
                            name="DRPP" readonly>
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