function editarYacimiento(yacimiento) {
    event.preventDefault();
    document.getElementById('yacimiento_id').value = yacimiento.id;
    document.getElementById('edit_yacimiento').value = yacimiento.nombre;
}

function deshabilitarYacimiento(yacimiento2) {
    event.preventDefault();
    document.getElementById('yacimiento2_id').value = yacimiento2.id;
    document.getElementById('delete_yacimiento').value = yacimiento2.nombre;
}

function habilitarYacimiento(yacimiento3) {
    event.preventDefault();
    document.getElementById('yacimiento3_id').value = yacimiento3.id;
    document.getElementById('habilitar_yacimiento').value = yacimiento3.nombre;
}