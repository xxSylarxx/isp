<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="El Instituto Sistemas Perú se dedica a proporcionar una educación integral de alta calidad que fomente el desarrollo académico, personal y social de nuestros estudiantes.">
    <title>ISP - Instituto</title>
    <link rel="shortcut icon" href="./public/img/icons/escudo.png" type="image/png">
    <!--     <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css"> -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css">
    <link rel="stylesheet" href="./public/css/animate.min.css">
    <link rel="stylesheet" href="./public/css/bootstrap.min.css">
    <link rel="stylesheet" href="./public/css/web.css">
    <!-- owl -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>
</head>


<body>

    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/swiper/swiper-bundle.min.js"></script>
    <script async src="./public/js/popper.min.js"></script>
    <script src="./public/js/bootstrap.min.js"></script>


    <?php include_once 'partials/header.php'; ?>

    <script>
        // adaptar altura de cabecera
        var height = document.getElementById('header').clientHeight;
        document.getElementById('header-top').style.marginTop = height + "px";
    </script>
    <!-- ventana emergente admin -->

    <style>
        #lema {
            padding-top: 7rem;
            padding-bottom: 2rem;
        }

        .subcontainer {
            background: rgb(0 0 0 / 10%);
            position: absolute;
            /* left: 10%; */
            padding-left: 10%;
            padding-bottom: 1%;
            left: 0;
            right: 0;
            display: flex;
            justify-content: start;
            align-items: flex-end;
            height: 100%;
        }

        .portada img {
            width: 100%;
            height: auto;
            object-fit: cover;
            /*   object-fit: cover;
            filter: brightness(50%); 
            object-position: top;*/
        }

        .portada .titleA {
            margin-bottom: 1.5rem;
        }

        .portada a {
            color: #fff;
        }

        .portada h1 {
            color: #fff;
        }

        #noticias {
            padding-top: 5rem;
            padding-bottom: 9rem;
        }

        #noticias h2 {
            font-size: 2.5rem !important;
            text-align: center;
            padding-bottom: 2.5rem;
        }

        #noticias .card .news {
            position: absolute;
            top: 20px;
            left: 16px;
            border-radius: 20px;
            padding: 4px 12px;
            background-color: var(--color1);
            color: white;
            font-size: 14px;
            font-weight: bold;
            transform: translateY(-5%);

        }

        #noticias div.card {
            border-radius: 10px;
            transition: .3s;


        }

        #noticias div.card:hover {
            transform: scale(1.06);
        }

        #noticias .card .detalle {

            text-overflow: ellipsis;

            display: -webkit-box;

            -webkit-line-clamp: 2;

            -webkit-box-orient: vertical;

            overflow: hidden;

            text-align: justify;

            font-size: 17px;

            color: #747474;

            line-height: 1.6;

        }

        #noticias img {
            border-top-left-radius: 10px;
            border-top-right-radius: 10px;
            object-fit: cover;
            object-position: top;
        }

        #noticias .text-info {
            background: transparent;
            font-size: 17px;
        }


        @media screen and (max-width: 500px) {


            .portada img {
                height: 30vh;
            }
        }
    </style>





    <main>
        <div class="container-fluid px-0 portada position-relative">
            <!--  <div class="subcontainer">
                <div class="col-lg-6 d-flex flex-column ">

                    <h3 class="ml6" style="z-index:98;color:white;">
                        <span class="text-wrapper">
                            <span class="letters">Nosotros</span>
                        </span>
                    </h3>
                    <h2 style="color:white;z-index:99;font-size: 2rem;"> Consultora innovadora y Tecnológica.</h2>
                </div>

            </div>
 -->
            <img src="./public/img/portadas/pi_nosotros.jpg" width="100%" height="600">
        </div>

        <section id="noticias">
            <div class="container">
                <div class="row">
                    <div class="col text-start">
                        <h2>Noticias</h2>
                    </div>
                </div>
            </div>
            <div class="container-fluid">
                <div class="row" style="padding-left:8%;padding-right:8%;">
                    <div class="col-md-4 px-3 my-3">
                        <a href="view.php?id=1">
                            <div class="card shadow-sm h-100" style="background: rgb(248, 248, 248);">
                                <span class="news">Noticias</span>
                                <img src="./public/img/galeria/noticia1.jpg" width="100%" height="300">

                                <div class="card-body">

                                    <div class="row ">
                                        <div class="">
                                            <i class="fas fa-calendar-alt" aria-hidden="true"></i>
                                            <span class="ms-2">01-04-2025</span>
                                        </div>
                                        <div class="pt-3">
                                            <h5 class="fw-bold text-uppercase" style="font-size: 18px;color:var(--color9);">COMUNICADO</h5>
                                        </div>

                                    </div>

                                    <div class="detalle">
                                        Comunicado importante del Instituto Sistemas Perú, sobre el proceso de titulación
                                    </div>

                                </div>

                                <div class="card-footer text-info d-flex justify-content-center align-items-center my-auto">

                                    <a href="view.php?id=1">Ver más&nbsp;&nbsp;&nbsp;<i class="fas fa-external-link-alt"></i></a>
                                </div>

                            </div>
                        </a>
                    </div>
                    <div class="col-md-4 px-3 my-3">
                        <a href="view.php?id=2">
                            <div class="card shadow-sm h-100" style="background: rgb(248, 248, 248);">
                                <span class="news">Noticias</span>
                                <img src="./public/img/galeria/noticia2.jpg" width="100%" height="300">

                                <div class="card-body">

                                    <div class="row ">
                                        <div class="">
                                            <i class="fas fa-calendar-alt" aria-hidden="true"></i>
                                            <span class="ms-2">01-04-2025</span>
                                        </div>
                                        <div class="pt-3">
                                            <h5 class="fw-bold text-uppercase" style="font-size: 18px;color:var(--color9);">CONVENIO CON LA RED DE PARÁMEDICOS DEL PERÚ </h5>
                                        </div>

                                    </div>

                                    <div class="detalle">
                                    Se podrá abrir capacitaciones paramédicas en cada Distrito de Lima, Brindando Educación y también brindando ayudas para desastres, incendios, etc. 
                                    </div>

                                </div>

                                <div class="card-footer text-info d-flex justify-content-center align-items-center my-auto">

                                    <a href="view.php?id=2">Ver más&nbsp;&nbsp;&nbsp;<i class="fas fa-external-link-alt"></i></a>
                                </div>

                            </div>
                        </a>
                    </div>
                    <div class="col-md-4 px-3 my-3">
                        <a href="view.php?id=3">
                            <div class="card shadow-sm h-100" style="background: rgb(248, 248, 248);">
                                <span class="news">Noticias</span>
                                <img src="./public/img/galeria/noticia3.jpg" width="100%" height="300">

                                <div class="card-body">

                                    <div class="row ">
                                        <div class="">
                                            <i class="fas fa-calendar-alt" aria-hidden="true"></i>
                                            <span class="ms-2">01-04-2025</span>
                                        </div>
                                        <div class="pt-3">
                                            <h5 class="fw-bold text-uppercase" style="font-size: 18px;color:var(--color9);">TALLER DE PODCAST</h5>
                                        </div>

                                    </div>

                                    <div class="detalle">
                                    Llegó nuestro Taller de Podcast para todos nuestra familia de comunicaciones.
                                    Inscripciones  abiertas !!!!
                                    </div>

                                </div>

                                <div class="card-footer text-info d-flex justify-content-center align-items-center my-auto">

                                    <a href="view.php?id=3">Ver más&nbsp;&nbsp;&nbsp;<i class="fas fa-external-link-alt"></i></a>
                                </div>

                            </div>
                        </a>
                    </div>

                </div>
            </div>
        </section>


        <br><br><br>
        <br> <br>

    </main>
    <?php include_once 'partials/footer.php'; ?>
    <script>
        function landingnext() {
            // Reemplaza 'URL_DE_LA_OTRA_LANDING' con la URL de la landing page a la que deseas redirigir.
            window.location.href = './contenido.php';
        }

        function landingprev() {
            // Reemplaza 'URL_DE_LA_OTRA_LANDING' con la URL de la landing page a la que deseas redirigir.
            window.location.href = './consultoria.php';
        }
    </script>
    <script>
        const enviarCorreo = (e) => {
            e.preventDefault();
            let form = new FormData(document.getElementById("form-contacto"));
            fetch('/admin/email/contacto', {
                method: "POST",
                body: form
            }).then(function(res) {
                return res.text();
            }).then(function(res) {
                alert(res);
                e.target.reset();
            });
        };
    </script>
    <script>
        $(document).ready(function() {
            $(".cursos_content_slider").owlCarousel({
                loop: true,
                margin: 10,
                nav: true,
                dots: false,
                autoplay: true,
                autoplayTimeout: 7000,
                responsive: {
                    0: {
                        items: 1
                    },
                    600: {
                        items: 2
                    },
                    1000: {
                        items: 3
                    }
                },
                navText: ["&#10094;", "&#10095;"] // Flechas personalizadas (← y →)
            });
        });
    </script>


    <!-- Script para carousel automatico -->
    <!--     <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js" integrity="sha512-bPs7Ae6pVvhOSiIcyUClR7/q2OAsRiovw4vAkX+zJbw3ShAeeqezq50RIIcIURq7Oa20rW2n2q+fyXBNcU9lrw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
   -->
    <script src="./public/js/hubslider.min.js"></script>
    <script>
        $('.hub-slider-slides ul').hubSlider({
            selector: $('li'),
            button: {
                next: $('.hub-slider-arrow_next'),
                prev: $('.hub-slider-arrow_prev')
            },
            transition: '0.9s',
            startOffset: 30,
            auto: true,
            time: 3, // secondly
        });
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/animejs/2.0.2/anime.min.js"></script>

    <script>
        // Wrap every letter in a span
        var textWrapper = document.querySelector('.ml6 .letters');
        textWrapper.innerHTML = textWrapper.textContent.replace(/\S/g, "<span class='letter'>$&</span>");

        anime.timeline({
                loop: true
            })
            .add({
                targets: '.ml6 .letter',
                translateY: ["1.2em", 0],
                translateZ: 0,
                duration: 1200,
                delay: (el, i) => 50 * i
            }).add({
                targets: '.ml6',
                opacity: 0,
                duration: 1000,
                easing: "easeOutExpo",
                delay: 1000
            });
    </script>
    <script>
        AOS.init();
    </script>

</body>

</html>