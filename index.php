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

    <script src="./public/js/bootstrap.min.js"></script>

    <?php include_once './partials/header.php'; ?>

    <style>
        /* estilos del banner dinámico */
        #carouselBanner div.carousel-item img {
            height: calc(100vh - 90px);
        }

        div.content-banner .frame-responsive {
            position: relative;
            height: 0;
            overflow: hidden;
            padding-bottom: 56.2%;
            margin-bottom: 20px;
        }

        div.content-banner .frame-responsive iframe {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: calc(100vh - 90px);
        }

        div.content-banner video {
            width: 100%;
            height: calc(100vh - 90px);
        }

        /*  Estilos de Somos */
        #somos h3 {
            font-size: 2rem;
        }

        /* estilos de publicaciones */
        #publications div.card {
            border: none;
            box-shadow: 0 4px 16px rgb(0 0 0 / 10%);
            transition: transform .3s ease-in-out;
            border-bottom: 2px solid transparent;
            background-color: white;
        }

        #publications div.card:hover {
            transform: scale(1.04);
            border-bottom: 2px solid var(--color4);
        }

        #publications p.date {
            color: var(--color3);
            font-size: 14.5px;
            margin-bottom: 8px;
        }

        #publications h5.titulo {
            font-weight: bold;
            max-height: 75px;
            overflow: hidden;
            text-overflow: ellipsis;
            display: -webkit-box;
            -webkit-line-clamp: 3;
            -webkit-box-orient: vertical;
            color: var(--color2);
            line-height: 1.4;
            font-size: 16px;
        }

        #publications p.detalle {
            text-align: justify;
            font-size: 14px;
            line-height: 1.7;
            margin-bottom: 0px;
            color: rgb(100, 100, 100);
        }

        #somos .img-somos img {
            border-radius: 500px;
            width: 100%;
            object-fit: cover;
        }
        .titulo-border {
            width: 180px!important;
            padding: .4rem!important;
            background-color: var(--color6)!important;
            display: flex!important;
            align-items: center!important;
            justify-content: center!important;
            margin-bottom: 20px!important;
            border-radius: 20px!important;
            color: var(--color1)!important;
        }
        .titulo-border span{
            text-align: start;
            display: block;
        }

        .content-vector {
            width: 30%;
        }

     
        .img-somos-logo {
            position: relative;
            bottom: 10%;
            left: 10%;
        }

        #carreras {
            padding-top: 1rem;
            padding-bottom: 9rem;
            padding-left: 10%;
            padding-right: 10%;
        }

        .content-carrera-curso {
            background-color: var(--color2);
            border-radius: 15px;
            position: relative;
            height: 490px;
            overflow: hidden;
            margin-left: 10px;
            margin-right: 15px;
        }

        .ccarrera-curso-img img {
            border-radius: 15px;
            width: 100%;
        }

        .ccarrera-curso-cuerpo {
            background-color: var(--color2);
            border-radius: 15px;
            position: absolute;
            bottom: 4%;
            width: 100%;
            padding: 20px;
            /*  transition: all 0.6s ease-in-out; */
        }

        /* Párrafo con altura limitada inicialmente */
        .ccarrera-curso-cuerpo p {
            text-align: justify;
            color: var(--color5);
            max-height: 70px;
            overflow: hidden;
            transition: .2s ease-in;
        }

        /* Botón oculto inicialmente */
        .ccarrera-curso-cuerpo .btn {
            position: absolute;
            transform: translateY(50px);
            transition: .2s ease-in;


        }

        /* Efecto al pasar el mouse */
        .ccarrera-curso-cuerpo:hover p {

            max-height: 190px;
            transition: max-height .5s ease-out;

        }

        .ccarrera-curso-cuerpo:hover .btn {

            transform: translateY(-20px);
            transition: .5s ease-out;

        }

        /* Estilos de Slider cursos */
        /* Ocultar los botones predeterminados */
        .owl-nav {
            display: flex;
            justify-content: space-between;
            position: absolute;
            top: 40%;
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
            border-radius: 10px !important;
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
            background: var(--color2) !important;
        }

        /* Posicionar los botones */
        .owl-prev {
            position: absolute;
            left: -50px;
        }

        .owl-next {
            position: absolute;
            right: -70px;
        }

        #cursos {
            padding-top: 8rem;
            padding-bottom: 13rem;
            padding-left: 10%;
            padding-right: 10%;
        }

        /* seccion de resultados */
        #resultados {
            background: linear-gradient(to bottom, rgba(1, 53, 139, .9) 100%, #ffff 10%, #ffff 50%), url('./public/img/web/bg-contador.jpg') !important;
            background-attachment: fixed;
            background-size: cover;
            background-size: 100% !important;
            padding-top: 4rem;
            padding-bottom: 4rem;
        }

        #resultados h2 {
            color: var(--color9);
            text-align: center;
            font-weight: bold;
            padding-bottom: 6rem;
        }

        #resultados p {
            margin: 1.5rem;
            font-size: .95rem !important;
            color: white;
            text-align: start;
            /*  text-transform: lowercase; */
            margin: 2rem;
        }

      
        #resultados .counter {

            color: white;
            font-weight: bold;
            font-size: 3.9rem;
            padding: 0;
            margin: 0;
            line-height: 1;
            height: 40px;
            text-align: center;
            text-align: center;
            align-items: center;

        }
      

        @media screen and (max-width:1200px) {
            #carouselBanner div.carousel-item img {
                height: 100%;
            }

            div.content-banner .frame-responsive iframe {
                position: absolute;
                top: 0;
                left: 0;
                width: 100%;
                height: 100%;
            }

            div.content-banner video {
                width: 100%;
                height: 100%;
            }
        }
    </style>

    <!-- admin - ventana emergente -->
    <!-- <//?php if ($dataModal['visible'] == 'S') : ?>
        <style>
            #modalAdmin div.responsive {
                position: relative;
                height: 0;
                overflow: hidden;
                padding-bottom: 56%;
                margin-bottom: 20px;
            }

            #modalAdmin div.responsive iframe {
                position: absolute;
                top: 0;
                left: 0;
                width: 100%;
                height: 100%;
            }
        </style> -->
    <!--   <div class="modal" id="modalAdmin" tabindex="-1" aria-hidden="true">
            <div class="modal-dialog modal-lg modal-dialog-scrollable modal-dialog-centered">
                <div class="modal-content animate__animated <//?= $dataModal['animation'] ?>" style="<//?= ($dataModal['margen'] == 'N' && $dataModal['header'] == 'N') ? 'background: transparent; border: none;' : null ?>">
                    <//?php if ($dataModal['header'] == 'S') { ?>
                        <div class="modal-header border-0">
                            <h5 class="modal-title fw-bold"><//?= $dataModal['titulo'] ?></h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                    <//?php } ?>
                    <div class="modal-body <//?= $dataModal['margen'] == 'N' ? 'p-0' : null ?>">
                        <//?= $dataModal['cuerpo'] ?>
                    </div>
                </div>
            </div>
        </div> -->
    <script>
        // instancia y muestra la ventana
        let modalAdmin = new bootstrap.Modal(document.getElementById('modalAdmin'));
        modalAdmin.show();
        // al cierre de la ventana eliminamos el contenido
        let modalAdmin2 = document.getElementById('modalAdmin');
        modalAdmin2.addEventListener('hide.bs.modal', function(event) {
            document.querySelector('.modal-body').remove();
        });
    </script>
    <!--     <//?php endif; ?> -->

    <!-- admin - banner dinámico -->
    <!-- admin - banner dinámico -->
    <section class="container-fluid content-banner px-0">
        <div id="carouselBanner" class="carousel slide " data-bs-ride="carousel">
            <div class="carousel-indicators">
                <button type="button" data-bs-target="#carouselBanner" data-bs-slide-to="0" class="active"></button>
                <button type="button" data-bs-target="#carouselBanner" data-bs-slide-to="1" class=""></button>
                <button type="button" data-bs-target="#carouselBanner" data-bs-slide-to="2" class=""></button>
            </div>
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="./public/img/banner/banner4.jpg" class="d-block w-100" style="object-fit: cover;;">
                </div>
                <div class="carousel-item ">
                    <img src="./public/img/banner/banner2.jpg" class="d-block w-100" style="object-fit: cover;;">
                </div>
                <div class="carousel-item ">
                    <img src="./public/img/banner/banner1.jpg" class="d-block w-100" style="object-fit: cover;;">
                </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselBanner" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselBanner" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>
    </section>




    <br><br><br>
 

    <section id="somos" class="py-5">
        <div class="container">
            <div class="row">
                <div class="col-lg-6" style="position: relative;">
                    <div class="row img-somos">
                        <div class="col-lg-6">
                            <img src="./public/img/web/about-img-1.jpg">
                        </div>
                        <div class="col-lg-6">
                            <img src="./public/img/web/about-img-2.jpg">
                        </div>
                    </div>
                    <div class="row img-somos-logo">
                        <div class="col-lg-12">
                            <img src="./public/img/icons/escudo.png" width="30%" alt="">
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="mx-5">
                        <div class="heading text-start">
                            <div class="titulo-border  mb-16">
                                <img src="./public/img/icons/buld-vec.png" class="bulb-vec" alt="">
                                <span class="my-auto">Conócenos más</span>
                            </div>
                        </div>
                        <h3 style="font-weight:400;">Comprometidos con la</h3>
                        <h3 style="color:var(--color1);font-weight:600;"> educación de calidad</h3>
                        <br>
                        <p style="text-align: justify;">El Instituto de Sistemas es una comunidad educativa comprometida con el aprendizaje y la innovación en el ámbito tecnológico. A lo largo de los años, hemos formado a estudiantes con conocimientos sólidos en informática, programación y soporte técnico, preparándolos para enfrentar los retos de un mundo en constante evolución.</p> 
                        <div class="d-flex align-items-center gap-24 mb-36">
                            <div class="d-flex align-items-center gap-16">
                                <img src="./public/img/icons/instituto.png" class="content-vector" alt="">
                                <div class="mx-3">
                                    <h4 style="font-weight: 600;color:var(--color1)">10+</h4>
                                    <p>años formando profesionales</p>
                                </div>
                            </div>
                            <div class="d-flex align-items-center gap-16">
                                <img src="./public/img/icons/egresados.png" class="content-vector" alt="">
                                <div class="mx-3">
                                    <h4 style="font-weight: 600;color:var(--color1)">500+</h4>
                                    <p>egresados listos para el mercado laboral</p>
                                </div>
                            </div>
                        </div>
                        <div class="row pt-5">
                            <div class="col-lg-12">
                                <a class="btn" href="">Ver Más&nbsp;&nbsp;&nbsp;<i class="fas fa-external-link-alt"></i></a>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
    </section>



    <section id="carreras">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg">
                    <h2 class="text-center">Nuestras Carreras</h2>
                </div>
            </div>
            <br>
            <br>
            <div class="row cursos_content_slider owl-carousel owl-theme">
                <div class="carreras_slider">
                    <div class="content-carrera-curso">
                        <div class="ccarrera-curso-img">
                            <img src="./public/img/galeria/pc_admin_empresas.jpg" alt="">
                        </div>
                        <div class="ccarrera-curso-cuerpo p-4">
                            <h3 class="text-center" style="color:var(--color1);">Administración de Empresas</h3>

                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptatem minima laborum debitis reiciendis! Rerum, officiis? Suscipit officia nemo soluta numquam, repellendus ex, quae rerum voluptatum esse corrupti vel, culpa unde.</p>
                            <br>
                            <div class="col-lg  d-flex justify-content-center">
                                <a class="btn" href="">Ver Más&nbsp;&nbsp;&nbsp;<i class="fas fa-external-link-alt"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="carreras_slider">
                    <div class="content-carrera-curso">
                        <div class="ccarrera-curso-img">
                            <img src="./public/img/galeria/pc_locucion.jpg" alt="">
                        </div>
                        <div class="ccarrera-curso-cuerpo p-4">
                            <h3 class="text-center" style="color:var(--color1);">Locución Radial y Televisiva</h3>

                            <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Magnam dolores beatae corporis reiciendis harum numquam, suscipit eveniet! Explicabo, est libero, nam facilis odit ex cum autem a, expedita commodi tempora.</p>
                            <br>
                            <div class="col-lg  d-flex justify-content-center">
                                <a class="btn" href="">Ver Más&nbsp;&nbsp;&nbsp;<i class="fas fa-external-link-alt"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="carreras_slider">
                    <div class="content-carrera-curso">
                        <div class="ccarrera-curso-img">
                            <img src="./public/img/galeria/pc_audiovisial.jpg" alt="">
                        </div>
                        <div class="ccarrera-curso-cuerpo p-4">
                            <h3 class="text-center" style="color:var(--color1);">Comunicación Audiovisual</h3>

                            <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Eveniet ullam odio iste voluptate accusantium dolores non unde, nemo nostrum, ipsa consequatur ab enim voluptas cum architecto. Porro esse temporibus dolores!.</p>
                            <br>
                            <div class="col-lg  d-flex justify-content-center">
                                <a class="btn" href="">Ver Más&nbsp;&nbsp;&nbsp;<i class="fas fa-external-link-alt"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="carreras_slider">
                    <div class="content-carrera-curso">
                        <div class="ccarrera-curso-img">
                            <img src="./public/img/galeria/pc_periodismo.jpg" alt="">
                        </div>
                        <div class="ccarrera-curso-cuerpo p-4">
                            <h3 class="text-center" style="color:var(--color1);">Periodismo Radial y Televisivo</h3>

                            <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Hic sunt libero provident, doloribus illum in tempora velit fuga consectetur est doloremque facilis illo numquam corrupti, laudantium veniam a consequatur. Facilis?</p>
                            <br>
                            <div class="col-lg  d-flex justify-content-center">
                                <a class="btn" href="">Ver Más&nbsp;&nbsp;&nbsp;<i class="fas fa-external-link-alt"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
    </section>

    <section id="resultados">
        <div class="container-fluid" style="padding-left: 5%; padding-right: 5%;">
            <div class="row d-flex justify-content-center">
                <div class="col-lg d-flex justify-content-center">
                    <div class="heading text-start">
                        <div class="titulo-border">
                            <img src="./public/img/icons/buld-vec.png" class="bulb-vec" alt="">
                            <span class="my-auto text-white">Nuestro Impacto</span>
                        </div>
                    </div>
                </div>
            </div>
            <br>
            <br>
            <br>
            <div class="row d-flex justify-content-around">
                <!-- Contador 1 -->
                <div class="col-lg-3 col-md-6 col-sm-12 d-flex align-items-center mb-4">
                    <div class="col-4 d-flex justify-content-center align-items-center">
                        <div class="icon-box" style="border: solid 10px var(--color2); padding: 1rem;">
                            <img src="./public/img/icons/proyects.png" style="width: 100%;" alt="">
                        </div>
                    </div>
                    <div class="col-8">
                        <div class="counter" data-target="1000">0</div>
                        <p>Proyectos de Investigación </p>
                    </div>
                </div>

                <!-- Contador 2 -->
                <div class="col-lg-3 col-md-6 col-sm-12 d-flex align-items-center mb-4">
                    <div class="col-4 d-flex justify-content-center align-items-center">
                        <div class="icon-box" style="border: solid 10px var(--color2); padding: 1rem;">
                            <img src="./public/img/icons/colaboraciones.png" style="width: 100%;" alt="">
                        </div>
                    </div>
                    <div class="col-8">
                        <div class="counter" data-target="500">0</div>
                        <p>Egresados listos para el mercado laboral</p>
                    </div>
                </div>

                <!-- Contador 3 -->
                <div class="col-lg-3 col-md-6 col-sm-12 d-flex align-items-center mb-4">
                    <div class="col-4 d-flex justify-content-center align-items-center">
                        <div class="icon-box" style="border: solid 10px var(--color2); padding: 1rem;">
                            <img src="./public/img/icons/paises.png" style="width: 100%;" alt="">
                        </div>
                    </div>
                    <div class="col-8">
                        <div class="counter" data-target="22">0</div>
                        <p>Convenios Internacionales</p>
                    </div>
                </div>

                <!-- Contador 4 -->
                <!--  <div class="col-lg-3 col-md-6 col-sm-12 d-flex align-items-center mb-4">
                    <div class="col-4 d-flex justify-content-center align-items-center">
                        <div class="icon-box" style="border: solid 10px var(--color2); padding: 1rem;">
                            <img src="./public/img/icons/consultoria.png" style="width: 100%;" alt="">
                        </div>
                    </div>
                    <div class="col-8">
                        <div class="counter" data-target="40">0</div>
                        <p  >Horas de consultoría y capacitación</p>
                    </div>
                </div> -->
            </div>
        </div>
    </section>
    <section id="cursos">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg">
                    <h2 class="text-center">Nuestros Cursos</h2>
                </div>
            </div>
            <br>
            <br>
            <div class="row cursos_content_slider owl-carousel owl-theme">
                <div class="carreras_slider">
                    <div class="content-carrera-curso">
                        <div class="ccarrera-curso-img">
                            <img src="./public/img/galeria/pc_admin_empresas.jpg" alt="">
                        </div>
                        <div class="ccarrera-curso-cuerpo p-4">
                            <h3 class="text-center" style="color:var(--color1);">Administración de Empresas</h3>

                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptatem minima laborum debitis reiciendis! Rerum, officiis? Suscipit officia nemo soluta numquam, repellendus ex, quae rerum voluptatum esse corrupti vel, culpa unde.</p>
                            <br>
                            <div class="col-lg  d-flex justify-content-center">
                                <a class="btn" href="">Ver Más&nbsp;&nbsp;&nbsp;<i class="fas fa-external-link-alt"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="carreras_slider">
                    <div class="content-carrera-curso">
                        <div class="ccarrera-curso-img">
                            <img src="./public/img/galeria/pc_locucion.jpg" alt="">
                        </div>
                        <div class="ccarrera-curso-cuerpo p-4">
                            <h3 class="text-center" style="color:var(--color1);">Locución Radial y Televisiva</h3>

                            <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Magnam dolores beatae corporis reiciendis harum numquam, suscipit eveniet! Explicabo, est libero, nam facilis odit ex cum autem a, expedita commodi tempora.</p>
                            <br>
                            <div class="col-lg  d-flex justify-content-center">
                                <a class="btn" href="">Ver Más&nbsp;&nbsp;&nbsp;<i class="fas fa-external-link-alt"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="carreras_slider">
                    <div class="content-carrera-curso">
                        <div class="ccarrera-curso-img">
                            <img src="./public/img/galeria/pc_audiovisial.jpg" alt="">
                        </div>
                        <div class="ccarrera-curso-cuerpo p-4">
                            <h3 class="text-center" style="color:var(--color1);">Comunicación Audiovisual</h3>

                            <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Eveniet ullam odio iste voluptate accusantium dolores non unde, nemo nostrum, ipsa consequatur ab enim voluptas cum architecto. Porro esse temporibus dolores!.</p>
                            <br>
                            <div class="col-lg  d-flex justify-content-center">
                                <a class="btn" href="">Ver Más&nbsp;&nbsp;&nbsp;<i class="fas fa-external-link-alt"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="carreras_slider">
                    <div class="content-carrera-curso">
                        <div class="ccarrera-curso-img">
                            <img src="./public/img/galeria/pc_periodismo.jpg" alt="">
                        </div>
                        <div class="ccarrera-curso-cuerpo p-4">
                            <h3 class="text-center" style="color:var(--color1);">Periodismo Radial y Televisivo</h3>

                            <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Hic sunt libero provident, doloribus illum in tempora velit fuga consectetur est doloremque facilis illo numquam corrupti, laudantium veniam a consequatur. Facilis?</p>
                            <br>
                            <div class="col-lg  d-flex justify-content-center">
                                <a class="btn" href="">Ver Más&nbsp;&nbsp;&nbsp;<i class="fas fa-external-link-alt"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
    </section>

    <?php include_once './partials/footer.php'; ?>
