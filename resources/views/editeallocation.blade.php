@extends('master.layout')

@section('title')
    Ajouter allocation
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
                        Modifier une allocation
                    </h3>   
                </div>
                <div class="card-body">
                    <form action="{{ route('allocation.update',$allocations->Ref_allocation_familiale) }}" method="post">
                        @csrf
                        @method('PUT')
                        <div class="mb-3">
                            <label for="exampleFormControlInput1" class="form-label">Type d'allocation</label>
                            <input type="text" class="form-control" placeholder="" 
                            value="{{ $allocations->Valeur_allocation_familiale }}"
                            name="Type_allocation_familiale">
                        </div>
                        <div class="mb-3">
                            <label for="exampleFormControlInput1" class="form-label">Valeur d'allocation</label>
                            <input type="text" class="form-control" placeholder="" 
                            value="{{ $allocations->Valeur_allocation_familiale }}"
                            name="Valeur_allocation_familiale">
                        </div>
                        <div class="mb-3">
                            <label for="exampleFormControlInput1" class="form-label">Date d'allocation</label>
                            <input type="date" class="form-control" placeholder="Entrer le DRPP d'employé" 
                            value="{{ $allocations->date_allocation }}"
                            name="date_allocation">
                        </div>
                        <div class="mb-3">
                            <label for="exampleFormControlInput1" class="form-label">DRPP</label>
                            <input type="text" class="form-control" placeholder="Entrer la justification" 
                            value="{{ $allocations->DRPP }}"
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
            @else
            <h1>Veuillez se connecter</h1>
            <a href="{{ route('login') }}">Se connecter</a>
            @endif
        </div>        
    </div>
@endsection