<!DOCTYPE html>
<html>
<head>
	<title>Employe {{ $personnes->DRPP  }} PDF</title>
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
    .DRPP{
        text-align: center;
    }
      </style>
</head>
<body>
    <img src="https://scontent.frak1-1.fna.fbcdn.net/v/t39.30808-6/347556648_775124514316788_190130152856757326_n.jpg?_nc_cat=108&ccb=1-7&_nc_sid=730e14&_nc_eui2=AeGwzYrfVEa7sjaYoVHzr6FKCU7p-YF5SaYJTun5gXlJpksVcHg88MToj7HcUNhcNtEs0IkAe7E5nmJnDnLMg6x2&_nc_ohc=GL27srjX8P0AX8BRuP_&_nc_zt=23&_nc_ht=scontent.frak1-1.fna&oh=00_AfAmFJahmNI9y901W2lesm9sbd6HmBNqcQtIh-8V93F-pw&oe=647E9E40" alt="Logo" style="width: 725px; height: 100px;">
	<table>
        <img src="" alt="">
		<tr>
			<th class="centered" colspan="" class="DRPP">DRPP</th>
		</tr>
		<tr>
			<td class="centered"><b>{{ $personnes->DRPP }}</b></td>
		</tr>
	</table>
	<br>
    <br><br>
	<table>
        
		<tr>
			<th colspan="2">Informations personnelles</th>
		</tr>
		<tr>
			<td>Nom </td>
			<td>{{ $personnes->Nom_Français }} </td>
		</tr>
        <tr>
			<td> Prénom</td>
			<td>{{ $personnes->Prenom_Français }}</td>
		</tr>
        <tr>
			<td>Numero de poste</td>
			<td>{{ $personnes->Num_poste }}</td>
		</tr>
        <tr>
			<td>Affiliation financière</td>
			<td>{{ $personnes->Affiliation_Financiere }}</td>
		</tr>
		<tr>
			<td>CIN</td>
			<td>{{ $personnes->CIN }}</td>
		</tr>
        <tr>
			<td>Date de naissance</td>
			<td>{{ $personnes->date_naissance }}</td>
		</tr>
        <tr>
			<td>Lieu de naissance</td>
			<td>{{ $personnes->Lieu_Naissance }}</td>
		</tr>
        <tr>
			<td>Status</td>
			<td>{{ $personnes->status }}</td>
		</tr>
        <tr>
			<td>Adresse</td>
			<td>{{ $personnes->Adresse }}</td>
		</tr>
        <tr>
			<td>Téléphone</td>
			<td>{{ $personnes->Telephone }}</td>
		</tr>
        <tr>
			<td>Situation familiale</td>
			<td>{{ $personnes->Situation_Familiale }}</td>
		</tr>
        <tr>
			<td>Nombre d'enfants</td>
			<td>{{ $personnes->Nombre_enfant }}</td>
		</tr>
        <tr>
			<td>Lieu de travail</td>
			<td>{{ $personnes->Lieu_Travail }}</td>
		</tr>
        <tr>
			<td>Date d'emboche</td>
			<td>{{ $personnes->date_emboche }}</td>
		</tr>
		<tr>
			<td>Situation administrative</td>
			<td>{{ $personnes->Situation_Administrative }}</td>
		</tr>
        <tr>
			<td>Date recrutement</td>
			<td>{{ $personnes->date_recrutement }}</td>
		</tr>
		<tr>
			<td>Echelle</td>
			<td>{{ $personnes->Echelle }}</td>
		</tr>
		<tr>
			<td>Echellon</td>
			<td>{{ $personnes->echellon }}</td>
		</tr>
	</table>

	
</body>
</html>