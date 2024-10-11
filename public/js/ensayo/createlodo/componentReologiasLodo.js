let accordionItem, table, thead, tbody, tr, th, td;
const accordionLodo = document.getElementById("accordionReologiaLodo");

const componentReologiasLodo = (data = {}) => {
  console.log(data); // Para verificar los valores de 'data'
  //console.log(reologias); 
  // Contenedor principal y título
  accordionItem = el("div.mb-2.text-center");
  const titulo = el("h5.text-center.text-xl.font-bold.mb-4", "Caracterización de Lodo");
  mount(accordionItem, titulo); // Montamos el título

  // Contenedor para las dos tablas
  const tablasContainer = el("div.flex.justify-between");

  // Primera tabla: Caracterización del Lodo
  let tableContainer = el("div.w-1/2.px-2"); // Contenedor de la tabla con 50% de ancho
  table = el("table.w-full.text-sm.border.border-gray-300");

  // Thead
  thead = el("thead.bg-gray-200.text-gray-700");
  tr = el("tr");

  // Headers de la primera tabla
  ["Tipo de Lodo", "Base", "Dens. (ppg)", "Cia de Lodos"].forEach(headerText => {
    th = el("th.p-1.text-center.border.border-gray-300", headerText);
    mount(tr, th);
  });

  mount(thead, tr);
  mount(table, thead);

  // Body de la tabla
  tbody = el("tbody");
  tr = el("tr");

  // Celdas de la primera tabla con datos
  td = el("td.py-2.px-1.text-center.border", data.tipo_lodo ? data.tipo_lodo : '-');
  mount(tr, td);
  td = el("td.py-2.px-1.text-center.border", data.base ? data.base : '-');
  mount(tr, td);
  td = el("td.py-2.px-1.text-center.border", data.densidad ? data.densidad : '-');
  mount(tr, td);
  td = el("td.py-2.px-1.text-center.border", data.cia_lodo ? data.cia_lodo : '-');
  mount(tr, td);

  mount(tbody, tr);
  mount(table, tbody);
  mount(tableContainer, table); // Montamos la primera tabla en su contenedor
  mount(tablasContainer, tableContainer); // Montamos el contenedor de la tabla en el contenedor principal

  // Segunda tabla: Tiempos
  tableContainer = el("div.w-1/2.px-2"); // Contenedor de la segunda tabla con 50% de ancho
  table = el("table.w-full.text-sm.border.border-gray-300");

  // Thead
  thead = el("thead.bg-gray-200.text-gray-700");
  tr = el("tr");

  // Headers de la segunda tabla
  ["Tiempo", "10 seg", "10 min", "30 min"].forEach(headerText => {
    th = el("th.p-1.text-center.border.border-gray-300", headerText);
    mount(tr, th);
  });

  mount(thead, tr);
  mount(table, thead);

  // Body de la tabla
  tbody = el("tbody");
  tr = el("tr");

  // Celdas de la segunda tabla con datos
  td = el("td.py-2.px-1.text-center.border", data.tiempo ? data.tiempo : '-');
  mount(tr, td);
  td = el("td.py-2.px-1.text-center.border", data.seg_10 ? data.seg_10 : '-');
  mount(tr, td);
  td = el("td.py-2.px-1.text-center.border", data.min_10 ? data.min_10 : '-');
  mount(tr, td);
  td = el("td.py-2.px-1.text-center.border", data.min_30 ? data.min_30 : '-');
  mount(tr, td);

  mount(tbody, tr);
  mount(table, tbody);
  mount(tableContainer, table); // Montamos la segunda tabla en su contenedor
  mount(tablasContainer, tableContainer); // Montamos el contenedor de la tabla en el contenedor principal

  // Montamos el contenedor de las tablas dentro del contenedor principal
  mount(accordionItem, tablasContainer);

  // Contenedor para la tercera tabla
  const terceraTablaContainer = el("div.w-full.pt-4"); // Contenedor de la tercera tabla con padding top


   // Tercera tabla: Caracterización de Temperatura y RPM
   tableContainer = el("div.px-2");
   table = el("table.w-full.text-sm.border.border-gray-300");
 
   // Thead para la tercera tabla
   thead = el("thead.bg-gray-200.text-gray-700");
   tr = el("tr");
 
   // Headers de la tercera tabla
   ["Temp. BHCT", "600 rpm", "300 rpm", "200 rpm", "100 rpm", "60 rpm", "30 rpm", "6 rpm", "3 rpm", "VP", "YP"].forEach(headerText => {
     th = el("th.p-1.text-center.border.border-gray-300", headerText);
     mount(tr, th);
   });
 
   mount(thead, tr);
   mount(table, thead);
 
   // Body de la tercera tabla
   tbody = el("tbody");
   tr = el("tr");
 
  // Celdas de la tercera tabla con datos
  td = el("td.py-2.px-1.text-center.border", data.temp_bhct ? data.temp_bhct : '-');
  mount(tr, td);
  td = el("td.py-2.px-1.text-center.border", data.temp_600_rpm_c ? data.temp_600_rpm_c : '-');
  mount(tr, td);
  td = el("td.py-2.px-1.text-center.border", data.temp_300_rpm_c ? data.temp_300_rpm_c : '-');
  mount(tr, td);
  td = el("td.py-2.px-1.text-center.border", data.temp_200_rpm_c ? data.temp_200_rpm_c : '-');
  mount(tr, td);
  td = el("td.py-2.px-1.text-center.border", data.temp_100_rpm_c ? data.temp_100_rpm_c : '-');
  mount(tr, td);
  td = el("td.py-2.px-1.text-center.border", data.temp_60_rpm_c ? data.temp_60_rpm_c : '-');
  mount(tr, td);
  td = el("td.py-2.px-1.text-center.border", data.temp_30_rpm_c ? data.temp_30_rpm_c : '-');
  mount(tr, td);
  td = el("td.py-2.px-1.text-center.border", data.temp_6_rpm_c ? data.temp_6_rpm_c : '-');
  mount(tr, td);
  td = el("td.py-2.px-1.text-center.border", data.temp_3_rpm_c ? data.temp_3_rpm_c : '-');
  mount(tr, td);
  td = el("td.py-2.px-1.text-center.border", data.temp_vp ? data.temp_vp : '-');
  mount(tr, td);
  td = el("td.py-2.px-1.text-center.border", data.temp_yp ? data.temp_yp : '-');
  mount(tr, td);

  mount(tbody, tr);
  mount(table, tbody);
  mount(tableContainer, table); // Montamos la tercera tabla en su contenedor
  mount(terceraTablaContainer, tableContainer); // Montamos el contenedor de la tercera tabla
  mount(accordionItem, terceraTablaContainer);
  
//   // Ahora montamos la tabla de "Reologías Lodo" al final
//   const reologiasLodoContainer = el("div.w-full.pt-4");

//   const tituloReologias = el("h5.text-center.text-xl.font-bold.mb-4", "Reologías Lodo");
//   mount(reologiasLodoContainer, tituloReologias);

//   table = el("table.w-full.text-sm.border.border-gray-300");
//   thead = el("thead.bg-gray-200.text-gray-700");

//   tr = el("tr");
//   th = el("th.p-1.text-center.border.w-1/4.border-gray-300", { colspan: 2 }, "% de Fluido");
//   mount(tr, th);
//   th = el("th.p-1.text-center.border.border-gray-300", { colspan: 8 }, "Reología");
//   mount(tr, th);
//   mount(thead, tr);

//   tr = el("tr");
//   ["Lodo", "Colchón", "600", "300", "200", "100", "60", "30", "6", "3"].forEach(headerText => {
//     const th = el("th.p-1.text-center.border.border-gray-300", headerText);
//     mount(tr, th);
//   });
//   mount(thead, tr);
//   mount(table, thead);

//   tbody = el("tbody");

//   // Ejemplo de una fila de datos
// tr = el("tr.border-b");
// td = el("td.py-2.text-center.border", data.lodo_1 ? data.lodo_1 : '100');
// mount(tr, td);
// td = el("td.py-2.text-center.border", data.colchon_1 ? data.colchon_1 : '0');
// mount(tr, td);
// // ["temp_600_rpm", "temp_300_rpm", "temp_200_rpm", "temp_100_rpm", "temp_60_rpm", "temp_30_rpm", "temp_6_rpm", "temp_3_rpm"].forEach(field => {
// //   td = el("td.py-2.px-1.text-center.border", data[field] ? data[field] : '-');
// //   mount(tr, td);
// // });
// td = el("td.py-2.px-1.text-center.border", reologias.temp_600_rpm ? reologias.temp_600_rpm : '-');
// mount(tr, td);
// td = el("td.py-2.px-1.text-center.border", reologias.temp_300_rpm ? reologias.temp_300_rpm : '-');
// mount(tr, td);
// td = el("td.py-2.px-1.text-center.border", reologias.temp_200_rpm ? reologias.temp_200_rpm : '-');
// mount(tr, td);
// td = el("td.py-2.px-1.text-center.border", reologias.temp_100_rpm ? reologias.temp_100_rpm : '-');
// mount(tr, td);
// td = el("td.py-2.px-1.text-center.border", reologias.temp_60_rpm ? reologias.temp_60_rpm : '-');
// mount(tr, td);
// td = el("td.py-2.px-1.text-center.border", reologias.temp_30_rpm ? reologias.temp_30_rpm : '-');
// mount(tr, td);
// td = el("td.py-2.px-1.text-center.border", reologias.temp_6_rpm ? reologias.temp_6_rpm : '-');
// mount(tr, td);
// td = el("td.py-2.px-1.text-center.border", reologias.temp_3_rpm ? reologias.temp_3_rpm : '-');
// mount(tr, td);
// mount(tbody, tr);

// // Segunda fila
// tr = el("tr.border-b");
// td = el("td.py-2.text-center.border", data.lodo_2 ? data.lodo_2 : '75');
// mount(tr, td);
// td = el("td.py-2.text-center.border", data.colchon_2 ? data.colchon_2 : '25');
// mount(tr, td);
// // ["temp_600_rpm_2", "temp_300_rpm_2", "temp_200_rpm_2", "temp_100_rpm_2", "temp_60_rpm_2", "temp_30_rpm_2", "temp_6_rpm_2", "temp_3_rpm_2"].forEach(field => {
// //   td = el("td.py-2.px-1.text-center.border", data[field] ? data[field] : '-');
// //   mount(tr, td);
// // });
// td = el("td.py-2.px-1.text-center.border", reologias.temp_600_rpm_2 ? reologias.temp_600_rpm_2 : '-');
// mount(tr, td);
// td = el("td.py-2.px-1.text-center.border", reologias.temp_300_rpm_2 ? reologias.temp_300_rpm_2 : '-');
// mount(tr, td);
// td = el("td.py-2.px-1.text-center.border", reologias.temp_200_rpm_2 ? reologias.temp_200_rpm_2 : '-');
// mount(tr, td);
// td = el("td.py-2.px-1.text-center.border", reologias.temp_100_rpm_2 ? reologias.temp_100_rpm_2 : '-');
// mount(tr, td);
// td = el("td.py-2.px-1.text-center.border", reologias.temp_60_rpm_2 ? reologias.temp_60_rpm_2 : '-');
// mount(tr, td);
// td = el("td.py-2.px-1.text-center.border", reologias.temp_30_rpm_2 ? reologias.temp_30_rpm_2 : '-');
// mount(tr, td);
// td = el("td.py-2.px-1.text-center.border", reologias.temp_6_rpm_2 ? reologias.temp_6_rpm_2 : '-');
// mount(tr, td);
// td = el("td.py-2.px-1.text-center.border", reologias.temp_3_rpm_2 ? reologias.temp_3_rpm_2 : '-');
// mount(tr, td);
// mount(tbody, tr);

// // Tercera fila
// tr = el("tr.border-b");
// td = el("td.py-2.text-center.border", data.lodo_2 ? data.lodo_2 : '50');
// mount(tr, td);
// td = el("td.py-2.text-center.border", data.colchon_2 ? data.colchon_2 : '50');
// mount(tr, td);
// // ["temp_600_rpm_2", "temp_300_rpm_2", "temp_200_rpm_2", "temp_100_rpm_2", "temp_60_rpm_2", "temp_30_rpm_2", "temp_6_rpm_2", "temp_3_rpm_2"].forEach(field => {
// //   td = el("td.py-2.px-1.text-center.border", data[field] ? data[field] : '-');
// //   mount(tr, td);
// // });
// td = el("td.py-2.px-1.text-center.border", reologias.temp_600_rpm_3 ? reologias.temp_600_rpm_3 : '-');
// mount(tr, td);
// td = el("td.py-2.px-1.text-center.border", reologias.temp_300_rpm_3 ? reologias.temp_300_rpm_3 : '-');
// mount(tr, td);
// td = el("td.py-2.px-1.text-center.border", reologias.temp_200_rpm_3 ? reologias.temp_200_rpm_3 : '-');
// mount(tr, td);
// td = el("td.py-2.px-1.text-center.border", reologias.temp_100_rpm_3 ? reologias.temp_100_rpm_3 : '-');
// mount(tr, td);
// td = el("td.py-2.px-1.text-center.border", reologias.temp_60_rpm_3 ?  reologias.temp_60_rpm_3 : '-');
// mount(tr, td);
// td = el("td.py-2.px-1.text-center.border", reologias.temp_30_rpm_3 ? reologias.temp_30_rpm_3 : '-');
// mount(tr, td);
// td = el("td.py-2.px-1.text-center.border", reologias.temp_6_rpm_3 ? reologias.temp_6_rpm_3 : '-');
// mount(tr, td);
// td = el("td.py-2.px-1.text-center.border", reologias.temp_3_rpm_3 ? reologias.temp_3_rpm_3 : '-');
// mount(tr, td);
// mount(tbody, tr);

// // Cuarta fila
// tr = el("tr.border-b");
// td = el("td.py-2.text-center.border", data.lodo_2 ? data.lodo_2 : '25');
// mount(tr, td);
// td = el("td.py-2.text-center.border", data.colchon_2 ? data.colchon_2 : '75');
// mount(tr, td);
// // ["temp_600_rpm_2", "temp_300_rpm_2", "temp_200_rpm_2", "temp_100_rpm_2", "temp_60_rpm_2", "temp_30_rpm_2", "temp_6_rpm_2", "temp_3_rpm_2"].forEach(field => {
// //   td = el("td.py-2.px-1.text-center.border", data[field] ? data[field] : '-');
// //   mount(tr, td);
// // });
// td = el("td.py-2.px-1.text-center.border", reologias.temp_600_rpm_4 ? reologias.temp_600_rpm_4 : '-');
// mount(tr, td);
// td = el("td.py-2.px-1.text-center.border", reologias.temp_300_rpm_4 ? reologias.temp_300_rpm_4 : '-');
// mount(tr, td);
// td = el("td.py-2.px-1.text-center.border", reologias.temp_200_rpm_4 ? reologias.temp_200_rpm_4 : '-');
// mount(tr, td);
// td = el("td.py-2.px-1.text-center.border", reologias.temp_100_rpm_4 ? reologias.temp_100_rpm_4 : '-');
// mount(tr, td);
// td = el("td.py-2.px-1.text-center.border", reologias.temp_60_rpm_4 ?  reologias.temp_60_rpm_4 : '-');
// mount(tr, td);
// td = el("td.py-2.px-1.text-center.border", reologias.temp_30_rpm_4 ? reologias.temp_30_rpm_4 : '-');
// mount(tr, td);
// td = el("td.py-2.px-1.text-center.border", reologias.temp_6_rpm_4 ? reologias.temp_6_rpm_4 : '-');
// mount(tr, td);
// td = el("td.py-2.px-1.text-center.border", reologias.temp_3_rpm_4 ? reologias.temp_3_rpm_4 : '-');
// mount(tr, td);
// mount(tbody, tr);

// // Quinta fila
// tr = el("tr.border-b");
// td = el("td.py-2.text-center.border", data.lodo_2 ? data.lodo_2 : '0');
// mount(tr, td);
// td = el("td.py-2.text-center.border", data.colchon_2 ? data.colchon_2 : '100');
// mount(tr, td);
// // ["temp_600_rpm_2", "temp_300_rpm_2", "temp_200_rpm_2", "temp_100_rpm_2", "temp_60_rpm_2", "temp_30_rpm_2", "temp_6_rpm_2", "temp_3_rpm_2"].forEach(field => {
// //   td = el("td.py-2.px-1.text-center.border", data[field] ? data[field] : '-');
// //   mount(tr, td);
// // });
// td = el("td.py-2.px-1.text-center.border", reologias.temp_600_rpm_5 ? reologias.temp_600_rpm_5 : '-');
// mount(tr, td);
// td = el("td.py-2.px-1.text-center.border", reologias.temp_300_rpm_5 ? reologias.temp_300_rpm_5 : '-');
// mount(tr, td);
// td = el("td.py-2.px-1.text-center.border", reologias.temp_200_rpm_5 ? reologias.temp_200_rpm_5 : '-');
// mount(tr, td);
// td = el("td.py-2.px-1.text-center.border", reologias.temp_100_rpm_5 ? reologias.temp_100_rpm_5 : '-');
// mount(tr, td);
// td = el("td.py-2.px-1.text-center.border", reologias.temp_60_rpm_5 ?  reologias.temp_60_rpm_5 : '-');
// mount(tr, td);
// td = el("td.py-2.px-1.text-center.border", reologias.temp_30_rpm_5 ? reologias.temp_30_rpm_5 : '-');
// mount(tr, td);
// td = el("td.py-2.px-1.text-center.border", reologias.temp_6_rpm_5 ? reologias.temp_6_rpm_5 : '-');
// mount(tr, td);
// td = el("td.py-2.px-1.text-center.border", reologias.temp_3_rpm_5 ? reologias.temp_3_rpm_5 : '-');
// mount(tr, td);
// mount(tbody, tr);
//   // [["lodo_1", "colchon_1", "temp_600_rpm", "temp_300_rpm", "temp_200_rpm", "temp_100_rpm", "temp_60_rpm", "temp_30_rpm", "temp_6_rpm", "temp_3_rpm"],
//   //  ["lodo_2", "colchon_2", "temp_600_rpm_2", "temp_300_rpm_2", "temp_200_rpm_2", "temp_100_rpm_2", "temp_60_rpm_2", "temp_30_rpm_2", "temp_6_rpm_2", "temp_3_rpm_2"]].forEach(rowData => {
//   //   tr = el("tr.border-b");
//   //   rowData.forEach(field => {
//   //     const td = el("td.py-2.px-1.text-center.border", data[field] ? data[field] : '-');
//   //     mount(tr, td);
//   //   });
//   //   mount(tbody, tr);
//   // });

//   mount(table, tbody);
//   mount(reologiasLodoContainer, table);
//   mount(accordionItem, reologiasLodoContainer); 

  // Finalmente, agregar todo al DOM
  mount(accordionLodo, accordionItem);
};
