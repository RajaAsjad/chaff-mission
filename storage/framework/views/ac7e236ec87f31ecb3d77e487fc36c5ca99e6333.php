<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?php echo e(asset('public/assets/website/css/style.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(asset('public/assets/website/css/slickfirst.css')); ?>">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <link href="http://fonts.cdnfonts.com/css/helvetica-neue-9" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Bebas+Neue&display=swap" rel="stylesheet">
    
    <!-- NAVIGATION LINKS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" integrity="sha256-eZrrJcwDc/3uDhsdt61sL2oOBY362qM3lon1gyExkL0=" crossorigin="anonymous" />
    <!-- NAVIGATION LINKS -->

    <!-- LINK FOR DATE PICKER -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.3.0/css/datepicker.css" rel="stylesheet" type="text/css" />
    <!-- LINK FOR DATE PICKER -->

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css">

     <!-- file choose link  -->
     <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.2/css/bootstrap.css">

    <title>Chaff Mission</title>
</head>
<body>

       <!-- Header -->
            <?php echo $__env->make('layouts.website.header', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
       <!-- Header End -->

        <?php echo $__env->yieldContent('content'); ?>

        <!-- Footer -->
            <?php echo $__env->make('layouts.website.footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
        <!-- Footer End -->

    <!-- ALL JS -->
    <script src="<?php echo e(asset('public/assets/website/js/slick.js')); ?>"></script>
    <script src="https://code.jquery.com/jquery-2.2.4.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.3.0/js/bootstrap-datepicker.js"></script>
    
    <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>
    
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
</body>
</html>
<?php /**PATH C:\xampp\htdocs\chaff_mission\resources\views/layouts/website/master.blade.php ENDPATH**/ ?>