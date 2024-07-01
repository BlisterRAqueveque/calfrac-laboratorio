function editarAditivo(aditivo) {
    event.preventDefault();
    document.getElementById('aditivo_id').value = aditivo.id;
    document.getElementById('edit_aditivo').value = aditivo.nombre;
}

function deshabilitarAditivo(aditivo2) {
    event.preventDefault();
    document.getElementById('aditivo2_id').value = aditivo2.id;
    document.getElementById('deshabilitar_aditivo').value = aditivo2.nombre;
}