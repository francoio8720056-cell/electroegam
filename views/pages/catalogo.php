<section id="catalogo" class="productos container my-5">

<?php
$porCategoria = [];

foreach ($productos as $p) {
    $cat = $p['categoria'] ?? 'Sin Categoría';
    $porCategoria[$cat][] = $p;
}
?>

<?php foreach ($porCategoria as $categoria => $items): ?>
    <div class="row">
        <div class="col-12 mt-4">
            <h3 class="fw-bold color-principal-texto"><?= htmlspecialchars($categoria) ?></h3>
            <hr>
        </div>

        <?php foreach ($items as $p): ?>
            <div class="col-lg-3 col-md-4 col-sm-6">
                <div class="producto text-center p-2">

                    <img
                        src="/electroegam.com/public/imagenes/<?= htmlspecialchars($p['imagenUrl']) ?>"
                        alt="<?= htmlspecialchars($p['nombre']) ?>"
                        style="height:150px; object-fit:cover; width:100%;">

                    <div class="info mt-2">
                        <h6><?= htmlspecialchars($p['nombre']) ?></h6>

                        <button
                            class="btn btn-sm btn-link ver-detalle"
                            data-id="<?= $p['id'] ?>"
                            data-nombre="<?= htmlspecialchars($p['nombre']) ?>"
                            data-descripcion="<?= htmlspecialchars($p['descripcion']) ?>"
                            data-precio="<?= $p['precio'] ?>"
                            data-imagen="/electroegam.com/public/imagenes/<?= htmlspecialchars($p['imagenUrl']) ?>">
                            Ver
                        </button>

                        <button
                            class="btn btn-sm btn-primary add-carrito"
                            data-id="<?= $p['id'] ?>">
                            Añadir
                        </button>
                    </div>

                </div>
            </div>
        <?php endforeach; ?>
    </div>
<?php endforeach; ?>

</section>
