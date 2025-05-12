document.addEventListener("DOMContentLoaded", function () {
    
    const params = new URLSearchParams(window.location.search);
    const error = params.get("error");
    const success = params.get("success");

    if (error === "pass_mismatch") {
        Swal.fire({
            icon: 'error',
            title: 'Las contraseñas no coinciden',
            text: 'Asegúrate de que ambas contraseñas sean iguales.',
            confirmButtonColor: '#d33'
        });
    } else if (error === "invalid_email") {
        Swal.fire({
            icon: 'warning',
            title: 'Correo inválido',
            text: 'Introduce un correo electrónico válido.',
            confirmButtonColor: '#f39c12'
        });
    } else if (error === "empty_fields") {
        Swal.fire({
            icon: 'info',
            title: 'Campos vacíos',
            text: 'Debes completar todos los campos.',
            confirmButtonColor: '#3498db'
        });
    } else if (error === "correo") {
        Swal.fire({
            icon: 'error',
            title: 'Correo no encontrado',
            text: 'No hay ninguna cuenta registrada con ese correo.',
            confirmButtonColor: '#e74c3c'
        });
    } else if (error === "contraseña") {
        console.log("⚠️ Error: contraseña incorrecta detectado en la URL"); // 👈 Agrega este también
        Swal.fire({
            icon: 'error',
            title: 'Contraseña incorrecta',
            text: 'La contraseña que ingresaste no es correcta.',
            confirmButtonColor: '#c0392b'
        });
    } else if (success === "registered") {
        Swal.fire({
            icon: 'success',
            title: '¡Registro exitoso!',
            text: 'Ahora puedes iniciar sesión con tu cuenta.',
            confirmButtonColor: '#2ecc71'
        });
    }
});
