<!DOCTYPE html>
<html>
<head>
	<title>Absence {{ $personne->DRPP }} PDF</title>
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
    <img src="" alt="Logo" style="width: 720px; height: 100px;">
	<table>
        <img src="" alt="">
		<tr>
			<th class="centered"  colspan="">DRPP</th>
		</tr>
		<tr>
			<td class="centered"><b>{{ $personne->DRPP }}</b></td>
		</tr>
	</table>
	
	<table>
		<tr>
			<th colspan="2">Informations personnelles</th>
		</tr>
		<tr>
			<td>Nom et Prénom</td>
			<td>{{ $personne->Nom_Français }} {{ $personne->Prenom_Français }}</td>
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
			<td>adresse</td>
			<td>{{ $personne->Adresse }}</td>
		</tr>
	</table>

	<table>
		<tr>
			<th colspan="2">Informations d'absence</th>
		</tr>
		<tr>
			<td>Date d'absence</td>
			<td>{{ $absences->date_absence }}</td>
		</tr>
		<tr>
			<td>Date de retour</td>
			<td>{{ $absences->date_retour }}</td>
		</tr>
        <tr>
			<td>Justification</td>
			<td>{{ $absences->justification }}</td>
		</tr>
        <tr>
			<td>Cause</td>
			<td>{{ $absences->cause }}</td>
		</tr>
        <tr>
			<td>Commentaire</td>
			<td>{{ $absences->commentaire }}</td>
		</tr>
	</table>
	<table>
		<tr>
			<th colspan="3">Signature</th>
		</tr>
		<tr>
			<td>Signature du chef</td>
			
			<td>Directeur</td>
		</tr>
	</table>
</body>
</html>