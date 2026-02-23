<?php
define("BASE_URL", "/proyectoclon/RSNNA-P.P/");
?>
<?php
include("../../../header.php");
// <!--session_start();-->
?>

<div class="container-fluid py-5">
    <!-- Breadcrumb de navegación -->
    <div class="row justify-content-center">
        <div class="col-md-6 col-lg-5">

            <!-- Tarjeta de login rediseñada -->
            <div class="card shadow-lg border-0 rounded-4 overflow-hidden">

                <!-- Cabecera decorativa -->
                <div class="card-header bg-success text-white py-4 text-center border-0"
                    style="background: linear-gradient(135deg, #006341 0%, #00A651 100%);">

                    <!-- Logo ICBF -->
                    <div class="d-flex justify-content-center mb-3">
                        <div class="bg-white bg-opacity-25 rounded-circle p-3">
                            <img src="<?php echo BASE_URL; ?>imagenes/logo.png" alt="ICBF" width="60" height="60"
                                class="img-fluid"
                                onerror="this.src='https://via.placeholder.com/60x60/ffffff/006341?text=ICBF'; this.onerror=null;">
                        </div>
                    </div>

                    <h4 class="fw-bold mb-2">
                        <i class="bi bi-box-arrow-in-right me-2"></i>Iniciar Sesión
                    </h4>
                    <p class="text-white-50 small mb-0">
                        Sistema RSNNA - ICBF Colombia
                    </p>
                </div>

                <div class="card-body p-5">

                    <!-- Mensaje de error mejorado -->
                    <?php if (isset($_GET["error"])) { ?>
                    <div class="alert alert-danger alert-dismissible fade show d-flex align-items-center mb-4"
                        role="alert">
                        <i class="bi bi-exclamation-triangle-fill fs-4 me-3"></i>
                        <div>
                            <strong>¡Error de autenticación!</strong><br>
                            Usuario o contraseña incorrectos
                        </div>
                        <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
                    </div>
                    <?php } ?>

                    <!-- Mensaje de éxito (ejemplo) -->
                    <?php if (isset($_GET["logout"])) { ?>
                    <div class="alert alert-success alert-dismissible fade show d-flex align-items-center mb-4"
                        role="alert">
                        <i class="bi bi-check-circle-fill fs-4 me-3"></i>
                        <div>
                            <strong>Sesión cerrada</strong><br>
                            Has cerrado sesión correctamente
                        </div>
                        <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
                    </div>
                    <?php } ?>

                    <form action="validar_login.php" method="POST" class="needs-validation" novalidate>

                        <!-- CORREO ELECTRÓNICO -->
                        <div class="mb-4">
                            <label class="form-label fw-semibold text-success">
                                <i class="bi bi-envelope me-2"></i>Correo electrónico
                            </label>
                            <div class="input-group">
                                <span class="input-group-text bg-success bg-opacity-10 border-0">
                                    <i class="bi bi-envelope-fill text-success"></i>
                                </span>
                                <input type="email" name="correo" class="form-control form-control-lg"
                                    placeholder="correo@ejemplo.com" required>
                                <div class="invalid-feedback">
                                    Por favor ingrese su correo electrónico
                                </div>
                            </div>
                            <small class="text-muted">
                                <i class="bi bi-info-circle me-1"></i>
                                Use su correo institucional
                            </small>
                        </div>

                        <!-- CONTRASEÑA -->
                        <div class="mb-4">
                            <label class="form-label fw-semibold text-success">
                                <i class="bi bi-lock me-2"></i>Contraseña
                            </label>
                            <div class="input-group">
                                <span class="input-group-text bg-success bg-opacity-10 border-0">
                                    <i class="bi bi-lock-fill text-success"></i>
                                </span>
                                <input type="password" name="password" class="form-control form-control-lg"
                                    placeholder="Ingrese su contraseña" required>
                                <button class="btn btn-outline-success" type="button" id="togglePassword">
                                    <i class="bi bi-eye"></i>
                                </button>
                                <div class="invalid-feedback">
                                    Por favor ingrese su contraseña
                                </div>
                            </div>
                            <div class="text-end mt-2">
                                <a href="#" class="text-success small text-decoration-none">
                                    ¿Olvidó su contraseña?
                                </a>
                            </div>
                        </div>

                        <!-- Opciones adicionales -->
                        <div class="d-flex justify-content-between align-items-center mb-4">
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" id="rememberMe">
                                <label class="form-check-label small" for="rememberMe">
                                    Recordar sesión
                                </label>
                            </div>
                            <span class="badge bg-success bg-opacity-10 text-success px-3 py-2 rounded-pill">
                                <i class="bi bi-shield-check me-1"></i>Seguro
                            </span>
                        </div>

                        <!-- BOTÓN DE INGRESO -->
                        <div class="d-grid gap-3">
                            <button type="submit"
                                class="btn btn-success btn-lg py-3 rounded-pill shadow-lg hover-scale">
                                <i class="bi bi-box-arrow-in-right me-2"></i>
                                Ingresar al Sistema
                                <i class="bi bi-arrow-right ms-2"></i>
                            </button>

                            <div class="text-center">
                                <span class="text-muted small">¿No tienes cuenta?</span>
                                <a href="<?php echo BASE_URL; ?>views/modules/Navegacion/RegistrarUsuario.php"
                                    class="text-success text-decoration-none fw-semibold small ms-2">
                                    Regístrate aquí
                                </a>
                            </div>
                        </div>
                    </form>
                </div>

                <!-- Footer de la tarjeta -->
                <div class="card-footer bg-success bg-opacity-10 border-0 py-3 text-center">
                    <small class="text-success">
                        <i class="bi bi-shield-check me-1"></i>
                        Instituto Colombiano de Bienestar Familiar - ICBF
                    </small>
                </div>
            </div>

            <!-- Información de contacto adicional -->
            <div class="row mt-4 g-3">
                <div class="col-md-6">
                    <div class="card border-0 bg-light rounded-4 p-3">
                        <div class="d-flex align-items-center">
                            <div class="bg-success bg-opacity-10 rounded-3 p-3 me-3">
                                <i class="bi bi-telephone fs-4 text-success"></i>
                            </div>
                            <div>
                                <h6 class="fw-bold mb-1">Línea de Atención</h6>
                                <p class="mb-0 text-success fw-bold small">01 8000 91 80 80</p>
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
                                <h6 class="fw-bold mb-1">Soporte Técnico</h6>
                                <p class="mb-0 text-success fw-bold small">soporte@icbf.gov.co</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Badges de seguridad -->
            <div class="d-flex justify-content-center gap-3 mt-4">
                <span class="badge bg-light text-success px-3 py-2 rounded-pill">
                    <i class="bi bi-shield-lock me-1"></i>Conexión segura
                </span>
                <span class="badge bg-light text-success px-3 py-2 rounded-pill">
                    <i class="bi bi-person-check me-1"></i>SSL/TLS
                </span>
            </div>
        </div>
    </div>
