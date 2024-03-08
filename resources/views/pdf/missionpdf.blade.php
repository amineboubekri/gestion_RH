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

<h1 align="center">Liste des mutations</h1>

<table id="customers">
  <tr>
    <th>DRPP</th>
    <th>Objet de mission</th>
    <th>Ville</th>
    
  </tr>
  @if(count($missions))
  @foreach($missions as $mission)
  <tr>
    
    <td> {{$mission->DRPP}} </td>
    <td> {{$mission->Objet_mission}} </td>
    <td> {{$mission->Ville_mission}} </td>
  </tr>
  @endforeach
  @else
  <tr>
    <td colspan="3" >Pas encore de missions</td>
  </tr>
  @endif
</table>
  
</body>
</html>


