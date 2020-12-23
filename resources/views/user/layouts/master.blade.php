<!DOCTYPE html>
<html lang="zxx">

<head>
	<title>Surgefile</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta charset="utf-8">
	<meta name="keywords" content="Goggles a Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
	<script>
		addEventListener("load", function () {
			setTimeout(hideURLbar, 0);
		}, false);

		function hideURLbar() {
			window.scrollTo(0, 1);
		}
	</script>
	<link href="{{asset('front_assets/css/bootstrap.css')}}" rel='stylesheet' type='text/css' />
	<link href="{{asset('front_assets/css/login_overlay.css')}}" rel='stylesheet' type='text/css' />
    <link href="{{asset('front_assets/css/style6.css')}}" rel='stylesheet' type='text/css' />
    <link href="{{asset('front_assets/css/contact.css')}}" rel='stylesheet' type='text/css' />
	<link rel="stylesheet" href="{{asset('front_assets/css/shop.css')}}" type="text/css" />
	<link rel="stylesheet" href="{{asset('front_assets/css/owl.carousel.css')}}" type="text/css" media="all">
	<link rel="stylesheet" href="{{asset('front_assets/css/owl.theme.css')}}" type="text/css" media="all">
	<link href="{{asset('front_assets/css/style.css')}}" rel='stylesheet' type='text/css' />
	<link href="{{asset('front_assets/css/fontawesome-all.css')}}" rel="stylesheet">
	<link href="//fonts.googleapis.com/css?family=Inconsolata:400,700" rel="stylesheet">
	<link href="//fonts.googleapis.com/css?family=Poppins:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800"
        rel="stylesheet">
</head>

<body>
    @include('user.layouts.header')
    @yield('content')
    @include('user.layouts.footer')





<!--jQuery-->
<script src="{{asset('front_assets/js/jquery-2.2.3.min.js')}}"></script>
<!-- newsletter modal -->
<!-- Modal -->
<!-- Modal -->
<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">

                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>

<!--search jQuery-->
<script src="{{asset('front_assets/js/modernizr-2.6.2.min.js')}}"></script>
<script src="{{asset('front_assets/js/classie-search.js')}}"></script>
<script src="{{asset('front_assets/js/demo1-search.js')}}"></script>
<!--//search jQuery-->
<!-- cart-js -->
<script src="{{asset('front_assets/js/minicart.js')}}"></script>
<script>
    googles.render();

    googles.cart.on('googles_checkout', function (evt) {
        var items, len, i;

        if (this.subtotal() > 0) {
            items = this.items();

            for (i = 0, len = items.length; i < len; i++) {}
        }
    });
</script>
<!-- //cart-js -->
<script>
    $(document).ready(function () {
        $(".button-log a").click(function () {
            $(".overlay-login").fadeToggle(200);
            $(this).toggleClass('btn-open').toggleClass('btn-close');
        });
    });
    $('.overlay-close1').on('click', function () {
        $(".overlay-login").fadeToggle(200);
        $(".button-log a").toggleClass('btn-open').toggleClass('btn-close');
        open = false;
    });
</script>
<!-- carousel -->
<!-- Count-down -->
<script src="{{asset('front_assets/js/simplyCountdown.js')}}"></script>
<link href="{{asset('front_assets/css/simplyCountdown.css')}}" rel='stylesheet' type='text/css' />
<script>
    var d = new Date();
    simplyCountdown('simply-countdown-custom', {
        year: d.getFullYear(),
        month: d.getMonth() + 2,
        day: 25
    });
</script>
<!--// Count-down -->
<script src="{{asset('front_assets/js/owl.carousel.js')}}"></script>
<script>
    $(document).ready(function () {
        $('.owl-carousel').owlCarousel({
            loop: true,
            margin: 10,
            responsiveClass: true,
            responsive: {
                0: {
                    items: 1,
                    nav: true
                },
                600: {
                    items: 2,
                    nav: false
                },
                900: {
                    items: 3,
                    nav: false
                },
                1000: {
                    items: 4,
                    nav: true,
                    loop: false,
                    margin: 20
                }
            }
        })
    })
</script>

<!-- //end-smooth-scrolling -->


<!-- dropdown nav -->
<script>
    $(document).ready(function () {
        $(".dropdown").hover(
            function () {
                $('.dropdown-menu', this).stop(true, true).slideDown("fast");
                $(this).toggleClass('open');
            },
            function () {
                $('.dropdown-menu', this).stop(true, true).slideUp("fast");
                $(this).toggleClass('open');
            }
        );
    });
</script>
<!-- //dropdown nav -->
<script src="{{asset('front_assets/js/move-top.js')}}"></script>
<script src="{{asset('front_assets/js/easing.js')}}"></script>
<script>
    jQuery(document).ready(function($) {
        $(".scroll").click(function(event) {
            event.preventDefault();
            $('html,body').animate({
                scrollTop: $(this.hash).offset().top
            }, 900);
        });
    });
</script>
<script>
    $(document).ready(function() {
        /*
                                var defaults = {
                                      containerID: 'toTop', // fading element id
                                    containerHoverID: 'toTopHover', // fading element hover id
                                    scrollSpeed: 1200,
                                    easingType: 'linear' 
                                 };
                                */

        $().UItoTop({
            easingType: 'easeOutQuart'
        });

    });
</script>
<!--// end-smoth-scrolling -->

<script src="{{asset('front_assets/js/bootstrap.js')}}"></script>
<!-- js file -->
</body>

</html>