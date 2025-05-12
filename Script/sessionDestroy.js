// Forzar recarga desde el servidor si se navega hacia atrás
window.addEventListener("pageshow", function (event) {
    if (event.persisted || (window.performance && window.performance.navigation.type === 2)) {
        window.location.reload(true);
    }
});