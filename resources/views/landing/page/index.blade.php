@extends('landing.layout.app')

@section('title')
Bukti Pembayaran
@endsection

@push('after-style')
<style>
    .color-white{
        color: #ffffff
    }
    .core-value{
        padding-bottom: 40px;
    }
    .single-classes{
        margin-bottom: -70px;
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
                                <h3 style="color: #ffffff; font-weight: 500;"> Before three, the function</h3>
                            </div>
                            <div class="caption wow fadeInUp">
                                <h1 style="color: #ffffff; font-size: 46px;">are being CREATED<br>after three they DEVELOP</h1>
                            </div> 
                            {{-- <div class="caption wow fadeIn">
                                <p style="color: #ffffff; font-size: 18px;">Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium<br/>doloremque laudantium, totam rem aperiam.</p>
                            </div> --}}
                            <div class="caption wow fadeInUp">
                                <div class="button-normal white">
                                    <a href="https://wa.me/6281803977779?text=Halo%20saya%20ingin%20bertanya%20mengenai%20pendaftaran%20Daycare%20Montessori%20Pirngadi.">Join Now</a>
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
                                <h3 style="color: #ffffff; font-weight: 500;"> Before three, the function</h3>
                            </div>
                            <div class="caption wow fadeInUp">
                                <h1 style="color: #ffffff; font-size: 46px;">are being CREATED<br>after three they DEVELOP</h1>
                            </div> 
                            {{-- <div class="caption wow fadeIn">
                                <p style="color: #ffffff; font-size: 18px;">Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium<br/>doloremque laudantium, totam rem aperiam.</p>
                            </div> --}}
                            <div class="caption wow fadeInUp">
                                <div class="button-normal white">
                                    <a href="https://wa.me/6281803977779?text=Halo%20saya%20ingin%20bertanya%20mengenai%20pendaftaran%20Daycare%20Montessori%20Pirngadi." style="color: inherit;">Join Now</a>

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
                <h1 class="no-margin">Welcome to the <span class="yellow-text">Pirngadi Daycare</span> Montessori</h1>
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
                        <h2>Tentang Kami dan Metode Kami</h2>
                    </div>
                    <p class="mt-2">
                        <strong>Tentang Kami:</strong><br />
                        Daycare YBPPK Pirngadi telah menjadi rumah kedua bagi anak-anak usia 0-9 tahun dengan menyediakan layanan penitipan anak yang berkualitas dan penuh perhatian. Kami memahami betapa pentingnya masa-masa awal perkembangan anak, sehingga kami fokus pada menciptakan lingkungan yang aman, hangat, dan mendukung bagi setiap anak untuk belajar dan bermain.
                    </p>
                    <p>
                        Dengan tim pengasuh yang profesional dan berpengalaman, kami selalu berupaya membangun kepercayaan diri, rasa ingin tahu, dan kreativitas anak-anak. Kami tidak hanya mengasuh, tetapi juga membantu anak-anak menemukan dunia mereka melalui pengalaman yang bermakna.
                    </p>
                    <p class="mt-2">
                        <strong>Metode Kami:</strong><br />
                        Kami menggunakan pendekatan Montessori, sebuah metode pendidikan yang berfokus pada stimulasi dan pengembangan sesuai dengan tahapan pertumbuhan anak. Melalui metode ini, kami membantu setiap anak tumbuh dan berkembang secara optimal, sesuai dengan ritme dan kebutuhan unik mereka.
                    </p>
                    <p>
                        Dengan memberikan kebebasan bagi anak untuk bereksplorasi, metode Montessori kami mendorong kemandirian, inisiatif, dan rasa tanggung jawab. Kami percaya bahwa anak-anak belajar paling baik ketika mereka merasa aman, didukung, dan diberikan ruang untuk berkembang secara alami sesuai dengan milestone perkembangan mereka.
                    </p>
                    <div class="button-normal green">
                        <a href="about-daycare">Pelajari Lebih Lanjut Tentang Kami</a>
                    </div>
                    
                </div>

                <div class="about-img col-md-6 wow fadeInLeft">
                    <img src="img/about-kindergarten.png" alt="" />
                </div>
            </div>
        </div>
    </div>

    
    <!-- ABOUT US SECTION END -->

     <!-- SINGLE CLASS START
                ============================================= -->
                <div class="single-classes clearfix">
                    <div class="container">
                        <div class="row">
                            <!-- Class Gallery Start -->
                            <div class="class-gallery wow fadeIn col-md-6 clearfix">
                                <div class="class-flexslider">
                                    <ul class="slides">
                                        <li data-thumb="{{ asset('img/cctv.png') }}">
                                            <img src="{{ asset('img/cctv.png') }}" alt="" />
                                        </li>
                                        <li data-thumb="{{ asset('img/card.png') }}">
                                            <img src="{{ asset('img/card.png') }}" alt="" />
                                        </li>
                                        <li data-thumb="{{ asset('img/security.png') }}">
                                            <img src="{{ asset('img/security.png') }}" alt="" />
                                        </li>
                                        <li data-thumb="{{ asset('img/bundapengasuh.png') }}">
                                            <img src="{{ asset('img/bundapengasuh.png') }}" alt="" />
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <!-- Class Gallery End -->

                            <!-- Class Content Start -->
                            <div class="class-content wow fadeIn col-md-6 clearfix">
                                <div class="heading-block">
                                    <h2>Our Security</h2>
                                </div>
                                <p>Memastikan keamanan dan keselamatan anak selama di sekolah melalui pemberlakuan akses penjemputan dengan "Parent Card" serta setiap ruangan yang dilengkapi CCTV </p>
                                <p>Di daycare kami, keamanan anak-anak adalah prioritas utama. Dengan dukungan satpam yang handal dan pengasuh profesional, kami memastikan lingkungan yang aman, nyaman, dan penuh perhatian. Setiap langkah diambil dengan penuh tanggung jawab, baik dari pengawasan fisik oleh petugas keamanan maupun perhatian penuh dari pengasuh berpengalaman yang peduli akan kesejahteraan dan perkembangan anak Anda.</p>
                                <ul class="with-icon">
                                    <li>CCTV Pada Setiap Ruangan Daycare</li>
                                    <li>Parent Card Untuk Penjemputan Anak</li>
                                    <li>Satpam yang handal</li>
                                    <li>Pengasuh profesional</li>
                                </ul>

                                <table class="table">
                                    <tbody>
                                        <tr>
                                            <td>Age Group :</td>
                                            <td>Usia 0 - 9 Tahun</td>
                                        </tr>
                                        <tr>
                                            <td>Class Size :</td>
                                            <td>15 Anak</td>
                                        </tr>
                                        <tr>
                                            <td>Daycare Service:</td>
                                            <td>BEBAS TENTUKAN BIAYA SESUAI PILIHAN LAYANANMU!* </td>
                                        </tr>
                                        <tr>
                                            <td>Layanan</td>
                                            <td>Senin - Jum'at, 07.00 - 18.00 WIB<br>Sabtu - Minggu, 07.00 - 18.00 WIB</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                            <!-- Class Content End -->

                       
                        </div>
                    </div>
                </div>


                <div class="class-course">
                    <div class="container">
                        <div class="heading-block wow fadeIn">
                            <h2>Fun Learning Activities</h2>
                        </div>
                
                        <div class="row">
                            <!-- Nav Tabs -->
                            <div class="class-course-nav" role="tablist" id="planTabs">
                                <ul class="no-margin no-padding">
                                    <li role="presentation" class="col-md-2 wow fadeInUp active">
                                        <a href="#mathclass" aria-controls="mathclass" role="tab" data-toggle="tab" style="border-color: #f69c3b; color: #f69c3b;">
                                            Montessori 
                                            <div class="icon icon-maths5"></div>
                                        </a>
                                    </li>
                                    <li role="presentation" class="col-md-2 wow fadeInUp">
                                        <a href="#englishclass" aria-controls="englishclass" role="tab" data-toggle="tab" style="border-color: #e57978; color: #e57978;">
                                            Extracuricular
                                            <div class="icon icon-earth205"></div>
                                        </a>
                                    </li>
                                    <li role="presentation" class="col-md-2 wow fadeInUp">
                                        <a href="#musicclass" aria-controls="musicclass" role="tab" data-toggle="tab" style="border-color: #59bec9; color: #59bec9;">
                                            Tummy Time
                                            <div class="icon icon-note55"></div>
                                        </a>
                                    </li>
                                    <li role="presentation" class="col-md-3 wow fadeInUp">
                                        <a href="#computerclass" aria-controls="computerclass" role="tab" data-toggle="tab" style="border-color: #c389ce; color: #c389ce;">
                                            Toilet Trainning
                                            <div class="icon icon-computers10"></div>
                                        </a>
                                    </li>
                                    <li role="presentation" class="col-md-3 wow fadeInUp">
                                        <a href="#paintingclass" aria-controls="paintingclass" role="tab" data-toggle="tab" style="border-color: #fec02a; color: #fec02a;">
                                            Sleep Trainning 
                                            <div class="icon icon-paint81"></div>
                                        </a>
                                    </li>
                                   
                                </ul>
                            </div>
                            <!-- Nav Tabs End -->
                
                            <!-- Tab panes -->
                            <div class="class-course-details wow fadeIn"> 
                                <div role="tabpanel" class="class-course-content fade in active" id="mathclass">
                                    <div class="col-md-6">
                                        <img src="https://www.procaresoftware.com/wp-content/uploads/2023/07/teacher-sitting-at-table-with-young-school-kids-J6CQ7WR-1-scaled.jpg" alt="Math Class Image" />
                                    </div>
                                    <div class="col-md-6">
                                        <h3>Montessori</h3>
                                        <p class="subtitle">( 0 - 9 Tahun )</p>
                                        <div class="content">
                                            <p>Stimulasi pada 5 area Montessori: Bahasa, Matematika, Budaya, Sensori, dan Practical Life. </p>
                                        </div>
                                        <div class="button-normal green">
                                            <a href="#">Learn More</a>
                                        </div>
                                    </div>
                                </div>
                
                                <div role="tabpanel" class="class-course-content fade in" id="englishclass">
                                    <div class="col-md-6">
                                        <img src="https://en.knockknockpreschool.com/img/class/after.jpg" alt="English Class Image" />
                                    </div>
                                    <div class="col-md-6">
                                        <h3>Extracuricular English Class</h3>
                                        <p class="subtitle">( 2 year course duration )</p>
                                        <div class="content">
                                            <p>Kegiatan tambahan Bahasa lnggris, Renang, Memasak, dan Musik </p>
                                            <p>Kelas Bahasa Inggris ini membantu siswa dalam meningkatkan kemampuan berbicara, membaca, dan menulis dalam bahasa Inggris dengan penekanan pada komunikasi efektif dan keterampilan literasi.</p>
                                            <p>Program ini juga mencakup pembelajaran budaya untuk memperluas pemahaman siswa tentang konteks global dalam penggunaan bahasa Inggris.</p>
                                        </div>
                                        <div class="button-normal green">
                                            <a href="#">Learn More</a>
                                        </div>
                                    </div>
                                </div>
                
                                <div role="tabpanel" class="class-course-content fade in" id="musicclass">
                                    <div class="col-md-6">
                                        <img src="https://images.squarespace-cdn.com/content/v1/591b66f920099ed6bd741796/824d6e73-3ed0-4391-8611-6f1852cdf814/music-with-preschoolers.png" alt="Music Class Image" />
                                    </div>
                                    <div class="col-md-6">
                                        <h3>Tummy Time</h3>
                                        {{-- <p class="subtitle">( 2 year course duration )</p> --}}
                                        <div class="content">
                                            <p>Stimulasi awal untuk meningkatkan kemampuan motorik anak </p>

                                        </div>
                                        <div class="button-normal green">
                                            <a href="#">Learn More</a>
                                        </div>
                                    </div>
                                </div>
                
                                <div role="tabpanel" class="class-course-content fade in" id="computerclass">
                                    <div class="col-md-6">
                                        <img src="{{ asset('img/toilet-trainer.png') }}" alt="Computer Class Image" />
                                    </div>
                                    <div class="col-md-6">
                                        <h3>Toilet Trainning</h3>
                                        <p class="subtitle">( 2 year course duration )</p>
                                        <div class="content">
                                            <p> Pembiasaan anak untuk BAK/ BAB secara teratur dan mandiri </p>
                                            
                                        </div>
                                        <div class="button-normal green">
                                            <a href="#">Learn More</a>
                                        </div>
                                    </div>
                                </div>
                
                                <div role="tabpanel" class="class-course-content fade in" id="paintingclass">
                                    <div class="col-md-6">
                                        <img src="https://www.newtonbaby.com/cdn/shop/articles/Sleep_Training_1.png?v=1611253986" alt="Painting Class Image" />
                                    </div>
                                    <div class="col-md-6">
                                        <h3>Sleep Trainning 
                                        </h3>
                                        <p class="subtitle">( 2 year course duration )</p>
                                        <div class="content">
                                            <p>Pembiasaan anak untuk tidur dengan waktu yang konsisten dan tanpa bantuan </p>
                                            
                                        </div>
                                        <div class="button-normal green">
                                            <a href="#">Learn More</a>
                                        </div>
                                    </div>
                                </div>
                
                              
                            </div>
                            <!-- Tab Panes End -->
                        </div>
                    </div>
                </div>
                
    <div class="our-features grey-background">
        <div class="container">
            <div class="heading-block wow fadeIn">
                <h2>OUR PROGRAM</h2>
                <h4 class="tagline">Layanan terlengkap untuk segala kebutuhan keperluan ananda.</h4>
            </div>

            <div class="row">
                <div class="features">
                    <div class="feature-item custom-food col-md-4 wow fadeInUp">
                        <div class="feature-icon">
                            <div class="icon icon-cutlery23"></div>
                        </div>
                        <div class="feature-desc">
                            <h4>Montessori Scho0l</h4>
                            <p>Sekolah khusus untuk anak usia 0-36 Bulan. Metode Montessori memberikan kebebasan untuk berkomunikasi dan mengekplorasi lingkungan yang telah dipersiapkan</p>
                        </div>
                    </div>

                    <div class="feature-item many-support col-md-4 wow fadeInUp">
                        <div class="feature-icon">
                            <div class="icon icon-clocks16"></div>
                        </div>
                        <div class="feature-desc">
                            <h4>Extracuricular</h4>
                            <p>Stimulasi tambahan sekaligus memberikan kesempatan kepada anak untuk megenali potensi dalam diri sendiri</p>
                        </div>
                    </div>

                    <div class="feature-item bus-service col-md-4 wow fadeInUp">
                        <div class="feature-icon">
                            <div class="icon icon-school70"></div>
                        </div>
                        <div class="feature-desc">
                            <h4>Baby spa</h4>
                            <p>Fasilitas Baby Spa rutin untuk memenuhi kebutuhan fisik dan psikososial anak menjadi lebih relax dan riang gembira </p>
                        </div>
                    </div>

                    <div class="feature-item music-lesson col-md-4 wow fadeInUp">
                        <div class="feature-icon">
                            <div class="icon icon-headphones11"></div>
                        </div>
                        <div class="feature-desc">
                            <h4>Health screening</h4>
                            <p>Memantau secara berkala kesehatan serta tumbuh kembang anak telah optimal sesuai dengan milistone</p>
                        </div>
                    </div>

                    <div class="feature-item excursions col-md-4 wow fadeInUp">
                        <div class="feature-icon">
                            <div class="icon icon-map-1"></div>
                        </div>
                        <div class="feature-desc">
                            <h4>LIMITED sCREEN TIME</h4>
                            <p>Membatasi aktivitas penggunaan gadget melalui kegiatan yang memaksimalkan aktivitas fisik untuk bergerak dan berkomunikasi</p>
                              
                        </div>
                    </div>

                    
                </div>
                
            </div>
        </div>
    </div>

    {{-- <div class="banner small wow fadeIn">
        <div class="container">
            <div class="row">
                <div class="col-md-8 pull-left wow fadeInUp">
                    <h3>Bagaimana Anda tahu bahwa kelas kami cocok untuk anak Anda?"</h3>
                </div>

                <div class="col-md-4 wow fadeInUp">
                    <div class="button-normal white pull-right">
                        <a href="#" class="no-margin">Join Now!</a>
                    </div>
                </div>
            </div>
        </div>
    </div> --}}

    
    <!-- BANNER SECTION END -->

    <!-- OUR CLASSES SECTION START
    ============================================= -->
    {{-- <div class="our-classes wow fadeIn">
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
    </div> --}}
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