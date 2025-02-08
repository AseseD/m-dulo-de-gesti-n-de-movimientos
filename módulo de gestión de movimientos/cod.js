// script.js
document.getElementById('movimientos-form').addEventListener('submit', function(event) {
    var nombreUtil = document.getElementById('nombre_util').value;
    var cantidad = document.getElementById('cantidad').value;

    if (nombreUtil.trim() === '' || cantidad <= 0) {
        alert('Por favor, complete todos los campos correctamente.');
        event.preventDefault();
    }
});