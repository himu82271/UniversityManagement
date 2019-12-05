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

<form class="form" action="{{url('/store')}}" method="POST">
        @csrf
        <div class="title">
          <i class="fas fa-pencil-alt"></i> 
          <h2 class="formcolor">Department Info</h2>
        </div>
        <div class="info" >
        <p>Department Name</p>
          <input class="departmentName" type="text" name="departmentName" >
        <p>Description</p>
          <input type="text" name="description" >
        <p>Department Code</p>
          <input type="text" name="departmentCode">
          <p>Dean Name</p>
          <input type="text" name="dean" >
          <p>Total Credits</p>
          <input type="text" name="totalCredits" >

         
        </div>
<button id="btn1" type="submit" value="submit">Submit</button>
</form>


@endsection