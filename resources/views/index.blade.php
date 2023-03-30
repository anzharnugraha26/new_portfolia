<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <meta name="description" content="">
    <meta name="author" content="TemplateMo">

    <title>Anzhar Ade Nugraha | Porfolio </title>

    <!-- CSS FILES -->

    <link href="{{ asset('element/tmp/css/bootstrap.min.css') }}" rel="stylesheet">

    <link href="{{ asset('element/tmp/css/bootstrap-icons.css') }}" rel="stylesheet">

    <link href="{{ asset('element/tmp/css/magnific-popup.css') }}" rel="stylesheet">

    <link href="{{ asset('element/tmp/css/templatemo-first-portfolio-style.css') }}" rel="stylesheet">

    <link rel="stylesheet" href="{{ asset('element/tmp/css/byme.css') }}">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@200;300&display=swap" rel="stylesheet">
    <style>
        body {
            font-family: 'Poppins', sans-serif;
        }

        p {
            color: black;
        }

        small {
            background: #535DA1;
            padding-left: 10px;
            padding-right: 10px;
            color: white;
            border-radius: 5px;
        }

        .floatwa {
            position: fixed;
            width: 60px;
            height: 60px;
            bottom: 90px;
            right: 30px;
            background-color: #25d366;
            color: #FFF;
            border-radius: 50px;
            text-align: center;
            font-size: 30px;
            box-shadow: 2px 2px 3px #999;
            z-index: 100;
        }


        .content2 {
            max-width: 600px;
            margin: 0 auto;
            padding: 0 20px;
        }

        .hero2 {
            position: relative;

            color: white;
            height: 100vh;
            display: flex;
            align-items: center;
            overflow: hidden;
        }

        .hero2 h2 {
            position: relative;
            z-index: 1;
            font-size: 4.5rem;
            margin: 0 0 10px;
            line-height: 1;
            color: rgba(255, 255, 255, 0.9);
        }

        .hero2 p {
            position: relative;
            z-index: 1;
            font-size: 1.1rem;
            color: rgba(255, 255, 255, 0.5);
            line-height: 1.4;
        }

        /* ========================= */

        .waves {
            position: absolute;
            bottom: 0;
            left: 0;
            right: 0;
            height: 200px;
            background-color: #14B789;
            box-shadow: inset 0 0 50px rgba(0, 0, 0, 0.5);
            transition: 500ms;
        }

        .waves::before,
        .waves::after {
            content: '';
            position: absolute;
            width: 300vw;
            height: 300vw;
            top: -65vw;
            left: 50%;
            transform: translate(-50%, -75%);
        }

        .waves::before {
            border-radius: 44%;
            background: #535DA1;
            animation: waves 8s linear infinite;
        }

        .waves::after {
            border-radius: 44%;
            background: #535DA1;
            animation: waves 15s linear infinite;
        }

        @keyframes waves {
            0% {
                transform: translate(-50%, -75%) rotate(0deg);
            }

            100% {
                transform: translate(-50%, -75%) rotate(360deg);
            }
        }
    </style>

    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0-beta2/css/all.min.css"
        integrity="sha512-YWzhKL2whUzgiheMoBFwW8CKV4qpHQAEuvilg9FAn5VJUDwKZZxkJNuGM4XkWuk94WCrrwslk8yWNGmY1EduTA=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <script src="https://kit.fontawesome.com/50c2a7d41c.js" crossorigin="anonymous"></script>

</head>

