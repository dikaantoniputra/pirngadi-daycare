@extends('landing.layout.app')

@section('title')
Bukti Pembayaran
@endsection

@push('after-style')

@endpush

@section('content')
<section id="content" class="single-wrapper">
    <!-- Page Title -->
    <div class="grey-background wow fadeIn">
        <div class="container">
            <div class="heading-block page-title wow fadeInUp">
                <h1>Gallery</h1>
            </div>
        </div>
    </div>

    <!-- GALLERY START
    ============================================= -->
    <div class="gallery">
        <div class="container">
            <!-- Gallery Items
            ============================================= -->
            <div id="gallery" class="wow fadeIn clearfix">
                <div class="gallery-item exterior">
                    <div class="wow fadeIn">
                        <a title="gallery" href="img/gallery/gallery-lg-1.jpg">
                            <div class="gallery-image">
                                <img src="img/gallery/gallery-lg-1.jpg" alt="" />
                                <div class="overlay dark"></div>
                                <span><i class="fa fa-plus"></i></span>
                            </div>
                        </a>
                    </div>
                </div>

                <div class="gallery-item exterior">
                    <div class="wow fadeIn">
                        <a title="gallery" href="img/gallery/gallery-lg-2.jpg">
                            <div class="gallery-image">
                                <img src="img/gallery/gallery-lg-2.jpg" alt="" />
                                <div class="overlay dark"></div>
                                <span><i class="fa fa-plus"></i></span>
                            </div>
                        </a>
                    </div>
                </div>

                <div class="gallery-item exterior">
                    <div class="wow fadeIn">
                        <a title="gallery" href="img/gallery/gallery-lg-3.jpg">
                            <div class="gallery-image">
                                <img src="img/gallery/gallery-lg-3.jpg" alt="" />
                                <div class="overlay dark"></div>
                                <span><i class="fa fa-plus"></i></span>
                            </div>
                        </a>
                    </div>
                </div>

                <div class="gallery-item exterior">
                    <div class="wow fadeIn">
                        <a title="gallery" href="img/gallery/gallery-lg-4.jpg">
                            <div class="gallery-image">
                                <img src="img/gallery/gallery-lg-4.jpg" alt="" />
                                <div class="overlay dark"></div>
                                <span><i class="fa fa-plus"></i></span>
                            </div>
                        </a>
                    </div>
                </div>

                <div class="gallery-item exterior">
                    <div class="wow fadeIn">
                        <a title="gallery" href="img/gallery/gallery-lg-5.jpg">
                            <div class="gallery-image">
                                <img src="img/gallery/gallery-lg-5.jpg" alt="" />
                                <div class="overlay dark"></div>
                                <span><i class="fa fa-plus"></i></span>
                            </div>
                        </a>
                    </div>
                </div>

                <div class="gallery-item exterior">
                    <div class="wow fadeIn">
                        <a title="gallery" href="img/gallery/gallery-lg-6.jpg">
                            <div class="gallery-image">
                                <img src="img/gallery/gallery-lg-6.jpg" alt="" />
                                <div class="overlay dark"></div>
                                <span><i class="fa fa-plus"></i></span>
                            </div>
                        </a>
                    </div>
                </div>

                <div class="gallery-item exterior">
                    <div class="wow fadeIn">
                        <a title="gallery" href="img/gallery/gallery-lg-7.jpg">
                            <div class="gallery-image">
                                <img src="img/gallery/gallery-lg-7.jpg" alt="" />
                                <div class="overlay dark"></div>
                                <span><i class="fa fa-plus"></i></span>
                            </div>
                        </a>
                    </div>
                </div>

                <div class="gallery-item exterior">
                    <div class="wow fadeIn">
                        <a title="gallery" href="img/gallery/gallery-lg-1.jpg">
                            <div class="gallery-image">
                                <img src="img/gallery/gallery-lg-1.jpg" alt="" />
                                <div class="overlay dark"></div>
                                <span><i class="fa fa-plus"></i></span>
                            </div>
                        </a>
                    </div>
                </div>

                <div class="gallery-item exterior">
                    <div class="wow fadeIn">
                        <a title="gallery" href="img/gallery/gallery-lg-2.jpg">
                            <div class="gallery-image">
                                <img src="img/gallery/gallery-lg-2.jpg" alt="" />
                                <div class="overlay dark"></div>
                                <span><i class="fa fa-plus"></i></span>
                            </div>
                        </a>
                    </div>
                </div>

                <div class="gallery-item exterior">
                    <div class="wow fadeIn">
                        <a title="gallery" href="img/gallery/gallery-lg-3.jpg">
                            <div class="gallery-image">
                                <img src="img/gallery/gallery-lg-3.jpg" alt="" />
                                <div class="overlay dark"></div>
                                <span><i class="fa fa-plus"></i></span>
                            </div>
                        </a>
                    </div>
                </div>

                <div class="gallery-item exterior">
                    <div class="wow fadeIn">
                        <a title="gallery" href="img/gallery/gallery-lg-4.jpg">
                            <div class="gallery-image">
                                <img src="img/gallery/gallery-lg-4.jpg" alt="" />
                                <div class="overlay dark"></div>
                                <span><i class="fa fa-plus"></i></span>
                            </div>
                        </a>
                    </div>
                </div>

                <div class="gallery-item exterior">
                    <div class="wow fadeIn">
                        <a title="gallery" href="img/gallery/gallery-lg-5.jpg">
                            <div class="gallery-image">
                                <img src="img/gallery/gallery-lg-5.jpg" alt="" />
                                <div class="overlay dark"></div>
                                <span><i class="fa fa-plus"></i></span>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
            <!-- Gallery Items End -->

            <!-- infinite load button start -->
            <div id="load-more-portfolio"><a href="#"></a></div>
            <div class="load-more text-center">
                <button id="load-infinite" class="button-normal green">Load More</button>
            </div>
            <!-- infinite load button end -->

            <!-- Gallery Script
            ============================================= -->
            <script type="text/javascript">

                jQuery(window).load(function(){

                    var $container = $('#gallery');

                    $container.isotope({ transitionDuration: '0.65s' });

                    $(window).resize(function() {
                        $container.isotope('layout');
                    });

                    // Infinite Scroll
                    $container.infinitescroll({
                        loading: {
                    finishedMsg: 'There is no more',
                    msgText: 'loading',
                    speed: 'normal'
                        },

                    state: {
                    isDone: false
                    },
                        navSelector  : '#load-more-portfolio', 
                        nextSelector : '#load-more-portfolio a', 
                        itemSelector : '.gallery-item',

                    },
                    // Infinite Scroll Callback
                    function( newElements ) {
                        $container.isotope( 'appended', $( newElements ) );
                        var t = setTimeout( function(){ $container.isotope('layout'); }, 2000 );

                    });

                    $container.infinitescroll('unbind');
                      $("#load-infinite").click(function(){
                            $container.infinitescroll('retrieve');
                             return false;
                    });

                });
            </script>
            <!-- Gallery Script End -->
        </div>
    </div>
    <!-- GALLERY END -->

</section>
@endsection

@push('after-script')


@endpush