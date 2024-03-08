@extends('master.layout')

@section('title')
    Modifier diplome 
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
                        Modifier diplome 
                    </h3>   
                </div>
                <div class="card-body">
                    <form action="{{ route('diplome.update',$diplomes->Ref_diplome) }}" method="post">
                    @csrf
                    @method('PUT')
                        <div class="mb-3">
                            <label for="exampleFormControlInput1" class="form-label">Nom du diplome</label>
                            <input type="text" class="form-control" placeholder="Entrer le nom de diplome" 
                            value="{{ $diplomes->Ref_diplome }}"
                            name="Nom_diplome">
                        </div>
                        <div class="mb-3">
                            <label for="exampleFormControlInput1" class="form-label">Specialité</label>
                            <input type="text" class="form-control" placeholder="Entrer la specialité" 
                            value="{{ $diplomes->Specialite }}"
                            name="Specialite">
                        </div>
                        <div class="mb-3">
                            <label for="exampleFormControlInput1" class="form-label">Date d'obtention</label>
                            <input type="date" class="form-control" placeholder="" 
                            value="{{ $diplomes->Date_obtention }}"
                            name="Date_obtention">
                        </div>
                        <div class="mb-3">
                            <label for="exampleFormControlInput1" class="form-label">Ecole</label>
                            <input type="text" class="form-control" placeholder="Entrer l'ecole" 
                            value="{{ $diplomes->Ecole }}"
                            name="Ecole">
                        </div>
                        <div class="mb-3">
                            <label for="exampleFormControlInput1" class="form-label">Ville d'obtention</label>
                            <input type="text" class="form-control" placeholder="Enter la ville" 
                            value="{{ $diplomes->Ville_diplome }}"
                            name="Ville_diplome">
                        </div>
                        <div class="mb-3">
                            <label for="exampleFormControlInput1" class="form-label">DRPP</label>
                            <input type="text" class="form-control" 
                            value="{{ $diplomes->DRPP }}"
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