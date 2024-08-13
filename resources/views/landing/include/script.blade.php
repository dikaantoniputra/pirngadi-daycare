 
        <!-- External -->
        <script type="text/javascript" src="{{ asset('') }}js/plugin.js"></script>
        <script type="text/javascript" src="{{ asset('') }}js/main.js"></script>

        <script type="text/javascript">
            jQuery(document).ready(function() {

                jQuery(".flexslider-wrap .flexslider").flexslider({
                    animation: "fade",
                    animationLoop: true,
                    animationSpeed: 1500,
                    slideshow: true,
                    pauseOnHover: false,
                    controlNav: false,
                    directionNav: true
                });

            });
        </script>