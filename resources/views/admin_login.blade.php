 <!DOCTYPE html>
 <html lang="en">
 <head>
   
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Login</title>

   <!-- Fonts Link -->
   <link href="https://fonts.googleapis.com/css?family=Nunito:400,600,700" rel="stylesheet">
    <!-- Bootstrap 5 CSS -->
   <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
   
   <link rel="stylesheet" href="{{asset('design/css/style.css')}}" type="text/css">
 </head>
 <body>
   @if(session('error')) 
      <div class="alert alert-warning alert-dismissible fade show" role="alert">
         <strong>{{session('error')}}</strong>
         <button type="button" class="close" data-dismiss="alert" aria-label="Close">
           <span aria-hidden="true">&times;</span>
         </button>
      </div> 
   @endif

   <div class="main-content">
      <div class="container bg-dark p-3">
         <div class="row justify-content-center">
            <div class="col-8 bg-success m-5">
               <h4 class="p-3">Admin Login</h4>
            </div>
         </div>
         <form class="form-group mb-5" action="{{route('login')}}" method="post">
            {{csrf_field()}}
            <div class="row justify-content-center m-4 mt-0">
                  <div class="col-8">
                     <label for="" class="text-white">Email:</label>
                     <input type="text" name="email" class="form-control mt-2" value="@if(Session::has('email')){{Session::get('email')}}@endif">
                  </div>
                  <div class="col-8 mt-3">
                     <label for="" class="text-white">Password:</label>
                     <input type="password" name="password" class="form-control mt-2"        value="@if(Session::has('password')){{Session::get('password')}}@endif">
                  <span class="text-danger">
                  </span>
                  </div>

                  <div class="col-8 mt-3 mb-3">
                     <button class="btn btn-primary">Submit</button>
                  </div>
            </div>
         </form>
      </div>
   </div>

<!-- Bootstrap JS -->
  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <script type="text/javascript">
   $('#myAlert').on('closed.bs.alert', function () {
  // do something…
})
   </script>
 </body>
 </html>
