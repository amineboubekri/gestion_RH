@extends('master.layout')

@section('title')
    Modifier motivation 
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
                        Modifier une motivation 
                    </h3>   
                </div>
                <div class="card-body">
                    <form action="{{ route('motivation.update',$motivations->Ref_motivation) }}" method="post">
                    @csrf
                    @method('PUT')
                    <div class="mb-3">
                            <label for="exampleFormControlInput1" class="form-label">DRPP</label>
                            <input type="text" class="form-control" placeholder="Entrer le DRPP" 
                            value="{{ $motivations->DRPP }}"
                            name="DRPP" readonly>
                        </div>
                        <div class="mb-3">
                            <label for="exampleFormControlInput1" class="form-label">Type de motivation</label>
                            <input type="text" class="form-control" placeholder="Entrer le type de motivation" 
                            value="{{ $motivations->Type_motivation }}"
                            name="Type_motivation">
                        </div>
                        <div class="mb-3">
                            <label for="exampleFormControlInput1" class="form-label">Occasion</label>
                            <input type="text" class="form-control" placeholder="Entrer l'occasion" 
                            value="{{ $motivations->Occasion }}"
                            name="Occasion">
                        </div>
                        <div class="mb-3">
                            <label for="exampleFormControlInput1" class="form-label">Date de motivation</label>
                            <input type="date" class="form-control" placeholder="" 
                            value="{{ $motivations->Date_motivation }}"
                            name="Date_motivation">
                        </div>
                        <div class="mb-3">
                            <label for="exampleFormControlInput1" class="form-label">Commentaire</label>
                            <input type="TEXT" class="form-control" placeholder="" 
                            value="{{ $motivations->Commentaire }}"
                            name="Commentaire">
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