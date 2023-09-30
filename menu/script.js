// Función para mostrar u ocultar el menú desplegable
function myFunction() {
    var dropdown = document.getElementById("myDropdown");
    if (dropdown.style.display === "block") {
        dropdown.style.display = "none";
    } else {
        dropdown.style.display = "block";
    }
}

// Cerrar el menú desplegable cuando se hace clic fuera de él
window.onclick = function(event) {
    if (!event.target.matches('.dropbtn')) {
        var dropdown = document.getElementById("myDropdown");
        if (dropdown.style.display === "block") {
            dropdown.style.display = "none";
        }
    }
}
