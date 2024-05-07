const points = document.querySelectorAll('.point'); // Obtener todos los puntos
const productImage = document.getElementById('product-img'); // Obtener la imagen del producto

// Manejar el evento de clic en cada punto
points.forEach((point) => {
    point.addEventListener('click', () => {
        // Eliminar la clase 'active' de todos los puntos
        points.forEach((p) => p.classList.remove('active'));
        
        // Agregar la clase 'active' al punto clicado
        point.classList.add('active');
        
        // Cambiar la imagen del producto según el 'data-image' del punto clicado
        productImage.src = point.dataset.image;
    });
});
