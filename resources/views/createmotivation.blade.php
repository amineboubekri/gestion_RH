@extends('master.layout')

@section('title')
    Ajouter motivation
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
                        Ajouter une motivation 
                    </h3>   
                </div>
                <div class="card-body">
                    <form action="{{ route('motivation.store') }}" method="post">
                        @csrf
                        <div class="mb-3">
                            <label for="exampleFormControlInput1" class="form-label">DRPP</label>
                            <input type="text" class="form-control" placeholder="Entrer le DRPP" name="DRPP">
                        </div>
                        <div class="mb-3">
                            <label for="exampleFormControlInput1" class="form-label">Type de motivation</label>
                            <input type="text" class="form-control" placeholder="Entrer le type de motivation" name="Type_motivation">
                        </div>
                        <div class="mb-3">
                            <label for="exampleFormControlInput1" class="form-label">Occasion </label>
                            <input type="text" class="form-control" placeholder="Entrer l'occasion " name="Occasion">
                        </div>
                        <div class="mb-3">
                            <label for="exampleFormControlInput1" class="form-label">Date de motivation</label>
                            <input type="date" class="form-control" placeholder="" name="Date_motivation">
                        </div>
                        <div class="mb-3">
                            <label for="exampleFormControlInput1" class="form-label">Commentaire</label>
                            <input type="text" class="form-control" placeholder="saisissez un commentaire" name="Commentaire">
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