<section class="hero mb-0 pb-0">
    <div id="heroCarousel" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-indicators">
                <button type="button" data-bs-target="#heroCarousel" data-bs-slide-to="0" class="active"></button>
                <button type="button" data-bs-target="#heroCarousel" data-bs-slide-to="1"></button>
                <button type="button" data-bs-target="#heroCarousel" data-bs-slide-to="2"></button>
            </div>

            <div class="carousel-inner">
                <div class="carousel-item active" data-bs-interval="5000">
                    <div class="container d-flex flex-column justify-content-center align-items-center text-center py-5" style="height:400px;">
                        <h1>Bienvenido a la Tienda Virtual de ElectroEGAM</h1>
                        <p>Descubre los mejores precios en componentes para tus proyectos.</p>
                        <a href="/electroegam.com/public/catalogo" class="btn btn-primary btn-lg">Ver Catálogo</a>
                    </div>
                </div>
                <div class="carousel-item" data-bs-interval="5000">
                    <div class="container d-flex flex-column justify-content-center align-items-center text-center py-5" style="height:400px;">
                    <h2>¡Conócenos!</h2>
                        <p>Conoce nuestra visión y misión.</p>
                        <a href="/electroegam.com/public/conocenos" class="btn btn-success btn-lg">Adelante</a>
                    </div>
                </div>
                <div class="carousel-item" data-bs-interval="5000">
                    <div class="container d-flex flex-column justify-content-center align-items-center text-center py-5" style="height:400px;">
                        <h2>¿Necesitas Ayuda?</h2>
                        <p>Contáctanos para asesoría en tus proyectos de electrónica.</p>
                        <a href="/electroegam.com/public/contacto" class="btn btn-warning btn-lg">Contacto</a>
                    </div>
                </div>
            </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#heroCarousel" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Anterior</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#heroCarousel" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Siguiente</span>
                </button>
    </div>
</section>

<section id="productos" class="productos container my-4">
    <div class="row justify-content-center g-3">

        <?php foreach ($productos as $p): ?>
        <div class="col-lg-4 col-md-4 col-sm-12">
            <div class="producto text-center p-3 h-100">
                <img src="/electroegam.com/public/imagenes/<?= $p['imagenUrl'] ?>"
                    class="img-fluid mb-2"
                    style="height:150px; object-fit:cover;">

                <h6><?= $p['nombre'] ?></h6>
                <p class="fw-bold">$<?= $p['precio'] ?> MXN</p>

                <div class="d-flex justify-content-center gap-2">
                    <button class="btn btn-sm btn-outline-primary"
                        onclick='window.dispatchEvent(
                        new CustomEvent("mostrarDetalleProducto", {
                        detail: <?= json_encode($p, JSON_UNESCAPED_UNICODE) ?>
                        })
                        )'>
                        Ver detalles
                    </button>
                </div>
            </div>
        </div>
        <?php endforeach; ?>

    </div>
</section>