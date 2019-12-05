@extends('layouts.app')

@section('content')
<div class="container">
   <div class="row justify-content-center">
       <div class="col-md-8">
           
               
               @if (session('status'))
                       <div class="alert alert-success" role="alert">
                           {{ session('status') }}
                       </div>
                   @endif

              
          
       </div>
   </div>
</div>
@endsection

@section('form')

<form class="form" action="{{url('/student/update')}}" method="POST">
       @csrf
       <div class="title">
         <i class="fas fa-pencil-alt"></i> 
         <h2 class="formcolor">Edit here</h2>
       </div>
       <div class="info" >
        <p>First Name</p>
        <input  type="text" name="firstName" value="{{$registration->firstName}}">
        <input  type="hidden" name="id" value="{{$registration->id}}">
        <p>Last Name</p>
         <input type="text" name="lastName" value="{{$registration->lastName}}"  >
        <p>Phone Number </p>
         <input type="text" name="phoneNumber" value="{{$registration->phoneNumber}}">
         <p>Email</p>
         <input type="text" name="email" value="{{$registration->email}}">
         <p>Nationality</p>
         <input type="text" name="nationality" value="{{$registration->nationality}}">
         <p>Address</p>
         <input type="text" name="address" value="{{$registration->address}}">
         <p>Date Of Birth</p>
         <input type="text" name="dateOfBirth" placeholder="yy/mm/dd" value="{{$registration->dateOfBirth}}">
        <p>Department</p>
        <input type="text" name="department" value="{{$registration->department}}">
        
       </div>
<button id="btn1" type="submit" value="Update">Submit</button>

</form>
@endsection