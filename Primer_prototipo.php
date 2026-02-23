<body class="bg-light">
<div class="container-fluid py-2">
    <!-- Breadcrumb de navegación -->
    <div class="container py-3">
        <div class="row justify-content-center">
            <div class="col-lg-10 col-xl-12">

                <!-- Tarjeta principal con sombra mejorada -->
                <div class="card shadow-lg border-0 rounded-4 overflow-hidden">

                    <!-- Cabecera decorativa con colores ICBF -->
                    <div class="bg-success py-3 px-4 text-white">
                        <div class="d-flex align-items-center justify-content-between">
                            <div class="d-flex align-items-center">
                                <div class="bg-white bg-opacity-25 rounded-circle p-2 me-3">
                                    <i class="bi bi-building fs-4 text-white"></i>
                                </div>
                                <div>
                                    <h5 class="mb-0 fw-bold">Municipio de Girardot</h5>
                                    <small class="opacity-75">
                                        <i class="bi bi-geo-alt me-1"></i>Cundinamarca, Colombia
                                    </small>
                                </div>
                            </div>
                            <span class="badge bg-warning text-dark px-3 py-2 rounded-pill">
                                <i class="bi bi-shield me-1"></i>RSNNA
                            </span>
                        </div>
                    </div>

                    <!-- Carrusel con overlay decorativo -->
                    <div class="position-relative">
                        <div id="carouselGirardot" class="carousel slide" data-bs-ride="carousel" data-bs-interval="4000">
                            
                            <!-- Indicadores del carrusel -->
                            <div class="carousel-indicators">
                                <button type="button" data-bs-target="#carouselGirardot" data-bs-slide-to="0" class="active bg-success" aria-current="true" aria-label="Slide 1"></button>
                                <button type="button" data-bs-target="#carouselGirardot" data-bs-slide-to="1" class="bg-success" aria-label="Slide 2"></button>
                                <button type="button" data-bs-target="#carouselGirardot" data-bs-slide-to="2" class="bg-success" aria-label="Slide 3"></button>
                            </div>

                            <div class="carousel-inner">
                                <!-- Slide 1 con overlay de texto -->
                                <div class="carousel-item active">
                                    <img src="<?php echo BASE_URL; ?>imagenes/municipio/images.jpg"
                                        class="d-block w-100"
                                        style="height:350px; object-fit:cover;"
                                        alt="Girardot">
                                    <div class="carousel-caption d-none d-md-block bg-dark bg-opacity-50 rounded-3 p-3">
                                        <h6 class="text-white">Bienvenidos a Girardot</h6>
                                        <p class="small text-white-50">Ciudad turística de Colombia</p>
                                    </div>
                                </div>

                                <!-- Slide 2 -->
                                <div class="carousel-item">
                                    <img src="<?php echo BASE_URL; ?>imagenes/municipio/letrero.jpeg"
                                        class="d-block w-100"
                                        style="height:350px; object-fit:cover;"
                                        alt="Letrero Girardot">
                                    <div class="carousel-caption d-none d-md-block bg-dark bg-opacity-50 rounded-3 p-3">
                                        <h6 class="text-white">Letrero Turístico</h6>
                                        <p class="small text-white-50">Patrimonio cultural</p>
                                    </div>
                                </div>

                                <!-- Slide 3 -->
                                <div class="carousel-item">
                                    <img src="<?php echo BASE_URL; ?>imagenes/municipio/parque.jpg"
                                        class="d-block w-100"
                                        style="height:350px; object-fit:cover;"
                                        alt="Parque Girardot">
                                    <div class="carousel-caption d-none d-md-block bg-dark bg-opacity-50 rounded-3 p-3">
                                        <h6 class="text-white">Parque Principal</h6>
                                        <p class="small text-white-50">Corazón de la ciudad</p>
                                    </div>
                                </div>
                            </div>

                            <!-- Controles mejorados -->
                            <button class="carousel-control-prev" type="button"
                                data-bs-target="#carouselGirardot" data-bs-slide="prev">
                                <span class="carousel-control-prev-icon bg-success rounded-circle p-3" 
                                      style="background-size: 60%;"></span>
                                <span class="visually-hidden">Anterior</span>
                            </button>
                            <button class="carousel-control-next" type="button"
                                data-bs-target="#carouselGirardot" data-bs-slide="next">
                                <span class="carousel-control-next-icon bg-success rounded-circle p-3"
                                      style="background-size: 60%;"></span>
                                <span class="visually-hidden">Siguiente</span>
                            </button>
                        </div>

                        <!-- Etiqueta flotante de ICBF -->
                        <div class="position-absolute top-0 end-0 m-3 z-1">
                            <span class="badge bg-warning text-dark px-4 py-2 rounded-pill shadow">
                                <i class="bi bi-heart-fill me-2"></i>ICBF Presente
                            </span>
                        </div>
                    </div>

                    <!-- Contenido principal mejorado -->
                    <div class="card-body p-5">

                        <!-- Logo y título -->
                        <div class="text-center mb-4">
                            <div class="d-flex justify-content-center mb-3">
                                <div class="bg-success bg-opacity-10 rounded-circle p-4">
                                    <img src="<?php echo BASE_URL; ?>imagenes/logo.png" 
                                         alt="RSNNA" 
                                         width="200" 
                                         height="AUTO"
                                         class="img-fluid">
                                </div>
                            </div>
                            <h2 class="text-success fw-bold mb-2">
                                <i class="bi bi-shield-check me-2"></i>Sistema RSNNA
                            </h2>
                            <h5 class="text-muted">Girardot - Cundinamarca</h5>
                            
                            <!-- Badges de información -->
                            <div class="d-flex justify-content-center gap-2 mt-3 flex-wrap">
                                <span class="badge bg-success bg-opacity-10 text-success px-3 py-2 rounded-pill">
                                    <i class="bi bi-people me-1"></i>Niñez y Adolescencia
                                </span>
                                <span class="badge bg-success bg-opacity-10 text-success px-3 py-2 rounded-pill">
                                    <i class="bi bi-shield me-1"></i>Protección Integral
                                </span>
                                <span class="badge bg-success bg-opacity-10 text-success px-3 py-2 rounded-pill">
                                    <i class="bi bi-graph-up me-1"></i>Seguimiento
                                </span>
                            </div>
                        </div>

                        <!-- Texto institucional con mejor formato -->
                        <div class="row">
                            <div class="col-12">
                                <div class="bg-light p-4 rounded-4 mb-4">
                                    <p class="lead text-success fw-semibold mb-3">
                                        <i class="bi bi-quote fs-3 me-2"></i>
                                        Registro y Seguimiento de Niños, Niñas y Adolescentes
                                    </p>
                                    
                                    <p class="text-justify mb-3">
                                        El sistema <strong class="text-success">RSNNA</strong> del municipio de Girardot 
                                        tiene como finalidad garantizar la protección, el control y el seguimiento integral 
                                        de la población infantil y adolescente en situación de vulnerabilidad.
                                    </p>
                                    
                                    <div class="row g-3 mt-4">
                                        <div class="col-md-6">
                                            <div class="d-flex align-items-start">
                                                <div class="bg-success bg-opacity-10 p-2 rounded-3 me-3">
                                                    <i class="bi bi-check-circle-fill text-success"></i>
                                                </div>
                                                <div>
                                                    <h6 class="fw-bold mb-1">Registro Actualizado</h6>
                                                    <p class="small text-muted mb-0">Información en tiempo real de los casos</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="d-flex align-items-start">
                                                <div class="bg-success bg-opacity-10 p-2 rounded-3 me-3">
                                                    <i class="bi bi-check-circle-fill text-success"></i>
                                                </div>
                                                <div>
                                                    <h6 class="fw-bold mb-1">Monitoreo Continuo</h6>
                                                    <p class="small text-muted mb-0">Seguimiento permanente de casos</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="d-flex align-items-start">
                                                <div class="bg-success bg-opacity-10 p-2 rounded-3 me-3">
                                                    <i class="bi bi-check-circle-fill text-success"></i>
                                                </div>
                                                <div>
                                                    <h6 class="fw-bold mb-1">Toma de Decisiones</h6>
                                                    <p class="small text-muted mb-0">Fortalecimiento institucional</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="d-flex align-items-start">
                                                <div class="bg-success bg-opacity-10 p-2 rounded-3 me-3">
                                                    <i class="bi bi-check-circle-fill text-success"></i>
                                                </div>
                                                <div>
                                                    <h6 class="fw-bold mb-1">Derechos Fundamentales</h6>
                                                    <p class="small text-muted mb-0">Garantía y cumplimiento</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Estadísticas rápidas del municipio -->
                        <div class="row g-3 mb-4">
                            <div class="col-md-4">
                                <div class="bg-success bg-opacity-10 rounded-4 p-3 text-center">
                                    <h3 class="text-success fw-bold mb-1">500+</h3>
                                    <small class="text-muted">Niños registrados</small>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="bg-success bg-opacity-10 rounded-4 p-3 text-center">
                                    <h3 class="text-success fw-bold mb-1">10</h3>
                                    <small class="text-muted">Fundaciones aliadas</small>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="bg-success bg-opacity-10 rounded-4 p-3 text-center">
                                    <h3 class="text-success fw-bold mb-1">98%</h3>
                                    <small class="text-muted">Cobertura</small>
                                </div>
                            </div>
                        </div>

                        <!-- Botón de acción con mejor diseño -->
                        <div class="text-center mt-4">
                            <a href="<?php echo BASE_URL; ?>views/modules/Navegacion/inicio.php"
                               class="btn btn-success btn-lg px-5 py-3 rounded-pill shadow-lg position-relative overflow-hidden"
                               style="background: linear-gradient(135deg, #006341 0%, #00A651 100%);">
                                <span class="position-relative z-1">
                                    <i class="bi bi-box-arrow-in-right me-2"></i>
                                    Acceder al Sistema RSNNA
                                    <i class="bi bi-arrow-right ms-2"></i>
                                </span>
                            </a>
                            <p class="text-muted small mt-3">
                                <i class="bi bi-shield-check text-success me-1"></i>
                                Sistema protegido - ICBF Colombia
                            </p>
                        </div>
                    </div>

                    <!-- Footer de la tarjeta -->
                    <div class="card-footer bg-success bg-opacity-10 border-0 p-3 text-center">
                        <small class="text-success">
                            <i class="bi bi-geo-alt-fill me-1"></i>
                            Girardot, Cundinamarca - 
                            <i class="bi bi-calendar ms-2 me-1"></i>
                            <?php echo date('d/m/Y'); ?>
                        </small>
                    </div>
                </div>

                <!-- Información adicional fuera de la tarjeta principal -->
                <div class="row mt-4 g-3">
                    <div class="col-md-6">
                        <div class="card border-0 bg-light rounded-4 p-3">
                            <div class="d-flex align-items-center">
                                <div class="bg-success bg-opacity-10 rounded-3 p-3 me-3">
                                    <i class="bi bi-telephone fs-4 text-success"></i>
                                </div>
                                <div>
                                    <h6 class="fw-bold mb-1">Línea de Atención ICBF</h6>
                                    <p class="mb-0 text-success fw-bold">01 8000 91 80 80</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="card border-0 bg-light rounded-4 p-3">
                            <div class="d-flex align-items-center">
                                <div class="bg-success bg-opacity-10 rounded-3 p-3 me-3">
                                    <i class="bi bi-envelope fs-4 text-success"></i>
                                </div>
                                <div>
                                    <h6 class="fw-bold mb-1">Correo ICBF Girardot</h6>
                                    <p class="mb-0 text-success fw-bold small">girardot@icbf.gov.co</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Estilos personalizados ICBF -->
