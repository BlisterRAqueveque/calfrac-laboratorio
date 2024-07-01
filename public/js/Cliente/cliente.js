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