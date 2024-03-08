<!DOCTYPE html>
<html>
<head>
    <style>
        #customers {
            font-family: Arial, Helvetica, sans-serif;
            border-collapse: collapse;
            width: 100%;
        }

        #customers td, #customers th {
            border: 1px solid #ddd;
            padding: 8px;
        }

        #customers tr:nth-child(even) {
            background-color: #f2f2f2;
        }

        #customers tr:hover {
            background-color: #ddd;
        }

        #customers th {
            padding-top: 12px;
            padding-bottom: 12px;
            text-align: left;
            background-color: #007bff;
            color: white;
        }
    </style>
</head>
<body>

<h1 align="center">Liste des employés</h1>

<table id="customers">
    <tr>
        <th>DRPP</th>
        <th>Nom</th>
        <th>Prenom</th>
        <th>CIN</th>
    </tr>
    @if(count($employes))
        @foreach($employes as $employe)
            <tr>
                <td> {{$employe->DRPP}} </td>
                <td> {{$employe->Nom_Français}} </td>
                <td> {{$employe->Prenom_Français}} </td>
                <td> {{ $employe->CIN }} </td>
            </tr>
        @endforeach
    @else
        <tr>
            <td colspan="3">Aucun employé trouvé.</td>
        </tr>
    @endif
</table>

</body>
</html>