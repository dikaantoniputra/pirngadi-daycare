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
                    <p>Sekolah kami menyediakan lingkungan yang mendukung untuk pertumbuhan holistik anak-anak. Kami memastikan bahwa setiap anak mendapatkan perhatian yang mereka butuhkan untuk berkembang sesuai potensinya.</p>
                    <p>Dengan kurikulum yang berfokus pada pembelajaran aktif dan pengembangan karakter, kami membantu anak-anak menjadi individu yang mandiri, kreatif, dan bertanggung jawab.</p>
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
                <h2>Our Activities</h2>
                <h4 class="tagline">Our Best Services For Your Kids</h4>
            </div>
    
            <div class="row">
                <div class="features">
                    <div class="feature-item custom-food col-md-4 wow fadeInUp">
                        <div class="feature-icon">
                            <div class="icon icon-cutlery23"></div>
                        </div>
                        <div class="feature-desc">
                            <h4>Custom Food</h4>
                            <p>Kami menyediakan makanan yang disesuaikan untuk memenuhi kebutuhan gizi anak-anak, memastikan mereka mendapatkan nutrisi yang tepat setiap hari.</p>
                        </div>
                    </div>
    
                    <div class="feature-item many-support col-md-4 wow fadeInUp">
                        <div class="feature-icon">
                            <div class="icon icon-clocks16"></div>
                        </div>
                        <div class="feature-desc">
                            <h4>Extensive Support</h4>
                            <p>Staf kami yang berpengalaman selalu siap memberikan dukungan kepada anak-anak dalam setiap aspek pembelajaran dan pengembangan pribadi mereka.</p>
                        </div>
                    </div>
    
                    <div class="feature-item bus-service col-md-4 wow fadeInUp">
                        <div class="feature-icon">
                            <div class="icon icon-school70"></div>
                        </div>
                        <div class="feature-desc">
                            <h4>Bus Services</h4>
                            <p>Kami menyediakan layanan antar-jemput yang aman dan nyaman untuk memastikan anak-anak sampai di sekolah dan pulang ke rumah dengan selamat.</p>
                        </div>
                    </div>
    
                    <div class="feature-item music-lesson col-md-4 wow fadeInUp">
                        <div class="feature-icon">
                            <div class="icon icon-headphones11"></div>
                        </div>
                        <div class="feature-desc">
                            <h4>Music Lessons</h4>
                            <p>Kami menawarkan kelas musik yang membantu anak-anak mengembangkan bakat musik mereka melalui pembelajaran yang interaktif dan menyenangkan.</p>
                        </div>
                    </div>
    
                    <div class="feature-item excursions col-md-4 wow fadeInUp">
                        <div class="feature-icon">
                            <div class="icon icon-map-1"></div>
                        </div>
                        <div class="feature-desc">
                            <h4>Excursions</h4>
                            <p>Anak-anak kami diberikan kesempatan untuk belajar di luar kelas melalui kegiatan ekskursi yang mendidik dan memperluas wawasan mereka.</p>
                        </div>
                    </div>
    
                    <div class="feature-item languages col-md-4 wow fadeInUp">
                        <div class="feature-icon">
                            <div class="icon icon-earth205"></div>
                        </div>
                        <div class="feature-desc">
                            <h4>Language Classes</h4>
                            <p>Kelas bahasa kami membantu anak-anak menjadi fasih dalam berbagai bahasa, meningkatkan keterampilan komunikasi global mereka.</p>
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
                <h2>Our Class and Course</h2>
            </div>
    
            <div class="row">
                <!-- Nav Tabs -->
                <div class="class-course-nav" role="tablist" id="planTabs">
                    <ul class="no-margin no-padding">
                        <li role="presentation" class="col-md-2 wow fadeInUp active">
                            <a href="#mathclass" aria-controls="mathclass" role="tab" data-toggle="tab" style="border-color: #f69c3b; color: #f69c3b;">
                                Math Class
                                <div class="icon icon-maths5"></div>
                            </a>
                        </li>
                        <li role="presentation" class="col-md-2 wow fadeInUp">
                            <a href="#englishclass" aria-controls="englishclass" role="tab" data-toggle="tab" style="border-color: #e57978; color: #e57978;">
                                English Class
                                <div class="icon icon-earth205"></div>
                            </a>
                        </li>
                        <li role="presentation" class="col-md-2 wow fadeInUp">
                            <a href="#musicclass" aria-controls="musicclass" role="tab" data-toggle="tab" style="border-color: #59bec9; color: #59bec9;">
                                Music Class
                                <div class="icon icon-note55"></div>
                            </a>
                        </li>
                        <li role="presentation" class="col-md-2 wow fadeInUp">
                            <a href="#computerclass" aria-controls="computerclass" role="tab" data-toggle="tab" style="border-color: #c389ce; color: #c389ce;">
                                Computer Class
                                <div class="icon icon-computers10"></div>
                            </a>
                        </li>
                        <li role="presentation" class="col-md-2 wow fadeInUp">
                            <a href="#paintingclass" aria-controls="paintingclass" role="tab" data-toggle="tab" style="border-color: #fec02a; color: #fec02a;">
                                Painting Class
                                <div class="icon icon-paint81"></div>
                            </a>
                        </li>
                        <li role="presentation" class="col-md-2 wow fadeInUp">
                            <a href="#sportclass" aria-controls="sportclass" role="tab" data-toggle="tab" style="border-color: #7fb881; color: #7fb881;">
                                Sport Class
                                <div class="icon icon-rugby-ball"></div>
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
                            <h3>Math Class</h3>
                            <p class="subtitle">( 2 year course duration )</p>
                            <div class="content">
                                <p>Kelas Matematika ini dirancang untuk memperkuat pemahaman anak-anak dalam konsep-konsep matematika dasar hingga tingkat lanjut, melalui metode pengajaran yang interaktif dan menyenangkan.</p>
                                <p>Siswa akan diajarkan berbagai strategi problem-solving dan cara berpikir kritis yang akan bermanfaat dalam kehidupan sehari-hari.</p>
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
                            <h3>English Class</h3>
                            <p class="subtitle">( 2 year course duration )</p>
                            <div class="content">
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
                            <h3>Music Class</h3>
                            <p class="subtitle">( 2 year course duration )</p>
                            <div class="content">
                                <p>Kelas Musik ini menawarkan pengajaran dalam teori musik, instrumentasi, dan keterampilan pertunjukan, yang semuanya dirancang untuk mengembangkan apresiasi dan kemampuan musik siswa.</p>
                                <p>Siswa akan belajar memainkan alat musik pilihan mereka serta memahami pentingnya ekspresi musikal dalam kehidupan.</p>
                            </div>
                            <div class="button-normal green">
                                <a href="#">Learn More</a>
                            </div>
                        </div>
                    </div>
    
                    <div role="tabpanel" class="class-course-content fade in" id="computerclass">
                        <div class="col-md-6">
                            <img src="https://media.istockphoto.com/id/1336862668/photo/group-of-small-nursery-school-children-with-teacher-on-floor-indoors-in-classroom-using-laptop.jpg?s=612x612&w=0&k=20&c=7yhwmPGb7en8eY3udfrn7RJUMN-stc_0dYbpLe9AsrU=" alt="Computer Class Image" />
                        </div>
                        <div class="col-md-6">
                            <h3>Computer Class</h3>
                            <p class="subtitle">( 2 year course duration )</p>
                            <div class="content">
                                <p>Kelas Komputer ini mengajarkan dasar-dasar pemrograman, penggunaan perangkat lunak, dan keterampilan teknologi yang relevan di era digital saat ini.</p>
                                <p>Siswa akan mendapatkan pemahaman praktis tentang dunia teknologi yang berkembang, mempersiapkan mereka untuk tantangan masa depan.</p>
                            </div>
                            <div class="button-normal green">
                                <a href="#">Learn More</a>
                            </div>
                        </div>
                    </div>
    
                    <div role="tabpanel" class="class-course-content fade in" id="paintingclass">
                        <div class="col-md-6">
                            <img src="https://childcare.extension.org/wp-content/uploads/2019/08/girl-using-tempera-paint_0.jpg" alt="Painting Class Image" />
                        </div>
                        <div class="col-md-6">
                            <h3>Painting Class</h3>
                            <p class="subtitle">( 2 year course duration )</p>
                            <div class="content">
                                <p>Kelas Melukis ini memberikan siswa kesempatan untuk mengekspresikan kreativitas mereka melalui berbagai teknik melukis dan media seni, dari cat air hingga akrilik.</p>
                                <p>Siswa akan mempelajari sejarah seni serta mengembangkan gaya pribadi mereka dalam menciptakan karya seni yang unik.</p>
                            </div>
                            <div class="button-normal green">
                                <a href="#">Learn More</a>
                            </div>
                        </div>
                    </div>
    
                    <div role="tabpanel" class="class-course-content fade in" id="sportclass">
                        <div class="col-md-6">
                            <img src="https://images.squarespace-cdn.com/content/v1/54b94c7ce4b0c2c1fae53fd7/1423855635330-SMY5LPOVNW8TL30NY9UJ/image-asset.jpeg" alt="Sport Class Image" />
                        </div>
                        <div class="col-md-6">
                            <h3>Sport Class</h3>
                            <p class="subtitle">( 2 year course duration )</p>
                            <div class="content">
                                <p>Kelas Olahraga ini menawarkan berbagai aktivitas fisik yang membantu meningkatkan kebugaran, koordinasi, dan keterampilan sosial siswa melalui partisipasi dalam olahraga tim dan individu.</p>
                                <p>Siswa akan belajar pentingnya kerja sama tim, sportivitas, dan menjaga kesehatan fisik melalui latihan teratur.</p>
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
    <!-- BANNER SECTION END -->

    <!-- PRICING TABLE SECTION START
    ============================================= -->
    <div class="pricing-table wow fadeIn">
        <div class="container">
            <div class="pricing-item col-md-4 text-center wow fadeInUp">
                <div class="header-area" style="background-color: #c389ce">
                    <h3 class="title">Day Care Mentosiri Pringadi</h3>
                    <h1 class="price">Rp1.100.000<span>/hari</span></h1>
                </div>
                <div class="content">
                    <ul class="no-padding no-margin">
                        <li>Makanan</li>
                        <li>Snack</li>
                        <li>Permainan</li>
                        <li>Kursus</li>
                    </ul>
                    <div class="bottom-section">
                        <div class="button-normal green">
                            <a href="#">Daftar</a>
                        </div>
                    </div>
                </div>
            </div>
    
            <div class="pricing-item featured col-md-4 text-center wow fadeInUp">
                <div class="header-area" style="background-color: #7fb881">
                    <h3 class="title">Pre-School Mentosiri Pringadi</h3>
                    <h1 class="price">Rp6.500.000<span>/bulan</span></h1>
                </div>
                <div class="content">
                    <ul class="no-padding no-margin">
                        <li>Makanan</li>
                        <li>Snack</li>
                        <li>Permainan</li>
                        <li>Kursus</li>
                    </ul>
                    <div class="bottom-section">
                        <div class="button-normal green">
                            <a href="#">Daftar</a>
                        </div>
                    </div>
                </div>
            </div>
    
            <div class="pricing-item col-md-4 text-center wow fadeInUp">
                <div class="header-area" style="background-color: #f69c3b">
                    <h3 class="title">Kindergarten Mentosiri Pringadi</h3>
                    <h1 class="price">Rp9.500.000<span>/bulan</span></h1>
                </div>
                <div class="content">
                    <ul class="no-padding no-margin">
                        <li>Makanan</li>
                        <li>Snack</li>
                        <li>Permainan</li>
                        <li>Kursus</li>
                    </ul>
                    <div class="bottom-section">
                        <div class="button-normal green">
                            <a href="#">Daftar</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
    <!-- PRICING TABLE SECTION END -->

</section>
@endsection

@push('after-script')


@endpush