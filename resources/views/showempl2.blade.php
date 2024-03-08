@extends('master.layout')

@section('title')
    Employe Nº{{$personnes->DRPP}}
@endsection

@section('content')
    <div class="row my-5">
        <div class="col-md-8 mx-auto">
            <div id="table-wrapper" class="table-responsive">
                <table class="table table-striped table-bordered">
                    <tbody>
                        <tr>
                            <th>Image </th>
                            <td><img height="120 px" width="120 px" src="{{ asset('./uploads/'.$personnes->image) }}" alt=""></td>
                        </tr>
                        <tr>
                            <th>Le DRPP</th>
                            <td>{{ $personnes->DRPP }}</td>
                        </tr>
                        <tr>
                            <th>Le numero du poste</th>
                            <td>{{ $personnes->Num_poste }}</td>
                        </tr>
                        <tr>
                            <th>Affiliation financière</th>
                            <td>{{ $personnes->Affiliation_Financiere }}</td>
                        </tr>
                        <tr>
                            <th>Nom</th>
                            <td>{{ $personnes->Nom }}</td>
                        </tr>
                        <tr>
                            <th>Prénom</th>
                            <td>{{ $personnes->Prenom }}</td>
                        </tr>
                        <tr>
                            <th>Nom en Français</th>
                            <td>{{ $personnes->Nom_Français }}</td>
                        </tr>
                        <tr>
                            <th>Prénom en Français</th>
                            <td>{{ $personnes->Prenom_Français }}</td>
                        </tr>
                        <tr>
                            <th>CIN</th>
                            <td>{{ $personnes->CIN }}</td>
                        </tr>
                        <tr>
                            <th>Date de naissance</th>
                            <td>{{ $personnes->date_naissance }}</td>
                        </tr>
                        <tr>
                            <th>Adresse</th>
                            <td>{{ $personnes->Adresse }}</td>
                        </tr>
                        <tr>
                            <th>Téléphone</th>
                            <td>{{ $personnes->Telephone }}</td>
                        </tr>
                        <tr>
                            <th>Situation familiale</th>
                            <td>{{ $personnes->Situation_Familiale }}</td>
                        </tr>
                        <tr>
                            <th>Nombre d'enfants</th>
                            <td>{{ $personnes->Nombre_enfant }}</td>
                        </tr>
                        <tr>
                            <th>Lieu de travail</th>
                            <td>{{ $personnes->Lieu_Travail }}</td>
                        </tr>
                        <tr>
                            <th>Date d'embauche</th>
                            <td>{{ $personnes->date_emboche }}</td>
                        </tr>
                        <tr>
                            <th>Situation administrative</th>
                            <td>{{ $personnes->Situation_Administrative }}</td>
                        </tr>
                        <tr>
                            <th>Date de recrutement</th>
                            <td>{{ $personnes->date_recrutement }}</td>
                        </tr>
                        <tr>
                            <th>Status</th>
                            <td>{{ $personnes->status }}</td>
                        </tr>
                        <tr>
                            <th>Echelle</th>
                            <td>{{ $personnes->Echelle }}</td>
                        </tr>
                        <tr>
                            <th>Echellon</th>
                            <td>{{ $personnes->echellon }}</td>
                        </tr>
                    </tbody>
                </table>
            </div>
            <div class="d-flex justify-content-between">
                <a href="{{route('empl.edit',$personnes->DRPP)}}" class="btn btn-warning">
                    Modifier
                </a>
                <form id="{{ $personnes->DRPP }}" action="{{route('empl.delete',$personnes->DRPP)}}" method="post">
                    @csrf
                    @method('DELETE')
                    <button onclick="event.preventDefault();if(confirm('êtes-vous sûr ?'))document.getElementById({{ $personnes->DRPP }}).submit();" 
                    class="btn btn-danger" type="submit"> Supprimer 
                    </button>
                </form> 
                 <a href="{{ route('imprimer.empl2', $personnes->DRPP) }}"> <button class="btn btn-primary">imprimer</button> </a>
                    </div>
                    
                    
                  
                </div>

            </div>
        </div>        
    </div>
    <script>
    function printTable() {
        var table = document.querySelector('.table-responsive table');
    var html = table.outerHTML;
    var printWindow = window.open('', '', 'height=400,width=800');
    printWindow.document.write('<html><head>');
    printWindow.document.write('<style>table{border-collapse:collapse;width:100%;font-size:16px;color:#333;margin-bottom : 1em;} th, td{text-align:center;padding:12px;border:1px solid #ddd;} th{background-color:#ddd;font-weight:bold;} tr:nth-child(even){background-color:#f2f2f2;}</style>');
    printWindow.document.write('</head><body >');
    printWindow.document.write(html);
    printWindow.document.write('</body></html>');
    printWindow.document.close();
    printWindow.print();
    }
</script>
    
@endsection