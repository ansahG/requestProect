    <div class="container">
                   
            <div class="content-box">
                <div class="big-box">
                    <div class="">
                        {{-- put  a tool tip to this button explain that itll delete this booking --}}
                         <button wire:click="delete({{ $bookings->id }})" class="btn btn-danger"> <i class="fa fa-trash"></i>  </button wire:click="">
                        <div  class="material" style="text-align:center; font-size:2rem">
                            <h3>Subject: {{ $bookings->subject }}</h3> 
                        </div>
                        <div  class="material">
                            <textarea  style="text-align: center; line-height: 2rem; font-size: 2rem" disabled  class="form-control material" > {{ $bookings->message }} </textarea>
                        </div>
                            <div  class="row" style="text-align:center; font-size: 3rem; color: yellow;">
                                <a href="mailto:{{ $bookings->email }}">  <i class="fa fa-envelope-o"></i> </a>                         
                                <a href="tel:{{ $bookings->phone }}">  <i class="fa fa-phone"></i> </a>                         
                                <a href="https:://wa.me/{{ $bookings->phone }}">  <i class="fa fa-whatsapp"></i> </a>                                                       
                            </div>

                    </div> 
                </div> 
            </div>
        </div> 