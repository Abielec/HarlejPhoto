<!DOCTYPE HTML>
<html lang="pl">
        <head>
                <meta charset="utf-8">
                <meta http-equiv="X-UA-Compatible" content="IE=edge">
                <meta name="viewport" content="width=device-width, initial-scale=1">
            
                <!-- CSRF Token -->
                <meta name="csrf-token" content="{{ csrf_token() }}">
            
                <title>{{ config('app.name', 'Laravel') }}</title>
            
                <!-- Scripts -->
                <script src="{{ asset('js/app.js') }}" defer></script>
            
                <!-- Fonts -->
                @stack('fonts')
                <!-- Styles -->
                <link href="{{ asset('css/app.css') }}" rel="stylesheet">
                <link href="{{asset('css/style.css')}}" rel="stylesheet">
                @stack('styles')
            </head>
<body>
    @php
    $MenuUl = DB::Table('menus')
    ->select('title','url')
    ->get();
    
    @endphp
    @if($MenuUl != '[]')
    <nav class="navbar fixed-top navbar-expand-lg navbar-dark Menu">
            <a class="Menu__nav--a-logo display-1 navbar-brand  h1 d-block mb-0 " href="#">Krystian Harlej fotografia</a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mx-auto">
                @foreach($MenuUl as $MenuLi)
                    <li class="nav-item"><a class="nav-link" href="{{$MenuLi->url}}">{{$MenuLi->title}}</a></li>
                @endforeach
            </ul>
          </div>
        </nav>
        @endif
    @yield('content')
    <script src="{{ asset('js/jquery.js') }}" ></script>
     <script>
     // Select all links with hashes
 $('a[href*="#"]')
   // Remove links that don't actually link to anything
   .not('[href="#"]')
   .not('[href="#0"]')
   .click(function(event) {
     // On-page links
     if (
       location.pathname.replace(/^\//, '') == this.pathname.replace(/^\//, '') 
       && 
       location.hostname == this.hostname
     ) {
       // Figure out element to scroll to
       var target = $(this.hash);
       target = target.length ? target : $('[name=' + this.hash.slice(1) + ']');
       // Does a scroll target exist?
       if (target.length) {
         // Only prevent default if animation is actually gonna happen
         event.preventDefault();
         $('html, body').animate({
           scrollTop: target.offset().top
         }, 1000, function() {
           // Callback after animation
           // Must change focus!
           var $target = $(target);
           $target.focus();
           if ($target.is(":focus")) { // Checking if the target was focused
             return false;
           } else {
             $target.attr('tabindex','-1'); // Adding tabindex for elements not focusable
             $target.focus(); // Set focus again
           };
         });
       }
     }
   });
     </script>
    @stack('scripts')
    
</body>
</html>
        