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
                <h1>Our Teacher</h1>
            </div>
        </div>
    </div>

    <!-- OUR TEACHER SECTION START
    ============================================= -->
    <div class="class-course">
        <div class="container">
            <div class="row">
                <!-- Nav Tabs -->
                <div class="teacher-nav wow fadeInUp" role="tablist" id="planTabs">
                    <ul class="no-margin no-padding">
                        <li role="presentation" class="col-md-3 active">
                            <a href="#stelarobson" aria-controls="stelarobson" role="tab" data-toggle="tab">
                                <img src="img/teacher1.jpg" alt="" />
                            </a>
                        </li>

                        <li role="presentation" class="col-md-3">
                            <a href="#kaylalawrence" aria-controls="kaylalawrence" role="tab" data-toggle="tab">
                                <img src="img/teacher2.jpg" alt="" />
                            </a>
                        </li>

                        <li role="presentation" class="col-md-3">
                            <a href="#stefaniemoe" aria-controls="stefaniemoe" role="tab" data-toggle="tab">
                                <img src="img/teacher3.jpg" alt="" />
                            </a>
                        </li>

                        <li role="presentation" class="col-md-3">
                            <a href="#jenniferdodge" aria-controls="jenniferdodge" role="tab" data-toggle="tab">
                                <img src="img/teacher4.jpg" alt="" />
                            </a>
                        </li>
                    </ul>
                </div>
                <!-- Nav Tabs End -->
            </div>

            <!-- Tab panes -->
            <div role="tabpanel" class="teacher-desc fade in active" id="stelarobson">
                <div class="heading-block clearfix">
                    <h3>Stela Robson</h3>
                    <p class="position">Guru Musik</p>
                </div>
            
                <div class="row">
                    <!-- Section 1 Start -->
                    <div class="section-1 wow fadeIn clearfix">
                        <div class="col-md-4">
                            <div class="teacher-photo">
                                <img src="img/teacher1-thumb.jpg" alt="" />
                                <div class="social-links">
                                    <ul class="no-padding">
                                        <li><a href="http://facebook.com" target="_blank"><i class="fa fa-facebook"></i></a></li>
                                        <li><a href="http://twitter.com" target="_blank"><i class="fa fa-twitter"></i></a></li>
                                        <li><a href="http://instagram.com" target="_blank"><i class="fa fa-instagram"></i></a></li>
                                        <li><a href="http://linkedin.com" target="_blank"><i class="fa fa-linkedin"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
            
                        <div class="col-md-4">
                            <div class="heading-block clearfix">
                                <h4>Tentang</h4>
                            </div>
                            <p>Sedikit tentang saya: Saya adalah seorang guru musik dengan pengalaman yang luas dalam mengajarkan berbagai jenis musik. Saya berkomitmen untuk memberikan pendidikan berkualitas tinggi kepada siswa-siswa saya dan membantu mereka mencapai potensi terbaik mereka. Dengan latar belakang dalam seni dan musik, saya memiliki keterampilan yang kuat dalam mengajarkan dan memotivasi siswa untuk mencintai dan menguasai musik.</p>
                            <p>Saya percaya bahwa setiap siswa memiliki potensi unik yang dapat dikembangkan dengan bimbingan yang tepat. Saya berusaha untuk menciptakan lingkungan belajar yang mendukung dan inspiratif, di mana siswa merasa nyaman untuk bereksperimen dan berkembang. Dengan pendekatan yang fleksibel dan kreatif, saya siap membantu siswa mencapai tujuan pribadi mereka dalam musik.</p>
                            
                        </div>
            
                        <div class="col-md-4"> 
                            <div class="heading-block clearfix">
                                <h4>Kemampuan Saya</h4>
                            </div>
                            <div class="my-skills">
                                <div class="skills-barrow clearfix">
                                    <div class="skills-bar" data-percent="85%">
                                        <div class="bar" style="background-color: #edbf47;"></div>
                                        <span class="skill-title">Grafis - 85%</span>
                                    </div>
                                </div>
                                <div class="skills-barrow clearfix">
                                    <div class="skills-bar" data-percent="75%">
                                        <div class="bar" style="background-color: #58beca;"></div>
                                        <span class="skill-title">Menggambar - 75%</span>
                                    </div>
                                </div>
                                <div class="skills-barrow clearfix">
                                    <div class="skills-bar" data-percent="65%">
                                        <div class="bar" style="background-color: #6fc191;"></div>
                                        <span class="skill-title">Melukis - 65%</span>
                                    </div>
                                </div>
                                <div class="skills-barrow clearfix">
                                    <div class="skills-bar" data-percent="99%">
                                        <div class="bar" style="background-color: #ec774b;"></div>
                                        <span class="skill-title">Musik - 99%</span>
                                    </div>
                                </div>
                                <div class="skills-barrow clearfix">
                                    <div class="skills-bar" data-percent="75%">
                                        <div class="bar" style="background-color: #e16c6c;"></div>
                                        <span class="skill-title">Olahraga - 75%</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Section 1 End -->
            
                    <!-- Section 2 Start -->
                    <div class="section-2 wow fadeIn clearfix">
                        <div class="col-md-4">
                            <div class="schedule">
                                <table class="table">
                                    <thead>
                                        <tr>
                                            <th colspan="2" class="header"><span class="icon icon-clock104"></span>Jadwal Saya</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td class="day">Senin</td>
                                            <td class="time">9AM - 3PM</td>
                                        </tr>
                                        <tr>
                                            <td class="day">Selasa</td>
                                            <td class="time">9AM - 3PM</td>
                                        </tr>
                                        <tr>
                                            <td class="day">Rabu</td>
                                            <td class="time">9AM - 3PM</td>
                                        </tr>
                                        <tr>
                                            <td class="day">Kamis</td>
                                            <td class="time">9AM - 3PM</td>
                                        </tr>
                                        <tr>
                                            <td class="day">Jumat</td>
                                            <td class="time">9AM - 3PM</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
            
                        <div class="col-md-4">
                            <div class="heading-block clearfix">
                                <h4>Pelajaran Saya</h4>
                            </div>
                            <ul class="lesson no-margin no-padding">
                                <li><a href="#">Pelajaran menggambar di semua kelas</a></li>
                                <li><a href="#">Video seni dasar nica</a></li>
                                <li><a href="#">Latihan cat air</a></li>
                                <li><a href="#">Uji cat stensil yang menakjubkan</a></li>
                                <li><a href="#">Warna dengan buah dan sayuran</a></li>
                            </ul>
                        </div>
            
                        <div class="contact-me col-md-4">
                            <div class="heading-block clearfix">
                                <h4>Hubungi Saya</h4>
                            </div>
                            <form method="post" action="contact.php">
                                <input type="text" name="email" id="email1" placeholder="Email" />
                                <textarea name="message" id="message1" cols="45" rows="5" placeholder="Pesan"></textarea>
                                <button class="submit button-normal green">Kirim</button>
                            </form>
                        </div>
                    </div>
                    <!-- Section 2 End -->
                </div>
            </div>
            

            <div role="tabpanel" class="teacher-desc fade in" id="kaylalawrence">
                <div class="heading-block clearfix">
                    <h3>Kayla Lawrence</h3>
                    <p class="position">Guru Lukis</p>
                </div>
            
                <div class="row">
                    <!-- Section 1 Start -->
                    <div class="section-1 wow fadeIn clearfix">
                        <div class="col-md-4">
                            <div class="teacher-photo">
                                <img src="img/teacher2-thumb.jpg" alt="" />
                                <div class="social-links">
                                    <ul class="no-padding">
                                        <li><a href="http://facebook.com" target="_blank"><i class="fa fa-facebook"></i></a></li>
                                        <li><a href="http://twitter.com" target="_blank"><i class="fa fa-twitter"></i></a></li>
                                        <li><a href="http://instagram.com" target="_blank"><i class="fa fa-instagram"></i></a></li>
                                        <li><a href="http://linkedin.com" target="_blank"><i class="fa fa-linkedin"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
            
                        <div class="col-md-4">
                            <div class="heading-block clearfix">
                                <h4>Tentang</h4>
                            </div>
                            <p>Saya adalah seorang guru lukis dengan pengalaman yang luas dalam bidang seni. Saya berkomitmen untuk membantu siswa mengembangkan keterampilan artistik mereka dan mencapai potensi penuh mereka dalam seni lukis.</p>
                            <p>Dengan latar belakang dalam berbagai teknik lukis, saya memiliki pengetahuan mendalam yang memungkinkan saya untuk mengajarkan berbagai gaya dan metode kepada siswa. Saya percaya bahwa setiap siswa memiliki gaya unik dan kemampuan khusus yang dapat ditingkatkan dengan bimbingan yang tepat. Dalam setiap pelajaran, saya berusaha menciptakan lingkungan yang mendukung dan inspiratif, di mana siswa merasa bebas untuk mengeksplorasi kreativitas mereka.</p>
                        </div>
            
                        <div class="col-md-4"> 
                            <div class="heading-block clearfix">
                                <h4>Kemampuan Saya</h4>
                            </div>
                            <div class="my-skills">
                                <div class="skills-barrow clearfix">
                                    <div class="skills-bar" data-percent="85%">
                                        <div class="bar" style="background-color: #edbf47;"></div>
                                        <span class="skill-title">Grafis - 85%</span>
                                    </div>
                                </div>
                                <div class="skills-barrow clearfix">
                                    <div class="skills-bar" data-percent="95%">
                                        <div class="bar" style="background-color: #58beca;"></div>
                                        <span class="skill-title">Menggambar - 95%</span>
                                    </div>
                                </div>
                                <div class="skills-barrow clearfix">
                                    <div class="skills-bar" data-percent="99%">
                                        <div class="bar" style="background-color: #6fc191;"></div>
                                        <span class="skill-title">Melukis - 99%</span>
                                    </div>
                                </div>
                                <div class="skills-barrow clearfix">
                                    <div class="skills-bar" data-percent="65%">
                                        <div class="bar" style="background-color: #ec774b;"></div>
                                        <span class="skill-title">Musik - 65%</span>
                                    </div>
                                </div>
                                <div class="skills-barrow clearfix">
                                    <div class="skills-bar" data-percent="55%">
                                        <div class="bar" style="background-color: #e16c6c;"></div>
                                        <span class="skill-title">Olahraga - 55%</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Section 1 End -->
            
                    <!-- Section 2 Start -->
                    <div class="section-2 wow fadeIn clearfix">
                        <div class="col-md-4">
                            <div class="schedule">
                                <table class="table">
                                    <thead>
                                        <tr>
                                            <th colspan="2" class="header"><span class="icon icon-clock104"></span>Jadwal Saya</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td class="day">Senin</td>
                                            <td class="time">9AM - 3PM</td>
                                        </tr>
                                        <tr>
                                            <td class="day">Selasa</td>
                                            <td class="time">9AM - 3PM</td>
                                        </tr>
                                        <tr>
                                            <td class="day">Rabu</td>
                                            <td class="time">9AM - 3PM</td>
                                        </tr>
                                        <tr>
                                            <td class="day">Kamis</td>
                                            <td class="time">9AM - 3PM</td>
                                        </tr>
                                        <tr>
                                            <td class="day">Jumat</td>
                                            <td class="time">9AM - 3PM</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
            
                        <div class="col-md-4">
                            <div class="heading-block clearfix">
                                <h4>Pelajaran Saya</h4>
                            </div>
                            <ul class="lesson no-margin no-padding">
                                <li><a href="#">Pelajaran menggambar di semua kelas</a></li>
                                <li><a href="#">Video seni dasar nica</a></li>
                                <li><a href="#">Latihan cat air</a></li>
                                <li><a href="#">Uji cat stensil yang menakjubkan</a></li>
                                <li><a href="#">Warna dengan buah dan sayuran</a></li>
                            </ul>
                        </div>
            
                        <div class="contact-me col-md-4">
                            <div class="heading-block clearfix">
                                <h4>Hubungi Saya</h4>
                            </div>
                            <form method="post" action="contact.php">
                                <input type="text" name="email" id="email2" placeholder="Email" />
                                <textarea name="message" id="message2" cols="45" rows="5" placeholder="Pesan"></textarea>
                                <button class="submit button-normal green">Kirim</button>
                            </form>
                        </div>
                    </div>
                    <!-- Section 2 End -->
                </div>
            </div>
            

            <div role="tabpanel" class="teacher-desc fade in" id="stefaniemoe">
                <div class="heading-block clearfix">
                    <h3>Stefanie Moe</h3>
                    <p class="position">Guru Olahraga</p>
                </div>
            
                <div class="row">
                    <!-- Section 1 Start -->
                    <div class="section-1 wow fadeIn clearfix">
                        <div class="col-md-4">
                            <div class="teacher-photo">
                                <img src="img/teacher3-thumb.jpg" alt="" />
                                <div class="social-links">
                                    <ul class="no-padding">
                                        <li><a href="http://facebook.com" target="_blank"><i class="fa fa-facebook"></i></a></li>
                                        <li><a href="http://twitter.com" target="_blank"><i class="fa fa-twitter"></i></a></li>
                                        <li><a href="http://instagram.com" target="_blank"><i class="fa fa-instagram"></i></a></li>
                                        <li><a href="http://linkedin.com" target="_blank"><i class="fa fa-linkedin"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
            
                        <div class="col-md-4">
                            <div class="heading-block clearfix">
                                <h4>Tentang</h4>
                            </div>
                            <p>Saya adalah seorang guru olahraga dengan pengalaman dalam berbagai disiplin olahraga dan aktivitas fisik. Saya berdedikasi untuk membantu siswa mengembangkan keterampilan olahraga mereka dan mempromosikan gaya hidup sehat.</p>
                            <p>Dengan latar belakang yang kuat dalam olahraga dan kebugaran, saya berkomitmen untuk mengajarkan teknik yang tepat dan cara yang menyenangkan dalam berolahraga. Tujuan saya adalah untuk memastikan setiap siswa merasa termotivasi dan terinspirasi untuk mencapai potensi terbaik mereka dalam setiap aktivitas fisik yang mereka lakukan.</p>
                        </div>
            
                        <div class="col-md-4"> 
                            <div class="heading-block clearfix">
                                <h4>Kemampuan Saya</h4>
                            </div>
                            <div class="my-skills">
                                <div class="skills-barrow clearfix">
                                    <div class="skills-bar" data-percent="75%">
                                        <div class="bar" style="background-color: #edbf47;"></div>
                                        <span class="skill-title">Grafis - 75%</span>
                                    </div>
                                </div>
                                <div class="skills-barrow clearfix">
                                    <div class="skills-bar" data-percent="65%">
                                        <div class="bar" style="background-color: #58beca;"></div>
                                        <span class="skill-title">Menggambar - 65%</span>
                                    </div>
                                </div>
                                <div class="skills-barrow clearfix">
                                    <div class="skills-bar" data-percent="65%">
                                        <div class="bar" style="background-color: #6fc191;"></div>
                                        <span class="skill-title">Melukis - 65%</span>
                                    </div>
                                </div>
                                <div class="skills-barrow clearfix">
                                    <div class="skills-bar" data-percent="85%">
                                        <div class="bar" style="background-color: #ec774b;"></div>
                                        <span class="skill-title">Musik - 85%</span>
                                    </div>
                                </div>
                                <div class="skills-barrow clearfix">
                                    <div class="skills-bar" data-percent="99%">
                                        <div class="bar" style="background-color: #e16c6c;"></div>
                                        <span class="skill-title">Olahraga - 99%</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Section 1 End -->
            
                    <!-- Section 2 Start -->
                    <div class="section-2 wow fadeIn clearfix">
                        <div class="col-md-4">
                            <div class="schedule">
                                <table class="table">
                                    <thead>
                                        <tr>
                                            <th colspan="2" class="header"><span class="icon icon-clock104"></span>Jadwal Saya</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td class="day">Senin</td>
                                            <td class="time">9AM - 3PM</td>
                                        </tr>
                                        <tr>
                                            <td class="day">Selasa</td>
                                            <td class="time">9AM - 3PM</td>
                                        </tr>
                                        <tr>
                                            <td class="day">Rabu</td>
                                            <td class="time">9AM - 3PM</td>
                                        </tr>
                                        <tr>
                                            <td class="day">Kamis</td>
                                            <td class="time">9AM - 3PM</td>
                                        </tr>
                                        <tr>
                                            <td class="day">Jumat</td>
                                            <td class="time">9AM - 3PM</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
            
                        <div class="col-md-4">
                            <div class="heading-block clearfix">
                                <h4>Pelajaran Saya</h4>
                            </div>
                            <ul class="lesson no-margin no-padding">
                                <li><a href="#">Pelajaran olahraga di semua kelas</a></li>
                                <li><a href="#">Video latihan dasar olahraga</a></li>
                                <li><a href="#">Latihan kebugaran dan koordinasi</a></li>
                                <li><a href="#">Uji keterampilan olahraga yang menyenangkan</a></li>
                                <li><a href="#">Kegiatan olahraga dengan alat</a></li>
                            </ul>
                        </div>
            
                        <div class="contact-me col-md-4">
                            <div class="heading-block clearfix">
                                <h4>Hubungi Saya</h4>
                            </div>
                            <form method="post" action="contact.php">
                                <input type="text" name="email" id="email3" placeholder="Email" />
                                <textarea name="message" id="message3" cols="45" rows="5" placeholder="Pesan"></textarea>
                                <button class="submit button-normal green">Kirim</button>
                            </form>
                        </div>
                    </div>
                    <!-- Section 2 End -->
                </div>
            </div>
            

            <div role="tabpanel" class="teacher-desc fade in" id="jenniferdodge">
                <div class="heading-block clearfix">
                    <h3>Jennifer Dodge</h3>
                    <p class="position">Guru Grafis</p>
                </div>
            
                <div class="row">
                    <!-- Section 1 Start -->
                    <div class="section-1 wow fadeIn clearfix">
                        <div class="col-md-4">
                            <div class="teacher-photo">
                                <img src="img/teacher4-thumb.jpg" alt="" />
                                <div class="social-links">
                                    <ul class="no-padding">
                                        <li><a href="http://facebook.com" target="_blank"><i class="fa fa-facebook"></i></a></li>
                                        <li><a href="http://twitter.com" target="_blank"><i class="fa fa-twitter"></i></a></li>
                                        <li><a href="http://instagram.com" target="_blank"><i class="fa fa-instagram"></i></a></li>
                                        <li><a href="http://linkedin.com" target="_blank"><i class="fa fa-linkedin"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
            
                        <div class="col-md-4">
                            <div class="heading-block clearfix">
                                <h4>Tentang</h4>
                            </div>
                            <p>Saya adalah seorang guru grafis dengan keahlian dalam desain dan seni visual. Saya memiliki pengalaman yang luas dalam mengajarkan berbagai teknik grafis dan membantu siswa mengembangkan keterampilan kreatif mereka.</p>
                            <p>Dalam kelas saya, saya berkomitmen untuk memberikan pengajaran yang berkualitas dan mendukung siswa dalam mengeksplorasi kreativitas mereka. Dengan latar belakang yang kuat dalam desain grafis dan seni, saya bertujuan untuk memotivasi dan memfasilitasi setiap siswa untuk mencapai potensi terbaik mereka dalam bidang grafis.</p>
                        </div>
            
                        <div class="col-md-4"> 
                            <div class="heading-block clearfix">
                                <h4>Kemampuan Saya</h4>
                            </div>
                            <div class="my-skills">
                                <div class="skills-barrow clearfix">
                                    <div class="skills-bar" data-percent="99%">
                                        <div class="bar" style="background-color: #edbf47;"></div>
                                        <span class="skill-title">Grafis - 99%</span>
                                    </div>
                                </div>
                                <div class="skills-barrow clearfix">
                                    <div class="skills-bar" data-percent="85%">
                                        <div class="bar" style="background-color: #58beca;"></div>
                                        <span class="skill-title">Menggambar - 85%</span>
                                    </div>
                                </div>
                                <div class="skills-barrow clearfix">
                                    <div class="skills-bar" data-percent="75%">
                                        <div class="bar" style="background-color: #6fc191;"></div>
                                        <span class="skill-title">Melukis - 75%</span>
                                    </div>
                                </div>
                                <div class="skills-barrow clearfix">
                                    <div class="skills-bar" data-percent="65%">
                                        <div class="bar" style="background-color: #ec774b;"></div>
                                        <span class="skill-title">Musik - 65%</span>
                                    </div>
                                </div>
                                <div class="skills-barrow clearfix">
                                    <div class="skills-bar" data-percent="55%">
                                        <div class="bar" style="background-color: #e16c6c;"></div>
                                        <span class="skill-title">Olahraga - 55%</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Section 1 End -->
            
                    <!-- Section 2 Start -->
                    <div class="section-2 wow fadeIn clearfix">
                        <div class="col-md-4">
                            <div class="schedule">
                                <table class="table">
                                    <thead>
                                        <tr>
                                            <th colspan="2" class="header"><span class="icon icon-clock104"></span>Jadwal Saya</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td class="day">Senin</td>
                                            <td class="time">9AM - 3PM</td>
                                        </tr>
                                        <tr>
                                            <td class="day">Selasa</td>
                                            <td class="time">9AM - 3PM</td>
                                        </tr>
                                        <tr>
                                            <td class="day">Rabu</td>
                                            <td class="time">9AM - 3PM</td>
                                        </tr>
                                        <tr>
                                            <td class="day">Kamis</td>
                                            <td class="time">9AM - 3PM</td>
                                        </tr>
                                        <tr>
                                            <td class="day">Jumat</td>
                                            <td class="time">9AM - 3PM</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
            
                        <div class="col-md-4">
                            <div class="heading-block clearfix">
                                <h4>Pelajaran Saya</h4>
                            </div>
                            <ul class="lesson no-margin no-padding">
                                <li><a href="#">Pelajaran menggambar di semua kelas</a></li>
                                <li><a href="#">Video dasar seni grafis</a></li>
                                <li><a href="#">Latihan teknik melukis</a></li>
                                <li><a href="#">Uji keterampilan grafis yang menarik</a></li>
                                <li><a href="#">Penggunaan warna dalam desain</a></li>
                            </ul>
                        </div>
            
                        <div class="contact-me col-md-4">
                            <div class="heading-block clearfix">
                                <h4>Hubungi Saya</h4>
                            </div>
                            <form method="post" action="contact.php">
                                <input type="text" name="email" id="email4" placeholder="Email" />
                                <textarea name="message" id="message4" cols="45" rows="5" placeholder="Pesan"></textarea>
                                <button class="submit button-normal green">Kirim</button>
                            </form>
                        </div>
                    </div>
                    <!-- Section 2 End -->
                </div>
            </div>
            
            <!-- Tab Panes End -->

        </div>
    </div>
   

</section>
@endsection

@push('after-script')


@endpush