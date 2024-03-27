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
  usuario_alta
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

  if (document.getElementById("btnSubmitUserPermissions")) {
    document.querySelector(".user_id_permission").value = id;
    document.getElementById("btnSubmitUserPermissions").style.display = "block";
  }
  _createTabPermissions(permisos);
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
}

let container_permisos = document.getElementById("container_permisos");
