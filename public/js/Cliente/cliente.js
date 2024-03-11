function editarCliente(cliente) {
    event.preventDefault();
    document.getElementById('cliente_id').value = cliente.id;
    document.getElementById('edit_cliente').value = cliente.nombre;
}