</div>

<!-- Estilos personalizados -->
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

.hover-scale {
    transition: all 0.3s ease;
}

.hover-scale:hover {
    transform: scale(1.02);
    box-shadow: 0 10px 25px rgba(0, 99, 65, 0.3) !important;
}

.input-group-text {
    border: none;
    background-color: rgba(0, 99, 65, 0.1) !important;
}

.form-control:focus,
.form-select:focus {
    border-color: #006341;
    box-shadow: 0 0 0 0.25rem rgba(0, 99, 65, 0.25);
}

.card {
    transition: all 0.3s ease;
}

.card:hover {
    box-shadow: 0 20px 30px rgba(0, 99, 65, 0.15) !important;
}

.btn-outline-success {
    border-color: #006341;
    color: #006341;
}

.btn-outline-success:hover {
    background-color: #006341;
    border-color: #006341;
}
</style>

<!-- Bootstrap Icons -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">

<!-- Script para mostrar/ocultar contraseña -->
<script>
document.addEventListener('DOMContentLoaded', function() {
    const togglePassword = document.getElementById('togglePassword');
    const passwordInput = document.querySelector('input[name="password"]');

    if (togglePassword && passwordInput) {
        togglePassword.addEventListener('click', function() {
            const type = passwordInput.getAttribute('type') === 'password' ? 'text' : 'password';
            passwordInput.setAttribute('type', type);

            // Cambiar el icono
            const icon = this.querySelector('i');
            if (icon) {
                icon.classList.toggle('bi-eye');
                icon.classList.toggle('bi-eye-slash');
            }
        });
    }

    // Validación de formularios
    var forms = document.querySelectorAll('.needs-validation');
    Array.prototype.slice.call(forms).forEach(function(form) {
        form.addEventListener('submit', function(event) {
            if (!form.checkValidity()) {
                event.preventDefault();
                event.stopPropagation();
            }
            form.classList.add('was-validated');
        }, false);
    });
});
</script>

<?php
include("../../../footer.php");
?>