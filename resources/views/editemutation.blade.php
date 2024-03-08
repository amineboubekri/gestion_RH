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
                    <form action="{{ route('mutation.update',$mutation->Ref_Mutation) }}" method="post" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')
                        <div class="mb-3">
                            <label for="exampleFormControlInput1" class="form-label">Date de mutation</label>
                            
                            <input type="date" class="form-control" placeholder="" 
                            value="{{ $mutation->date_mutation }}"
                            name="date_mutation">
                        </div>
                        <div class="mb-3">
                            <label for="exampleFormControlInput1" class="form-label">Lieu de travail</label>
                            <input type="text" class="form-control" placeholder="Entrer le lieu de travail" 
                            value="{{ $mutation->lieu_Travail }}"
                            name="lieu_Travail">
                        </div>
                        <div class="mb-3">
                            <label for="exampleFormControlInput1" class="form-label">Ville de mutation</label>
                            <input type="text" class="form-control" placeholder="Enter le nom de ville de mutation" 
                            value="{{ $mutation->ville_Mutation }}"
                            name="ville_Mutation">
                        </div>
                        <div class="mb-3">
                            <label for="exampleFormControlInput1" class="form-label">DRPP</label>
                            <input type="text" class="form-control" placeholder="Inserez le DRPP de l'employe" 
                            value="{{ $mutation->DRPP }}"
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