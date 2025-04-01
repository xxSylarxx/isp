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
    <script async src="./assets/js/popper.min.js"></script>
    <script src="./assets/js/bootstrap.min.js"></script>


    <?php include_once 'partials/header.php'; ?>

    <script>
        // adaptar altura de cabecera
        var height = document.getElementById('header').clientHeight;
        document.getElementById('header-top').style.marginTop = height + "px";
    </script>
    <!-- ventana emergente admin -->

    <style>
        #lema{
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

        #valores {
            margin: 4rem 0;
            /*   background-color: var(--color7); */
            padding: 5rem 0;
        }



        .card {
            border-radius: 10px;
            padding: 1rem;
            position: relative;
        }

        .p-card {
            position: absolute;
            bottom: 8%;
            /*  transform: translate(-50%, -50%); */
            left: 0%;
            width: 100%;
            padding: 2rem;
            opacity: 0;
        }

        .p-card p {
            color: var(--color5);
            font-size: 1rem;
            text-align: justify;
        }

        .content-card {
            opacity: 1;
        }

        .content-card:hover img {
            opacity: 0;
            transition: all 0.5s ease-in-out;
        }

        .content-card:hover .card-body {
            opacity: 0;
            transition: all .6s ease-in-out;
        }

        .content-card:hover .p-card {
            opacity: 1;
            transform: translateY(-5px);
            transition: all .6s ease-in-out;
        }


        /* Estilos para carusel */

        .owl-nav {
            display: flex;
            justify-content: space-between;
            position: absolute;
            top: 36%;
            width: 100%;
            transform: translateY(-50%);
            pointer-events: none;
            /* Evita que bloqueen la interacción con las imágenes */
        }

        /* Estilizar los botones */
        .owl-prev,
        .owl-next {
            background: var(--color1) !important;
            color: white !important;
            border-radius: 50% !important;
            width: 60px;
            height: 60px;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 20px;
            cursor: pointer;
            pointer-events: all;
            /* Permite la interacción con los botones */
            transition: background 0.3s;
        }

        .owl-prev:hover,
        .owl-next:hover {
            background: var(--color1) !important;
        }

        /* Posicionar los botones */
        .owl-prev {
            position: absolute;
            left: -8px;
        }

        .owl-next {
            position: absolute;
            right: -20px;
        }

        .owl-carousel .owl-item img {

            width: 50% !important;
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

     
        <section id="lema">
            <div class="container">
                <div class="row">
                    <div class="col-lg">
                        <h2 class="text-center">SOMOS LOS MEJORES EN COMUNICACIÓN AUDIOVISUAL, PERIODISMO, LOCUCIÓN Y CIENCIAS PUBLICITARIAS </h2>
                    </div>
                </div>
            </div>
        </section>

        <section id="mision-vision" style="padding-top: 6rem;">
            <div class="container-fluid" style="padding-left: 5%;padding-right: 5%;">
                <div class="row">
                    <div class="col-lg-6">
                        <div class="mx-4  h-100" style="background: url('./public/img/web/bg-mision-vision.jpg') no-repeat center center; background-size: cover;position:relative;border-radius:20px;">
                            <img src="./public/img/web/mision-p.png" alt="" style="position: absolute;width:45%;bottom:0%;left:-4%;object-fit: cover;">
                            <div class="row d-flex justify-content-center">
                                <div class="col-lg-5 ">

                                </div>
                                <div class="col-lg-7 h-100">
                                    <div style="padding:50px 50px 50px 0px;">
                                        <h2 class="text-center" style="color: var(--color1);">Misión</h2>
                                        <p style="text-align: justify;padding-top:2rem;color:var(--color5);">El Instituto Sistemas Perú se dedica a proporcionar una educación integral de alta calidad que fomente el desarrollo académico, personal y social de nuestros estudiantes. Nos comprometemos a crear un ambiente inclusivo y estimulante que promueva el pensamiento crítico, la creatividad y el respeto por la diversidad. A través de programas innovadores y un equipo docente altamente capacitado, buscamos preparar a nuestros estudiantes para enfrentar los desafíos del mundo actual y contribuir positivamente a la sociedad.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="mx-4  h-100" style="background: url('./public/img/web/bg-mision-vision.jpg') no-repeat center center; background-size: cover;position:relative;border-radius:20px;">
                            <img src="./public/img/web/vision-p.png" alt="" style="position: absolute;width:45%;bottom:0%;left:-4%;object-fit: cover;">
                            <div class="row">
                                <div class="col-lg-5 ">

                                </div>
                                <div class="col-lg-7 h-100">
                                    <div style="padding:50px 50px 50px 0px;">
                                        <h2 class="text-center" style="color: var(--color1);">Visión</h2>
                                        <p style="text-align: justify;padding-top:2rem;color:var(--color5);">Ser un referente en educación de excelencia, reconocido por nuestra capacidad de formar líderes comprometidos, críticos y creativos que transformen su entorno. Aspiramos a ser un instituto que inspire a nuestros estudiantes a alcanzar su máximo potencial, promoviendo valores de responsabilidad, ética y solidaridad, y que se adapte a las necesidades cambiantes de la sociedad y el mercado laboral del futuro.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>



                </div>
            </div>

        </section>
        <section id="valores">
            <div class="container-fluid" style="padding-left: 5%;padding-right:5%;">
                <div class="row">
                    <div class="col-lg-3 my-auto">
                        <h3>Nuestros Valores</h3>
                        <p>Pilares de excelencia y compromiso para una educación integral.</p>
                    </div>
                    <div class="col-lg-9">
                        <div class=" row d-flex justify-content-center slider-card owl-carousel owl-theme">
                            <div class="div-slider-card px-3 my-3 aos-init aos-animate" data-aos="fade-up">
                                <div class="card shadow-sm h-100" style="background-color:#4F75FF;">
                                    <div class="content-card">
                                        <center><img class="p-3" src="./public/img/icons/responsabilidad.png"></center>
                                        <div class="card-body">
                                            <h4 class="fw-bold text-center" style="color:var(--color5);">Responsabilidad</h4>
                                        </div>
                                        <div class="p-card">
                                            <p>Fomentamos la toma de decisiones conscientes y el reconocimiento de las consecuencias de nuestras acciones. Promovemos un sentido de responsabilidad hacia uno mismo, los demás y la comunidad.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="div-slider-card px-3 my-3 aos-init aos-animate" data-aos="fade-up">
                                <div class="card shadow-sm h-100" style="background-color:var(--color6);">
                                    <div class="content-card">
                                        <center><img class="p-3" src="./public/img/icons/respeto.png"></center>
                                        <div class="card-body">
                                            <h4 class="fw-bold text-center" style="color:var(--color1);">Respeto</h4>
                                        </div>
                                        <div class="p-card">
                                            <p style="color:var(--color1);">Fomentamos un ambiente donde se valora la diversidad y se respeta a cada individuo. Creemos en la importancia de escuchar y valorar las opiniones y experiencias de los demás.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="div-slider-card px-3 my-3 aos-init aos-animate" data-aos="fade-up">
                                <div class="card shadow-sm h-100" style="background-color:#4F75FF;">
                                    <div class="content-card">
                                        <center><img class="p-3" src="./public/img/icons/colaboracion.png"></center>
                                        <div class="card-body">
                                            <h4 class="fw-bold text-center" style="color:var(--color5);">Colaboración</h4>

                                        </div>
                                        <div class="p-card">
                                            <p>Fomentamos el trabajo en equipo y la cooperación entre estudiantes, docentes y la comunidad. Creemos que el aprendizaje se enriquece a través de la interacción y el intercambio de ideas.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="div-slider-card px-3 my-3 aos-init aos-animate" data-aos="fade-up">
                                <div class="card shadow-sm h-100" style="background-color:var(--color7);">
                                    <div class="content-card">
                                        <center><img class="p-3" src="./public/img/icons/compromiso.png"></center>
                                        <div class="card-body">
                                            <h4 class="fw-bold text-center" style="color:var(--color1);">Compromiso</h4>
                                        </div>
                                        <div class="p-card">
                                            <p style="color:var(--color1);">Nos dedicamos a la formación integral de nuestros estudiantes y al desarrollo de una comunidad educativa activa y participativa. Valoramos la responsabilidad y el esfuerzo en la consecución de nuestros objetivos.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="div-slider-card px-3 my-3 aos-init aos-animate" data-aos="fade-up">
                                <div class="card shadow-sm h-100" style="background-color:var(--color6);">
                                    <div class="content-card">
                                        <center><img class="p-3" src="./public/img/icons/innovacion.png"></center>
                                        <div class="card-body">
                                            <h4 class="fw-bold text-center" style="color:var(--color1);">Innovación</h4>
                                        </div>
                                        <div class="p-card">
                                            <p style="color:var(--color1);">Valoramos la creatividad y la búsqueda de nuevas ideas y enfoques en la enseñanza y el aprendizaje. Fomentamos un ambiente que estimula la curiosidad y la experimentación.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="div-slider-card px-3 my-3 aos-init aos-animate" data-aos="fade-up">
                                <div class="card shadow-sm h-100" style="background-color:#4F75FF;">
                                    <div class="content-card">
                                        <center><img class="p-3" src="./public/img/icons/solidaridad.png"></center>
                                        <div class="card-body">
                                            <h4 class="fw-bold text-center" style="color:var(--color5);">Solidaridad</h4>
                                        </div>
                                        <div class="p-card">
                                            <p>Promovemos el apoyo mutuo y la colaboración entre todos los miembros de la comunidad educativa. Fomentamos la empatía y el compromiso con el bienestar de los demás.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="div-slider-card px-3 my-3 aos-init aos-animate" data-aos="fade-up">
                                <div class="card shadow-sm h-100" style="background-color:var(--color7);">
                                    <div class="content-card">
                                        <center><img class="p-3" src="./public/img/icons/excelencia.png"></center>
                                        <div class="card-body">
                                            <h4 class="fw-bold text-center" style="color:var(--color1);">Excelencia</h4>
                                        </div>
                                        <div class="p-card">
                                            <p style="color:var(--color1);">Nos comprometemos a alcanzar los más altos estándares en la educación y en todas nuestras actividades. Fomentamos la búsqueda constante de la mejora y la superación personal y académica. </p>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </section>
        <br><br><br>
        <br>



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
            $(".slider-card").owlCarousel({
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
    <script src="./assets/js/hubslider.min.js"></script>
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