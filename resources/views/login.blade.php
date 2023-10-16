 <!DOCTYPE html>
<html lang="en">
<head>
  <title>PHP Login Form</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!--bootstrap4 library linked-->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
<style type="text/css">
  .registration-form{
     background: grey;
     padding: 20px;
     border: 1px solid orange;
     margin: 50px 0px;
   }
   
   .registration-form form{
     border: 1px solid #e8e8e8;
     padding: 10px;
     background: #f3f3f3;
   }
</style>
</head> 
<body>
 @extends('layout.bars')

@section('content')
<div class="container-fluid">
  <div>
      @if (session('msg'))
     <h3> {{session('msg')}} <h3>
      @endif
  </div>
 <div class="row">
   <div class="col-sm-4">
   </div>
   <div class="col-sm-4">
     
    <!--====registration form====-->
    <div class="registration-form">
      <h4 class="text-center">PHP Login Form</h4>

</p>
<form action="{{route('User.login')}}" method="post">
@csrf
        
        <!--// Email//-->
        <div class="form-group">
            <label for="email">Email:</label>
            <input type="text" class="form-control" id="email" placeholder="Enter email" name="email">
                

        </div>
        
        <!--//Password//-->
         <div class="form-group">
            <label for="pwd">Password:</label>
            <input type="password" class="form-control"  placeholder="Enter password" name="password">
                

        </div>

        
        <button type="submit" class="btn btn-danger" value="login" name="register">Login</button>
      </form>
    </div>
   </div>
   <div class="col-sm-4">
   </div>
 </div>
  
</div>
@endsection

 <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script> <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script> <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
</body>
</html> 
