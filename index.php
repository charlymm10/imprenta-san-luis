<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Imprenta San Luis</title>
    <link rel="stylesheet" href="style.css">
    <script src="script.js" defer></script>
    <link rel="icon" type="image/x-icon" href="favicon.ico">
</head>
<body>
<header>
    <img src="logo imprenta.png" alt="Logo" class="logo">
    <h1>Imprenta San Luis</h1>
    <form class="search-form" method="GET" action="consulta_pagina_web.php" onsubmit="return buscarPedido(event);">
        <label for="pedidoId">ID de Pedido:</label>
        <input type="text" id="pedidoId" name="pedidoId" required>
        <button type="submit">Buscar</button>
    </form>
    <div id="resultadoBusqueda" class="resultado-busqueda">
        <?php
            if (isset($_GET['estado'])) {
                echo '<p>Estado del Pedido: ' . htmlspecialchars($_GET['estado']) . '</p>';
            } else {
                echo '<p>Resultado: -</p>';
            }
        ?>
    </div>
</header>
<main class="centered-content">
    <section id="productos">
        <h2>Productos</h2>
        <div class="gallery">
            <!-- Primera fila de productos -->
            <div class="gallery-row" id="fila1">
                <div class="producto">
                    <img src="sobre.png" alt="Sobre" class="producto-imagen">
                    <h3>Sobre</h3>
                    <p class="info">Precio: $0.7</p>
                </div>
                <div class="producto">
                    <img src="facia.png" alt="Facia Copia" class="producto-imagen">
                    <h3>Facia Copia</h3>
                    <p class="info">Precio: $0.4</p>
                </div>
                <div class="producto">
                    <img src="ruta/a/imagen_facia_flour.jpg" alt="Facia Flour" class="producto-imagen">
                    <h3>Facia Flour</h3>
                    <p class="info">Precio: $0.75</p>
                </div>
                <div class="producto">
                    <img src="ruta/a/imagen_sobre_bolsa.jpg" alt="Sobre Bolsa" class="producto-imagen">
                    <h3>Sobre Bolsa</h3>
                    <p class="info">Precio: $3.5</p>
                </div>
                <div class="producto">
                    <img src="ruta/a/imagen_carpeta.jpg" alt="Carpeta" class="producto-imagen">
                    <h3>Carpeta</h3>
                    <p class="info">Precio: $5</p>
                </div>
                <div class="producto">
                    <img src="ruta/a/imagen_tarjeta.jpg" alt="Tarjeta" class="producto-imagen">
                    <h3>Tarjeta</h3>
                    <p class="info">Precio: $2.0</p>
                </div>
                <div class="producto">
                    <img src="ruta/a/imagen_cartel.jpg" alt="Cartel" class="producto-imagen">
                    <h3>Cartel</h3>
                    <p class="info">Precio: $8.0</p>
                </div>
                <div class="producto">
                    <img src="ruta/a/imagen_etiqueta.jpg" alt="Etiqueta" class="producto-imagen">
                    <h3>Etiqueta</h3>
                    <p class="info">Precio: $1.5</p>
                </div>
                <div class="producto">
                    <img src="ruta/a/imagen_folleto.jpg" alt="Folleto" class="producto-imagen">
                    <h3>Folleto</h3>
                    <p class="info">Precio: $4.5</p>
                </div>
                <div class="producto">
                    <img src="ruta/a/imagen_invitacion.jpg" alt="Invitación" class="producto-imagen">
                    <h3>Invitación</h3>
                    <p class="info">Precio: $3.0</p>
                </div>
            </div>
            <!-- Segunda fila de productos -->
            <div class="gallery-row reverse" id="fila2">
                <div class="producto">
                    <img src="ruta/a/imagen_producto_11.jpg" alt="Producto 11" class="producto-imagen">
                    <h3>Producto 11</h3>
                    <p class="info">Precio: $6.0</p>
                </div>
                <div class="producto">
                    <img src="ruta/a/imagen_producto_12.jpg" alt="Producto 12" class="producto-imagen">
                    <h3>Producto 12</h3>
                    <p class="info">Precio: $7.0</p>
                </div>
                <div class="producto">
                    <img src="ruta/a/imagen_producto_13.jpg" alt="Producto 13" class="producto-imagen">
                    <h3>Producto 13</h3>
                    <p class="info">Precio: $8.0</p>
                </div>
                <div class="producto">
                    <img src="ruta/a/imagen_producto_14.jpg" alt="Producto 14" class="producto-imagen">
                    <h3>Producto 14</h3>
                    <p class="info">Precio: $9.0</p>
                </div>
                <div class="producto">
                    <img src="ruta/a/imagen_producto_15.jpg" alt="Producto 15" class="producto-imagen">
                    <h3>Producto 15</h3>
                    <p class="info">Precio: $10.0</p>
                </div>
                <div class="producto">
                    <img src="ruta/a/imagen_producto_16.jpg" alt="Producto 16" class="producto-imagen">
                    <h3>Producto 16</h3>
                    <p class="info">Precio: $11.0</p>
                </div>
                <div class="producto">
                    <img src="ruta/a/imagen_producto_17.jpg" alt="Producto 17" class="producto-imagen">
                    <h3>Producto 17</h3>
                    <p class="info">Precio: $12.0</p>
                </div>
                <div class="producto">
                    <img src="ruta/a/imagen_producto_18.jpg" alt="Producto 18" class="producto-imagen">
                    <h3>Producto 18</h3>
                    <p class="info">Precio: $13.0</p>
                </div>
                <div class="producto">
                    <img src="ruta/a/imagen_producto_19.jpg" alt="Producto 19" class="producto-imagen">
                    <h3>Producto 19</h3>
                    <p class="info">Precio: $14.0</p>
                </div>
                <div class="producto">
                    <img src="ruta/a/imagen_producto_20.jpg" alt="Producto 20" class="producto-imagen">
                    <h3>Producto 20</h3>
                    <p class="info">Precio: $15.0</p>
                </div>
            </div>
        </div>
    </section>
</main>
<footer>
    <p>© 2024 Imprenta San Luis. Todos los derechos reservados.</p>
</footer>

<script>
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
</script>
</body>
</html>
