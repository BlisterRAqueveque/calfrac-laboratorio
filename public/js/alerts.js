function successAlert(
  title = "¡Registro Exitoso!",
  text = "El registro se creó correctamente",
  cancelBtn = 0
) {
  return new Promise((resolve) => {
    Swal.fire({
      title: title,
      text: text,
      icon: "success",
      showCancelButton: cancelBtn,
      customClass: {
        confirmButton: "btn btn-primary w-xs me-2 mt-2",
        cancelButton: "btn btn-danger w-xs mt-2",
      },
    }).then((result) => {
      if (result.isConfirmed) {
        resolve(true);
      }
    });
  });
}

function confirmAlert(
  title = "¿Está seguro de enviar este registro?",
  text = "",
  cancelBtn = 0,
  confirmButtonText = "Enviar Registro",
  cancelButtonText = "Cancelar",
) {
  return new Promise((resolve, reject) => {
    Swal.fire({
      title: title,
      text: text,
      icon: "warning",
      showCancelButton: cancelBtn,
      customClass: {
        confirmButton: "btn btn-primary w-xs me-2 mt-2",
        cancelButton: "btn btn-danger w-xs mt-2",
      },
      confirmButtonText: confirmButtonText,
      cancelButtonText: cancelButtonText,
    }).then((result) => {
      if (result.isConfirmed) {
        resolve(true);
      } else {
        resolve(false);
      }
    });
  });
}

function loadingAlert(title = 'Carga en progreso, por favor espere', html = 'Se están cargando los datos en el sistema', timer = '') {
  return new Promise((resolve, reject) => {
    Swal.fire({
      title: title,
      html: html,
      timer: timer,
      // timerProgressBar: true,
      didOpen: () => {
        Swal.showLoading();
        
      },
    }).then((result) => {
        resolve(result);
    });
  });
}

function loadingAlertPDF(title = 'Se está generando el PDF, por favor espere', html = 'Capturando gráficos', timer = '') {
  return new Promise((resolve, reject) => {
    Swal.fire({
      title: title,
      html: html,
      timer: timer,
      // timerProgressBar: true,
      didOpen: () => {
        Swal.showLoading();
        
      },
    }).then((result) => {
        resolve(result);
    });
  });
}
function errorAlert(
  title = "Error",
  text = "Complete los campos requeridos",
  cancelBtn = 0
) {
  return new Promise((resolve) => {
    Swal.fire({
      title: title,
      text: text,
      icon: "error",
      showCancelButton: cancelBtn,
      customClass: {
        confirmButton: "btn btn-primary w-xs me-2 mt-2",
        cancelButton: "btn btn-danger w-xs mt-2",
      },
    }).then((result) => {
      if (result.isConfirmed) {
        resolve(true);
      }
    });
  });
}
