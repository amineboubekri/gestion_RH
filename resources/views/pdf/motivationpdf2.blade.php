<!DOCTYPE html>
<html>
<head>
	<title>Motivation {{ $personne->DRPP }} PDF</title>
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
    <img src="https://scontent.frak1-1.fna.fbcdn.net/v/t39.30808-6/347556648_775124514316788_190130152856757326_n.jpg?_nc_cat=108&ccb=1-7&_nc_sid=730e14&_nc_eui2=AeGwzYrfVEa7sjaYoVHzr6FKCU7p-YF5SaYJTun5gXlJpksVcHg88MToj7HcUNhcNtEs0IkAe7E5nmJnDnLMg6x2&_nc_ohc=GL27srjX8P0AX8BRuP_&_nc_zt=23&_nc_ht=scontent.frak1-1.fna&oh=00_AfAmFJahmNI9y901W2lesm9sbd6HmBNqcQtIh-8V93F-pw&oe=647E9E40" alt="Logo" style="width: 725px; height: 100px;">
	<table>
        <img src="" alt="">
		<tr>
			<th class="centered" colspan="">DRPP</th>
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
			<th colspan="2">Informations de motivation</th>
		</tr>
		<tr>
			<td>Type de motivation</td>
			<td>{{ $motivations->Type_motivation }}</td>
		</tr>
		<tr>
			<td>Occasion</td>
			<td>{{ $motivations->Occasion }}</td>
		</tr>
        <tr>
			<td>Date de motivation</td>
			<td>{{ $motivations->Date_motivation }}</td>
		</tr>
        <tr>
			<td>Commentaire</td>
			<td>{{ $motivations->Commentaire }}</td>
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