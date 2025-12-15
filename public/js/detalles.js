let productoActual = null;

window.addEventListener('mostrarDetalleProducto', e => {
    productoActual = e.detail;

    document.getElementById('detalleNombre').textContent = productoActual.nombre;
    document.getElementById('detalleDescripcion').textContent = productoActual.descripcion || '';
    document.getElementById('detallePrecio').textContent =
        `$${productoActual.precio} MXN`;

    // IMAGEN CORRECTA
    document.getElementById('detalleImagen').src =
        `/electroegam.com/public/imagenes/${productoActual.imagenUrl}`;

    new bootstrap.Modal(
        document.getElementById('modalDetalles')
    ).show();
});

// BOTÓN AGREGAR AL CARRITO (FUNCIONA)
document.getElementById('btnAddCarritoModal')
    .addEventListener('click', () => {

        if (!productoActual) return;

        fetch('/electroegam.com/public/cart/add', {
            method: 'POST',
            headers: {'Content-Type': 'application/json'},
            body: JSON.stringify({ product_id: productoActual.id })
        })
        .then(() => alert('Producto añadido al carrito'));
    });