</body>





<script>
    function enviarSuscripcion(e) {
        e.preventDefault();
        const data = new FormData(document.getElementById('formSuscripcion'));
        fetch('/suscripcion/suscripcion.php', {
                method: 'POST',
                body: data
            })
            .then(res => res.text())
            .then(res => {
                alert(res);
                e.target.reset(); // Resetea el formulario después de la respuesta
            })
            .catch(err => {
                alert('Hubo un error al procesar la solicitud. Inténtalo de nuevo.');
                console.error(err);
            });
    }
</script>

<script>
    $(document).ready(function() {
        $(".cursos_content_slider").owlCarousel({
            loop: true,
            margin: 10,
            nav: true,
            dots: false,
            autoplay: true,
            autoplayTimeout: 8000,
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
<script>
    document.addEventListener("DOMContentLoaded", function() {
        const counters = document.querySelectorAll('.counter');
        const resultadosElement = document.getElementById('resultados'); // Elemento que contiene los contadores
        const baseDuration = 2000; // Duración fija en milisegundos para todos los contadores

        // Función de easing
        function easeInOutQuad(t) {
            return t < 0.5 ? 2 * t * t : -1 + (4 - 2 * t) * t;
        }

        // Función para formatear el valor final
        function formatValue(value, prefix = '', suffix = '') {
            return `${prefix}${value}${suffix}`;
        }

        // Función para animar un contador
        function animateCounter(counter, duration, onComplete) {
            const target = counter.getAttribute('data-target');
            if (!target) return; // Validación básica

            const prefix = counter.getAttribute('data-prefix') || '';
            const suffix = counter.getAttribute('data-suffix') || '';
            const hasColon = target.includes(':');
            const targetParts = hasColon ? target.split(':') : [target];
            const initialParts = counter.innerText.replace(/[+%]/g, '').split(':');

            function step(timestamp, startTime) {
                const progress = Math.min((timestamp - startTime) / duration, 1);
                const easedProgress = easeInOutQuad(progress);
                const updatedParts = targetParts.map((part, index) => {
                    const startValue = +initialParts[index] || 0;
                    const endValue = +part.replace('%', '');
                    return Math.floor(easedProgress * (endValue - startValue) + startValue);
                });

                const updatedValue = updatedParts.join(':');
                counter.innerText = formatValue(updatedValue, prefix, suffix);

                if (progress < 1) {
                    window.requestAnimationFrame((newTimestamp) => step(newTimestamp, startTime));
                } else {
                    counter.innerText = formatValue(target, prefix, suffix); // Asegura el valor final exacto
                    if (onComplete) onComplete(); // Ejecuta el callback al finalizar
                }
            }

            window.requestAnimationFrame((timestamp) => step(timestamp, performance.now()));
        }

        // Configuración del IntersectionObserver
        const observer = new IntersectionObserver((entries, observer) => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    // Animar todos los contadores cuando la sección es visible
                    counters.forEach((counter, index) => {
                        // Agregar el prefijo "+" a los primeros 3 contadores
                        if (index < 2) {
                            counter.setAttribute('data-prefix', '+');
                        }

                        animateCounter(counter, baseDuration, () => {
                            console.log('Animación completada para:', counter);
                        });
                    });

                    // Dejar de observar el elemento después de la animación
                    observer.unobserve(resultadosElement);
                }
            });
        }, {
            threshold: 0.1 // Umbral de visibilidad (10% del elemento visible)
        });

        // Observar el elemento que contiene los contadores
        if (resultadosElement) {
            observer.observe(resultadosElement);
        }
    });
</script>

</html>