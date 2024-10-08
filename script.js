// Selecciona todas las filas de la galería
const galleryRows = document.querySelectorAll('.gallery-row');
const productos = document.querySelectorAll('.producto');

galleryRows.forEach(row => {
    row.addEventListener('mousedown', () => {
        row.style.animationPlayState = 'paused'; // Pausa la animación
    });

    row.addEventListener('mouseup', () => {
        row.style.animationPlayState = 'running'; // Reanuda la animación
    });

    // Para dispositivos táctiles
    row.addEventListener('touchstart', () => {
        row.style.animationPlayState = 'paused'; // Pausa la animación
    });

    row.addEventListener('touchend', () => {
        row.style.animationPlayState = 'running'; // Reanuda la animación
    });
});

// Agrega eventos a cada producto para pausar la animación al pasar el cursor
productos.forEach(producto => {
    producto.addEventListener('mouseenter', () => {
        const row = producto.closest('.gallery-row');
        row.style.animationPlayState = 'paused'; // Pausa la animación
    });

    producto.addEventListener('mouseleave', () => {
        const row = producto.closest('.gallery-row');
        row.style.animationPlayState = 'running'; // Reanuda la animación
    });
});
