<!DOCTYPE html>
<html lang="en">
<head>
    <title>Chaff Mission</title>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="csrf-token" content="{{ csrf_token() }}" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <link rel="icon" type="image/x-icon" href="{{ asset('public/assets/website/images/favicon.ico') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" crossorigin="anonymous" />
    <link rel="stylesheet" href="{{ asset('public/assets/website/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('public/assets/website/css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('public/assets/website/css/slickfirst.css') }}">
    
    <link href="{{ asset('public/assets/website/css/helvetica-neue-9.css') }}" rel="stylesheet">
    <link href="{{ asset('public/assets/website/css/css2.css') }}" rel="stylesheet">
    
    <!-- LINK FOR DATE PICKER -->
    <link href="{{ asset('public/assets/website/css/datepicker.css') }}" rel="stylesheet" type="text/css" />
    <!-- LINK FOR DATE PICKER -->

    <link rel="stylesheet" href="{{ asset('public/assets/website/css/owl.carousel.min.css') }}">

    <!-- file choose link  -->
    <link rel="stylesheet" href="{{ asset('public/assets/website/css/bootstrap.css') }}">   

    @stack('css')
</head>

<body>
    <!-- Header -->
    @include('layouts.website.header')
    <!-- Header End -->

    @yield('content')

    <!-- Footer -->
    @include('layouts.website.footer')
    <!-- Footer End -->

    <!-- ALL JS -->
    <script src="{{ asset('public/assets/website/js/popper.min.js') }}" crossorigin="anonymous"></script>
    <script src="{{ asset('public/assets/website/js/jquery-2.2.4.min.js') }}"></script>
    <script src="{{ asset('public/assets/website/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('public/assets/website/js/jquery-3.2.1.slim.min.js') }}" crossorigin="anonymous"></script>
    <script src="{{ asset('public/assets/website/js/slick.js') }}"></script>
    
    <script src="{{ asset('public/assets/website/js/bootstrap-datepicker.js') }}"></script>
    <script src="{{ asset('public/assets/website/js/owl.carousel.min.js') }}"></script>
    
    @stack('js')

    <script>
        $(function () {
        $("#datepicker").datepicker({ 
                autoclose: true, 
                todayHighlight: true
        }).datepicker('update', new Date());
        });
    </script>
    <script>
        $(function () {
            $("#datepicker2").datepicker({ 
                autoclose: true, 
                todayHighlight: true
            }).datepicker('update', new Date());
        });
    </script>
    <script>
        $('.nav-tabs li ').on('click', function(){
            $('.nav-tabs li.active').removeClass('active');
            $(this).addClass('active');
        });
    </script>
    <script>
        (function () {
        "use strict";

        var carousels = function () {
            $(".owl-carousel1").owlCarousel({
            loop: true,
            center: true,
            autoplay:true,
            autoplaySpeed: 2000,
            margin: 0,
            responsiveClass: true,
            nav: false,
            responsive: {
                0: {
                items: 1,
                nav: false
                },
                680: {
                items: 2,
                nav: false,
                loop: false
                },
                1000: {
                items: 3,
                nav: true
                }
            }
            });
        };

        (function ($) {
            carousels();
            })(jQuery);
        })();
    </script>
    <script>
        // INCLUDE JQUERY & JQUERY UI 1.12.1
        $( function() {
            $( "#datepicker20" ).datepicker({
                dateFormat: "dd-mm-yy"
                ,	duration: "fast"
            });
        } );
    </script>
    <script>
        // INCLUDE JQUERY & JQUERY UI 1.12.1
        $( function() {
            $( "#datepicker11" ).datepicker({
                dateFormat: "dd-mm-yy"
                ,	duration: "fast"
            });
        } );

        var dateToday = new Date(); 
        $(function() {
            $( ".datepicker" ).datepicker({
                numberOfMonths: 3,
                showButtonPanel: true,
                minDate: dateToday
            });
        });
    </script>
</body>
</html>
