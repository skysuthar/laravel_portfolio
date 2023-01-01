@include('components/header');
<div class="section-container">
  <div class="container">
    <div class="row">
      
      <div class="col-sm-8 col-sm-offset-2 section-container-spacer">
        <div class="text-center">
          <h1 class="h2">05 : Blogs</h1>
          <p>Here I Descirbed My Blogs Base On My Experience</p>
        </div>
      </div>

      <div class="col-md-12">
     
      <section class="section-services">
            <div class="container">
              <div class="row">
              <!-- Start Single Service -->
              @foreach($blog as $project)

                <div class="col-md-6 col-lg-4" >
                  <div class="single-service">
                    <div class="part-1">
                      <img src='{{asset("root/blogImages/$project->blog_image")}}' alt="" class="img-fluid">

                      <h3 class="title pt-5 text-center">{{$project->blog_name}}</h3>
                    </div>
                    <div class="part-2 text-center">
                      <p class="description">@php 
                                echo strlen($project->blog_description) >= 60 ? substr($project->blog_description, 0,60):$project->blog_description;
                              @endphp</p>
                      <a href="#" class="readMore_btn" data-toggle="modal" data-target="#read_more" data-value="{{$project->blog_description}}"><i class="fas fa-arrow-circle-right"></i>Read More</a>
                      <a href="{{route('fullBlog',$project->id)}}" target="_blank" class="ml-xl-5 ml-lg-5 ml-sm-5 ml-5"><i class="fas fa-external-link-alt"></i>Discover</a>
                    </div>
                  </div>
                </div>
              <!-- / End Single Service -->
              @endforeach
              </div>
            </div>
          </section>



    <!--/myCarousel-->
    </div>



    </div>
  </div>
</div>



    <!-- modal for dicription -->
    <div class="modal fade" id="read_more" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLongTitle">Reject Reason</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <form action="" class="form-group">
                            <div class="modal-body mt-2">
                                <textarea class="reason p-2 form-control text-dark" id="project_description" cols="50" rows="4" style="resize: none;" readonly></textarea>
                            </div>
                        </form>
                            
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

 <script type="text/javascript" src="{{asset('design/main.70a66962.js')}}"></script></body>
<script>
  $(".readMore_btn").on('click',function(){
    var desc = $(this).data('value');
    $("#project_description").text(desc);
  });
</script>
</html>