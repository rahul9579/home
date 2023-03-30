@extends('frontend.main')
@section('main-container')

    <!-- about section start -->
    <div class="about_section layout_padding">
      <div class="container">
        <div class="row">
          <div class="col-md-6">
            <div><img src="{{asset('frontend/images/img-2.png')}}" class="image_2"></div>
          </div>
          <div class="col-md-6">
            <h1 class="services_taital"><span>About </span> <img src="{{asset('frontend/images/icon-1.png')}}"> <span style="color: #1f1f1f">Cleaning</span></h1>
            <p class="ipsum_text">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,</p>
            <div class="contact_bt_1"><a href="#">READ MORE<span class="contact_padding"><img src="{{asset('frontend/images/contact-icon1.png')}}"></span></a></div>
          </div>
        </div>
      </div>
    </div>
    <!-- about section end -->
@endsection