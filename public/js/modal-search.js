document.addEventListener('DOMContentLoaded', () => {
    const input = document.getElementById('search-input');
    const cont = document.getElementById('suggestions-container');

    if (!input || !window.productosData) return;

    input.addEventListener('input', e => {
        const q = e.target.value.toLowerCase().trim();
        cont.innerHTML = '';

        if (q.length < 2) return;

        window.productosData
            .filter(p => p.nombre.toLowerCase().includes(q))
            .slice(0, 5)
            .forEach(p => {
                const div = document.createElement('div');
                div.className = 'p-2 border bg-white suggestion-item';
                div.style.cursor = 'pointer';
                div.innerHTML = `
                    <img src="/electroegam.com/public/imagenes/${p.imagenUrl}" width="40" class="me-2">
                    ${p.nombre}
                `;
                div.onclick = () => {
                    window.dispatchEvent(
                        new CustomEvent('mostrarDetalleProducto', { detail: p })
                    );
                    cont.innerHTML = '';
                    input.value = '';
                };
                cont.appendChild(div);
            });
    });

    document.addEventListener('click', e => {
        if (!input.contains(e.target)) cont.innerHTML = '';
    });
});
