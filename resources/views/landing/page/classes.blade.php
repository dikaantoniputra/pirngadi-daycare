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
                <h1>Our Classes</h1>
            </div>
        </div>
    </div>

    <!-- CLASS START
    ============================================= -->
    <div class="classes-page">
        <div class="container">
            <div class="classes-wrapper wow fadeInUp">
                <a href="#">
                    <div class="class-item" style="background-color: #e57978;">
                        <div class="class-img">
                            <img src="img/classes/classes1.jpg" alt="" />
                            <div class="overlay dark"></div>
                            <span><i class="fa fa-plus"></i></span>
                        </div>
    
                        <div class="class-details">
                            <div class="class-desc">
                                <h2>Daily Pack</h2>
                                <p class="class-category">Kindergarten, Daily Pack</p>
                                <p class="excerpt">Time: 07.00 - 17.00</p>
                                <p class="class-date">August 16, 2015</p>
                            </div>
    
                            <div class="class-type">
                                <div class="class-year">
                                    <h6 class="title">Years Old</h6>
                                    <p>1-7</p>
                                </div>
    
                                <div class="class-size">
                                    <h6 class="title">Class Size</h6>
                                    <p>25</p>
                                </div>
    
                                <div class="class-price">
                                    <h3>Rp.200.000<span>day</span></h3>
                                </div>
                            </div>
                        </div>
                    </div>
                </a>
            </div>
    
            <div class="classes-wrapper wow fadeInUp">
                <a href="#">
                    <div class="class-item" style="background-color: #fec02a;">
                        <div class="class-img">
                            <img src="img/classes/classes2.jpg" alt="" />
                            <div class="overlay dark"></div>
                            <span><i class="fa fa-plus"></i></span>
                        </div>
    
                        <div class="class-details">
                            <div class="class-desc">
                                <h2>Monthly Plan</h2>
                                <p class="class-category">Kindergarten, Monthly</p>
                                <p class="excerpt">Time: 07.00 - 17.00</p>
                                <p class="class-date">August 16, 2015</p>
                            </div>
    
                            <div class="class-type">
                                <div class="class-year">
                                    <h6 class="title">Years Old</h6>
                                    <p>6-8</p>
                                </div>
    
                                <div class="class-size">
                                    <h6 class="title">Class Size</h6>
                                    <p>20</p>
                                </div>
    
                                <div class="class-price">
                                    <h3>Rp.950.000<span>Monthly</span></h3>
                                </div>
                            </div>
                        </div>
                    </div>
                </a>
            </div>
    
            <div class="classes-wrapper wow fadeInUp">
                <a href="#">
                    <div class="class-item" style="background-color: #59bec9;">
                        <div class="class-img">
                            <img src="img/classes/classes3.jpg" alt="" />
                            <div class="overlay dark"></div>
                            <span><i class="fa fa-plus"></i></span>
                        </div>
    
                        <div class="class-details">
                            <div class="class-desc">
                                <h2>Annual Package</h2>
                                <p class="class-category">Kindergarten, Primary</p>
                                <p class="excerpt">Time: 07.00 - 17.00</p>
                                <p class="class-date">August 16, 2015</p>
                            </div>
    
                            <div class="class-type">
                                <div class="class-year">
                                    <h6 class="title">Years Old</h6>
                                    <p>6-7</p>
                                </div>
    
                                <div class="class-size">
                                    <h6 class="title">Class Size</h6>
                                    <p>10</p>
                                </div>
    
                                <div class="class-price">
                                    <p>Rp.9.690.000<span></span></p>
                                </div>
                            </div>
                        </div>
                    </div>
                </a>
            </div>
    
            <div class="classes-wrapper wow fadeInUp">
                <a href="#">
                    <div class="class-item" style="background-color: #7fb881;">
                        <div class="class-img">
                            <img src="img/classes/classes4.jpg" alt="" />
                            <div class="overlay dark"></div>
                            <span><i class="fa fa-plus"></i></span>
                        </div>
    
                        <div class="class-details">
                            <div class="class-desc">
                                <h2>Class ABK</h2>
                                <p class="class-category">Spesial, Class</p>
                                <p class="excerpt">Time: 07.00 - 17.00</p>
                                <p class="class-date">August 16, 2015</p>
                            </div>
    
                            <div class="class-type">
                                <div class="class-year">
                                    <h6 class="title">Years Old</h6>
                                    <p>2-8</p>
                                </div>
    
                                <div class="class-size">
                                    <h6 class="title">Class Size</h6>
                                    <p>25</p>
                                </div>
    
                                <div class="class-price">
                                    <h3><span></span></h3>
                                </div>
                            </div>
                        </div>
                    </div>
                </a>
            </div>
    
        </div>
    </div>
    
    <!-- CLASSES END -->

    <!-- OUR CLASSES SCRIPT START -->
    <script type="text/javascript">
        jQuery(window).load(function(){
            var classDetailsHeight = jQuery('.class-item img').height();
            jQuery(".class-details").css("height", classDetailsHeight);
        });
    </script>
    <!-- OUR CLASSES SCRIPT END -->

</section>
@endsection

@push('after-script')


@endpush