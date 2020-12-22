      <div class="main-slider-with-categories">
         <div class="container">
            <div class="row">
               <div class="col-lg-4 col-md-12 sm-none">
                  <ul class="slider-categories">
                    @foreach($categories as $category)
                     <li>
                        <a href="" class="nav-link">
                        <i class="flaticon-desktop-computer"></i>
                        {{$category->category_name}}
                        </a>
                     </li>
                     @endforeach
                  </ul>
               </div>
               <div class="col-lg-8 col-md-12">
                  <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
                    <div class="carousel-inner">
                      @foreach($sliders as $slider)
                        <div class="carousel-item {{ $loop->first ? 'active' : '' }}">
                          <img class="d-block w-100" src="{{asset('uploads/sliders/'.$slider->slider_image)}}" alt="First slide">
                            <div class="carousel-caption d-none d-md-block">
                                <a href="" class="btn btn-primary">Shop Now</a>
                            </div>
                        </div>
                      @endforeach
                    </div>
                    <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
                      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                      <span class="sr-only">Previous</span>
                    </a>
                    <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
                      <span class="carousel-control-next-icon" aria-hidden="true"></span>
                      <span class="sr-only">Next</span>
                    </a>
                  </div>
               </div>
            </div>
         </div>
      </div>