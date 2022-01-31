        

        <ul>
            {{-- first check if there is any contact information in the database so not to throw error at all --}}
            {{-- second is to check if the spcified infroamtion needed is avaliable in the databse before we show the icons on the page --}}
            @forelse($contactInformation as $contactInformation)

            @if($contactInformation->name)
            <li><a class="twitter" href="https//:www.twitter.com/".{{ $contactInformation->twitter }}><i class="fa fa-twitter"></i></a></li> 
            @endif

            @if($contactInformation->facebook)
            <li><a class="facebook" href="{{ route('facebook', $contactInformation->facebook) }}"><i class="fa fa-facebook"></i></a></li>
            @endif

            @if($contactInformation->linkedIn)
            <li><a class="linkedin" href="{{ route('linkedIn' , $contactInformation->linkedIn) }}"><i class="fa fa-linkedin"></i></a></li>
            @endif

             @if($contactInformation->instagram)
            <li><a class="linkedin" href="{{ route('Instagram' , $contactInformation->instagram) }}"><i class="fa fa-instagram"></i></a></li>
            @endif

            @if($contactInformation->whatsapp)
            <li><a class="linkedin" href="{{ route('whatsapp' , $contactInformation->whatsapp) }}"><i class="fa fa-whatsapp"></i></a></li>
            @endif
            
            @empty
            show nothing if empty
          @endforelse
            
          </ul> 

