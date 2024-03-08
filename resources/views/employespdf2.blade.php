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

#customers tr:nth-child(even){background-color: #f2f2f2;}

#customers tr:hover {background-color: #ddd;}

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

<h1 align="center">Information de l'employe</h1>

<table id="customers">
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
                    </tbody>
</table>
  
</body>
</html>


