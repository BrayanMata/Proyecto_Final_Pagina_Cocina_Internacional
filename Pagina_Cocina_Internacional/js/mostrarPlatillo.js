// mostrarPlatillo.js
document.addEventListener("DOMContentLoaded", () => {
  const datos = JSON.parse(localStorage.getItem("platilloSeleccionado"));

  if (datos) {
    const imagenElemento = document.querySelector(".descipcionPlatillo img");
    const tituloElemento = document.querySelector(".descripcion h3");
    const descripcionElemento = document.querySelector(".descripcion p");

    imagenElemento.src = datos.imagen;
    tituloElemento.innerText = datos.nombre;
    descripcionElemento.innerText = datos.descripcion;
  } else {
    document.querySelector(".descripcion h3").innerText = "Platillo no encontrado";
    document.querySelector(".descripcion p").innerText = "No se han encontrado datos del platillo.";
  }
});