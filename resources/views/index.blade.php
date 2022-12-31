@include('components/header')
 
<!-- Add your site or app content here -->
  <div class="hero-full-container background-image-container white-text-container" style="background-image: url({{asset('design/images/1636121693866.jpg')}});">
    <div class="container">
      <div class="row">
        <div class="col-xs-12">
          <div class="hero-full-wrapper">
            <div class="text-content">
              <h1>Hello,<br>
                <span id="typed-strings">
                  <span>I'm Akash Suthar</span>
                  <span>Web Developer</span>
                  <span>Working as a PHP/Laravel Developer</span>
                </span>
                <span id="typed"></span>
              </h1>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
<script>
  document.addEventListener("DOMContentLoaded", function (event) {
     type();

  });
</script>
<script type="text/javascript" src="{{asset('design/main.70a66962.js')}}"></script>


</body>

</html>