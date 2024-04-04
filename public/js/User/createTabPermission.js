/**
 * Genera lo que es la ventana de 'permisos' cuando se le haga click en el ojito (el icono al lado del nombre)
 * Trae todos los permisos y aquellos permisos que el usuario tiene asignado los pinta de color azul
 * En esta ventana se puede remover permisos así como también agregar nuevos permisos
 */
function _createTabPermissions(user_permissions) {
  container_permisos.innerHTML = "";
  let darkmode = false;
  if (localStorage.getItem('darkmode')) {
    darkmode = true;
  }
  let permissionsTab = [];
  let permiso;
  let user_permisos = JSON.parse(user_permissions);

  permisos_bd.forEach((p) => {
    let tiene_permiso = false;
    for (let i = 0; i < user_permisos.length; i++) {
      if (user_permisos[i].permiso_id == p.id) {
        permiso = {
          id: p.id,
          nombre: p.nombre,
          tiene_permiso: true,
        };
        permissionsTab.push(permiso);
        tiene_permiso = true;
        break;
      }
    }
    if (!tiene_permiso) {
      permiso = {
        id: p.id,
        nombre: p.nombre,
        tiene_permiso: false,
      };
      permissionsTab.push(permiso);
    }
  });

  permissionsTab.forEach((e) => {
    let tr, td, svg, path, div, p, span;

    tr = el("tr.border border-b-white dark:border-none");
    td = el("td.cursor-pointer rounded-md", {
      "data-permiso": e.id,
    });
    if (e.tiene_permiso) {
      div = el(
        "div.flex justify-between items-center border p-2 rounded-sm dark:border-none"
      );
      p = el("p.mb-0", e.nombre);
      span = el(
        "span.text-xs uppercase font-semibold px-2 py-1 rounded-full text-sky-600 border-blue-600 bg-blue-200 dark:bg-red-200",
        "asignado"
      );
    } else {
      div = el(
        "div.flex justify-between items-center border p-2 rounded-sm dark:border-none dark:bg-gray-900 dark:bg-opacity-80"
      );
      p = el("p.mb-0", e.nombre);
      span = el(
        "span.text-xs uppercase font-semibold px-2 py-1 rounded-full border text-gray-500 border-gray-500 bg-gray-200",
        "sin asignar"
      );
    }

    mount(div, p);
    mount(div, span);
    td.setAttribute("onclick", `assignedPermission(this)`);
    mount(td, div);
    mount(tr, td);
    mount(container_permisos, tr);
  });

  // Con almacenar en esta variable los permisos del usuario, en la función assignedPermission puedo comparar
  // cuales están asignados y cuales no para poder enviarlos a la BD
  user_permissions_assigned = permissionsTab;
}
