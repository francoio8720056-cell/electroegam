class Ventas {
    constructor() {
    this.featuredIds = [1, 9, 7];
    }
    renderizarDestacados() {
    const container = document.getElementById('productos-destacados');
    if (typeof productosData === 'undefined' || !container) {
        console.error("Error: 'productosData' o 'productos-destacados' no encontrados.");
        return;
    }
    const featuredProducts = productosData.filter(producto => this.featuredIds.includes(producto.id));
    container.innerHTML = '';
    featuredProducts.forEach(producto => {
        const productCard = `
        <div class="col-md-4">
            <div class="producto">
                    <img src="${producto.imagenUrl}" alt="${producto.nombre}">
                <div class="info">
                    <h5>${producto.nombre}</h5>
                    <p class="fw-bold fs-5 text-success">$${producto.precio}.00 MXN</p>
                    <button class="btn-agregar" data-product-id="${producto.id}">Agregar al carrito</button>
                    <button class="btn btn-link mt-2 ver-detalle" data-product-id="${producto.id}">Ver detalle</button>
                </div>
            </div>
        </div>`;
        container.innerHTML += productCard;
    });

    document.querySelectorAll('.ver-detalle').forEach(btn => {
        btn.addEventListener('click', (e) => {
        const id = btn.dataset.productId;
        const producto = obtenerProductoPorId(id);
        if (producto) window.dispatchEvent(new CustomEvent('mostrarDetalleProducto', { detail: producto }));
        });
    });

    document.querySelectorAll('.btn-agregar').forEach(btn => {
        btn.addEventListener('click', () => {
        const id = btn.dataset.productId;
        agregarAlCarrito(Number(id));
        });
    });
    }
}