<body>

    <section class="preloader">
        <div class="spinner">
            <span class="spinner-rotate"></span>
        </div>
    </section>

    <nav class="navbar navbar-expand-lg">
        <div class="container">

            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>


            <div class="d-flex align-items-center d-lg-none">
                <a class="custom-btn btn" href="{{ asset('element/cv.pdf') }}" target="_blank">
                    View CV
                </a>
            </div>

            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-lg-5">
                    <li class="nav-item">
                        <a class="nav-link click-scroll" href="#section_1">Home</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link click-scroll" href="#section_2">About</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link click-scroll" href="#section_3">Professional Work</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link click-scroll" href="#section_4">Projects</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link click-scroll" href="#section_5">Contact</a>
                    </li>
                </ul>

                <div class="d-lg-flex align-items-center d-none ms-auto">

                    <a class="custom-btn btn custom-link" href="{{ url('downloadcv') }}">Download CV</a>
                </div>
            </div>

        </div>
    </nav>

    <main>

        <section class="hero2" id="section_1">
            <div class="content2">
                <h2>Hello friend!</h2>
                <p>I’m Anzhar Ade Nugraha ,I'm <span class="typed-text"></span><span class="cursor">&nbsp;</span></p>

            </div>
            <div class="waves"></div>
        </section>


        <section class="about section-padding" id="section_2">
            <div class="container">
                <div class="row">

                    <div class="col-lg-6 col-12">
                        <div class="about-thumb">
                            <div data-aos="zoom-in" data-aos-duration="500" data-aos-easing="ease-in-back">
                                <div class="section-title-wrap d-flex justify-content-end align-items-center mb-4"
                                    style="background: #535DA1;">
                                    <h2 class="text-white me-4 mb-0">My Story</h2>

                                    <img src="{{ asset('element/tmp/images/foto2.png') }}"
                                        class="avatar-image img-fluid" alt="">
                                </div>
                            </div>

                        </div>
                    </div>

                    <div class="col-lg-6 col-12 mt-5 mt-lg-0" data-aos="zoom-in" data-aos-duration="500"
                        data-aos-easing="ease-in-back">
                        <h3 class="pt-2 mb-3">a little bit about Anzhar</h3>

                        <p>Halo ! Nama Saya Anzhar Ade Nugraha. Saya menikmalti proses pembuatan sebuah program
                            khususnya berbasis Website. Ketertarikan saya pada pengembangan web di mulai pada tahun
                            2013 ketika saya berkuliah di sebuah universitas swasta </p>

                        <p>Dan pada tahun 2019 saya bekerja di bidang pengembangan web. Saat itu saya memperdalam
                            framework PHP Laravel dan Codeigniter.
                        </p>
                        <p>
                            Selain mempelajari aplikasi berbasis web, saya juga memperlajari aplikasi berbasis
                            mobile (andorid) dengan bahasa pemogramman Kotlin dan Java
                        </p>
                    </div>

                    <div class="col-md-12" data-aos="fade-right">
                        <p> Berikut adalah beberapa Bahasa Pemogramman dan Framework yang saya gunakan untuk pembuatan
                            aplikasi :
                        </p>
                        <p><small>PHP</small> <small>HTML</small> <small> LARAVEL</small>
                            <small> CODEIGNITER</small>
                            <small>JAVASCRIPT</small>
                            <small>CSS</small>
                            <small> BOOTSTRAP</small>
                            <small> ANGULAR</small>
                            <small> JAVA</small>
                            <small> KOTLIN</small>
                            <small> FLUTER</small>
                        </p>
                    </div>

                </div>
            </div>
        </section>

        <section class="featured section-padding">
            <div class="container">
                <div class="row">

                    <div class="col-lg-6 col-12" data-aos="fade-right">
                        <div class="profile-thumb">
                            <div class="profile-title">
                                <h4 class="mb-0">Information</h4>
                            </div>

                            <div class="profile-body">
                                <p>
                                    <span class="profile-small-title">Name</span>
                                    <span>Anzhar Ade Nugraha</span>
                                </p>

                                <p>
                                    <span class="profile-small-title">Birthday</span>
                                    <span>Aug 26, 1995</span>
                                </p>



                                <p>
                                    <span class="profile-small-title">Email</span>
                                    <span><a href="mailto:hello@josh.design">anzharnugraha50@gmail.com</a></span>
                                </p>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-6 col-12 mt-5 mt-lg-0" data-aos="fade-left">
                        <div class="about-thumb">
                            <div class="row">
                                <div class="col-lg-6 col-6 featured-border-bottom py-2">
                                    <strong class="featured-numbers">4+</strong>

                                    <p class="featured-text">Years of Experiences</p>
                                </div>



                                <div class="col-lg-6 col-6 pt-4">
                                    <strong class="featured-numbers">30</strong>

                                    <p class="featured-text">Project Finished</p>
                                </div>


                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </section>





        <section class="services section-padding" id="section_3">
            <div class="container">
                <div class="row">

                    <div class="col-lg-10 col-12 mx-auto">
                        <div class="section-title-wrap d-flex justify-content-center align-items-center mb-5"
                            data-aos="zoom-in">
                            <h2 class="text-white ms-4 mb-0">Companies I've had worked</h2>
                        </div>

                        <div class="row pt-lg-5">
                            <div class="col-lg-6 col-12" data-aos="fade-right">
                                <div class="services-thumb">
                                    <div class="d-flex flex-wrap align-items-center border-bottom mb-4 pb-3">
                                        <h3 class="mb-0">Prawathiya Karsa Pradiptha.</h3>

                                        <div class="services-price-wrap ms-auto">
                                            <p class="services-price-text mb-0">2022 - Sekarang</p>
                                            <div class="services-price-overlay"></div>
                                        </div>
                                    </div>

                                    <p>You may want to explore Too CSS for great collection of free HTML CSS templates.
                                    </p>

                                    <a href="#" class="custom-btn custom-border-btn btn mt-3">Discover More</a>


                                </div>
                            </div>

                            <div class="col-lg-6 col-12" data-aos="fade-left">
                                <div class="services-thumb services-thumb-up">
                                    <div class="d-flex flex-wrap align-items-center border-bottom mb-4 pb-3">
                                        <h3 class="mb-0">Swakarya Insan Mandiri.</h3>

                                        <div class="services-price-wrap ms-auto">
                                            <p class="services-price-text mb-0">2021 - 2022</p>
                                            <div class="services-price-overlay"></div>
                                        </div>
                                    </div>

                                    <p>You can explore more CSS templates on TemplateMo website by browsing through
                                        different tags.</p>

                                    <a href="#" class="custom-btn custom-border-btn btn mt-3">Discover More</a>


                                </div>
                            </div>

                            <div class="col-lg-6 col-12" data-aos="fade-right">
                                <div class="services-thumb">
                                    <div class="d-flex flex-wrap align-items-center border-bottom mb-4 pb-3">
                                        <h3 class="mb-0">Pesona Mahameru</h3>

                                        <div class="services-price-wrap ms-auto">
                                            <p class="services-price-text mb-0">2020 - 2021</p>
                                            <div class="services-price-overlay"></div>
                                        </div>
                                    </div>

                                    <p>If you need a customized ecommerce website for your business, feel free to
                                        discuss with me.</p>

                                    <a href="#" class="custom-btn custom-border-btn btn mt-3">Discover More</a>


                                </div>
                            </div>

                            <div class="col-lg-6 col-12" data-aos="fade-left">
                                <div class="services-thumb services-thumb-up">
                                    <div class="d-flex flex-wrap align-items-center border-bottom mb-4 pb-3">
                                        <h3 class="mb-0">Komitras</h3>

                                        <div class="services-price-wrap ms-auto">
                                            <p class="services-price-text mb-0">2019 - 2020</p>
                                            <div class="services-price-overlay"></div>
                                        </div>
                                    </div>

                                    <p>To list your website first on any search engine, we will work together. First
                                        Portfolio is one-page CSS Template for free download.</p>

                                    <a href="#" class="custom-btn custom-border-btn btn mt-3">Discover More</a>


                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>


        <section class="projects section-padding" id="section_4">
            <div class="container">
                <div class="row" id="table_data">

                    <div class="col-lg-8 col-md-8 col-12 ms-auto" data-aos="zoom-in">
                        <div class="section-title-wrap d-flex justify-content-center align-items-center mb-4">
                            <img src="{{ asset('element/tmp/images/white-desk-work-study-aesthetics.jpg') }}"
                                class="avatar-image img-fluid" alt="">

                            <h2 class="text-white ms-4 mb-0">Projects</h2>
                        </div>
                    </div>

                    <div class="clearfix"></div>

                    <?php $pr = DB::table('project')->paginate(3); ?>
                   
                    @foreach ($pr as $i)
                        <div class="col-lg-4 col-md-6 col-12">
                            <div class="projects-thumb">
                                <div class="projects-info">
                                    <small class="projects-tag text-white">{{ $i->jenis }}</small>

                                    <h3 class="projects-title">{{ $i->nama }}</h3>
                                </div>

                                <a href="{{ $i->url }}" target="_blank" class="">
                                    <img src="{{ asset('element/tmp/images/' . $i->image) }}"
                                        class="projects-image img-fluid" alt="">
                                </a>
                            </div>
                        </div>
                    @endforeach

                    <div class="row">
                        <div class="col-md-6">
                            {!! $pr->links() !!}
                        </div>
                    </div>





                    



                </div>
            </div>
        </section>

        <section class="contact section-padding" id="section_5">
            <div class="container">
                <div class="row">

                    <div class="col-lg-6 col-md-8 col-12">
                        <div class="section-title-wrap d-flex justify-content-center align-items-center mb-5"
                            data-aos="zoom-in">
                            <img src="{{ asset('element/tmp/images/aerial-view-man-using-computer-laptop-wooden-table.jpg') }}"
                                class="avatar-image img-fluid" alt="">

                            <h2 class="text-white ms-4 mb-0">Say Hi</h2>
                        </div>
                    </div>

                    <div class="clearfix"></div>

                    <div class="col-lg-3 col-md-6 col-12 pe-lg-0">
                        <div class="contact-info contact-info-border-start d-flex flex-column" data-aos="zoom-in">


                            <strong class="site-footer-title d-block mt-4 mb-3">Stay connected</strong>

                            <ul class="social-icon">
                                <li class="social-icon-item"><a href="https://twitter.com/AnzharNugraha"
                                        target="_blank" class="social-icon-link bi-twitter"></a></li>

                                <li class="social-icon-item"><a
                                        href="https://www.instagram.com/anzharnugraha26/?hl=id"
                                        class="social-icon-link bi-instagram" target="_blank"></a></li>

                                <li class="social-icon-item"><a
                                        href="https://www.linkedin.com/in/anzhar-ade-nugraha-764725155/"
                                        class="social-icon-link bi-linkedin" target="_blank"></a></li>

                                <li class="social-icon-item"><a
                                        href="https://www.linkedin.com/in/anzhar-ade-nugraha-764725155/"
                                        class="social-icon-link bi-github" target="_blank"></a></li>
                            </ul>

                            <strong class="site-footer-title d-block mt-4 mb-3">Start a project</strong>

                            <p class="mb-0">I’m available for freelance projects</p>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6 col-12 ps-lg-0" data-aos="zoom-in">
                        <div class="contact-info d-flex flex-column">
                            <strong class="site-footer-title d-block mb-3">About</strong>

                            <p class="mb-2">
                                Anzhar Ade Nugraha is a professional web developer. Feel free to get in touch with me.
                            </p>

                            <strong class="site-footer-title d-block mt-4 mb-3">Email</strong>

                            <p>
                                <a href="mailto:anzharnugraha50@gmail.com">
                                    anzharnugraha50@gmail.com
                                </a>
                            </p>

                        </div>
                    </div>

                    <div class="col-lg-6 col-12 mt-5 mt-lg-0" data-aos="zoom-in">
                        <form action="{{ url('contactus2') }}" method="post" class="custom-form contact-form"
                            role="form">
                            @csrf
                            <div class="row">
                                <div class="col-lg-6 col-md-6 col-12">
                                    <div class="form-floating">
                                        <input type="text" name="nama" id="name" class="form-control"
                                            placeholder="Name" required="">

                                        <label for="floatingInput">Name</label>
                                    </div>
                                </div>

                                <div class="col-lg-6 col-md-6 col-12">
                                    <div class="form-floating">
                                        <input type="email" name="email" id="email" pattern="[^ @]*@[^ @]*"
                                            class="form-control" placeholder="Email address" required="">

                                        <label for="floatingInput">Email address</label>
                                    </div>
                                </div>

                                <div class="col-lg-3 col-md-6 col-6">
                                    <div class="form-check form-check-inline">
                                        <input name="website" type="checkbox" class="form-check-input"
                                            id="inlineCheckbox1" value="1">

                                        <label class="form-check-label" for="inlineCheckbox1">
                                            <i class="bi-globe form-check-icon"></i>
                                            <span class="form-check-label-text">Websites</span>
                                        </label>
                                    </div>
                                </div>


                                <div class="col-lg-3 col-md-6 col-6">
                                    <div class="form-check form-check-inline me-0">
                                        <input name="seo" type="checkbox" class="form-check-input"
                                            id="inlineCheckbox4" value="1">

                                        <label class="form-check-label" for="inlineCheckbox4">
                                            <i class="bi-google form-check-icon"></i>
                                            <span class="form-check-label-text">Mobile </span>
                                        </label>
                                    </div>
                                </div>

                                <div class="col-lg-12 col-12">
                                    <div class="form-floating">
                                        <textarea class="form-control" id="message" name="pesan" placeholder="Tell me about the project"></textarea>

                                        <label for="floatingTextarea">Tell me about the project</label>
                                    </div>
                                </div>

                                <div class="col-lg-3 col-12 ms-auto">
                                    <button type="submit" class="form-control">Send</button>
                                </div>

                            </div>
                        </form>
                    </div>

                </div>
            </div>
            </div>
        </section>

    </main>

    <footer class="site-footer">
        <div class="container">
            <div class="row">

                <div class="col-lg-12 col-12">
                    <div class="copyright-text-wrap">
                        <p class="mb-0">
                            <span class="copyright-text">Copyright © {{ date('Y') }} <a href="#">Portfolio
                                    Anzhar Ade Nugraha</a>. All
                                rights reserved.</span>

                    </div>
                </div>


            </div>
        </div>
    </footer>

    <a href="https://wa.me/6281292549041?text=Hallo Anzhar saya tau wa anda dari web anzhar.com" class="floatwa"
        target="_blank">
        <i class="fa-brands fa-whatsapp  mt-2" style="font-size: 40px"></i>
    </a>


    <!-- JAVASCRIPT FILES -->
    <script src="{{ asset('element/tmp/js/jquery.min.js') }}"></script>
    <script src="{{ asset('element/tmp/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('element/tmp/js/jquery.sticky.js') }}"></script>
    <script src="{{ asset('element/tmp/js/click-scroll.js') }}"></script>
    <script src="{{ asset('element/tmp/js/jquery.magnific-popup.min.js') }}"></script>
    <script src="{{ asset('element/tmp/js/magnific-popup-options.js') }}"></script>
    <script src="{{ asset('element/tmp/js/custom.js') }}"></script>

    <script>
        AOS.init();
    </script>
    <script>
        const typedTextSpan = document.querySelector(".typed-text");
        const cursorSpan = document.querySelector(".cursor");

        const textArray = ["Programmer", "Web Developer", "Web Designer"];
        const typingDelay = 200;
        const erasingDelay = 100;
        const newTextDelay = 2000; // Delay between current and next text
        let textArrayIndex = 0;
        let charIndex = 0;

        function type() {
            if (charIndex < textArray[textArrayIndex].length) {
                if (!cursorSpan.classList.contains("typing")) cursorSpan.classList.add("typing");
                typedTextSpan.textContent += textArray[textArrayIndex].charAt(charIndex);
                charIndex++;
                setTimeout(type, typingDelay);
            } else {
                cursorSpan.classList.remove("typing");
                setTimeout(erase, newTextDelay);
            }
        }

        function erase() {
            if (charIndex > 0) {
                if (!cursorSpan.classList.contains("typing")) cursorSpan.classList.add("typing");
                typedTextSpan.textContent = textArray[textArrayIndex].substring(0, charIndex - 1);
                charIndex--;
                setTimeout(erase, erasingDelay);
            } else {
                cursorSpan.classList.remove("typing");
                textArrayIndex++;
                if (textArrayIndex >= textArray.length) textArrayIndex = 0;
                setTimeout(type, typingDelay + 1100);
            }
        }

        document.addEventListener("DOMContentLoaded", function() { // On DOM Load initiate the effect
            if (textArray.length) setTimeout(type, newTextDelay + 250);
        });


        function showPages(id) {


            var totalNumberOfPages = 5;
            for (var i = 1; i <= totalNumberOfPages; i++) {

                if (document.getElementById('page' + i)) {

                    document.getElementById('page' + i).style.display = 'none';
                }

            }
            if (document.getElementById('page' + id)) {

                document.getElementById('page' + id).style.display = 'block';
            }
        };
    </script>
    <script>
        $(document).ready(function() {

            $(document).on('click', '.pagination a', function(event) {
                event.preventDefault();
                var page = $(this).attr('href').split('page=')[1];
                fetch_data(page);
            });

            function fetch_data(page) {
                $.ajax({
                    url: "/pagination/fetch_data?page=" + page,
                    success: function(data) {
                        $('#table_data').html(data);
                    }
                });
            }

        });
    </script>

</body>

</html>
