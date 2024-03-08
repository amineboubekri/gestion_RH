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

<h1 align="center">Liste des notations</h1>

<table id="customers">
  <tr>
    
    <th>DRPP</th>
    <th>Nom</th>
    <th>Mention</th>
  </tr>
  @if(count($notations))
  @foreach($notations as $notation)
  <tr>
    
    <td> {{$notation->DRPP}} </td>
    <td> {{$notation->Nom_Français}} </td>
    <td> {{$notation->Mention}} </td>
  </tr>
  @endforeach
  @else
  <tr>
    <td colspan="3" >Pas encore de notations</td>
  </tr>
  @endif
</table>
  
</body>
</html>


