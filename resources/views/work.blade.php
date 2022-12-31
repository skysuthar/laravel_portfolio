@include('components/header');
<div class="section-container">
  <div class="container-fluid">
    <div class="row">
       
      <div class="col-sm-8 col-sm-offset-2 section-container-spacer">
        <div class="text-center">
          <h1 class="h2">02 : Works</h1>
          <h4>Here I Descirbed My Projects Developed in Different Languages.</h4>
        </div>
      </div>

      <div class="col-md-12">
          

          <section class="section-services">
            <div class="container">
              <div class="row">
              <!-- Start Single Service -->
              @foreach($project as $project)

                <div class="col-md-6 col-lg-4" >
                  <div class="single-service">
                    <div class="part-1">
                        <img src='{{asset("root/projectImages/$project->project_image")}}' alt="" class="img-fluid">
                      <h3 class="title pt-5 text-center">{{$project->project_name}}</h3>
                    </div>
                    <div class="part-2 text-center">
                      <p class="description">@php 
                                echo strlen($project->project_description) >= 60 ? substr($project->project_description, 0,60):$project->project_description;
                              @endphp</p>
                      <a href="#" class="readMore_btn" data-toggle="modal" data-target="#read_more" data-value="{{$project->project_description}}"><i class="fas fa-arrow-circle-right"></i>Read More</a>
                      <a href="{{$project->project_link}}" target="_blank" class="ml-xl-5 ml-lg-5 ml-sm-5 ml-5"><i class="fas fa-external-link-alt"></i>Discover</a>
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


<footer class="footer-container text-center">
  <div class="container">
    <div class="row">
      <div class="col-xs-12">
        <p>© UNTITLED | Website created with <a href="http://www.mashup-template.com/" title="Create website with free html template">Mashup Template</a>/<a href="https://www.unsplash.com/" title="Beautiful Free Images">Unsplash</a></p>
      </div>
    </div>
  </div>
</footer>

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

<!-- Google Analytics: change UA-XXXXX-X to be your site's ID 

<script>
  (function (i, s, o, g, r, a, m) {
    i['GoogleAnalyticsObject'] = r; i[r] = i[r] || function () {
      (i[r].q = i[r].q || []).push(arguments)
    }, i[r].l = 1 * new Date(); a = s.createElement(o),
      m = s.getElementsByTagName(o)[0]; a.async = 1; a.src = g; m.parentNode.insertBefore(a, m)
  })(window, document, 'script', '//www.google-analytics.com/analytics.js', 'ga');
  ga('create', 'UA-XXXXX-X', 'auto');
  ga('send', 'pageview');
</script>

--> <script type="text/javascript" src="{{asset('design/main.70a66962.js')}}"></script></body>
<script>
  $(".readMore_btn").on('click',function(){
    var desc = $(this).data('value');
    $("#project_description").text(desc);
  });
</script>
</html>