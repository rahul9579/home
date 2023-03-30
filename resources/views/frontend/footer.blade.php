    <!-- footer section start -->
    <div class="footer_section layout_padding">
      <div class="container">
        <div class="footer_main">
          <p class="location_text">Copyright 2020 All Right Reserved By <a href="#">R.k</a></p>
        </div>
        <div class="social_icon">
            <li><a href="#"><img src="{{asset('frontend/images/fb-icon1.png')}}"></a></li>
            <li><a href="#"><img src="{{asset('frontend/images/twitter-icon1.png')}}"></a></li>
            <li><a href="#"><img src="{{asset('frontend/images/linkden-icon1.png')}}"></a></li>
            <li><a href="#"><img src="{{asset('frontend/images/instagram-icon1.png')}}"></a></li>
        </div>
      </div>
    </div>
    <!-- footer section end -->
  
    <!-- Javascript files-->
    <script src="{{asset('frontend/js/jquery.min.js')}}"></script>
    <script src="{{asset('frontend/js/popper.min.js')}}"></script>
    <script src="{{asset('frontend/js/bootstrap.bundle.min.js')}}"></script>
    <script src="{{asset('frontend/js/jquery-3.0.0.min.js')}}"></script>
    <script src="{{asset('frontend/js/plugin.js')}}"></script>
    <!-- sidebar -->
    <script src="{{asset('frontend/js/jquery.mCustomScrollbar.concat.min.js')}}"></script>
    <script src="{{asset('frontend/js/custom.js')}}"></script>
    <!-- javascript --> 
    <script src="{{asset('frontend/js/owl.carousel.js')}}"></script>
    <script src="https:cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.js"></script>
    <script>
    $(document).ready(function(){
    $(".fancybox").fancybox({
    openEffect: "none",
    closeEffect: "none"
    });
         
    $(".zoom").hover(function(){
         
    $(this).addClass('transition');
    }, function(){
         
    $(this).removeClass('transition');
    });
    });
    </script> 
    <script>
     function openNav() {
     document.getElementById("myNav").style.width = "10%";
    }
     function closeNav() {
     document.getElementById("myNav").style.width = "0%";
    }
    </script>  
</body>
</html>