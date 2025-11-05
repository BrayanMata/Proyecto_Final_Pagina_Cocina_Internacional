function mostrarCamposEstudiante() {
    const tipo = document.getElementById("tipo_usuario").value;
    const campos = document.getElementById("campos_estudiante");

    if (tipo === "Estudiante") {
        campos.style.display = "block";
        document.getElementById("carrera").required = true;
        document.getElementById("matricula").required = true;
    } else {
        campos.style.display = "none";
        document.getElementById("carrera").required = false;
        document.getElementById("matricula").required = false;
    }
}