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
            height: 80vh;
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
            <img src="./public/img/portadas/pi_nosotros.jpg" width="100%" height="600" >
        </div>

        <br><br><br>
 <section id="lema">
        <div class="container">
            <div class="row">
                <div class="col-lg">
                    <h2 class="text-center">SOMOS LOS MEJORES EN COMUNICACIÓN  AUDIOVISUAL, PERIODISMO, LOCUCIÓN Y CIENCIAS PUBLICITARIAS </h2>
                </div>
            </div>
        </div>
    </section> 

        <section class="container" id="presentacion">
            <div class="row">
                <div class="col">
                    <p>Somos una compañía de consultoría innovadora y tecnológica, nos especializamos en
                        colaborar con organizaciones de diversos sectores y dimensiones. A través de
                        soluciones avanzadas, impulsamos conjuntamente el desarrollo de una sociedad
                        más sólida y equitativa. Con un enfoque colaborativo y tecnología de vanguardia,
                        estamos comprometidos a abordar los desafíos actuales y construir un futuro más
                        prometedor. Descubre cómo nuestra experiencia y dedicación pueden ser el catalizador
                        para el crecimiento y la excelencia en tu organización.</p>
                </div>
            </div>
        </section>
        <br><br><br>
    
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
        var swiper = new Swiper(".mySwiper", {
            direction: "vertical",
            /*  pagination: {
                 el: ".swiper-pagination",
                 clickable: true,

             }, */
            autoplay: {
                delay: 2500,
                disableOnInteraction: false,
            },
        });
    </script>


    <!-- Script para carousel automatico -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js" integrity="sha512-bPs7Ae6pVvhOSiIcyUClR7/q2OAsRiovw4vAkX+zJbw3ShAeeqezq50RIIcIURq7Oa20rW2n2q+fyXBNcU9lrw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script>
        let owlone = $('#owl-one');
        let owltwo = $('#owl-two');

        owlone.owlCarousel({
            loop: true,
            margin: 50,
            nav: false,
            autoplay: true,
            autoplayTimeout: 2000,
            dots: false,
            responsive: {
                0: {
                    items: 1,
                },
                800: {
                    items: 2,
                },
                1000: {
                    items: 5,
                },
            },
        });

        owltwo.owlCarousel({
            loop: true,
            margin: 20,
            nav: false,
            autoplay: true,
            autoplayTimeout: 4000,
            dots: false,
            responsive: {
                0: {
                    items: 1,
                },
                800: {
                    items: 2,
                },
                1000: {
                    items: 3,
                },
            },
        });
    </script>
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