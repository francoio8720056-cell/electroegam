const USER_LOGGED = !!document.body.dataset.user;

let carrito = [];

if (USER_LOGGED) {
    carrito = JSON.parse(localStorage.getItem('carrito')) || [];
} else {
    localStorage.removeItem('carrito');
}

function agregarAlCarrito(id) {
    carrito.push(id);
    localStorage.setItem('carrito', JSON.stringify(carrito));
    actualizarContador();
}

function actualizarContador() {
    document.getElementById('cart-count').innerText = carrito.length;
}

actualizarContador();

document.addEventListener('DOMContentLoaded', () => {
    const link = document.getElementById('ver-terminos');
    if (!link) return;

    link.addEventListener('click', e => {
        e.preventDefault();
        new bootstrap.Modal(
            document.getElementById('modalTerminos')
        ).show();
    });
});

document.addEventListener('click', e => {
    if (e.target.id === 'btn-terminos') {
        e.preventDefault();
        new bootstrap.Modal(
            document.getElementById('modalTerminos')
        ).show();
    }
});