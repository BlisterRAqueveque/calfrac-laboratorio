const accordionCompatibilidadLodo = document.getElementById("accordionCompatibilidadLodo");

componentCompatibilidadLodo = (data = {}, reologias = {}) => {
  //console.log(data);  Verificar los valores de 'data'
  //console.log('Ensayos:', ensayo);
  console.log('Data aditivos:', data)

  if (!accordionCompatibilidadLodo) {
    console.error("El contenedor 'accordionCompatibilidadLodo' no se encontró en el DOM");
    return; // Salir si el contenedor no existe
  }

  let accordionItem, table, thead, tbody, tr, th, td;

  // Verificación de que 'vp_1' (u otro campo) existe y tiene datos
  if (!data.vp_1) {
    console.error("No se encontraron datos de compatibilidad");
    return; // Detenemos la ejecución si no hay datos
  }

  // Contenedor principal y título
  accordionItem = el("div.mb-2.text-center");
  const titulo = el("h5.mb-1", "Caracterización del Compatibilidad");
  mount(accordionItem, titulo);

  // Contenedor para las dos tablas
  const tablasContainer = el("div.flex");

  // Primera tabla: Compatibilidad (VP, YP)
  let tableContainer1 = el("div.w-1/2.p-2");
  table = el("table.w-full.text-sm.border.border-gray-300");

  // Thead de la primera tabla
  thead = el("thead.bg-gray-200.text-gray-700");
  tr = el("tr");

  // Headers de la primera tabla
  ["% de Fluido", "% de Fluido", "VP", "YP"].forEach(headerText => {
    th = el("th.p-1.text-center.border.border-gray-300", headerText);
    mount(tr, th);
  });

  mount(thead, tr);
  mount(table, thead);

  // Body de la primera tabla
  tbody = el("tbody");
  for (let i = 1; i <= 5; i++) {
    tr = el("tr");
    td = el("td.py-2.text-center.border", (100 - (i - 1) * 25).toString());
    mount(tr, td);
    td = el("td.py-2.text-center.border", ((i - 1) * 25).toString());
    mount(tr, td);
    td = el("td.py-2.px-1.text-center.border", data['vp_' + i] ? data['vp_' + i] : '-');
    mount(tr, td);
    td = el("td.py-2.px-1.text-center.border", data['yp_' + i] ? data['yp_' + i] : '-');
    mount(tr, td);
    mount(tbody, tr);
  }

  mount(table, tbody);
  mount(tableContainer1, table);
  mount(tablasContainer, tableContainer1);

  // Segunda tabla: Compatibilidad (Gel 10)
  let tableContainer2 = el("div.w-1/2.p-2");
  table = el("table.w-full.text-sm.border.border-gray-300");

  // Thead de la segunda tabla
  thead = el("thead.bg-gray-200.text-gray-700");
  tr = el("tr");

  ["% de Fluido", "% de Fluido", "Gel 10 (Seg)", "Gel 10 (Min)"].forEach(headerText => {
    th = el("th.p-1.text-center.border.border-gray-300", headerText);
    mount(tr, th);
  });

  mount(thead, tr);
  mount(table, thead);

  // Body de la segunda tabla
  tbody = el("tbody");
  for (let i = 1; i <= 5; i++) {
    tr = el("tr");
    td = el("td.py-2.text-center.border", (100 - (i - 1) * 25).toString());
    mount(tr, td);
    td = el("td.py-2.text-center.border", ((i - 1) * 25).toString());
    mount(tr, td);
    td = el("td.py-2.px-1.text-center.border", data['gel_seg_' + i] ? data['gel_seg_' + i] : '-');
    mount(tr, td);
    td = el("td.py-2.px-1.text-center.border", data['gel_min_' + i] ? data['gel_min_' + i] : '-');
    mount(tr, td);
    mount(tbody, tr);
  }

  mount(table, tbody);
  mount(tableContainer2, table);
  mount(tablasContainer, tableContainer2);

  mount(accordionItem, tablasContainer);



  

    const reologiasLodoContainer = el("div.w-full.pt-4");

  const tituloReologias = el("h5.text-center.text-xl.font-bold.mb-4", "Reologías Lodo");
  mount(reologiasLodoContainer, tituloReologias);

  table = el("table.w-full.text-sm.border.border-gray-300");
  thead = el("thead.bg-gray-200.text-gray-700");

  tr = el("tr");
  th = el("th.p-1.text-center.border.w-1/4.border-gray-300", { colspan: 2 }, "% de Fluido");
  mount(tr, th);
  th = el("th.p-1.text-center.border.border-gray-300", { colspan: 8 }, "Reología");
  mount(tr, th);
  mount(thead, tr);

  tr = el("tr");
  ["Lodo", "Colchón", "600", "300", "200", "100", "60", "30", "6", "3"].forEach(headerText => {
    const th = el("th.p-1.text-center.border.border-gray-300", headerText);
    mount(tr, th);
  });
  mount(thead, tr);
  mount(table, thead);

  tbody = el("tbody");

  // Ejemplo de una fila de datos
tr = el("tr.border-b");
td = el("td.py-2.text-center.border", data.lodo_1 ? data.lodo_1 : '100');
mount(tr, td);
td = el("td.py-2.text-center.border", data.colchon_1 ? data.colchon_1 : '0');
mount(tr, td);
// ["temp_600_rpm", "temp_300_rpm", "temp_200_rpm", "temp_100_rpm", "temp_60_rpm", "temp_30_rpm", "temp_6_rpm", "temp_3_rpm"].forEach(field => {
//   td = el("td.py-2.px-1.text-center.border", data[field] ? data[field] : '-');
//   mount(tr, td);
// });
td = el("td.py-2.px-1.text-center.border", reologias.temp_600_rpm ? reologias.temp_600_rpm : '-');
mount(tr, td);
td = el("td.py-2.px-1.text-center.border", reologias.temp_300_rpm ? reologias.temp_300_rpm : '-');
mount(tr, td);
td = el("td.py-2.px-1.text-center.border", reologias.temp_200_rpm ? reologias.temp_200_rpm : '-');
mount(tr, td);
td = el("td.py-2.px-1.text-center.border", reologias.temp_100_rpm ? reologias.temp_100_rpm : '-');
mount(tr, td);
td = el("td.py-2.px-1.text-center.border", reologias.temp_60_rpm ? reologias.temp_60_rpm : '-');
mount(tr, td);
td = el("td.py-2.px-1.text-center.border", reologias.temp_30_rpm ? reologias.temp_30_rpm : '-');
mount(tr, td);
td = el("td.py-2.px-1.text-center.border", reologias.temp_6_rpm ? reologias.temp_6_rpm : '-');
mount(tr, td);
td = el("td.py-2.px-1.text-center.border", reologias.temp_3_rpm ? reologias.temp_3_rpm : '-');
mount(tr, td);
mount(tbody, tr);

// Segunda fila
tr = el("tr.border-b");
td = el("td.py-2.text-center.border", data.lodo_2 ? data.lodo_2 : '75');
mount(tr, td);
td = el("td.py-2.text-center.border", data.colchon_2 ? data.colchon_2 : '25');
mount(tr, td);
// ["temp_600_rpm_2", "temp_300_rpm_2", "temp_200_rpm_2", "temp_100_rpm_2", "temp_60_rpm_2", "temp_30_rpm_2", "temp_6_rpm_2", "temp_3_rpm_2"].forEach(field => {
//   td = el("td.py-2.px-1.text-center.border", data[field] ? data[field] : '-');
//   mount(tr, td);
// });
td = el("td.py-2.px-1.text-center.border", reologias.temp_600_rpm_2 ? reologias.temp_600_rpm_2 : '-');
mount(tr, td);
td = el("td.py-2.px-1.text-center.border", reologias.temp_300_rpm_2 ? reologias.temp_300_rpm_2 : '-');
mount(tr, td);
td = el("td.py-2.px-1.text-center.border", reologias.temp_200_rpm_2 ? reologias.temp_200_rpm_2 : '-');
mount(tr, td);
td = el("td.py-2.px-1.text-center.border", reologias.temp_100_rpm_2 ? reologias.temp_100_rpm_2 : '-');
mount(tr, td);
td = el("td.py-2.px-1.text-center.border", reologias.temp_60_rpm_2 ? reologias.temp_60_rpm_2 : '-');
mount(tr, td);
td = el("td.py-2.px-1.text-center.border", reologias.temp_30_rpm_2 ? reologias.temp_30_rpm_2 : '-');
mount(tr, td);
td = el("td.py-2.px-1.text-center.border", reologias.temp_6_rpm_2 ? reologias.temp_6_rpm_2 : '-');
mount(tr, td);
td = el("td.py-2.px-1.text-center.border", reologias.temp_3_rpm_2 ? reologias.temp_3_rpm_2 : '-');
mount(tr, td);
mount(tbody, tr);

// Tercera fila
tr = el("tr.border-b");
td = el("td.py-2.text-center.border", data.lodo_2 ? data.lodo_2 : '50');
mount(tr, td);
td = el("td.py-2.text-center.border", data.colchon_2 ? data.colchon_2 : '50');
mount(tr, td);
// ["temp_600_rpm_2", "temp_300_rpm_2", "temp_200_rpm_2", "temp_100_rpm_2", "temp_60_rpm_2", "temp_30_rpm_2", "temp_6_rpm_2", "temp_3_rpm_2"].forEach(field => {
//   td = el("td.py-2.px-1.text-center.border", data[field] ? data[field] : '-');
//   mount(tr, td);
// });
td = el("td.py-2.px-1.text-center.border", reologias.temp_600_rpm_3 ? reologias.temp_600_rpm_3 : '-');
mount(tr, td);
td = el("td.py-2.px-1.text-center.border", reologias.temp_300_rpm_3 ? reologias.temp_300_rpm_3 : '-');
mount(tr, td);
td = el("td.py-2.px-1.text-center.border", reologias.temp_200_rpm_3 ? reologias.temp_200_rpm_3 : '-');
mount(tr, td);
td = el("td.py-2.px-1.text-center.border", reologias.temp_100_rpm_3 ? reologias.temp_100_rpm_3 : '-');
mount(tr, td);
td = el("td.py-2.px-1.text-center.border", reologias.temp_60_rpm_3 ?  reologias.temp_60_rpm_3 : '-');
mount(tr, td);
td = el("td.py-2.px-1.text-center.border", reologias.temp_30_rpm_3 ? reologias.temp_30_rpm_3 : '-');
mount(tr, td);
td = el("td.py-2.px-1.text-center.border", reologias.temp_6_rpm_3 ? reologias.temp_6_rpm_3 : '-');
mount(tr, td);
td = el("td.py-2.px-1.text-center.border", reologias.temp_3_rpm_3 ? reologias.temp_3_rpm_3 : '-');
mount(tr, td);
mount(tbody, tr);

// Cuarta fila
tr = el("tr.border-b");
td = el("td.py-2.text-center.border", data.lodo_2 ? data.lodo_2 : '25');
mount(tr, td);
td = el("td.py-2.text-center.border", data.colchon_2 ? data.colchon_2 : '75');
mount(tr, td);
// ["temp_600_rpm_2", "temp_300_rpm_2", "temp_200_rpm_2", "temp_100_rpm_2", "temp_60_rpm_2", "temp_30_rpm_2", "temp_6_rpm_2", "temp_3_rpm_2"].forEach(field => {
//   td = el("td.py-2.px-1.text-center.border", data[field] ? data[field] : '-');
//   mount(tr, td);
// });
td = el("td.py-2.px-1.text-center.border", reologias.temp_600_rpm_4 ? reologias.temp_600_rpm_4 : '-');
mount(tr, td);
td = el("td.py-2.px-1.text-center.border", reologias.temp_300_rpm_4 ? reologias.temp_300_rpm_4 : '-');
mount(tr, td);
td = el("td.py-2.px-1.text-center.border", reologias.temp_200_rpm_4 ? reologias.temp_200_rpm_4 : '-');
mount(tr, td);
td = el("td.py-2.px-1.text-center.border", reologias.temp_100_rpm_4 ? reologias.temp_100_rpm_4 : '-');
mount(tr, td);
td = el("td.py-2.px-1.text-center.border", reologias.temp_60_rpm_4 ?  reologias.temp_60_rpm_4 : '-');
mount(tr, td);
td = el("td.py-2.px-1.text-center.border", reologias.temp_30_rpm_4 ? reologias.temp_30_rpm_4 : '-');
mount(tr, td);
td = el("td.py-2.px-1.text-center.border", reologias.temp_6_rpm_4 ? reologias.temp_6_rpm_4 : '-');
mount(tr, td);
td = el("td.py-2.px-1.text-center.border", reologias.temp_3_rpm_4 ? reologias.temp_3_rpm_4 : '-');
mount(tr, td);
mount(tbody, tr);

// Quinta fila
tr = el("tr.border-b");
td = el("td.py-2.text-center.border", data.lodo_2 ? data.lodo_2 : '0');
mount(tr, td);
td = el("td.py-2.text-center.border", data.colchon_2 ? data.colchon_2 : '100');
mount(tr, td);
// ["temp_600_rpm_2", "temp_300_rpm_2", "temp_200_rpm_2", "temp_100_rpm_2", "temp_60_rpm_2", "temp_30_rpm_2", "temp_6_rpm_2", "temp_3_rpm_2"].forEach(field => {
//   td = el("td.py-2.px-1.text-center.border", data[field] ? data[field] : '-');
//   mount(tr, td);
// });
td = el("td.py-2.px-1.text-center.border", reologias.temp_600_rpm_5 ? reologias.temp_600_rpm_5 : '-');
mount(tr, td);
td = el("td.py-2.px-1.text-center.border", reologias.temp_300_rpm_5 ? reologias.temp_300_rpm_5 : '-');
mount(tr, td);
td = el("td.py-2.px-1.text-center.border", reologias.temp_200_rpm_5 ? reologias.temp_200_rpm_5 : '-');
mount(tr, td);
td = el("td.py-2.px-1.text-center.border", reologias.temp_100_rpm_5 ? reologias.temp_100_rpm_5 : '-');
mount(tr, td);
td = el("td.py-2.px-1.text-center.border", reologias.temp_60_rpm_5 ?  reologias.temp_60_rpm_5 : '-');
mount(tr, td);
td = el("td.py-2.px-1.text-center.border", reologias.temp_30_rpm_5 ? reologias.temp_30_rpm_5 : '-');
mount(tr, td);
td = el("td.py-2.px-1.text-center.border", reologias.temp_6_rpm_5 ? reologias.temp_6_rpm_5 : '-');
mount(tr, td);
td = el("td.py-2.px-1.text-center.border", reologias.temp_3_rpm_5 ? reologias.temp_3_rpm_5 : '-');
mount(tr, td);
mount(tbody, tr);
  // [["lodo_1", "colchon_1", "temp_600_rpm", "temp_300_rpm", "temp_200_rpm", "temp_100_rpm", "temp_60_rpm", "temp_30_rpm", "temp_6_rpm", "temp_3_rpm"],
  //  ["lodo_2", "colchon_2", "temp_600_rpm_2", "temp_300_rpm_2", "temp_200_rpm_2", "temp_100_rpm_2", "temp_60_rpm_2", "temp_30_rpm_2", "temp_6_rpm_2", "temp_3_rpm_2"]].forEach(rowData => {
  //   tr = el("tr.border-b");
  //   rowData.forEach(field => {
  //     const td = el("td.py-2.px-1.text-center.border", data[field] ? data[field] : '-');
  //     mount(tr, td);
  //   });
  //   mount(tbody, tr);
  // });

  mount(table, tbody);
  mount(reologiasLodoContainer, table);

  // Finalmente monta todo en el contenedor principal (accordion)
  mount(accordionItem, reologiasLodoContainer);

  // Muestra todo en el DOM
  mount(accordionCompatibilidadLodo, accordionItem);
};
