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

<h1 align="center">Liste des allocations</h1>

<table id="customers">
  <tr>
    
    <th>Reference d'allocation</th>
    <th>Type d'allocation</th>
    <th>DRPP</th>
  </tr>
  @if(count($allocations))
  @foreach($allocations as $allocation)
  <tr>
    
    <td> {{$allocation->Ref_allocation_familiale}} </td>
    <td> {{$allocation->Type_allocation_familiale}} </td>
    <td> {{$allocation->DRPP}} </td>
  </tr>
  @endforeach
  @else
  <tr>
    <td colspan="3" >Pas encore d'allocation</td>
  </tr>
  @endif
</table>
  
</body>
</html>


