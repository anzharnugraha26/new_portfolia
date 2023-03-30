<script src="{{ asset('element/front-master/assets/vendor/purecounter/purecounter.js') }}"></script>
<script src="{{ asset('element/front-master/assets/vendor/aos/aos.js') }}"></script>
<script src="{{ asset('element/front-master/assets/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
<script src="{{ asset('element/front-master/assets/vendor/glightbox/js/glightbox.min.js') }}"></script>
<script src="{{ asset('element/front-master/assets/vendor/isotope-layout/isotope.pkgd.min.js') }}"></script>
<script src="{{ asset('element/front-master/assets/vendor/swiper/swiper-bundle.min.js') }}"></script>
<script src="{{ asset('element/front-master/assets/vendor/typed.js/typed.min.js') }}"></script>
<script src="{{ asset('element/front-master/assets/vendor/waypoints/noframework.waypoints.js') }}"></script>
<script src="{{ asset('element/front-master/assets/vendor/php-email-form/validate.js') }}"></script>

<!-- Template Main JS File -->
<script src="{{ asset('element/front-master/assets/js/main.js') }}"></script>

<script src="{{ asset('element/cssjs/script.js') }}"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>

<script src="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
<script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<script>
    $(document).ready(function() {
        $('.slider').slick({
            autoplay: true,
            autoplaySpeed: 2500,
            infinite: true,
            slidesToShow: 4,
            slidesToScroll: 1,
            dots: false,
            prevArrow: false,
            nextArrow: false,
            responsive: [{
                    breakpoint: 1200,
                    settings: {
                        slidesToShow: 2,
                        slidesToScroll: 1,
                    },
                },
                {
                    breakpoint: 1008,
                    settings: {
                        slidesToShow: 1,
                        slidesToScroll: 1,
                    },
                },
                {
                    breakpoint: 800,
                    settings: {
                        slidesToShow: 1,
                        slidesToScroll: 1,
                    },
                },
            ],
            // centerMode: true,
            // variableWidth: true
        });
    });
</script>
@if (Session::has('banyak'))
    <script>
        Swal.fire({
            icon: 'error',
            title: 'Oops... pesan anda tidak terkirim',
            text: 'Anda terlalu sering menggunakan email yang sama',
            // footer: '<a href="">Why do I have this issue?</a>'
        })
    </script>
@endif
@if (Session::has('capca'))
    <script>
        Swal.fire({
            icon: 'error',
            title: 'Oops... pesan anda tidak terkirim',
            text: 'Anda belum mengisi capcta',
            // footer: '<a href="">Why do I have this issue?</a>'
        })
    </script>
@endif
@if (Session::has('sukses'))
    <script>
        Swal.fire(
            'Good job!',
            'Pesan anda terkirim !',
            'success'
        )
    </script>
@endif
