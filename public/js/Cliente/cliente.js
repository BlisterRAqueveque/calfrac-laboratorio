function editarCliente(cliente) {
    event.preventDefault();
    document.getElementById('cliente_id').value = cliente.id;
    document.getElementById('edit_cliente').value = cliente.nombre;
}

function deshabilitarCliente(cliente2) {
    event.preventDefault();
    document.getElementById('cliente2_id').value = cliente2.id;
    document.getElementById('deshabilitar_cliente').value = cliente2.nombre;
}

function habilitarCliente(cliente3) {
    event.preventDefault();
    document.getElementById('cliente3_id').value = cliente3.id;
    document.getElementById('habilitar_cliente').value = cliente3.nombre;
}