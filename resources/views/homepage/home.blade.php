<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <title>ADMAKA</title>
    <meta name="description" content="">
    <meta name="keywords" content="">

    <!-- Favicons -->
    <link href="{{ asset('img/logoumrah.png') }}" rel="icon">


    <!-- Fonts -->
    <link href="https://fonts.googleapis.com" rel="preconnect">
    <link href="https://fonts.gstatic.com" rel="preconnect" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&family=Inter:wght@100;200;300;400;500;600;700;800;900&family=Nunito:ital,wght@0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
        rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href="{{ asset('vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('vendor/bootstrap-icons/bootstrap-icons.css') }}" rel="stylesheet">
    <link href="{{ asset('vendor/aos/aos.css') }}" rel="stylesheet">
    <link href="{{ asset('vendor/glightbox/css/glightbox.min.css') }}" rel="stylesheet">
    <link href="{{ asset('vendor/swiper/swiper-bundle.min.css') }}" rel="stylesheet">

    <!-- Main CSS File -->
    <link href="{{ asset('css/main.css') }}" rel="stylesheet">
    <link href="{{ asset('plugins/sweetalert2/sweetalert2.css') }}" rel="stylesheet">

</head>

<body class="index-page">

    <header id="header" class="header d-flex align-items-center fixed-top">
        <div class="container-fluid container-xl position-relative d-flex align-items-center">

            <a href="index.html" class="logo d-flex align-items-center me-auto">
                <img src="{{ asset('img/logoadmaka.png') }}" alt="">
                <h1 class="sitename">ADMAKA</h1>
            </a>

            <nav id="navmenu" class="navmenu">
                <ul>
                    <li><a href="#hero" class="active">Home</a></li>
                    <li class="dropdown"><a href="#"><span>Template Surat</span> <i
                                class="bi bi-chevron-down toggle-dropdown"></i></a>
                        <ul>
                            <li><a href="{{ asset('FORM_AKADEMIK/BO.FT.01_SURAT_PERSETUJUAN_SIDANG_SKRIPSI.docx') }}">Surat
                                    Persetujuan Sidang Skripsi</a></li>
                            <li><a href="{{ asset('FORM_AKADEMIK/BO.FT.02 FORM PERMOHONAN SIDANG SKRIPSI.docx') }}">Form
                                    Permohonan Sidang Skripsi</a></li>
                            <li><a
                                    href="{{ asset('FORM_AKADEMIK/BO.FT.03 FORM PERMOHONAN SEMINAR PROPOSAL SKRIPSI.docx') }}">Form
                                    Permohonan Sminar Proposal Skripsi</a></li>
                            <li><a
                                    href="{{ asset('FORM_AKADEMIK/BO.FT.BO.FT.04 SURAT PERSETUJUAN SEMINAR PROPOSAL SKRIPSI.docx') }}">Surat
                                    Persetujuan Seminar Proposal Skripsi</a></li>
                            <li><a href="{{ asset('FORM_AKADEMIK/Borang Pengurusan Mahasiswa Cuti_Pindah.docx') }}">Form
                                    Cuti
                                    Akademik</a></li>
                            <li><a href="{{ asset('FORM_AKADEMIK/Borang Permasalahan SIPA.pdf') }}">Borang
                                    Laporan Permasalahan
                                    SIPA</a></li>
                            <li><a href="{{ asset('FORM_AKADEMIK/FORMULIR PENGURUSAN KTM.docx') }}">Formulir
                                    Pengurusan KTM</a>
                            </li>
                            <li><a href="{{ asset('FORM_AKADEMIK/PERMOHONAN MENGIKUTI KEGIATAN MBKM.docx') }}">Permohonan
                                    Mengikuti MBKM</a></li>
                        </ul>
                    </li>
                    <li><a href="#contact">Contact</a></li>
                </ul>
                <i class="mobile-nav-toggle d-xl-none bi bi-list"></i>
            </nav>

            <a class="btn-getstarted" href="{{ route('login') }}">Login</a>

        </div>
    </header>

    <main class="main">

        <!-- Hero Section -->
        <section id="hero" class="hero section">
            <div class="hero-bg">
                <img src="{{ asset('img/sattugurindam.jpg') }}" alt="">
            </div>
            <div class="container text-center">
                <div class="d-flex flex-column justify-content-center align-items-center">
                    <h1 data-aos="fade-up">Welcome to <span>ADMAKA</span></h1>
                    <p data-aos="fade-up" data-aos-delay="100">Pelayanan Akademik Fakultas Teknik<br></p>
                </div>
            </div>

        </section><!-- /Hero Section -->

        <!-- Featured Services Section -->
        <section id="featured-services" class="featured-services section light-background">

            <div class="container">

                <div class="row gy-4">

                    <div class="col-xl-4 col-lg-6" data-aos="fade-up" data-aos-delay="100">
                        <div class="service-item d-flex">
                            <div class="icon flex-shrink-0"><i class="bi bi-briefcase"></i></div>
                            <div>
                                <h4 class="title">Status Surat Pengajuan</h4>
                                <p class="description">Total Surat Yang Berstatus Pengajuan 3.000.000 Surat</p>
                            </div>
                        </div>
                    </div>
                    <!-- End Service Item -->

                    <div class="col-xl-4 col-lg-6" data-aos="fade-up" data-aos-delay="200">
                        <div class="service-item d-flex">
                            <div class="icon flex-shrink-0"><i class="bi bi-card-checklist"></i></div>
                            <div>
                                <h4 class="title">Status Surat diProses</h4>
                                <p class="description">Total Surat Yang Berstatus Peroses 3.000.000 Surat</p>
                            </div>
                        </div>
                    </div><!-- End Service Item -->

                    <div class="col-xl-4 col-lg-6" data-aos="fade-up" data-aos-delay="300">
                        <div class="service-item d-flex">
                            <div class="icon flex-shrink-0"><i class="bi bi-bar-chart"></i></div>
                            <div>
                                <h4 class="title">Status Surat Selesai</h4>
                                <p class="description">Total Surat Yang Berstatus Selesai 3.000.000 Surat</p>
                            </div>
                        </div>
                    </div><!-- End Service Item -->

                </div>

            </div>

        </section><!-- /Featured Services Section -->



        <!-- Contact Section -->
        <section id="contact" class="contact section">

            <!-- Section Title -->
            <div class="container section-title" data-aos="fade-up">
                <h2>Contact</h2>
                <p>Informasi Fakultas Teknik dan Teknologi Kemaritiman Universitas Maritim Raja Ali Haji</p>
            </div><!-- End Section Title -->

            <div class="container" data-aos="fade-up" data-aos-delay="100">

                <div class="row gy-4">

                    <div class="col-lg-6">
                        <div class="info-item d-flex flex-column justify-content-center align-items-center"
                            data-aos="fade-up" data-aos-delay="200">
                            <i class="bi bi-geo-alt"></i>
                            <h3>Address</h3>
                            <p>Jl. Politeknik – Senggarang, Tanjungpinang Provinsi Kepulauan Riau</p>
                        </div>
                    </div><!-- End Info Item -->

                    <div class="col-lg-3 col-md-6">
                        <div class="info-item d-flex flex-column justify-content-center align-items-center"
                            data-aos="fade-up" data-aos-delay="300">
                            <i class="bi bi-telephone"></i>
                            <h3>Call Us</h3>
                            <p>(0771) 4500097</p>
                        </div>
                    </div><!-- End Info Item -->

                    <div class="col-lg-3 col-md-6">
                        <div class="info-item d-flex flex-column justify-content-center align-items-center"
                            data-aos="fade-up" data-aos-delay="400">
                            <i class="bi bi-envelope"></i>
                            <h3>Email Us</h3>
                            <p>ft@umrah.ac.id</p>
                        </div>
                    </div><!-- End Info Item -->

                </div>

                <div class="row gy-4 mt-1">
                    <div class="col-lg-6" data-aos="fade-up" data-aos-delay="300">
                        <iframe
                            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3989.2621436577488!2d104.4392378747239!3d0.9566927990340723!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x31d9718ec5f370e1%3A0xdd2db54d0ce576d1!2sFIKP%20UMRAH%2C%20Senggarang!5e0!3m2!1sid!2sid!4v1731637926157!5m2!1sid!2sid"
                            width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"
                            referrerpolicy="no-referrer-when-downgrade"></iframe>
                    </div><!-- End Google Maps -->

                    <div class="col-lg-6">
                        <form action="forms/contact.php" method="post" class="php-email-form" data-aos="fade-up"
                            data-aos-delay="400">
                            <div class="row gy-4">

                                <div class="col-md-6">
                                    <input type="text" name="name" class="form-control" placeholder="Your Name"
                                        required="">
                                </div>

                                <div class="col-md-6 ">
                                    <input type="email" class="form-control" name="email" placeholder="Your Email"
                                        required="">
                                </div>

                                <div class="col-md-12">
                                    <input type="text" class="form-control" name="subject" placeholder="Subject"
                                        required="">
                                </div>

                                <div class="col-md-12">
                                    <textarea class="form-control" name="message" rows="6" placeholder="Message"
                                        required=""></textarea>
                                </div>

                                <div class="col-md-12 text-center">
                                    <div class="loading">Loading</div>
                                    <div class="error-message"></div>
                                    <div class="sent-message">Your message has been sent. Thank you!</div>

                                    <button type="submit">Send Message</button>
                                </div>

                            </div>
                        </form>
                    </div><!-- End Contact Form -->

                </div>

            </div>

        </section><!-- /Contact Section -->

    </main>

    <footer id="footer" class="footer position-relative light-background">

        <div class="container copyright text-center mt-4">
            <p>© <span>Copyright</span> <span>
                    <?php echo date('Y'); ?>
                </span><strong class="px-1 sitename">UMRAH FTTK</strong></p>
        </div>
    </footer>

    <!-- Scroll Top -->
    <a href="#" id="scroll-top" class="scroll-top d-flex align-items-center justify-content-center"><i
            class="bi bi-arrow-up-short"></i></a>

    <!-- Preloader -->
    <div id="preloader"></div>

    <!-- Vendor JS Files -->
    <script src="{{ asset('vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('vendor/php-email-form/validate.js') }}"></script>
    <script src="{{ asset('vendor/aos/aos.js') }}"></script>
    <script src="{{ asset('vendor/glightbox/js/glightbox.min.js') }}"></script>
    <script src="{{ asset('vendor/swiper/swiper-bundle.min.js') }}"></script>

    <!-- Main JS File -->
    <script src="{{ asset('js/main.js') }}"></script>
    <script src="{{ asset('plugins/sweetalert2/sweetalert2.all.min.js') }}"></script>
    @if (session()->has('status'))
    <script>
        const message = "{{ session('message') }}";
        const status = "{{ session('status') }}";

        var toast = Swal.mixin({
            toast: true,
            position: 'top-end',
            showConfirmButton: false,
            timer: 5000,
            padding: '2em'
        });

        if (status == false || status == "" || status == "0") {
            toast.fire({
                icon: 'warning',
                title: message,
                padding: '2em'
            });
        } else {
            toast.fire({
                icon: 'success',
                title: message,
                padding: '2em'
            });

            var container = document.querySelector(".container");
            if (container) {
                container.classList.add("sign-up-mode");
            }
        }
    </script>
    @endif

</body>

</html>