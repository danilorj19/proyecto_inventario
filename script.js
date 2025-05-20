
/*function iniciarSesion() {
    window.location.href = "menu.php";
}
    

 
function cerrarSesion() {
    window.location.href = "inicio_sesion.php";
}
 */   

function mostrarContrasena() {
    const input = document.getElementById("password");
    if (input.type === "password") {
      input.type = "text";
    } else {
      input.type = "password";
    }
  }