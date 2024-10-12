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
                <h1>Tentang Kami</h1>
            </div>
        </div>
    </div>

    <!-- ABOUT US SECTION START
    ============================================= -->
    <div class="about-us">
        <div class="container">
            <div class="row">
                <!-- Accordion Start -->
                <div class="accordion col-md-6">
                    <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
                        <div class="panel panel-default">
                            <a data-toggle="collapse" data-parent="#accordion" href="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                <div class="panel-heading" role="tab" id="headingOne">
                                    <h4 class="panel-title">Visi</h4>
                                </div>
                            </a>
                            <div id="collapseOne" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="headingOne">
                                <div class="panel-body">
                                    Kami berkomitmen untuk memberikan pendidikan yang berkualitas dan mendukung perkembangan anak-anak di berbagai bidang, termasuk akademik, seni, dan olahraga.
                                </div>
                            </div>
                        </div>

                        <div class="panel panel-default">
                            <a class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseTwo" aria-expanded="true" aria-controls="collapseTwo">
                                <div class="panel-heading" role="tab" id="headingTwo">
                                  <h4 class="panel-title">Misi</h4>
                                </div>
                            </a>
                            <div id="collapseTwo" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingTwo">
                                <div class="panel-body">
                                    <p class="mt-2"> <br />
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
                                </div>
                            </div>
                        </div>

                       

                    </div>
                </div>
                <!-- Accordion End -->

                <div class="col-md-6 wow fadeIn">
                    <div class="heading-block">
                        <h2>Tentang Sekolah Kami</h2>
                    </div>
                    <p> Daycare YBPPK Pirngadi telah menjadi rumah kedua bagi anak-anak usia 0-9 tahun dengan menyediakan layanan penitipan anak yang berkualitas dan penuh perhatian. Kami memahami betapa pentingnya masa-masa awal perkembangan anak, sehingga kami fokus pada menciptakan lingkungan yang aman, hangat, dan mendukung bagi setiap anak untuk belajar dan bermain.</p>

                </div>
            </div>
        </div>
    </div>
    <!-- ABOUT US SECTION END -->

    <div class="about-us no-padding-bottom">
        <div class="container">
            <div class="row">
                <div class="col-md-6 wow fadeIn">
                    <div class="heading-block">
                        <h2> Metode Kami</h2>
                    </div>
                
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

    <div class="our-teacher">
        <div class="container">
            <div class="row">
                
                    <h2 class="text-center core-value">OUR </br>Core Value</h2>
                    
             
                <!-- Tab panes -->
                <div class="teacher-profile-tab col-md-4"> 
                    <div role="tabpanel" class="teacher-desc fade in active" id="stela">
                        <div class="heading-block">
                            <h3>ASIH
                            </h3>
                            {{-- <p class="position">Daycare</p> --}}
                        </div>
                        
                        <p>Melengkapi kebutuhan emosi anak dengan penyaluran kasih sayang orang-tua melalui tangan-tangan staff kompeten kami </p>
                       
                    </div>

                    <div role="tabpanel" class="teacher-desc fade in" id="kayla">
                        <div class="heading-block">
                            <h3>ASUH</h3>
                            {{-- <p class="position">Usia 1-7 Tahun</p> --}}
                        </div>
                        <p>Memperhatikan setiap detail kebutuhan fisik anak dari asupan gizi seimbang hingga layanan kesehatan secara rutin </p>
                        
                        
                    </div>
                    

                    <div role="tabpanel" class="teacher-desc fade in" id="stefanie">
                        <div class="heading-block">
                            <h3>ASAH</h3>
                            {{-- <p class="position">Usia 1-7 Tahun</p> --}}
                        </div>
                        <p>Mengoptimalkan tumbuh kembang anak dengan pemberian stimulasi Montessori secara intensive sejak anak O tahun (one-on-one lesson) </p>
                        
                        
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

    <!-- FEATURES SECTION START
    ============================================= -->
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
    
    <!-- FEATURES SECTION END -->

    <!-- CLASS AND COURSE SECTION START
    ============================================= -->
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
                            <img src="img/toilet-trainer.png" alt="Computer Class Image" />
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
    
    <!-- CLASS AND COURSE SECTION END -->

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


</section>
@endsection

@push('after-script')


@endpush