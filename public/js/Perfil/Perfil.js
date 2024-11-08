const btnMostrar = document.getElementById('mostrarReseñas');
const btnCerrar = document.getElementById('cerrarNotificacion');
const notificacion = document.getElementById('notificacion');

// Mostrar la notificación
btnMostrar.addEventListener('click', () => {
    notificacion.style.left = '0'; // Mostrar la notificación
});

// Ocultar la notificación
btnCerrar.addEventListener('click', () => {
    notificacion.style.left = '-400px'; // Ocultar la notificación
});
