/**
 * En la ventana de 'Información' asigna todos los datos del usuario cuando se haga click en el ojito
 * para poder tener una mejor visualización
 */
function viewPerfilUser(
  id,
  nombre,
  apellido,
  grupo,
  email,
  telefono,
  permisos,
  img,
  fecha_alta,
  usuario_alta,
  credenciales,
  estado
) {
  document.getElementById("setImg").src = img ? _setUrl('uploads/perfiles', img) : _setUrl('img', 'img_default.jpg');
  document.getElementById("setNombre").textContent = nombre + " " + apellido;
  document.getElementById("setGrupo").textContent = grupo;
  document.getElementById("setEmail").innerHTML = `<b>Email :</b> ${email}`;
  document.getElementById("setTelefono").innerHTML =
    telefono != 0 ? `<b>Teléfono :</b> ${telefono}` : `<b>Teléfono :</b> -`;
  document.getElementById(
    "setFechaAlta"
  ).innerHTML = `<b>Fecha de alta :</b> ${fecha_alta}`;
  document.getElementById(
    "setUsuarioAlta"
  ).innerHTML = `<b>¿Quién lo dio de alta? :</b> ${usuario_alta}`;

  // Asignar el email al modal de las credenciales
  document.getElementById('user_id_credencial').value = id
  document.getElementById('email_credencial').value = email

  if (document.getElementById("btnSubmitUserPermissions")) {
    document.querySelector(".user_id_permission").value = id;
    document.getElementById("btnSubmitUserPermissions").style.display = "block";
  }

  if (estado == 1) {
    document.getElementById('btnDesactivarUser').style.display = 'flex';
    document.getElementById('user_id_desactivar').value = id;
    document.getElementById('btnActivarUser').style.display = 'none';
  } else {
    document.getElementById('btnActivarUser').setAttribute('data-id-user', id);
    document.getElementById('user_id_activar').value = id;
    document.getElementById('btnDesactivarUser').style.display = 'none';
    document.getElementById('btnActivarUser').style.display = 'flex';
  }

  _createTabPermissions(permisos);

  document.getElementById('visualize_credentials').style.display = 'block';
  _createTabCredentials(credenciales);
}

/**
 * Poder editar el usuario cuando le haga click en el icono del lapiz 'edición'
 * Se le pasa el usuario por parámetros y desde ahí se encarga de asignar los valores a los inputs
 */
function editarUsuario(user) {
  event.preventDefault();
  document.getElementById("user_id").value = user.id;
  if (user.img) {
    document.getElementById(
      "img_edit"
    ).src = _setUrl('uploads/perfiles', user.img); 
  } else {
    document.getElementById("img_edit").src = _setUrl('img', 'img_default.jpg');
  }
  document.getElementById("edit_apellido").value = user.apellido;
  document.getElementById("edit_name").value = user.nombre;
  document.getElementById("edit_username").value = user.username;
  document.getElementById("edit_email").value = user.email;
  document.getElementById("edit_telefono").value = user.telefono;
  document.getElementById("edit_grupo").value = user.grupo_id;
  if(user.firma){
    document.getElementById(
      "firma_edit"
    ).src = _setUrl('uploads/firmas', user.firma); 
  } else {
    document.getElementById("firma_edit").src = _setUrl('img', 'img_default.jpg');
  }
}

let container_permisos = document.getElementById("container_permisos");

/**
 * Crea la tabla para visualizar las credenciales que se hayan enviado
 * al usuario seleccionado
 */
function _createTabCredentials(credenciales) {
  let container_credenciales = document.getElementById('container_credenciales');
  container_credenciales.innerHTML = '';
  let credentials = JSON.parse(credenciales);
  if (credentials.length > 0) {
    credentials.forEach(c => {
      let {dia, mes, anio, hora, minutos} = formatearFecha(c.created_at)
      let tr = el('tr');
      let td = el('td.border px-2 py-1', `El día ${dia}/${mes}/${anio} a las ${hora}:${minutos} hs`)
      mount(tr, td)
      mount(container_credenciales, tr)
    });
  } else {
    let tr = el('tr', el('td.border px-2 py-1 text-center', 'No se han enviado credenciales'));
    mount(container_credenciales, tr)
  }
}