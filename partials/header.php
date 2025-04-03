<style>
    .nav-item {
        padding-left: 1rem;
    }

    .navbar-dark .navbar-toggler {
        border-color: var(--color1);
        background-color: var(--color1);
    }

    .modal-content {
        border-radius: 15px;
        padding: 20px;
    }

    .modal-header {
        border-bottom: none;
        text-align: center;
    }

    .modal-title {
        font-size: 24px;
        font-weight: bold;
    }

    .form-control,
    .form-select {
        border-radius: 10px;
    }

    .btn-primary {
        width: 100%;
        background-color: var(--color1);
        border: none;
        padding: 10px;
        font-size: 18px;
    }

    /* ============ desktop view ============ */
    @media all and (min-width: 992px) {
        .dropdown-menu li {
            position: relative;
        }

        .nav-item .submenu {
            display: none;
            position: absolute;
            left: 100%;
            top: -7px;
        }

        .nav-item .submenu-left {
            right: 100%;
            left: auto;
        }

        .dropdown-menu>li:hover {
            background-color: #f1f1f1
        }

        .dropdown-menu>li:hover>.submenu {
            display: block;
        }
    }

    /* ============ desktop view .end// ============ */

    /* ============ small devices ============ */
    @media (max-width: 991px) {
        .dropdown-menu .dropdown-menu {
            margin-left: 0.7rem;
            margin-right: 0.7rem;
            margin-bottom: .5rem;
        }
    }

    /* ============ small devices .end// ============ */
</style>
<header id="header" class="fixed-top">
    <nav class="navbar navbar-expand-lg navbar-dark">
        <div class="container ps-0">
            <a class="navbar-brand fs-4 fw-bold" style="letter-spacing: .08em;" href="/">
                <img src="./public/img/icons/escudo_isp.png" height="55">
                <!--   <span>sadasdsad</span> -->
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarMenu" aria-controls="navbarMenu" aria-expanded="false">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarMenu">
                <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link active" href="./">Inicio</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="./nosotros.php">Nosotros</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="./carreras.php">Carreras</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="./cursos.php">Cursos</a>
                    </li>
                    <!--  <li class="nav-item" onmouseover="showMenuHover(0)" onmouseout="showMenuHover2(0)">
                        <a class="nav-link" href="#" id="navbarDropdown">
                            Carreras &nbsp;<i class="fas fa-chevron-down" style="font-size:12px;"></i>
                        </a>
                        <ul class="dropdown-menu animate__animated animate__fadeInUp" aria-labelledby="navbarDropdown">
                            <li><a class="dropdown-item py-2" href="/publicaciones/noticias">Administración</a></li>
                            <li><a class="dropdown-item py-2" href="/publicaciones/documentos">Documentos</a></li>
                        </ul>
                    </li> -->

                    <!-- <li class="nav-item" onmouseover="showMenuHover(1)" onmouseout="showMenuHover2(1)">
                        <a class="nav-link" href="/publicaciones/all" id="navbarDropdown">
                            Cursos &nbsp;<i class="fas fa-chevron-down" style="font-size:12px;"></i>
                        </a>
                        <ul class="dropdown-menu animate__animated animate__fadeInUp" aria-labelledby="navbarDropdown">
                            <li><a class="dropdown-item py-2" href="/publicaciones/noticias">Noticias</a></li>
                            <li><a class="dropdown-item py-2" href="/publicaciones/documentos">Documentos</a></li>
                        </ul>
                    </li> -->
                    <li class="nav-item">
                        <a class="nav-link" href="#">Transparencia</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="./noticias.php">Noticias</a>
                    </li>
                    <li class="nav-item me-0">

                        <a class="nav-link round" href="javascript:void(0);" onclick="openRegisterModal()">Contacto</a>
                        <script>
                            function openRegisterModal() {
                                var registerModal = new bootstrap.Modal(document.getElementById('registerModal'));
                                registerModal.show();
                            }
                        </script>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
