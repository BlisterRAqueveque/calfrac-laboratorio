function editarEquipo(equipo) {
    event.preventDefault();
    document.getElementById('equipo_id').value = equipo.id;
    document.getElementById('edit_equipo').value = equipo.nombre;
}