<style>
.bg-success {
    background-color: #006341 !important;
}
.bg-success.bg-opacity-10 {
    background-color: rgba(0, 99, 65, 0.1) !important;
}
.text-success {
    color: #006341 !important;
}
.btn-success {
    background-color: #006341;
    border-color: #006341;
}
.btn-success:hover {
    background-color: #004d33;
    border-color: #004d33;
    transform: translateY(-2px);
    transition: all 0.3s ease;
}
.carousel-control-prev-icon,
.carousel-control-next-icon {
    background-color: #006341;
    border-radius: 50%;
    padding: 1rem;
}
.card {
    transition: all 0.3s ease;
}
.card:hover {
    box-shadow: 0 30px 40px rgba(0, 99, 65, 0.15) !important;
}
.hover-card:hover {
    transform: translateY(-5px);
}
.carousel-caption {
    bottom: 20px;
    left: 20px;
    right: 20px;
    background: linear-gradient(0deg, rgba(0,0,0,0.7) 0%, rgba(0,0,0,0.4) 100%);
}
.carousel-indicators [data-bs-target] {
    width: 12px;
    height: 12px;
    border-radius: 50%;
    margin: 0 5px;
}
</style>

<!-- Bootstrap Icons -->
<link rel="stylesheet" href="CSS/bootstrap-icons.min.css">

<!-- Bootstrap JS -->
<script src="js/bootstrap.bundle.min.js"></script>

</body>