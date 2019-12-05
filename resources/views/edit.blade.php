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

<form class="form" action="{{url('/update')}}" method="POST">
       @csrf
       <div class="title">
         <i class="fas fa-pencil-alt"></i> 
         <h2 class="formcolor">Edit here</h2>
       </div>
       <div class="info" >
        <p>Department Name</p>
        <input class="departmentName" type="text" name="departmentName" value="{{$registration->departmentName}}">
        <input  type="hidden" name="id" value="{{$registration->id}}">
        <p>Description</p>
         <input type="text" name="description" value="{{$registration->description}}"  >
        <p>Department Code</p>
         <input type="text" name="departmentCode" value="{{$registration->departmentCode}}">
         <p>Dean Name</p>
         <input type="text" name="dean" value="{{$registration->dean}}">
         <p>Total Credits</p>
         <input type="text" name="totalCredits" value="{{$registration->totalCredits}}">

        
       </div>
<button id="btn1" type="submit" value="Update">Submit</button>

</form>
@endsection