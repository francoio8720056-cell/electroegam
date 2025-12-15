<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Tienda Virtual</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="/electroegam.com/public/css/styles.css">
</head>
<body>

<?php
$usarHeader2 = $usarHeader2 ?? false;
require_once VIEWS_PATH . '/layouts/' . ($usarHeader2 ? 'header2.php' : 'header.php');
?>

<main>
    <?php require_once $content; ?>
</main>

<?php require_once VIEWS_PATH . '/layouts/footer.php'; ?>

<div class="modal fade" id="modalDetalles" tabindex="-1">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content p-3">
            <div class="modal-header">
                <h5 id="detalleNombre"></h5>
                <button class="btn-close" data-bs-dismiss="modal"></button>
            </div>
            <div class="modal-body text-center">
                <img id="detalleImagen" class="img-fluid mb-3">
                <p id="detalleDescripcion"></p>
                <h4 id="detallePrecio"></h4>
            </div>
            <div class="modal-footer">
                <button id="btnAddCarritoModal" class="btn btn-primary">
                Añadir al carrito
                </button>
            </div>
        </div>
    </div>
</div>

<div class="modal fade" id="modalTerminos" tabindex="-1">
    <div class="modal-dialog modal-dialog-centered modal-lg">
        <div class="modal-content">
        <div class="modal-header">
            <h5 class="modal-title">Términos y Condiciones</h5>
            <button class="btn-close" data-bs-dismiss="modal"></button>
        </div>
        <div class="modal-body">
            <p>
            El uso de esta plataforma implica la aceptación de términos generales.
            ElectroEGAM no se hace responsable por mal uso de los productos.
            </p>
            <p>
            Los datos proporcionados serán utilizados únicamente para fines
            comerciales y de contacto.
            </p>
        </div>
        </div>
    </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

<script src="/electroegam.com/public/js/articulos.js"></script>
<script src="/electroegam.com/public/js/masventas.js"></script>
<script src="/electroegam.com/public/js/cart.js"></script>
<script>
    window.productosData = <?= json_encode($productos ?? []) ?>;
</script>
<script src="/electroegam.com/public/js/modal-search.js"></script>
<script src="/electroegam.com/public/js/detalles.js"></script>
<script>
    document.addEventListener('DOMContentLoaded', () => {
        if (typeof Ventas !== 'undefined') {
            const gestor = new Ventas();
            gestor.renderizarDestacados();
        }
    });
</script>

<script>
const productosData = <?= json_encode($productos, JSON_UNESCAPED_UNICODE) ?>;
</script>


</body>
</html>