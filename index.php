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
                    <img src="./public/img/banner/banner1.jpg" class="d-block w-100" style="object-fit: cover;;">
                </div>
                <div class="carousel-item ">
                    <img src="./public/img/banner/banner2.jpg" class="d-block w-100" style="object-fit: cover;;">
                </div>
                <div class="carousel-item ">
                    <img src="./public/img/banner/banner3.jpg" class="d-block w-100" style="object-fit: cover;;">
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
    <style>
        .titulo-border {
            width: 180px;
            padding: .4rem;
            background-color: var(--color6);
            display: flex;
            align-items: center;
            justify-content: center;
            margin-bottom: 20px;
            border-radius: 20px;
            color: var(--color1);
        }

        .content-vector {
            width: 30%;
        }

        .btn {
            background-color: var(--color1);
            color: white;
            border: none;
            padding: 10px 20px;
            border-radius: 20px;
            cursor: pointer;
            transition: .3s;
        }
        .img-somos-logo{
            position: relative;
            bottom:10%;
            left: 10%;
        }

        /* 
        .titulo-border img{
            width: 40px;
            margin-right: 10px;
        }

        .bulb-vec{
            width: 40px;    
       } */
    </style>

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
                                <p class="my-auto">Conócenos más</p>
                            </div>
                        </div>
                        <h3 style="font-weight:400;">Comprometidos con la</h3>
                        <h3 style="color:var(--color1);font-weight:600;"> educación de calidad</h3>
                        <br>
                        <p class="text-justify">El Instituto de Sistemas es una comunidad educativa comprometida con el aprendizaje y la innovación en el ámbito tecnológico. A lo largo de los años, hemos formado a estudiantes con conocimientos sólidos en informática, programación y soporte técnico, preparándolos para enfrentar los retos de un mundo en constante evolución.</p> <!-- Nuestro enfoque se basa en la práctica, la creatividad y la resolución de problemas, brindando herramientas que les permitan destacarse en el mercado laboral. Más que una institución, somos un espacio donde la tecnología y el conocimiento se unen para transformar vidas y abrir nuevas oportunidades.</p> -->
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
    <section id="lema">
        <div class="container">
            <div class="row">
                <div class="col-lg">
                    <h2 class="text-center">SOMOS LOS MEJORES EN COMUNICACIÓN  AUDIOVISUAL, PERIODISMO, LOCUCIÓN Y CIENCIAS PUBLICITARIAS </h2>
                </div>
            </div>
        </div>
    </section>
    <section class="py-5">
        <form action="" id="formSuscripcion" name="formSuscripcion" onsubmit="enviarSuscripcion(event)">
            <div class="container">
                <div class="row">
                    <div class="col-lg">
                        <div class="mb-3">
                            <label for="nombreInput" class="form-label">Nombres</label>
                            <input type="text" name="nombre" class="form-control" id="nombreInput" aria-describedby="nombreHelp" required>
                            <br>
                            <label for="correoInput" class="form-label">Correo</label>
                            <input type="email" name="correo" class="form-control" id="correoInput" aria-describedby="correoHelp" required>
                        </div>
                        <button type="submit" name="register" class="btn btn-primary">Suscríbete</button>
                    </div>
                </div>
            </div>
        </form>
    </section>


    <!-- <form method="post">
    	<h1>¡Suscribete!</h1>
    	<input type="email" name="correo" placeholder="Correo">
    	<input type="submit" name="register">
    </form> -->

</body>

<section class="py-5">
    <form action="" id="formSuscripcion" name="formSuscripcion" onsubmit="enviarSuscripcion(event)">
        <div class="container">
            <div class="row">
                <div class="col-lg">
                    <div class="mb-3">
                        <label for="nombreInput" class="form-label">Nombres</label>
                        <input type="text" name="nombre" class="form-control" id="nombreInput" aria-describedby="nombreHelp" required>
                        <br>
                        <label for="correoInput" class="form-label">Correo</label>
                        <input type="email" name="correo" class="form-control" id="correoInput" aria-describedby="correoHelp" required>
                    </div>
                    <button type="submit" name="register" class="btn btn-primary">Suscríbete</button>
                </div>
            </div>
        </div>
    </form>
</section>

<?php include_once './partials/footer.php'; ?>

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


</html>