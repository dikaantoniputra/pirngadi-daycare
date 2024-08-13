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
                <h1>Contact</h1>
            </div>
        </div>
    </div>

    

    <!-- CONTACT CONTENT START
    ============================================= -->
    <div class="contact-section">
        <div class="container">
            <div class="row">
                
                <div class="contact-details col-md-4 wow fadeInUp">
                    <p>Silakan hubungi kami secara langsung atau lengkapi formulir kami dan kami akan segera menghubungi Anda.</p>
    
                    <div class="visit-us">
                        <div class="contact-icon">
                            <span class="icon icon-pin-1"></span>
                        </div>
                        <div class="contact-content">
                            <h3>Alamat Kantor Kami</h3>
                            <p>Jl. Pendidikan No. 123</p>
                            <p>Kota Surabaya</p>
                            <p>Indonesia</p>
                        </div>
                    </div>
    
                    <div class="contact-us">
                        <div class="contact-icon">
                            <span class="icon icon-hand-right"></span>
                        </div>
                        <div class="contact-content">
                            <h3>Hubungi Kami</h3>
                            <p>+62 21 1234 5678</p>
                            <p>sekretariat@pirngadi.sch.id</p>
                            <p>www.pirngadi.sch.id</p>
                        </div>
                    </div>
                </div>
    
                <div class="contact-form col-md-8 wow fadeIn">
                    <form method="post" action="contact.php">
                        <input type="text" name="name" id="name" placeholder="Nama" />
                        <input type="text" name="email" id="email" placeholder="Email" />
                        <input type="text" name="subject" id="subject" placeholder="Subjek" />
                        <textarea name="message" id="message" cols="45" rows="5" placeholder="Pesan"></textarea>
                        <button class="submit button-normal green">Kirim</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
    
    <!-- CONTACT CONTENT END -->

</section>
@endsection

@push('after-script')


@endpush