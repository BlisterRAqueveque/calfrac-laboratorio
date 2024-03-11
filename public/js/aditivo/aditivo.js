function editarAditivo(aditivo) {
    event.preventDefault();
    document.getElementById('aditivo_id').value = aditivo.id;
    document.getElementById('edit_aditivo').value = aditivo.nombre;
}