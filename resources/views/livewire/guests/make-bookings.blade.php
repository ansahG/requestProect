{{-- <div id="google-map" class="wow fadeIn" data-latitude="52.365629" data-longitude="4.871331" data-wow-duration="1000ms" data-wow-delay="400ms"></div> --}}
    <div id="contact-us" class="parallax">
      <div class="container">
        <div class="row">
          <div class="heading text-center col-sm-8 col-sm-offset-2 wow fadeInUp" data-wow-duration="1000ms" data-wow-delay="300ms">
            <h2>Contact Us</h2>
            <p> Let us know your worries right away. Simple and straight to the point may be given priority</p>
          </div>
        </div>
        <div class="contact-form wow fadeIn" data-wow-duration="1000ms" data-wow-delay="600ms">
          <div class="row">
            <div class="col-sm-6">
              

              <form id="main-contact-form" wire:submit.prevent="createBooking">
                <div class="row  wow fadeInUp" data-wow-duration="1000ms" data-wow-delay="300ms">
                  <div class="col-sm-6">
                    <div class="form-group">
                      <input wire:model="name" type="text" class="form-control" placeholder="Name" required="required">
                    </div>
                    <div>
                        @error('name')
                            <small style="color:red">   {{ $message }} </small>
                        @enderror
                    </div>
                  </div>

                  <div class="col-sm-6">
                    <div class="form-group">
                      <input wire:model="email" type="email"  class="form-control" placeholder="Email Address" required="required">
                    </div>
                    <div>
                        @error('email')
                            <small style="color:red">   {{ $message }} </small>
                        @enderror
                    </div>
                  </div>
                    

                      <div class="col-sm-3">
                    <div class="form-group">
                      <input wire:model="countryCode" type="number" class="form-control" placeholder="Country Code mostly +2.." required="required">
                    </div>
                     @error('countryCode')
                            <small style="color:red">   {{ $message }} </small>
                        @enderror
                    <div>
                    </div>
                  </div>

                  <div class="col-sm-9">
                    <div class="form-group">
                      <input wire:model="phone" type="number" class="form-control" placeholder="phone" required="required">
                    </div>
                     @error('phone')
                            <small style="color:red">   {{ $message }} </small>
                        @enderror
                    <div>
                    </div>
                  </div>

                </div>
                <div class="form-group">
                  <input wire:model="subject" type="text"  class="form-control" placeholder="Subject" required="required">
                  <div>
                        @error('subject')
                            <small style="color:red">   {{ $message }} </small>
                        @enderror
                    </div>
                </div>
                    

                <div class="form-group">
                  <textarea wire:model="message" class="form-control" rows="4" placeholder="Enter your message" required="required"></textarea>
                  <div>
                        @error('message')
                            <small style="color:red">   {{ $message }} </small>
                        @enderror
                    </div>
                </div>  
                    

                <div class="form-group">
                  <button type="submit" class="btn btn-primary">Send Now</button>
                </div>
              </form>


            </div>

            <div class="col-sm-6">
              <div class="contact-info wow fadeInUp" data-wow-duration="1000ms" data-wow-delay="300ms">
                {{-- <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation.</p> --}}
                <ul class="address">
                  <li><i class="fa fa-map-marker"></i> <span> Address:</span> 2400 South Avenue A </li>
                  <a href="tel:+233550481140" style="text-decoration:none; color:white"> <li><i class="fa fa-phone"></i> <span> Phone:</span> +233 550 48 1140  </li> </a>
                  <li><i class="fa fa-envelope"></i> <span> Email:</span><a href="mailto:someone@yoursite.com"> ansahgideon590@gmail.com</a></li>
                  <li><i class="fa fa-globe"></i> <span> Website:</span> <a href="#">herokuapp.{{ config('app.name') }}.com</a></li>
                </ul>
              </div>                            
            </div>
          </div>
        </div>
      </div>
    </div>        