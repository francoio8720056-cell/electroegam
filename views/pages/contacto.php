<?php
$content = __FILE__;
require_once VIEWS_PATH . '/layouts/main.php';
?>

<section class="container mt-4">
    <h2>Contactanos</h2>
    <form id="contact-form">
        <div class="mb-3"><label class="form-label">Nombre</label><input class="form-control" id="contact-nombre" required></div>
        <div class="mb-3"><label class="form-label">Correo</label><input type="email" class="form-control" id="contact-email" required></div>
        <div class="mb-3"><label class="form-label">Mensaje</label><textarea class="form-control" id="contact-mensaje" rows="5" required></textarea></div>
        <button class="btn btn-primary" type="submit">Enviar</button>
    </form>
</section>
