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

<h1 align="center">Liste des absences</h1>

<table id="customers">
  <tr>
    
    <th>Nom</th>
    <th>Date d'absence</th>
    <th>Justification</th>
  </tr>
  @if(count($absences))
  @foreach($absences as $absence)
  <tr>
    
    <td> {{$absence->Nom_Français}} </td>
    <td> {{$absence->date_absence}} </td>
    <td> {{$absence->justification}} </td>
  </tr>
  @endforeach
  @else
  <tr>
    <td colspan="3" >Pas encore d'absences</td>
  </tr>
  @endif
</table>
  
</body>
</html>