</header>
<div class="modal fade" id="registerModal" tabindex="-1" aria-labelledby="registerModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header d-flex flex-column">
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                <h5 class="modal-title" id="registerModalLabel">Regístrate aquí</h5>
                <p>En breve, un profesional te contactará.</p>
               
            </div>
            <div class="modal-body">
                <form>
                    <div class="row g-3">
                        <div class="col-md-6">
                            <input type="text" class="form-control" placeholder="Nombre(s)" required>
                        </div>
                        <div class="col-md-6">
                            <input type="text" class="form-control" placeholder="Apellido paterno" required>
                        </div>
                        <div class="col-md-6">
                            <input type="text" class="form-control" placeholder="Apellido materno" required>
                        </div>
                        <div class="col-md-6">
                            <select class="form-select" required>
                                <option selected>DNI</option>
                                <option>Pasaporte</option>
                            </select>
                        </div>
                        <div class="col-md-6">
                            <input type="text" class="form-control" placeholder="Nro. de documento" required>
                        </div>
                        <!-- <div class="col-md-6">
                                <select class="form-select" required>
                                    <option selected>Departamento (*)</option>
                                </select>
                            </div> -->
                        <div class="col-md-6">
                            <input type="email" class="form-control" placeholder="Correo electrónico" required>
                        </div>
                        <div class="col-md-6">
                            <input type="text" class="form-control" placeholder="Celular" required>
                        </div>
                        <!-- <div class="col-md-6">
                                <select class="form-select" required>
                                    <option selected>Año de estudio (*)</option>
                                </select>
                            </div>-->
                        <div class="col-md-6">
                            <select class="form-select" required>
                                <option selected disabled>Carrera de interés (*)</option>
                                <option value="ingenieria_sistemas">Administración de Empresas</option>
                                <option value="administracion">Locución Radial y Televisiva</option>
                                <option value="contabilidad">Comunicación Audiovisual</option>
                                <option value="derecho">Periodismo Radial y Televisivo</option>
                            </select>
                        </div>
                    </div>
                    <div class="mt-3">
                        <label class="form-check-label">Declaro haber leído la <a href="#">Política de Privacidad</a></label>
                        <input type="checkbox" class="form-check-input" required>
                    </div>
                    <div class="mt-3">
                        <label class="form-check-label">Acepto que mi información personal se use para los fines complementarios que se describen en la Política de Privacidad.</label>
                        <div>
                            <input type="radio" name="autorizacion" class="form-check-input" required> Sí
                            <input type="radio" name="autorizacion" class="form-check-input" required> No
                        </div>
                    </div>
                    <!-- <div class="mt-3">
                        <label class="form-check-label">Consiento en que Instituto ISP comunique mis datos personales a terceros.</label>
                        <div>
                            <input type="radio" name="transferencia" class="form-check-input" required> Sí
                            <input type="radio" name="transferencia" class="form-check-input" required> No
                        </div>
                    </div> -->
                    <button type="submit" class="btn btn-primary mt-3">Enviar</button>
                </form>
            </div>
        </div>
    </div>
</div>

<script>
    var height = document.getElementById('header').clientHeight;
    document.querySelector('body').style.paddingTop = height + "px";

    function showMenuHover(index, add = true) {
        const menu = document.querySelectorAll('ul.dropdown-menu')[index];
        menu.classList.add('show');
    }

    function showMenuHover2(index, add = false) {
        const menu = document.querySelectorAll('ul.dropdown-menu')[index];
        menu.classList.remove('show');
    }

    // Añadir un evento de clic a todos los elementos con submenús
    document.querySelectorAll('.submenu-parent > a').forEach(item => {
        item.addEventListener('click', function(event) {
            event.preventDefault();
            const submenu = this.nextElementSibling;
            submenu.classList.toggle('show');
        });
    });
</script>
<script type="text/javascript">
    document.addEventListener("DOMContentLoaded", function() {
        // make it as accordion for smaller screens
        if (window.innerWidth < 992) {

            // close all inner dropdowns when parent is closed
            document.querySelectorAll('.navbar .dropdown').forEach(function(everydropdown) {
                everydropdown.addEventListener('hidden.bs.dropdown', function() {
                    // after dropdown is hidden, then find all submenus
                    this.querySelectorAll('.submenu').forEach(function(everysubmenu) {
                        // hide every submenu as well
                        everysubmenu.style.display = 'none';
                    });
                })
            });

            document.querySelectorAll('.dropdown-menu a').forEach(function(element) {
                element.addEventListener('click', function(e) {
                    let nextEl = this.nextElementSibling;
                    if (nextEl && nextEl.classList.contains('submenu')) {
                        // prevent opening link if link needs to open dropdown
                        e.preventDefault();
                        if (nextEl.style.display == 'block') {
                            nextEl.style.display = 'none';
                        } else {
                            nextEl.style.display = 'block';
                        }

                    }
                });
            })
        }
        // end if innerWidth
    });
    // DOMContentLoaded  end
</script>