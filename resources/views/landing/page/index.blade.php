@extends('landing.layout.app')

@section('title')
Bukti Pembayaran
@endsection

@push('after-style')
<style>
    .color-white{
        color: #ffffff
    }
</style>
@endpush

@section('content')

<section id="slider" class="flexslider-wrap fullscreen clearfix">
    <div class="slider-wrapper">
        <div class="flexslider clearfix">
            <ul class="slides">
                <li class="clearfix" style="background-image: url(https://www.procaresoftware.com/wp-content/uploads/2020/04/blog-hero_ultimateguide-start-daycare_1920x960-3087919.jpg); background-size: cover; background-repeat: no-repeat;">
                    <div class="overlay color"></div>    
                    <div class="flex-content vertical-center">
                        <div class="container">
                            <div class="caption wow fadeInLeft">
                                <h3 style="color: #ffffff; font-weight: 500;"> The Best Daycare For Your Child</h3>
                            </div>
                            <div class="caption wow fadeInUp">
                                <h1 style="color: #ffffff; font-size: 46px;">Perfect themes for your<br>Daycare Pirngadi</h1>
                            </div> 
                            {{-- <div class="caption wow fadeIn">
                                <p style="color: #ffffff; font-size: 18px;">Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium<br/>doloremque laudantium, totam rem aperiam.</p>
                            </div> --}}
                            <div class="caption wow fadeInUp">
                                <div class="button-normal white">
                                    <a href="#">Join Now</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </li>

                <li class="clearfix" style="background-image: url(https://assets-a1.kompasiana.com/items/album/2017/02/10/kamar-toddler-1-16684071-10210948350480509-591375348883814715-n-589d1ba58d7e6126192be7d8.jpg); background-size: cover; background-repeat: no-repeat;">
                    <div class="overlay color"></div>    
                    <div class="flex-content vertical-center">
                        <div class="container">
                            <div class="caption wow fadeInLeft">
                                <h3 style="color: #ffffff; font-weight: 500;">Simple And Easy To Use</h3>
                            </div>
                            <div class="caption wow fadeInUp">
                                <h1 style="color: #ffffff; font-size: 46px;">Perfect themes for your<br>Kindergarden Site</h1>
                            </div> 
                            {{-- <div class="caption wow fadeIn">
                                <p style="color: #ffffff; font-size: 18px;">Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium<br/>doloremque laudantium, totam rem aperiam.</p>
                            </div> --}}
                            <div class="caption wow fadeInUp">
                                <div class="button-normal white">
                                    <a href="#">Join Now</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </li>
            </ul>
        </div>
    </div>
</section>

