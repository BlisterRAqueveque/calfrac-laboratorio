const accordionCompatibilidadLodo = document.getElementById("accordionCompatibilidadLodo");

componentCompatibilidadLodo = (data = {}, ensayo = {}) => {
  //console.log(data);  Verificar los valores de 'data'
  console.log('Ensayos:', ensayo);
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

  // Montamos el contenedor de las tablas en el contenedor principal
  mount(accordionItem, tablasContainer);
  mount(accordionCompatibilidadLodo, accordionItem); // Finalmente, montamos todo en el contenedor principal
};
