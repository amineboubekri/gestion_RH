@extends('master.layout')

@section('title')
    Liste Employe
@endsection

@section('content')
    <div class="row my-5">
        <div class="col-md-8 mx-auto">
            @if( session()->has('success') )
                <div class="alert alert-success">
                    {{ session()->get('success') }}
                </div>
            @endif
            <form action="{{ route('empl.search') }}" method="GET">
                <div class="input-group mb-3">
                    <input type="text" class="form-control" name="query" placeholder="Rechercher par nom d'employé">
                    <div class="input-group-append">
                        <button class="btn btn-primary" type="submit">Rechercher</button>
                    </div>
                </div>
            </form>
            
            
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th>Image</th>
                        <th>Nom</th>
                        <th>Prénom</th>
                        <th>Voir</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                @foreach($personnes as $personne)
                    @php
                        $hasMutation = App\Models\Mutation::where('DRPP', $personne->DRPP)->exists();
                        $hasconge = App\Models\Conge::where('DRPP', $personne->DRPP)->exists();
                    @endphp

                    <tr>
                        <td><img height="70 px" width="70 px" src="{{ asset('./uploads/'.$personne->image) }}" alt=""></td>
                        <td>{{ $personne->Nom }}</td>
                        <td>{{ $personne->Prenom }}</td>
                        <td>
                            <a href="{{ route('empl.show', $personne->DRPP) }}" class="btn btn-primary">Voir</a>
                        </td>
                        <td>
                            <div class="dropdown">
                                <span class="btn btn-primary">Options</span>
                                <div class="dropdown-content">
                                    @if (!$hasconge)<a href="{{ route('conge.create', $personne->DRPP) }}">Ajouter congé </a>@endif
                                    <a href="{{ route('absence.create2', $personne->DRPP) }}">Absent</a>
                                    @if (!$hasMutation && !$hasconge)<a href="{{ route('mutation.create2', $personne->DRPP) }}">Ajouter mutation</a>@endif
                                    <a href="{{ route('allocation.create2', $personne->DRPP) }}">Ajouter allocation</a>
                                    <a href="{{ route('diplome.create2', $personne->DRPP) }}">Ajouter diplome</a>
                                    <a href="{{ route('mission.create2', $personne->DRPP) }}">Ajouter mission</a>
                                    <a href="{{ route('motivation.create2', $personne->DRPP) }}">Ajouter motivation</a>
                                    <a href="{{ route('notation.create2', $personne->DRPP) }}">Ajouter notation</a>
                                    <a href="{{ route('echelle.create2', $personne->DRPP) }}">Affecter echelle</a>
                                </div>
                            </div>
                        </td>
                    </tr>
                @endforeach
                </tbody>
                <tbody id="content">

                </tbody>
            </table>
                
            <a class="btn btn-success" href="{{route('imprimer.empl')}}">Imprimer</a>
            <div class="d-flex justify-content-center my-4">
                {{ $personnes->links() }}
            </div>
        </div>        
    </div>
@endsection
<style>
     .dropdown {
    position: relative;
    display: inline-block;
  }

  .dropdown-content {
    display: none;
    position: absolute;
    z-index: 1;
    left: 100%; 
    top: 0; 
  }

  .dropdown:hover .dropdown-content {
    display: block;
  } 

  .dropdown-content a {
    
    color: #007bff;
    display: block;
    padding: 10px;
    text-decoration: none;
  }

  .dropdown-content a:hover {
    background-color: #007bff;
    color: #ffffff;
  }
  .dropdown-toggle::after {
        display: none;
    }

    .dropdown-menu {
        border: none;
    }

    .dropdown-item:hover {
        background-color: #007bff;
        color: #ffffff;
    }

    
</style>
    <script>
    var dropdownItems = document.getElementsByClassName('dropdown-item');
    var employeeList = document.getElementById('content');

    // Attach click event listener to each dropdown item
    for (var i = 0; i < dropdownItems.length; i++) {
        dropdownItems[i].addEventListener('click', function(event) {
            event.preventDefault();

            var selectedYear = event.target.getAttribute('data-year');

            // Send an AJAX request to fetch employees for the selected year
            var url = '{{ route('empl.filter') }}?year=' + encodeURIComponent(selectedYear);
            fetch(url)
                .then(response => response.text())
                .then(data => {
                    employeeList.innerHTML = data;
                })
                .catch(error => {
                    console.error('Error:', error);
                });
        });
    }
    
</script>