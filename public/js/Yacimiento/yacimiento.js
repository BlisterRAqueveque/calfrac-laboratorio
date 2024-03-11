function editarYacimiento(yacimiento) {
    event.preventDefault();
    document.getElementById('yacimiento_id').value = yacimiento.id;
    document.getElementById('edit_yacimiento').value = yacimiento.nombre;
}