<?php
define("BASE_URL", "/proyectoclon/RSNNA-P.P/");
?>
<?php
include("../../../header.php");
?>
<br>

<body>
    <!-- CONTENIDO PRINCIPAL -->
    <div class="main-content">

        <div class="container mt-12 mb-12">

            <div class="row justify-content-center px-2 px-sm-2">

                <div class="col-12 col-md-10 col-lg-12 col-xl-10">

                    <div class="card shadow">

                        <div class="card-header bg-primary text-white text-center">
                            <h4>Registro de Fundación</h4>
                        </div>

                        <div class="card-body">

                            <form action="procesar_fundacion.php" method="POST">

                                <!-- Datos Generales -->
                                <h5 class="mb-3">Datos Generales</h5>

                                <div class="mb-3">
                                    <label class="form-label">Nombre de la Fundación</label>
                                    <input type="text" name="nombre" class="form-control" required>
                                </div>

                                <div class="mb-3">
                                    <label class="form-label">NIT</label>
                                    <input type="text" name="nit" class="form-control" required>
                                </div>

                                <div class="mb-3">
                                    <label class="form-label">Fecha de Constitución</label>
                                    <input type="date" name="fecha_constitucion" class="form-control" required>
                                </div>

                                <div class="mb-3">
                                    <label class="form-label">Tipo de Fundación</label>
                                    <select name="tipo" class="form-select" required>
                                        <option value="">Seleccione</option>
                                        <option value="social">Social</option>
                                        <option value="educativa">Educativa</option>
                                        <option value="ambiental">Ambiental</option>
                                        <option value="salud">Salud</option>
                                        <option value="otra">Otra</option>
                                    </select>
                                </div>

                                <div class="mb-4">
                                    <label class="form-label">Descripción</label>
                                    <textarea name="descripcion" rows="3" class="form-control" required></textarea>
                                </div>

                                <!-- BOTONES -->
                                <div class="d-grid gap-2 d-sm-flex justify-content-sm-between">

                                    <a href=""></a><button type="submit" class="btn btn-primary flex-fill me-sm-2">
                                        Registrar
                                    </button>

                                    <a href="inicio.php" class="btn btn-secondary flex-fill ms-sm-2">
                                        Cancelar
                                    </a>

                                </div>

                            </form>

                        </div>
                    </div>

                </div>
            </div>

        </div>

    </div>
    <br>
    <!-- FIN CONTENIDO -->
</body>
     <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>


<?php include("../../../footer.php"); ?>