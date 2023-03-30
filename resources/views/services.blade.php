@extends('frontend.main')
@section('main-container')
    <!-- services section start -->
    <div class="services_section layout_padding">
      <div class="container">
        <h1 class="services_taital"><span>Our</span> <img src="{{asset('frontend/images/icon-1.png')}}"> <span style="color: #1f1f1f">Services</span></h1>
        <p class="services_text">Consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua</p>
        <div id="main_slider" class="carousel slide" data-ride="carousel">
          <div class="carousel-inner">
            <div class="carousel-item active">
              <div class="services_section_2 layout_padding">
                <div class="row">
                  <div class="col-md-6">
                    <div class="box_section active">
                      <div class="tiles_img"></div>
                      <h3 class="tile_text active">Tile & Grout</h3>
                      <p class="lorem_text active">exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor </p>
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="box_section">
                      <div class="tiles_img_1"></div>
                      <h3 class="tile_text">Carpet Cleaning</h3>
                      <p class="lorem_text">exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor</p>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="carousel-item">
              <div class="services_section_2 layout_padding">
                <div class="row">
                  <div class="col-md-6">
                    <div class="box_section active">
                      <div class="tiles_img"></div>
                      <h3 class="tile_text active">Tile & Grout</h3>
                      <p class="lorem_text active">exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor </p>
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="box_section active">
                      <div class="tiles_img_1"></div>
                      <h3 class="tile_text">Carpet Cleaning</h3>
                      <p class="lorem_text">exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor</p>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <a class="carousel-control-prev" href="#main_slider" role="button" data-slide="prev">
            <i class="fa fa-angle-left"></i>
          </a>
          <a class="carousel-control-next" href="#main_slider" role="button" data-slide="next">
            <i class="fa fa-angle-right"></i>
          </a>
        </div>
      </div>
    </div>

@endsection