<section id="content">

    <!-- BANNER START
    ============================================= -->
    <div class="banner large text-center wow fadeInUp">
        <div class="container">
            <div class="row">
                <h1 class="no-margin">Welcome to the <span class="yellow-text">‘Kindergarten’</span> WordPress Theme</h1>
            </div>
        </div>
    </div>
    <!-- BANNER END -->

    <!-- ABOUT US SECTION START
    ============================================= -->
    <div class="about-us no-padding-bottom">
        <div class="container">
            <div class="row">
                <div class="col-md-6 wow fadeIn">
                    <div class="heading-block">
                        <h2>Vision and Mission Daycare</h2>
                    </div>
                    <p>   Visi Namiraplus Daycare menjadi mitra orang tua untuk
                        tumbuh kembang anak yang berakhlakul karimah, cerdas, ceria, dan
                        mandiri dalam suasana islami.</p>
                    <p class="mt-2"> Misi<br />
                        a. Merawat dan mengasuh dengan cinta dan kasih saying (Tempa,
                        Asah, Asih, Asuh.)<br />
                        b. Menanamkan akhlakul karimah dalam keseharian.<br />
                        c. Memaksimalkan tumbuh kembang sesuai usia anak.<br />
                        d. Mengoptimalkan kecerdasan masa golden age melalui
                        permainan.<br />
                        e. Menciptakan lingkungan social yang kondusif, sehat, dan
                        islami dalam membentuk karakter anak yang ceria, mandiri, serta
                        terampil.<br />
                        f. Memberikan pendampingan untuk Anak Berkebutuhan Khusus (ABK)
                        tertentu.<br />.</p>
                    <div class="button-normal green">
                        <a href="about-daycare">About Us</a>
                    </div>
                </div>

                <div class="about-img col-md-6 wow fadeInLeft">
                    <img src="img/about-kindergarten.png" alt="" />
                </div>
            </div>
        </div>
    </div>
    <!-- ABOUT US SECTION END -->

    <!-- FEATURES SECTION START
    ============================================= -->
    <div class="our-features grey-background">
        <div class="container">
            <div class="heading-block wow fadeIn">
                <h2>Fasilitas Kami</h2>
                <h4 class="tagline">Layanan terlengkap untuk segala kebutuhan keperluan ananda.</h4>
            </div>

            <div class="row">
                <div class="features">
                    <div class="feature-item custom-food col-md-4 wow fadeInUp">
                        <div class="feature-icon">
                            <div class="icon icon-cutlery23"></div>
                        </div>
                        <div class="feature-desc">
                            <h4>Kegiatan harian</h4>
                            <p>Snack 2* makan siang 1*

                                Stimulus perkembangan sesuai usia anak</p>
                        </div>
                    </div>

                    <div class="feature-item many-support col-md-4 wow fadeInUp">
                        <div class="feature-icon">
                            <div class="icon icon-clocks16"></div>
                        </div>
                        <div class="feature-desc">
                            <h4>Educatif Playground</h4>
                            <p>Educatif Playground, dilengkapi dengan Mini Library.</p>
                        </div>
                    </div>

                    <div class="feature-item bus-service col-md-4 wow fadeInUp">
                        <div class="feature-icon">
                            <div class="icon icon-school70"></div>
                        </div>
                        <div class="feature-desc">
                            <h4>Lactation Room</h4>
                            <p>Dilengkapi dengan Lemari Es Khusus ASI dan Kamar Tidur dengan Air Conditioner(AC).</p>
                        </div>
                    </div>

                    <div class="feature-item music-lesson col-md-4 wow fadeInUp">
                        <div class="feature-icon">
                            <div class="icon icon-headphones11"></div>
                        </div>
                        <div class="feature-desc">
                            <h4>Positive Learning</h4>
                            <p>Dilengkapi dengan music rohani dan Laporan Digital Tumbuh Kembang Anak.</p>
                        </div>
                    </div>

                    <div class="feature-item excursions col-md-4 wow fadeInUp">
                        <div class="feature-icon">
                            <div class="icon icon-map-1"></div>
                        </div>
                        <div class="feature-desc">
                            <h4>Kegiatan bulanan</h4>
                            <p>Posyandu</p>
                                <p>Baby SPA-Massage</p>
                        </div>
                    </div>

                    <div class="feature-item languages col-md-4 wow fadeInUp">
                        <div class="feature-icon">
                            <div class="icon icon-earth205"></div>
                        </div>
                        <div class="feature-desc">
                            <h4>Kegiatan Tahunan</h4>
                            <p>3 bulan sekali pemeriksaan kesehatan oleh dokter</p>
                        </div>
                    </div>
                </div>
                
            </div>
        </div>
    </div>
    <!-- FEATURES SECTION END -->

   
    <!-- OUR TEACHER SECTION START
    ============================================= -->
    <div class="our-teacher">
        <div class="container">
            <div class="row">
                <!-- Tab panes -->
                <div class="teacher-profile-tab col-md-4"> 
                    <div role="tabpanel" class="teacher-desc fade in active" id="stela">
                        <div class="heading-block">
                            <h3>Jam Operasional Kami:
                            </h3>
                            <p class="position">Untuk Ananda</p>
                        </div>
                        <p>1. Pengasuhan Reguler : Senin-Jumat : Jam 07.00 – 17.00 (WIB)</p>
                        <p>2. Pengasuhan Intensif : Senin-Jumat : Jam 17.00 – 07.00 (WIB) Sabtu, Minggu dan Hari Libur Nasional</p>
                        <ul class="no-padding">
                            <li><a href="http://facebook.com" target="_blank"><i class="fa fa-facebook"></i></a></li>
                            <li><a href="http://twitter.com" target="_blank"><i class="fa fa-twitter"></i></a></li>
                            <li><a href="http://instagram.com" target="_blank"><i class="fa fa-instagram"></i></a></li>
                            <li><a href="http://linkedin.com" target="_blank"><i class="fa fa-linkedin"></i></a></li>
                        </ul>
                    </div>

                    <div role="tabpanel" class="teacher-desc fade in" id="kayla">
                        <div class="heading-block">
                            <h3>Jadwal Tidur Anak</h3>
                            <p class="position">Usia 1-7 Tahun</p>
                        </div>
                        <p>Untuk mendukung pertumbuhan dan perkembangan anak, penting untuk menjaga jadwal tidur yang konsisten. Berikut adalah jadwal tidur yang dianjurkan:</p>
                        <p><strong>Usia 1-2 Tahun:</strong> Tidur malam: 12-14 jam, Tidur siang: 2-3 jam</p>
                        <p><strong>Usia 2-3 Tahun:</strong> Tidur malam: 11-13 jam, Tidur siang: 1-2 jam</p>
                        <p><strong>Usia 3-5 Tahun:</strong> Tidur malam: 10-12 jam, Tidur siang: 0-1 jam</p>
                        <p><strong>Usia 5-7 Tahun:</strong> Tidur malam: 10-11 jam, Tidur siang: Tidak diperlukan</p>
                        <ul class="no-padding">
                            <li><a href="https://www.sleepfoundation.org" target="_blank"><i class="fa fa-globe"></i></a></li>
                            <li><a href="https://www.parenting.com" target="_blank"><i class="fa fa-globe"></i></a></li>
                            <li><a href="https://www.cdc.gov" target="_blank"><i class="fa fa-globe"></i></a></li>
                        </ul>
                    </div>
                    

                    <div role="tabpanel" class="teacher-desc fade in" id="stefanie">
                        <div class="heading-block">
                            <h3>Jadwal Bermain Anak</h3>
                            <p class="position">Usia 1-7 Tahun</p>
                        </div>
                        <p>Aktivitas bermain sangat penting untuk perkembangan fisik dan mental anak. Berikut adalah jadwal bermain yang dianjurkan untuk berbagai usia:</p>
                        <p><strong>Usia 1-2 Tahun:</strong> Main bebas: 1-2 jam per hari, Aktivitas motorik kasar: 30 menit per hari</p>
                        <p><strong>Usia 2-3 Tahun:</strong> Main bebas: 2-3 jam per hari, Aktivitas motorik kasar: 1 jam per hari</p>
                        <p><strong>Usia 3-5 Tahun:</strong> Main bebas: 3-4 jam per hari, Aktivitas motorik kasar: 1-2 jam per hari</p>
                        <p><strong>Usia 5-7 Tahun:</strong> Main bebas: 2-3 jam per hari, Aktivitas motorik kasar: 1-2 jam per hari, Aktivitas kreatif: 1 jam per hari</p>
                        <ul class="no-padding">
                            <li><a href="https://www.parenting.com" target="_blank"><i class="fa fa-globe"></i></a></li>
                            <li><a href="https://www.playfulparenting.com" target="_blank"><i class="fa fa-globe"></i></a></li>
                            <li><a href="https://www.cdc.gov" target="_blank"><i class="fa fa-globe"></i></a></li>
                        </ul>
                        
                    </div>
                </div>
                <!-- Tab Panes End -->
                
                <!-- Nav Tabs -->
                <div class="teacher-photo col-md-8" role="tablist" id="planTabs">
                    <div class="row">
                        <ul>
                            <li role="presentation" class="teacher-photo-box col-md-4 active">
                                <a href="#stela" aria-controls="stela" role="tab" data-toggle="tab">
                                    <img src="img/teacher1.jpg" alt="" />
                                </a>
                            </li>
                            <li role="presentation" class="teacher-photo-box col-md-4">
                                <a href="#kayla" aria-controls="kayla" role="tab" data-toggle="tab">
                                    <img src="img/teacher2.jpg" alt="" />
                                </a>
                            </li>
                            <li role="presentation" class="teacher-photo-box col-md-4">
                                <a href="#stefanie" aria-controls="stefanie" role="tab" data-toggle="tab">
                                    <img src="img/teacher3.jpg" alt="" />
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
                <!-- Nav Tabs End -->
            </div>
        </div>
    </div>
    <!-- OUR TEACHER SECTION END -->

    <!-- BANNER SECTION START
    ============================================= -->
    <div class="banner small wow fadeIn">
        <div class="container">
            <div class="row">
                <div class="col-md-8 pull-left wow fadeInUp">
                    <h3>How do you know our class is perfect to your child?</h3>
                </div>

                <div class="col-md-4 wow fadeInUp">
                    <div class="button-normal white pull-right">
                        <a href="#" class="no-margin">Join Now!</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- BANNER SECTION END -->

    <!-- OUR CLASSES SECTION START
    ============================================= -->
    <div class="our-classes wow fadeIn">
        <div class="container">
            <div class="heading-block wow fadeIn">
                <h2>Our Classes</h2>
            </div>

            <div class="row">
                <div class="classes">
                    <div class="col-md-6 wow fadeInUp">
                        <a href="#">
                            <div class="class-item" style="background-color: #e57978;">
                                <div class="class-img pull-right">
                                    <img src="img/classes/classes1.jpg" alt="" />
                                    <div class="overlay dark"></div>
                                    <span><i class="fa fa-plus"></i></span>
                                </div>

                                <div class="class-details">
                                    <div class="class-desc">
                                        <h4>Daily Pack                                        </h4>
                                        <p class="class-category">Kindergarten, Daily Pack</p>
                                        <p class="class-date">Time: 07.00 - 17.00</p>
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
                                            <h6>Rp.200.000<span>day</span></h6>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>

                    <div class="col-md-6 wow fadeInUp">
                        <a href="#">
                            <div class="class-item" style="background-color: #fec02a;">
                                <div class="class-img pull-right">
                                    <img src="img/classes/classes2.jpg" alt="" />
                                    <div class="overlay dark"></div>
                                    <span><i class="fa fa-plus"></i></span>
                                </div>

                                <div class="class-details">
                                    <div class="class-desc">
                                        <h4>Monthly Plan</h4>
                                        <p class="class-category">Kindergarten, Monthly</p>
                                        <p class="class-date">Time: 07.00 - 17.00</p>
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
                                            <h6>Rp.950.000<span>Monthly</span></h6>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>

                    <div class="col-md-6 wow fadeInUp">
                        <a href="#">
                            <div class="class-item" style="background-color: #59bec9;">
                                <div class="class-img pull-right">
                                    <img src="img/classes/classes3.jpg" alt="" />
                                    <div class="overlay dark"></div>
                                    <span><i class="fa fa-plus"></i></span>
                                </div>

                                <div class="class-details">
                                    <div class="class-desc">
                                        <h4>Annual Package</h4>
                                        <p class="class-category">Kindergarten, Primary</p>
                                        <p class="class-date">Time: 07.00 - 17.00</p>
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

                    <div class="col-md-6 wow fadeInUp">
                        <a href="#">
                            <div class="class-item" style="background-color: #7fb881;">
                                <div class="class-img pull-right">
                                    <img src="img/classes/classes4.jpg" alt="" />
                                    <div class="overlay dark"></div>
                                    <span><i class="fa fa-plus"></i></span>
                                </div>

                                <div class="class-details">
                                    <div class="class-desc">
                                        <h4>Class ABK</h4>
                                        <p class="class-category">Spesial, Class</p>
                                        <p class="class-date">Time: 07.00 - 17.00</p>
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
        </div>
    </div>
    <!-- OUR CLASSES SECTION END -->

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