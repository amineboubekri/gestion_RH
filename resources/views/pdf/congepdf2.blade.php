<!DOCTYPE html>
<html>
<head>
	<title>Congé {{ $personne->DRPP }} PDF</title>
    <style>
      table {
        border-collapse: collapse;
        width: 100%;
      }
      th, td {
        padding: 8px;
        text-align: left;
        border-bottom: 1px solid #ddd;
      }
      th {
        background-color: #f2f2f2;
      }
      .centered {
        text-align: center;
        font-size: 20px;
        }
      </style>
</head>
<body>
    <h1 aligh="center">Votre logo ici</h1>
	<table>
        <img src="" alt="">
		<tr>
			<th class="centered" colspan="">Type de conge</th>
		</tr>
		<tr>
			<td class="centered"><b>{{ $conge->type_conge }}</b></td>
		</tr>
	</table>
	
	<table>
		<tr>
			<th colspan="2">Informations personnelles</th>
		</tr>
		<tr>
			<td>Nom et Prénom</td>
			<td>{{ $conge->Nom_Français }} {{ $conge->Prenom_Français }}</td>
		</tr>
		<tr>
			<td>CIN</td>
			<td>{{ $personne->CIN }}</td>
		</tr>
		<tr>
			<td>Affiliation financiere</td>
			<td>{{ $personne->Affiliation_Financiere }}</td>
		</tr>
		<tr>
			<td>Lieu de travail</td>
			<td>{{ $personne->Lieu_Travail }}</td>
		</tr>
		<tr>
			<td>Téléphone</td>
			<td>{{ $personne->Telephone }}</td>
		</tr>
		<tr>
			<td>Nom remplaçant</td>
			<td>{{ $conge->NomRemplacent }}</td>
		</tr>
		<tr>
			<td>adresse</td>
			<td>{{ $personne->Adresse }}</td>
		</tr>
	</table>

	<table>
		<tr>
			<th colspan="2">Période du congé</th>
		</tr>
		<tr>
			<td>Année</td>
			<td>{{ $conge->AnneeConge }}</td>
		</tr>
        <tr>
			<td>Nombre de jours</td>
			<td>{{ $conge->nbj }}</td>
		</tr>
		<tr>
			<td>Date debut</td>
			<td>{{ $conge->date_debut }}</td>
		</tr>
		<tr>
			<td>Date retour</td>
			<td>{{ $conge->date_retour }}</td>
		</tr>
	</table>
	
	<table>
		<tr>
			<th colspan="3">Motif de congé</th>
		</tr>
		
			<td>{{ $conge->Motif }}</td>
		
	</table>
	

	<table>
		<tr>
			<th colspan="3">Signature</th>
		</tr>
		<tr>
			<td>Signature du chef</td>
			<td>Signature bénéficiaire</td>
			<td>Directeur</td>
		</tr>
	</table>
</body>
</html>