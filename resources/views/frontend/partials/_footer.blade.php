      <section class="footer-area pt-50 pb-20">
         <div class="container">
            <div class="row">
               <div class="col-lg-4 col-sm-6">
                  <div class="single-footer-widget">
                     Logo
                     <ul class="footer-contact-info">
                        <li>
                           <span>Address:</span>
                           <a href="#" target="_blank">{{$setting[5]->value}}</a>
                        </li>
                        <li>
                           <span>Phone:</span>
                           <a href="tel:{{$setting[5]->value}}">{{$setting[5]->value}}</a>
                        </li>
                        <li>
                           <span>Email:</span>
                           <a href="mailto:{{$setting[1]->value}}"><span>{{$setting[1]->value}}</span></a>
                        </li>
                     </ul>
                  </div>
               </div>
               <div class="col-lg-4 col-sm-6">
                  <div class="single-footer-widget">
                     <h2>Quick Link</h2>
                     <ul class="quick-links">
                        <li>
                           <a href="{{route('pages.about-us')}}">About Us</a>
                        </li>                        
                        <li>
                           <a href="{{route('pages.contact-us')}}">Contact Us</a>
                        </li>                        
                        <li>
                           <a href="{{route('pages.return-policy')}}">Return Policy</a>
                        </li>                        
                        <li>
                           <a href="{{route('pages.terms-of-services')}}">Terms of Services</a>
                        </li>
                     </ul>
                  </div>
               </div>
               <div class="col-lg-4 col-sm-6">
                  <div class="single-footer-widget">
                     <h2>Social Link</h2>
                     <ul class="footer-social">
                        <li>
                           <a href="{{$setting[7]->value}}" target="_blank">
                           <i class='bx bxl-facebook'></i>
                           </a>
                        </li>
                        <li>
                           <a href="{{$setting[8]->value}}" target="_blank">
                           <i class='bx bxl-twitter'></i>
                           </a>
                        </li>
                        <li>
                           <a href="{{$setting[9]->value}}" target="_blank">
                           <i class='bx bxl-linkedin'></i>
                           </a>
                        </li>
                        <li>
                           <a href="{{$setting[10]->value}}" target="_blank">
                           <i class='bx bxl-whatsapp'></i>
                           </a>
                        </li>
                     </ul>
                  </div>
               </div>
            </div>
         </div>
      </section>
      <div class="copyright-area">
         <div class="container">
            <div class="copyright-area-content">
               <p>
                  {{$setting[11]->value}}
               </p>
            </div>
         </div>
      </div>
      <div class="go-top">
         <i class='bx bx-up-arrow-alt'></i>
      </div>