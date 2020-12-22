      <div class="top-header-area">
         <div class="container">
            <div class="row">
               <div class="col-lg-6">
                  <div class="top-header-content">
                     <span>
                     <i class="flaticon-check"></i>
                     {{$setting[0]->value}}
                     </span>
                  </div>
               </div>
               <div class="col-lg-6 text-right">
               		<span class="text-light">Email Address : <a href="mailto:{{$setting[1]->value}}">{{$setting[1]->value}}</a></span>
               </div>
            </div>
         </div>
      </div>
      <div class="middle-header-area">
         <div class="container">
            <div class="row align-items-center">
               <div class="col-lg-3">
                  <div class="middle-header-logo">
                     <a href="index.html">
             			<img src="{{asset('frontend/assets/img/logo.png')}}" alt="image">
                     </a>
                  </div>
               </div>
               <div class="col-lg-6">
                  <div class="middle-header-search">
                     <form>
                        <div class="row align-items-center">
                           <div class="col-md-4">
                              <div class="form-group">
                                 <select>
                                    <option>All Category</option>
                                    <option value="1">Computers</option>
                                    <option value="2">Audio</option>
                                    <option value="2">Home Theater</option>
                                    <option value="3">Laptop</option>
                                    <option value="3">TV</option>
                                    <option value="3">Mobiles</option>
                                    <option value="3">Tablets</option>
                                    <option value="3">Headphone</option>
                                    <option value="3">Earphone</option>
                                    <option value="3">Battery</option>
                                    <option value="3">Watches</option>
                                    <option value="3">Cameras</option>
                                    <option value="3">Accessories</option>
                                 </select>
                              </div>
                           </div>
                           <div class="col-md-8">
                              <div class="search-box">
                                 <input type="text" class="form-control" placeholder="Search product...">
                                 <button type="submit"><i class='bx bx-search'></i></button>
                              </div>
                           </div>
                        </div>
                     </form>
                  </div>
               </div>
               <div class="col-lg-3">
                  <ul class="middle-header-optional">
                     <li>
                        <a href="{{route('pages.cart')}}"><i class="flaticon-shopping-cart"></i></a>
                     </li>
                  </ul>
               </div>
            </div>
         </div>
      </div>
      <div class="navbar-area">
         <div class="main-responsive-nav">
            <div class="container">
               <div class="main-responsive-menu">
                  <div class="logo">
                     <a href="index.html">
                     <img src="{{asset('frontend/assets/img/logo.png')}}" alt="logo">
                     </a>
                  </div>
               </div>
            </div>
         </div>
         <div class="main-navbar">
            <div class="container">
               <nav class="navbar navbar-expand-md navbar-light">
                  <div class="navbar-category category-two">
                     <div class="collapse navbar-collapse">
                        <ul class="navbar-nav">
                           <li class="nav-item">
                              <a href="#" class="nav-link">
                              <i class='bx bx-menu'></i>
                              All Categories
                              </a>
                              <ul class="dropdown-menu">
                                 <li class="nav-item">
                                    <a href="#" class="nav-link">
                                    <i class="flaticon-desktop-computer"></i>
                                    Computers
                                    </a>
                                 </li>
                                 <li class="nav-item">
                                    <a href="#" class="nav-link">
                                    <i class="flaticon-stereo"></i>
                                    Audio
                                    </a>
                                 </li>
                                 <li class="nav-item">
                                    <a href="#" class="nav-link">
                                    <i class="flaticon-laptop"></i>
                                    Laptop
                                    </a>
                                 </li>
                                 <li class="nav-item">
                                    <a href="#" class="nav-link">
                                    <i class="flaticon-tv-box"></i>
                                    TV
                                    </a>
                                 </li>
                                 <li class="nav-item">
                                    <a href="#" class="nav-link">
                                    <i class="flaticon-smartphone"></i>
                                    Mobiles
                                    </a>
                                 </li>
                                 <li class="nav-item">
                                    <a href="#" class="nav-link">
                                    <i class="flaticon-headphones"></i>
                                    Headphone
                                    </a>
                                 </li>
                                 <li class="nav-item">
                                    <a href="#" class="nav-link">
                                    <i class="flaticon-battery-charge"></i>
                                    Battery
                                    </a>
                                 </li>
                                 <li class="nav-item">
                                    <a href="#" class="nav-link">
                                    <i class="flaticon-smart-watch"></i>
                                    Watches
                                    </a>
                                 </li>
                                 <li class="nav-item">
                                    <a href="#" class="nav-link">
                                    <i class="flaticon-camera"></i>
                                    Cameras
                                    </a>
                                 </li>
                                 <li class="nav-item">
                                    <a href="#" class="nav-link">
                                    <i class="flaticon-trimmer"></i>
                                    Accessories
                                    </a>
                                 </li>
                              </ul>
                           </li>
                        </ul>
                     </div>
                  </div>
                  <div class="collapse navbar-collapse mean-menu">
                     <ul class="navbar-nav">
                     	<li class="nav-item">
                           <a href="/" class="nav-link">Home</a>
                        </li>
                        <li class="nav-item">
                           <a href="#" class="nav-link">
                           Category
                           <i class='bx bx-chevron-down'></i>
                           </a>
                           <ul class="dropdown-menu">
                              <li class="nav-item">
                                 <a href="blog.html" class="nav-link">Category</a>
                              </li>
                              <li class="nav-item">
                                 <a href="blog-list-view.html" class="nav-link">Blog List View</a>
                              </li>
                              <li class="nav-item">
                                 <a href="blog-left-sidebar.html" class="nav-link">Blog Left Sidebar</a>
                              </li>
                              <li class="nav-item">
                                 <a href="blog-right-sidebar.html" class="nav-link">Blog Right Sidebar</a>
                              </li>
                              <li class="nav-item">
                                 <a href="blog-full-width.html" class="nav-link">Blog Full Width</a>
                              </li>
                              <li class="nav-item">
                                 <a href="blog-details.html" class="nav-link">Blog Details</a>
                              </li>
                           </ul>
                        </li>
                        <li class="nav-item">
                           <a href="{{route('pages.about-us')}}" class="nav-link">About Us</a>
                        </li>                        
                        <li class="nav-item">
                           <a href="{{route('pages.contact-us')}}" class="nav-link">Contact Us</a>
                        </li>  
                     </ul>
                     <div class="others-option d-flex align-items-center">
                        <div class="option-item">
                           <span>
                           Hotline:
                           <a href="tel:{{$setting[5]->value}}">{{$setting[5]->value}}</a>
                           </span>
                        </div>
                     </div>
                  </div>
               </nav>
            </div>
         </div>
      </div>