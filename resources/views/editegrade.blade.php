@extends('master.layout')

@section('title')
    Modifier grade 
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
                        Modifier un grade 
                    </h3>   
                </div>
                <div class="card-body">
                    <form action="{{ route('grade.update',$grades->Ref_grade) }}" method="post">
                    @csrf
                    @method('PUT')
                    <div class="mb-3">
                            <label for="exampleFormControlInput1" class="form-label">DRPP</label>
                            <input type="text" class="form-control" placeholder="Entrer le DRPP" 
                            value="{{ $grades->DRPP }}"
                            name="DRPP" readonly>
                        </div>
                        <div class="mb-3">
                            <label for="exampleFormControlInput1" class="form-label">Desingation de grade</label>
                            <input type="text" class="form-control" placeholder="Entrer la designation" 
                            value="{{ $grades->Designation_grade }}"
                            name="Designation_grade">
                        </div>
                        <div class="mb-3">
                            <label for="exampleFormControlInput1" class="form-label">Desingation de grade</label>
                            <input type="text" class="form-control" placeholder="Entrer la designation" 
                            value="{{ $grades->Designation_grade }}"
                            name="Designation_grade">
                        </div>
                        <div class="mb-3">
                            <label for="exampleFormControlInput1" class="form-label">Date de grade</label>
                            <input type="date" class="form-control" placeholder="" 
                            value="{{ $grades->Date_grade }}"
                            name="Date_grade">
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