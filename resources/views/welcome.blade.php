<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <title>Anzhar Ade Nugraha Porfolio</title>
    <meta content="programmer porfolio" name="description">
    <meta charset="UTF-8">
    <meta content="programmer porfolio" name="keywords">
    @include('font')
    @include('element.css')
</head>

<body>

    <!-- ======= Mobile nav toggle button ======= -->
    <!-- <button type="button" class="mobile-nav-toggle d-xl-none"><i class="bi bi-list mobile-nav-toggle"></i></button> -->
    <i class="bi bi-list mobile-nav-toggle d-xl-none"></i>
    <!-- ======= Header ======= -->
    <header id="header" class="d-flex flex-column justify-content-center">

        <nav id="navbar" class="navbar nav-menu">
            <ul>
                <li><a href="#hero" class="nav-link scrollto active"><i class="bx bx-home"></i> <span>Home</span></a>
                </li>
                <li><a href="#about" class="nav-link scrollto"><i class="bx bx-user"></i> <span>About</span></a></li>
                <li><a href="#resume" class="nav-link scrollto"><i class="bx bx-file-blank"></i> <span>Resume</span></a>
                </li>
                <li><a href="#portfolio" class="nav-link scrollto"><i class="bx bx-book-content"></i>
                        <span>Portfolio</span></a></li>
                <li><a href="#services" class="nav-link scrollto"><i class="bx bx-server"></i>
                        <span>Services</span></a></li>
                <li><a href="#contact" class="nav-link scrollto"><i class="bx bx-envelope"></i> <span>Contact</span></a>
                </li>
            </ul>
        </nav><!-- .nav-menu -->

    </header><!-- End Header -->

    <!-- ======= Hero Section ======= -->
    <section id="hero" class="d-flex flex-column justify-content-center">
        <div class="container" data-aos="zoom-in" data-aos-delay="100">
            <h1>Anzhar Ade Nugraha</h1>
            <p>I'm <span class="typed" data-typed-items="Web Developer, PHP Developer"></span></p>
            <p><a href="{{ url("gallery") }}">click to see my gallery</a></p>
            <div class="social-links">
                <a href="https://twitter.com/AnzharNugraha" target="_blank" class="twitter"><i
                        class="bx bxl-twitter"></i></a>
                <a href="https://web.facebook.com/anzhar.nugraha" target="_blank" class="facebook"><i
                        class="bx bxl-facebook"></i></a>
                <a href="https://www.instagram.com/anzharnugraha26/?hl=id" target="_blank" class="instagram"><i
                        class="bx bxl-instagram"></i></a>
                <a href="https://github.com/anzharnugraha26" target="_blank" class="google-plus"><i
                        class="bx bxl-github"></i></a>
                <a href="https://www.linkedin.com/in/anzhar-ade-nugraha-764725155/" target="_blank" class="linkedin"><i
                        class="bx bxl-linkedin"></i></a>
            </div>
        </div>
    </section><!-- End Hero -->

    <main id="main">

        <!-- ======= About Section ======= -->
        <section id="about" class="about">
            <div class="container" data-aos="fade-up">
                <div class="section-title">
                    <h2>About Me</h2>
                </div>
                <div class="row">
                    <div class="col-lg-4">
                        <button class="toggle" style="display: none">Dark mode</button>
                        <div class="clock-container">
                            <div class="clock">
                                <div class="needle hour"></div>
                                <div class="needle minute"></div>
                                <div class="needle second"></div>
                                <div class="center-point"></div>
                            </div>

                            <div class="time"></div>
                            <div class="date"></div>
                        </div>
                    </div>
                    <div class="col-lg-8 pt-4 pt-lg-0 content mt-5">
                        {{-- <h3>Web Developer.</h3> --}}
                        <div class="font-anzhar">
                            <p class="font-anzhar">
                                <b>Halo !</b> Nama Saya Anzhar Ade Nugraha. Saya menikmalti proses pembuatan sebuah
                                program khususnya berbasis
                                Website. Ketertarikan saya pada pengembangan web di mulai pada tahun 2013 ketika saya
                                berkuliah di sebuah universitas swasta
                                berinisial BSI.
                            </p>
                            <p>Dan pada tahun 2019 saya bekerja di bidang pengembangan web. Saat itu saya memperdalam
                                framework PHP Laravel dan Codeigniter. dengan menggunakan Laravel
                                ternyata lebih di mudahkan dalam membuat fitur-fitur di dalam website, sebelumnya saya
                                hanya menguasai PHP Native dan Wordpress
                            </p>
                            <p>
                                Selain mempelajari aplikasi berbasis web, saya juga memperlajari aplikasi berbasis
                                mobile (andorid) dengan bahasa pemogramman Kotlin dan Java
                            </p>
                            <p>
                                Berikut adalah beberapa Bahasa Pemogramman dan Framework yang saya gunakan untuk
                                pembuatan aplikasi :
                            </p>
                        </div>

                    </div>
                </div>
                <div class="row mt-4 font-anzhar ">
                    <div class="col-lg-2">
                        <p>
                            <i class="bi bi-chevron-right"></i> <span>HTML</span>
                        </p>
                        <p>
                            <i class="bi bi-chevron-right"></i> <span>PHP</span>
                        </p>

                    </div>
                    <div class="col-lg-2">
                        <p>
                            <i class="bi bi-chevron-right"></i> <span>LARAVEL </span>
                        </p>
                        <p>
                            <i class="bi bi-chevron-right"></i> <span>CODEIGNITER </span>
                        </p>
                    </div>

                    <div class="col-lg-2">
                        <p>
                            <i class="bi bi-chevron-right"></i> <span>JAVASCRIPT</span>
                        </p>
                        <p>
                            <i class="bi bi-chevron-right"></i> <span>CSS</span>
                        </p>

                    </div>
                    <div class="col-lg-2">
                        <p>
                            <i class="bi bi-chevron-right"></i> <span>BOOTSTRAP </span>
                        </p>
                        <p>
                            <i class="bi bi-chevron-right"></i> <span>ANGULAR </span>
                        </p>
                    </div>
                    <div class="col-lg-2">
                        <p>
                            <i class="bi bi-chevron-right"></i> <span>JAVA</span>
                        </p>
                        <p>
                            <i class="bi bi-chevron-right"></i> <span>KOTLIN</span>
                        </p>

                    </div>
                    <div class="col-lg-2">
                        <p>
                            <i class="bi bi-chevron-right"></i> <span>FLUTER </span>
                        </p>
                    </div>
                </div>
            </div>
        </section>
        <!-- ======= Skills Section ======= -->

        <!-- ======= Resume Section ======= -->
        <section id="resume" class="resume">
            <div class="container" data-aos="fade-up">

                <div class="section-title">
                    <h2>Work experience and Education</h2>
                </div>
                <h3 class="resume-title">Professional Experience</h3>
                <div class="row">
                    <div class="col-md-3">
                        <div class=container__>
                            <div class=card>
                                <div class=image>
                                    <img href="#"
                                        src=https://i.pinimg.com/originals/a4/7b/a5/a47ba59b4a353e0928ef0551ca44f980.jpg>
                                </div>
                                <div class=content>
                                    <h3>Web developer</h3>
                                    <p>2022 - Present</p>
                                    <p> PT. Prawathiya Karsa Pradiptha</p>
                                    <a href="#">View Detail</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class=container__>
                            <div class=card>
                                <div class=image>
                                    <img href="#"
                                        src=https://i.pinimg.com/originals/a4/7b/a5/a47ba59b4a353e0928ef0551ca44f980.jpg>
                                </div>
                                <div class=content>
                                    <h4>PROGRAMMER , PHP DEVELOPER </h4>
                                    <p>2021 - 2022</p>
                                    <p><em>SWAKARYA INSAN MANDIRI </em></p>
                                    <a href="#">View Detail</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class=container__>
                            <div class=card>
                                <div class=image>
                                    <img href="#"
                                        src=https://i.pinimg.com/originals/a4/7b/a5/a47ba59b4a353e0928ef0551ca44f980.jpg>
                                </div>
                                <div class=content>
                                    <h3>Web developer</h3>
                                    <p>January 2021 - November 2021</p>
                                    <p> PT. Pesona Mahameru</p>
                                    <a href="#">View Detail</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class=container__>
                            <div class=card>
                                <div class=image>
                                    <img href="#"
                                        src=https://i.pinimg.com/originals/a4/7b/a5/a47ba59b4a353e0928ef0551ca44f980.jpg>
                                </div>
                                <div class=content>
                                    <h4>Programmer</h4>
                                    <p>2019 - 2020</p>
                                    <p><em>PT Komitras </em></p>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>



                <div class="row justify-content-center mt-5">
                    <h3 class="resume-title text-center">Education</h3>

                    <div class="col-md-3">
                        <div class=container__>
                            <div class=card>
                                <div class=image>
                                    <img href="#" src="{{ asset('element/image/lufy.png') }}">
                                </div>
                                <div class=content>
                                    <p>BINA SARANA INFORMATIKA (Manajemen Informatika)</p>
                                    <p>2013 - 2016</p>
                                    <p><em>Bogor, Jawa Barat, Indonesia</em></p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class=container__>
                            <div class=card>
                                <div class=image>
                                    <img href="#" src="{{ asset('element/image/lufy.png') }}">
                                </div>
                                <div class=content>
                                    <h4>SMK TARUNA TERPADU</h4>
                                    <h5>2009 - 2013</h5>
                                    <p><em>Bogor, Jawa Barat, Indonesia</em></p>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>

            </div>
        </section><!-- End Resume Section -->

        <!-- ======= Portfolio Section ======= -->
        <section id="portfolio" class="portfolio section-bg">
            <div class="container" data-aos="fade-up" data-aos-delay="200">

                <div class="section-title">
                    <h2>Some Things I’ve Built</h2>

                </div>



                <div class="row slider">
                    <div class="col-md-3">
                        <div class="card2">
                            <div class="card-header__">
                                <img src="{{ asset('element/portfolio/1.jpg') }}" alt="rover" />
                            </div>
                            <div class="card-body">
                                <span class="tag tag-teal">Website Company Profile</span>
                                <h4 class="mt-2">
                                    Tinggal Jualan
                                </h4>
                                <a href="#">View Detail</a>

                            </div>
                        </div>
                    </div>

                    <div class="col-md-3">
                        <div class="card2">
                            <div class="card-header__">
                                <img src="{{ asset('element/portfolio/2.jpg') }}" alt="rover" />
                            </div>
                            <div class="card-body ">
                                <span class="tag tag-teal">Website Company Profile</span>
                                <h4 class="mt-2">
                                    PT Pesona Mahameru
                                </h4>
                                <a href="#">View Detail</a>

                            </div>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="card2">
                            <div class="card-header__">
                                <img src="{{ asset('element/portfolio/1.png') }}" alt="rover" />
                            </div>
                            <div class="card-body ">
                                <span class="tag tag-purple">IT service information system</span>
                                <h4 class="mt-2">
                                    IT Helpdesk
                                </h4>
                                <a href="#">View Detail</a>

                            </div>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="card2">
                            <div class="card-header__">
                                <img src="{{ asset('element/portfolio/2.png') }}" alt="rover" />
                            </div>
                            <div class="card-body ">
                                <span class="tag tag-purple">Company information system</span>
                                <h4 class="mt-2">
                                    Gallery Sim
                                </h4>
                                <a href="#">View Detail</a>

                            </div>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="card2">
                            <div class="card-header__">
                                <img src="{{ asset('element/portfolio/3.png') }}" alt="rover" />
                            </div>
                            <div class="card-body ">
                                <span class="tag tag-purple">Job Portal Website </span>
                                <h4 class="mt-2">
                                    Gawe
                                </h4>
                                <a href="#">View Detail</a>

                            </div>
                        </div>
                    </div>
                </div>



            </div>
            <div class="row justify-content-center mt-5">
                <div class="col-md-2 ">
                    <a href="#" style="font-size: 20px">View All</a> 
                </div>
            </div>
        </section>


        <!-- End Testimonials Section -->

        <!-- ======= Contact Section ======= -->
        <section id="contact" class="contact">
            <div class="container" data-aos="fade-up">

                <div class="section-title">
                    <h2>Contact</h2>
                </div>

                <div class="row mt-1">

                    <div class="col-lg-4">
                        <div class="info">
                            <div class="address">
                                <i class="bi bi-geo-alt"></i>
                                <h4>Location:</h4>
                                <p>Bogor, Jawabarat Indonesia</p>
                            </div>

                            <div class="email">
                                <i class="bi bi-envelope"></i>
                                <h4>Email:</h4>
                                <p>senidi@anzhar.com</p>
                                <p>anzharnugraha50@gmail.com</p>
                            </div>

                            <div class="phone">
                                <i class="bi bi-phone"></i>
                                <h4>Call:</h4>
                                <p>+6281292549041</p>
                            </div>

                        </div>

                    </div>

                    <div class="col-lg-8 mt-5 mt-lg-0">

                        <form action="{{ url('contact') }}" method="post" role="form" class="">
                            @csrf
                            <div class="row">
                                <div class="col-md-6 form-group">
                                    <input type="text" name="nama" class="form-control" id="name"
                                        placeholder="Your Name" required>
                                </div>
                                <div class="col-md-6 form-group mt-3 mt-md-0">
                                    <input type="email" class="form-control" name="email" id="email"
                                        placeholder="Your Email" required>
                                </div>
                            </div>
                            <div class="form-group mt-3">
                                <input type="text" class="form-control" name="subject" id="subject"
                                    placeholder="Subject" required>
                            </div>
                            <div class="form-group mt-3">
                                <textarea class="form-control" name="pesan" rows="5" placeholder="Message" required></textarea>
                            </div>
                            <div class="form-group mt-3 ">
                                <div class="g-recaptcha" data-sitekey="6LcxpRUkAAAAALLBI75fRL5ACctTZLYJKmpm83uF">
                                </div>
                            </div>


                            <div class="text-center"><button type="submit" class="btn btn-primary btn-lg mt-5">Send
                                    Message</button></div>
                        </form>

                    </div>

                </div>

            </div>
        </section><!-- End Contact Section -->

    </main><!-- End #main -->

    <!-- ======= Footer ======= -->
    <footer id="footer">
        <div class="container">
            <h3>ANZHAR ADE NUGRAHA</h3>

            <div class="social-links">
                <a href="#" class="instagram"><i class="bx bxl-instagram"></i></a>

                <a href="#" class="linkedin"><i class="bx bxl-linkedin"></i></a>
                <a href="#" class="github"><i class="bx bxl-github"></i></a>
            </div>
            <div class="copyright">
                &copy; Copyright <strong><span><?php echo date('Y'); ?></span></strong>. All Rights Reserved
            </div>
        </div>
    </footer><!-- End Footer -->

    <div id="preloader"></div>
    <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i
            class="bi bi-arrow-up-short"></i></a>

    <a href="https://wa.me/6281292549041?text=Hallo Anzhar saya tau wa anda dari web anzhar.com" class="float"
        target="_blank">
        <img src="{{ asset('element/image/wa.png') }}" alt="" class="mt-2"></a>

    <!-- Vendor JS Files -->
    @include('element.js')

</body>

</html>
