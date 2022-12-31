@include('components/header');
<div class="section-container">
  <div class="container">
    <div class="row">
      
      <div class="col-sm-8 col-sm-offset-2 section-container-spacer">
        <div class="text-center">
          <h1 class="h2">{{$blog->id}} : {{$blog->blog_about}}</h1>
          <p>Here I Descirbed My Blogs Base On My Experience</p>
        </div>
      </div>
      <div class="container">
        <div class="row">
          <div class="col-xl-4 col-md-6 col-sm-12">
            <img src='{{asset("root/blogImages/$blog->blog_image")}}' class="img-fluid" alt="">
          </div>
          <div class="col-xl-6 col-md-6 col-sm-12">
            <h5>{{$blog->blog_description}}</h5>            
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<script>
  document.addEventListener("DOMContentLoaded", function (event) {
     navActivePage();
  });
</script>
<script src="{{asset('design/js/custom.js')}}"></script>
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>