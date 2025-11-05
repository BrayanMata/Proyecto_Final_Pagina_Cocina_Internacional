const slides = document.querySelectorAll('.imagen_carrusel');
const btnIzquierda = document.querySelector('.flecha_Izquierda');
const btnDerecha = document.querySelector('.flecha_Derecha');

let indice = 0;
let intervalo;

// Cambiar slide
function mostrarSlide(nuevoIndice) {
    slides[indice].classList.remove('activo');
    indice = (nuevoIndice + slides.length) % slides.length;
    slides[indice].classList.add('activo');
}

// Flechas manuales
btnDerecha.addEventListener('click', () => {
    mostrarSlide(indice + 1);
    reiniciarAuto();
});

btnIzquierda.addEventListener('click', () => {
    mostrarSlide(indice - 1);
    reiniciarAuto();
});

// Movimiento automático
function autoPlay() {
    intervalo = setInterval(() => {
        mostrarSlide(indice + 1);
    }, 4000); // segundos (1000 = 1s)
}

// Reinicia el autoplay cuando se usa manualmente
function reiniciarAuto() {
    clearInterval(intervalo);
    autoPlay();
}

autoPlay();