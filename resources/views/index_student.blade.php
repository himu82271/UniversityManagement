@extends('layouts.app')

@section('students')
    <link href="{{ asset('css/deptTable.css') }}" rel="stylesheet">

    <body>

    <style>
    td{
    text-align: center;
    }
    </style>


    <h2>Students Table</h2>
    <table style="width:100%" class="fl-table">
    <thead>
    <tr>
    <th>SL.</th>
    <th>First Name</th> 
    <th>last Name</th>
    <th>Phone Number</th>
    <th>Email</th>
    <th>Nationality</th>
    <th>Address</th>
    <th>Date Of Birth</th>
    <th>Department</th>
    <th>Delete</th>
    <th>Edit</th>

    <th> </th>
    </thead>
    </tr>

    @php
    $j = 0;
    @endphp

    @foreach($students as $registration)
    <tbody>
    <tr>
    <td>{{++$j}}</td>
        <td>{{$registration->firstName}}</td>
        <td>{{$registration->lastName}}</td>
        <td>{{$registration->phoneNumber}}</td>
        <td>{{$registration->email}}</td>
        <td>{{$registration->nationality}}</td>
        <td>{{$registration->address}}</td>
        <td>{{$registration->dateOfBirth}}</td>
        <td>{{$registration->departmentName}}</td>
    </td>
    <td> <a  href="/student/delete/{{$registration->id}}">Delete!</a>
    </td>
    <td> <a  href="/student/edit/{{$registration->id}}">Edit!</a>
    </td>
    </tr>
    </tbody>
    @endforeach
    </table>

@endsection

</body>

