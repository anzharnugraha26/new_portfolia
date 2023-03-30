<link href="assets/img/favicon.png" rel="icon">
<link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">
<link rel="stylesheet" href="{{ asset('element/cssjs/style.css') }}">
<link href="{{ asset('element/front-master/assets/vendor/aos/aos.css') }}" rel="stylesheet">
<link href="{{ asset('element/front-master/assets/vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
<link href="{{ asset('element/front-master/assets/vendor/bootstrap-icons/bootstrap-icons.css') }}" rel="stylesheet">
<link href="{{ asset('element/front-master/assets/vendor/boxicons/css/boxicons.min.css') }}" rel="stylesheet">
<link href="{{ asset('element/front-master/assets/vendor/glightbox/css/glightbox.min.css') }}" rel="stylesheet">
<link href="{{ asset('element/front-master/assets/vendor/swiper/swiper-bundle.min.css') }}" rel="stylesheet">
<link href="{{ asset('element/front-master/assets/css/style.css') }}" rel="stylesheet">

<style>
    .toggle {
        cursor: pointer;
        background-color: var(--primary-color);
        color: var(--secondary-color);
        border: 0;
        border-radius: 4px;
        padding: 8px 12px;
        position: absolute;
        top: 100px;
    }

    .toggle:focus {
        outline: none;
    }

    .card {
        border-radius: 20px;
    }

    .container__ {
        /* position: relative; */
        width: 1100px;
        display: flex;

        flex-warp: warp;
        padding: 30px;
    }

    .container__ .card {
        position: relative;
        max-width: 300px;
        height: 215px;
        background-color: #fff;
        margin: 30px 10px;
        padding: 20px 15px;

        display: flex;
        flex-direction: column;
        box-shadow: 0 5px 20px rgba(0, 0, 0, 0.5);
        transition: 0.3s ease-in-out;
        border-radius: 15px;
    }

    .container__ .card:hover {
        height: 320px;
    }


    .container__ .card .image {
        position: relative;
        width: 260px;
        height: 260px;

        top: -40%;
        left: 8px;
        box-shadow: 0 5px 20px rgba(0, 0, 0, 0.2);
        z-index: 1;
    }

    .container__ .card .image img {
        max-width: 100%;
        border-radius: 15px;
    }

    .container__ .card .content {
        position: relative;
        top: -140px;
        padding: 10px 15px;
        color: #111;
        text-align: center;

        visibility: hidden;
        opacity: 0;
        transition: 0.3s ease-in-out;

    }

    .container__ .card:hover .content {
        margin-top: 30px;
        visibility: visible;
        opacity: 1;
        transition-delay: 0.2s;

    }
</style>
<style>
    @import url("https://fonts.googleapis.com/css2?family=Roboto&display=swap");



    .container___ {
        display: flex;
        width: 1040px;
        justify-content: space-evenly;
        flex-wrap: wrap;
    }

    .card2 {
        margin: 10px;
        background-color: #fff;
        border-radius: 10px;
        box-shadow: 0 2px 20px rgba(0, 0, 0, 0.2);
        overflow: hidden;
        width: 300px;
    }

    .card-header__ img {
        width: 100%;
        height: 200px;
        object-fit: cover;
    }

    .card-body {
        display: flex;
        flex-direction: column;
        justify-content: center;
        align-items: flex-start;
        padding: 20px;
        min-height: 250px;
    }

    .tag {
        background: #cccccc;
        border-radius: 50px;
        font-size: 12px;
        margin: 0;
        color: #fff;
        padding: 2px 10px;
        text-transform: uppercase;
        cursor: pointer;
    }

    .tag-teal {
        background-color: #47bcd4;
    }

    .tag-purple {
        background-color: #5e76bf;
    }

    .tag-pink {
        background-color: #cd5b9f;
    }

    .card-body p {
        font-size: 13px;
        margin: 0 0 40px;
    }

    .user {
        display: flex;
        margin-top: auto;
    }

    .user img {
        border-radius: 50%;
        width: 40px;
        height: 40px;
        margin-right: 10px;
    }

    .user-info h5 {
        margin: 0;
    }

    .user-info small {
        color: #545d7a;
    }
</style>
<link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css" />
<style>
    .slick-arrow:before {
        color: #000 !important;
    }

    .float {
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
</style>
<script src='https://www.google.com/recaptcha/api.js'></script>
