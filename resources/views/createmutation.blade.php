@extends('master.layout')

@section('title')
    Ajouter mutation
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
                        Ajouter une mutation
                    </h3>   
                </div>
                <div class="card-body">
                    <form action="{{ route('mutation.store') }}" method="post">
                        @csrf
                        <div class="mb-3">
                            <label for="exampleFormControlInput1" class="form-label">Date de mutation</label>
                            <input type="date" class="form-control" placeholder="" name="date_mutation">
                        </div>
                        <div class="mb-3">
                            <label for="exampleFormControlInput1" class="form-label">Lieu de travail</label>
                            <input type="text" class="form-control" placeholder="Entrer le lieu de travail" name="lieu_Travail">
                        </div>
                        <div class="mb-3">
                            <label for="exampleFormControlInput1" class="form-label">Ville de mutation</label>
                            <input type="text" class="form-control" placeholder="Enter le nom de ville de mutation" name="ville_Mutation">
                        </div>
                        <div class="mb-3">
                            <label for="exampleFormControlInput1" class="form-label">DRPP</label>
                            <input type="text" class="form-control" placeholder="Inserez le DRPP de l'employe" name="DRPP">
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