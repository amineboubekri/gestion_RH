@extends('master.layout')

@section('title')
    Modifier absence
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
                        Modifier une absence
                    </h3>   
                </div>
                <div class="card-body">
                    <form action="{{ route('absence.update',$absence->Ref_absence)}}" method="post">
                        @csrf
                        @method('PUT')
                        <div class="mb-3">
                            <label for="exampleFormControlInput1" class="form-label">Date absence</label>
                            <input type="date" class="form-control" placeholder="" 
                            value="{{ $absence->date_absence }}"
                            name="date_absence">
                        </div>
                        <div class="mb-3">
                            <label for="exampleFormControlInput1" class="form-label">Date de retour</label>
                            <input type="date" class="form-control" placeholder=""
                            value="{{ $absence->date_retour }}"
                            name="date_retour">
                        </div>
                        <div class="mb-3">
                            <label for="exampleFormControlInput1" class="form-label">DRPP</label>
                            <input type="text" class="form-control" placeholder="Entrer le DRPP d'employé" 
                            value="{{ $absence->DRPP }}"
                            name="DRPP" readonly>
                        </div>
                        <div class="mb-3">
                            <label for="exampleFormControlInput1" class="form-label">Justification</label>
                            <input type="text" class="form-control" placeholder="Entrer la justification" 
                            value="{{ $absence->justification }}"
                            name="justification">
                        </div>
                        <div class="mb-3">
                            <label for="exampleFormControlInput1" class="form-label">Cause d'absence</label>
                            <input type="text" class="form-control" placeholder="Entrer la cause d'absence" 
                            value="{{ $absence->cause }}"
                            name="cause">
                        </div>
                        <div class="mb-3">
                            <label for="exampleFormControlInput1" class="form-label">Commentaire</label>
                            <input type="text" class="form-control" placeholder="Saisir un commentaire" 
                            value="{{ $absence->commentaire }}"
                            name="commentaire">
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