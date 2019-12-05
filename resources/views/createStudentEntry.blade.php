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

<form class="form" action="{{url('/store/student')}}" method="POST">
        @csrf
        <div class="title">
          <i class="fas fa-pencil-alt"></i> 
          <h2 class="formcolor">Student Info</h2>
        </div>
        <div class="info" >
        <p>First Name </p>
          <input class="firstName" type="text" name="firstName" >
        <p>Last Name</p>
          <input type="text" name="lastName" >
        <p>Phone Number</p>
          <input type="text" name="phoneNumber">
          <p>Email</p>
          <input type="email" name="email" >
          <p>Nationality</p>
          <input type="text" name="nationality" >
          <p>Address</p>
          <input type="text" name="address" >
          <p>Date Of Birth</p>
          <input type="date" name="dateOfBirth">
          <p>Department</p>
          
          <select for="department" id="selectDepartment" name="department" >
              @foreach($departments as $department)
                 <option value="{{$department->id}}">{{$department->departmentName}}</option>
              @endforeach
          </select>

      
           
        </div>
<button id="btn1" type="submit" value="submit">Submit</button>
</form>



@endsection