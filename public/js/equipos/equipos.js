function deleteEquipo(equipo2){
    event.preventDefault();
    document.getElementById('equipo2_id').value = equipo2.id;
    document.getElementById('delete_equipo').value = equipo2.nombre;

}

function editarEquipo(equipo) {
    event.preventDefault();
    document.getElementById('equipo_id').value = equipo.id;
    document.getElementById('edit_equipo').value = equipo.nombre;
}

