// Función para cambiar la imagen cuando se hace clic en un punto
function setupImageSwitching(pointsId, imgId) {
    const points = document.querySelectorAll(`#${pointsId} .point`);
    const productImg = document.getElementById(imgId);

    points.forEach((point, index) => {
        point.addEventListener("click", () => {
            // Cambiar la imagen al hacer clic en el punto
            productImg.src = point.getAttribute("data-image");

            // Actualizar el estado activo del punto
            points.forEach(p => p.classList.remove("active"));
            point.classList.add("active");
        });
    });
}

// Configurar el cambio de imagen para cada tarjeta de producto
setupImageSwitching("points-1", "product-img-1");
setupImageSwitching("points-2", "product-img-2");
setupImageSwitching("points-3", "product-img-3");
setupImageSwitching("points-4", "product-img-4");
setupImageSwitching("points-5", "product-img-5");
setupImageSwitching("points-6", "product-img-6");
setupImageSwitching("points-7", "product-img-7");
setupImageSwitching("points-8", "product-img-8");
setupImageSwitching("points-9", "product-img-9");
setupImageSwitching("points-10", "product-img-10");
setupImageSwitching("points-11", "product-img-11");
setupImageSwitching("points-12", "product-img-12");
setupImageSwitching("points-13", "product-img-13");
setupImageSwitching("points-14", "product-img-14");
setupImageSwitching("points-15", "product-img-15");
setupImageSwitching("points-16", "product-img-16");
setupImageSwitching("points-17", "product-img-17");
setupImageSwitching("points-18", "product-img-18");
setupImageSwitching("points-19", "product-img-19");
setupImageSwitching("points-20", "product-img-20");

