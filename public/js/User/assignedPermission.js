const form_permissions_update = document.getElementById(
  "form_permissions_update"
);
var remove_permissions = [];
var new_permissions = [];

/**
 * Cuando escuche por un click, los inserta a un formulario para que cuando
 * se actualicen los permisos, se agreguen o se quiten los permisos al usuario
 * dependiendo lo que se seleccione.
 */
function assignedPermission(permiso) {
  let div_permiso = permiso.firstElementChild;
  let span = div_permiso.getElementsByTagName("span")[0];

  let tiene_permiso = false;
  let permiso_id = permiso.getAttribute("data-permiso");

  for (let i = 0; i < user_permissions_assigned.length; i++) {
    if (
      user_permissions_assigned[i].id == permiso_id &&
      user_permissions_assigned[i].tiene_permiso
    ) {
      if (remove_permissions.includes(permiso_id)) {
        let permiso_remove = remove_permissions.indexOf(permiso_id);
        if (permiso_remove !== -1) {
          remove_permissions.splice(permiso_remove, 1);
        }
        div_permiso.classList.remove("permission_remove");
        span.classList.remove("bg-red-50", "text-red-600", "border-red-500");

        div_permiso.classList.add("permission_selected");
        span.classList.add("bg-sky-50", "text-sky-600", "border-sky-500");
        span.textContent = "asignado";
      } else {
        div_permiso.classList.remove("border");
        div_permiso.classList.remove("permission_selected");
        span.classList.remove("bg-white", "text-sky-600", "border-gray-500");

        div_permiso.classList.add("permission_remove");
        span.classList.add("bg-red-50", "text-red-600", "border-red-500");
        span.textContent = "remover";

        remove_permissions.push(permiso_id);
      }

      tiene_permiso = true;
      break;
    }
  }

  if (!tiene_permiso) {
    if (new_permissions.includes(permiso_id)) {
      let permiso_remove = new_permissions.indexOf(permiso_id);
      if (permiso_remove !== -1) {
        new_permissions.splice(permiso_remove, 1);
      }
      div_permiso.classList.add("border");
      div_permiso.classList.remove("permission_new");
      span.classList.add("bg-white", "border-gray-500");
      span.classList.remove(
        "bg-green-50",
        "text-green-900",
        "border-green-500"
      );
      span.textContent = "sin asignar";
    } else {
      div_permiso.classList.remove("border");
      div_permiso.classList.add("permission_new");
      span.classList.remove("bg-white", "border-gray-500");
      span.classList.add("bg-green-50", "text-green-900", "border-green-500");
      span.textContent = "asignar";
      new_permissions.push(permiso_id);
    }
  }
  //console.log("Permisos a quitarle del usuario: ", remove_permissions);
  //console.log("Permisos a agregarle al usuario: ", new_permissions);
}
