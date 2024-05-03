const carouselImages = document.getElementById("carouselImages");
const dots = document.querySelectorAll(".dot");
const totalSlides = carouselImages.children.length;
let currentSlide = 0; // Índice para el primer slide visible

// Función para mostrar un slide con transición suave o instantánea
function showSlide(slideIndex, instant = false) {
    const slideWidth = carouselImages.children[0].clientWidth;

    if (instant) {
        carouselImages.style.transition = 'none'; // Sin transición
    } else {
        carouselImages.style.transition = 'transform 0.5s ease-in-out'; // Transición suave
    }

    // Desplazamiento para mostrar el slide correcto
    carouselImages.style.transform = `translateX(-${slideIndex * slideWidth}px)`;

    if (instant) {
        setTimeout(() => {
            carouselImages.style.transition = 'transform 0.5s ease-in-out';
        }, 50); // Breve pausa para reiniciar la transición suave
    }

    currentSlide = slideIndex; // Actualizar el índice
    updateDots(); // Llamar a la función para actualizar los puntos de navegación
}

// Función para actualizar los puntos de navegación
function updateDots() {
    dots.forEach((dot, index) => {
        dot.classList.toggle("active", index === currentSlide); // Activar/desactivar el punto correcto
    });
}

// Evento para el botón "siguiente"
document.getElementById("nextBtn").addEventListener("click", () => {
    if (currentSlide < totalSlides - 1) { 
        // Mover al siguiente slide con transición suave
        showSlide(currentSlide + 1);
    } else {
        // Mover directamente al primer slide sin transición suave
        showSlide(0, true); // Mover del último al primer slide visible
    }
});

// Evento para el botón "anterior"
document.getElementById("prevBtn").addEventListener("click", () => {
    if (currentSlide > 0) { 
        // Mover al anterior slide con transición suave
        showSlide(currentSlide - 1);
    } else {
        // Mover directamente al último slide sin transición suave
        showSlide(totalSlides - 1, true); // Mover del primer al último visible
    }
});

// Configurar la navegación con los puntos
dots.forEach((dot, index) => {
    dot.addEventListener("click", () => showSlide(index)); // Navegación con puntos
});

// Iniciar el carrusel
showSlide(0); // Comenzar en el primer slide visible
