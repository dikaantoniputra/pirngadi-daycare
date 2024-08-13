<!DOCTYPE html>
<html lang="en-US" class="no-js">



@stack('before-style')
@include('landing.include.head')
@stack('after-style')



<body>

    <div id="main-wrapper" class="animsition clearfix">
    
            @include('landing.include.nav')
            @include('landing.include.navmobile')
            @yield('content')
            @include('landing.include.footer')
           
        
            <div id="copyright">
                <div class="container">
                    <div class="row">
                        <!-- Copyright Text Start -->
                        <div class="copyright-text col-md-6">
                            <p>Copyright Pirngadi |  All Rights Reserved | Powered By IT & Multimedia</p>
                        </div>
                        <!-- Copyright Text End -->

                        <!-- Social LInks Start -->
                        <div class="social-links col-md-6">
                            <ul class="no-padding">
                                <li><a href="http://facebook.com" target="_blank"><i class="fa fa-facebook"></i></a></li>
                                <li><a href="http://twitter.com" target="_blank"><i class="fa fa-twitter"></i></a></li>
                                <li><a href="http://tumblr.com" target="_blank"><i class="fa fa-tumblr"></i></a></li>
                                <li><a href="http://vimeo.com" target="_blank"><i class="fa fa-vimeo"></i></a></li>
                                <li><a href="http://dribbble.com" target="_blank"><i class="fa fa-dribbble"></i></a></li>
                                <li><a href="http://instagram.com" target="_blank"><i class="fa fa-instagram"></i></a></li>
                                <li><a href="http://rss.com" target="_blank"><i class="fa fa-rss"></i></a></li>
                            </ul>
                        </div>
                        <!-- Social Links End -->
                    </div>
                </div>
            </div>
            <!-- COPYRIGHT END -->

        </div>


    @stack('before-script')
    @include('landing.include.script')
    @stack('after-script')
    

</body>

<!-- Mirrored from max-themes.net/demos/kingster/college/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 24 Jul 2024 00:55:04 GMT -->
</html>
