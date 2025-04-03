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
    <link rel="stylesheet" href="./portadas-carreras/pcarrera<?php echo $_GET['id']; ?>.css">
    <!-- owl -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>
</head>

<body>

    <script src="./public/js/bootstrap.min.js"></script>
    <script src="./public/js/popper.min.js"></script>

    <style>
        .button5 {
            background-color: var(--color1);
            border: none;
            color: white;
            padding: 15px 32px;
            text-align: center;
            text-decoration: none;
            display: inline-block;
            font-size: 16px;
            transition: transform .3s ease-in-out;
            border-radius: 20px;
        }

        .button5:hover {
            background-color: var(--color1);
            transform: scale(1.06);
        }

        .lista {
            margin-top: 3rem;
            margin-bottom: 5rem;
        }

        .lista .card {
            transition: transform .3s ease-in-out;
        }

        .lista .card:hover {
            transform: scale(1.06);
        }

        .list-group .list-group-item:hover {
            background: var(--color2);
            /* color: #fff; */
        }

        .text {
            margin-top: 1rem;
            text-overflow: ellipsis;
            display: -webkit-box;
            -webkit-line-clamp: 4;
            -webkit-box-orient: vertical;
            overflow: hidden;
            text-align: justify;
            color: #555;
            font-size: 17px;
            line-height: 1.6;
        }

        .btn1 {
            background-color: var(--color1);
            padding: .8rem 1rem;
            font-weight: 600;
            border-radius: 0;
            width: 200px;
            text-align: center;
        }

        .btn1 a {
            color: #FFF;
        }

        .btn1:hover {
            background-color: var(--color2);
            color: var(--color2);
        }

        .btn1:hover a {
            color: #000;
        }

        strong {
            font-weight: bold;
        }

        #lema {
            /*   background: url('./public/img/galeria/capacitacion2.jpg'); */
            /* background-attachment: fixed; */
            background-size: 100%;
            background-position: center 30%;
            padding-top: 10rem;
            padding-bottom: 10rem;
            color: white;
            background-repeat: no-repeat;
            position: relative;
        }

        #lema::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: rgba(0, 0, 0, 0.5);
            /* Black filter with 50% opacity */
            z-index: 1;
        }

        #lema>* {
            position: relative;
            z-index: 2;
        }

        .sticky-col {
            position: sticky;
            top: 120px;
            align-self: flex-start;
        }

        @media (max-width: 750px) {
            .redes iframe {
                display: none;
            }
        }
    </style>

    <!-- header -->
    <?php include_once 'partials/header.php'; ?>


    <section class="container-fluid" id="lema">

        <div class="row justify-content-center">

            <div class="col-lg-9 text-center">

                <h2 class="mb-4" style="letter-spacing: 1px;">
                    <?php
                    switch ($_GET['id']) {
                        case '1':
                            echo 'ADMINISTRACIÓN DE EMPRESAS';
                            break;
                        case '2':
                            echo 'LOCUCIÓN RADIAL Y TELEVISIVA';
                            break;
                        case '3':
                            echo 'COMUNICACIÓN AUDIOVISUAL';
                            break;
                        case '4':
                            echo 'PERIODISMO RADIAL Y TELEVISIVO';
                            break;
                        default:
                            echo 'CARRERAS';
                            break;
                    }

                    ?>
                </h2>

            </div>
        </div>
    </section>


    <section class="container lista">
        <!-- <div>
            <ol class="breadcrumb bg-white pl-0">
                <li class="breadcrumb-item"><a href="index.php">Inicio</a></li>
                <li class="breadcrumb-item"><a href="#">Entrevista</a></li>
            </ol>
        </div> -->
        <div class="row justify-content-between mt-4" style="padding-top: 3rem; padding-bottom: 7rem;">
            <div class="col-md-8">
                <?php include_once './carreras/carrera' . $_GET['id'] . '.php' ?>
                <div class="col-md text-center pt-5">
                    <a href="./carreras.php"><button class="button5">Ver Más</button></a>
                </div>

            </div>

            <div class="col-md-4 my-2">
                <div class="mx-4 sticky-col">
                    <iframe src="https://www.facebook.com/plugins/page.php?href=https%3A%2F%2Fwww.facebook.com%2FISPinstituto%2F&tabs=timeline&width=340&height=500&small_header=false&adapt_container_width=true&hide_cover=false&show_facepile=false&appId=928526382184489" width="100%" height="650" style="border:none;overflow:hidden" scrolling="no" frameborder="0" allowfullscreen="true" allow="autoplay; clipboard-write; encrypted-media; picture-in-picture; web-share"></iframe>
                </div>
            </div>

        </div>
    </section>


    <!-- footer -->
    <?php include_once 'partials/footer.php'; ?>


    <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
    <script>
        AOS.init();
    </script>
    <script>
        addEventListener('DOMContentLoaded', () => {
            const contadores = document.querySelectorAll('.contador_cantidad')
            const velocidad = 10000000000

            const animarContadores = () => {
                for (const contador of contadores) {
                    const actualizar_contador = () => {
                        let cantidad_maxima = +contador.dataset.cantidadTotal,
                            valor_actual = +contador.innerText,
                            incremento = cantidad_maxima / velocidad

                        if (valor_actual < cantidad_maxima) {
                            contador.innerText = Math.ceil(valor_actual + incremento)
                            setTimeout(actualizar_contador, 70)
                        } else {
                            contador.innerText = cantidad_maxima
                        }
                    }
                    actualizar_contador()
                }
            }
            //IntersectionObserver
            const mostrarContadores = elementos => {
                elementos.forEach(elemento => {
                    if (elemento.isIntersecting) {
                        elemento.target.classList.add('animar')
                        elemento.target.classList.remove('ocultar')
                        setTimeout(animarContadores, 600)
                    }
                });
            }
            const observer = new IntersectionObserver(mostrarContadores, {
                threshold: 0.75 //0-1
            })

            const elementosHTML = document.querySelectorAll('.contador')
            elementosHTML.forEach(elementoHTML => {
                observer.observe(elementoHTML)
            })
        });
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js" integrity="sha512-bPs7Ae6pVvhOSiIcyUClR7/q2OAsRiovw4vAkX+zJbw3ShAeeqezq50RIIcIURq7Oa20rW2n2q+fyXBNcU9lrw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script>
        let owl = $('.owl-carousel');
        owl.owlCarousel({
            loop: false,
            nav: false,
            dots: false,
            margin: 20,
            responsive: {
                0: {
                    items: 3
                },
                600: {
                    items: 1
                },
                960: {
                    items: 4
                },
                1200: {
                    items: 8
                }
            }
        });
    </script>

    <!-- Swiper JS -->
    <script src="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.js"></script>

    <!-- Initialize Swiper -->
    <script>
        var swiper = new Swiper(".mySwiper", {
            slidesPerView: 1,
            spaceBetween: 100,
            autoplay: {
                delay: 2500,
                disableOnInteraction: false,
            },
            loop: true,
            pagination: {
                el: ".swiper-pagination",
                clickable: true,
            },
            breakpoints: {
                640: {
                    slidesPerView: 1,
                    // spaceBetween: 20,
                },
                768: {
                    slidesPerView: 2,
                    // spaceBetween: 40,
                },
                1024: {
                    slidesPerView: 3,
                    spaceBetween: 100,
                },
            },
        });
    </script>
</body>


</html>