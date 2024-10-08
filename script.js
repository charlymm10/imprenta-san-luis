// script.js

// Selecciona todas las filas de la galería
const galleryRows = document.querySelectorAll('.gallery-row');
const productos = document.querySelectorAll('.producto');

// Añade eventos a cada fila de la galería
galleryRows.forEach(row => {
    row.addEventListener('mousedown', () => {
        row.style.animationPlayState = 'paused'; // Pausa la animación al presionar el mouse
    });

    row.addEventListener('mouseup', () => {
        row.style.animationPlayState = 'running'; // Reanuda la animación al soltar el mouse
    });

    // Para dispositivos táctiles
    row.addEventListener('touchstart', () => {
        row.style.animationPlayState = 'paused'; // Pausa la animación al tocar
    });

    row.addEventListener('touchend', () => {
        row.style.animationPlayState = 'running'; // Reanuda la animación al soltar
    });
});

// Agrega eventos a cada producto para pausar la animación al pasar el cursor
productos.forEach(producto => {
    producto.addEventListener('mouseenter', () => {
        const row = producto.closest('.gallery-row');
        row.style.animationPlayState = 'paused'; // Pausa la animación al pasar el cursor
    });

    producto.addEventListener('mouseleave', () => {
        const row = producto.closest('.gallery-row');
        row.style.animationPlayState = 'running'; // Reanuda la animación al quitar el cursor
    });
});
