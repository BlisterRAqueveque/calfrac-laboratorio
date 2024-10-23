function formatearFecha(fecha) {
  let newFecha = new Date(fecha);

  let anio = newFecha.getFullYear();
  let mes = ("0" + (newFecha.getMonth() + 1)).slice(-2);
  let dia = ("0" + newFecha.getDate()).slice(-2);
  let hora = ("0" + newFecha.getHours()).slice(-2);
  let minutos = ("0" + newFecha.getMinutes()).slice(-2);
  let segundos = ("0" + newFecha.getSeconds()).slice(-2);

  return {
    anio: anio,
    mes: mes,
    dia: dia,
    hora: hora,
    minutos: minutos,
    segundos: segundos,
  };
}
