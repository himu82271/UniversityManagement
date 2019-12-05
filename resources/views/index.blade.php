
@extends('layouts.app')

@section('index')
    
 <link href="{{ asset('css/deptTable.css') }}" rel="stylesheet">

<body>

<style>
td{
    text-align: center;
}
</style>

<h2>Department Table</h2>
<table style="width:100%" class="fl-table">
  <thead>
  <tr>
    <th>SL.</th>
    <th>Department Name</th> 
    <th>Description</th>
    <th>Department Code</th>
    <th>Dean</th>
    <th>Total Credits</th>
    <th>Delete</th>
    <th>Edit</th>
    <th> </th>
  </thead>
  </tr>

  @php
    $i = 0;
  @endphp
  
  @foreach($forms as $registration)
  <tbody>
  <tr>
    <td>{{++$i}}</td>
      <td>{{$registration->departmentName}}</td>
      <td>{{$registration->description}}</td>
      <td>{{$registration->departmentCode}}</td>
      <td>{{$registration->dean}}</td>
      <td>{{$registration->totalCredits}}</td>
    </td>
   <td> <a  href="/form/delete/{{$registration->id}}">Delete!</a>
   </td>
   <td> <a  href="/form/edit/{{$registration->id}}">Edit!</a>
   </td>
  </tr>
</tbody>
  @endforeach
</table>
<br>
<br>
<br>
<br>





@endsection








</body>
</html>
