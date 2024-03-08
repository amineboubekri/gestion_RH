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
    <th>Nom du diplome</th>
    <th>Specialité</th>
    
  </tr>
  @if(count($diplomes))
  @foreach($dimplomes as $diplome)
  <tr>
    
    <td> {{$diplome->DRPP}} </td>
    <td> {{$diplome->Nom_diplome}} </td>
    <td> {{$diplome->Specialite}} </td>
  </tr>
  @endforeach
  @else
  <tr>
    <td colspan="3" >Pas encore de diplomes</td>
  </tr>
  @endif
</table>
  
</body>
</html>


