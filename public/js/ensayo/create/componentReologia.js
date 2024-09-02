let accordionItem,
  tableContainer,
  table,
  thead,
  tbody,
  tr,
  th,
  td,
  h5;
const accordionReologia = document.getElementById("accordionReologia");

const componentReologia = (data = "") => {
  // Crear el contenedor para los ítems del acordeón
  accordionItem = el("div.flex.flex-col.p-2"); // Cambiado a flex-col para alinear las tablas verticalmente

  // Crear el contenedor principal para las dos tablas
  const tablesContainer = el("div.flex.w-full");

  // Crear el contenedor para la primera tabla con su título
  let tableContainer = el("div.w-1/2.p-2"); // Cambiado a w-1/2 para que ocupe la mitad del ancho disponible
  let h5 = el("h5.text-center.mb-2", "Reologías a temp. Ambiente"); // Título para la primera tabla
  let table = el("table.w-full.text-sm.border.border-gray-300"); // Tabla con ancho completo

  let thead = el("thead.bg-gray-200.text-gray-700");
  let tr = el("tr");
  ["RPM", "Up", "Down", "Cociente", "Prom."].forEach(header => {
    let th = el("th.p-1.text-center.border.border-gray-300", header);
    mount(tr, th);
  });
  mount(thead, tr);
  mount(table, thead);

  let tbody = el("tbody.bg-gray-50");
  [300, 200, 100, 60, 30, 6, 3].forEach(rpm => {
    tr = el("tr.border-b");
    const up = parseFloat(data[`tem_ambiente_${rpm}_up`]) || null;
    const down = parseFloat(data[`tem_ambiente_${rpm}`]) || null;
    
    let cociente = "-";
    let promedio = "-";
    
    if (up && down) {
      cociente = (up / down).toFixed(2);
      promedio = Math.ceil((up + down) / 2).toFixed(2);
    }
    
    mount(tr, el("td.py-2.px-1.text-center", rpm));
    mount(tr, el("td.py-2.px-1.text-center", up !== null ? up : "-"));
    mount(tr, el("td.py-2.px-1.text-center", down !== null ? down : "-"));
    mount(tr, el(`td.py-2.px-1.text-center#coc-${rpm}`, cociente));
    mount(tr, el(`td.py-2.px-1.text-center#prom-${rpm}`, promedio));
    mount(tbody, tr);
  });
  mount(table, tbody);
  mount(tableContainer, h5); // Montar el título antes de la tabla
  mount(tableContainer, table);

  // Crear el contenedor para la tabla adicional con ítems para "Reologías a temp. Ambiente"
  const additionalTableContainerTempAmb = el("div.w-full.mt-4"); // Contenedor para la nueva tabla
  const additionalTableTempAmb = el("table.w-full.text-sm.border-gray-300");

  const additionalTbodyTempAmb = el("tbody");

  // Fila 1 para "Reologías a temp. Ambiente"
  tr = el("tr");
  td = el("td.py-2.px-1.text-right.border-0.w-2/3", "Viscosidad Plástica");
  mount(td, el("small", " (cp)"));
  mount(tr, td);
  mount(tr, el("td.py-2.px-1.text-center.border-0.w-1/3", data.temp_ambiente_viscosidad || "-"));
  mount(additionalTbodyTempAmb, tr);

  // Fila 2 para "Reologías a temp. Ambiente"
  tr = el("tr");
  td = el("td.py-2.px-1.text-right.border-0.w-2/3", "Punto de Cedencia");
  mount(td, el("small", " (lb/100ft2)"));
  mount(tr, td);
  mount(tr, el("td.py-2.px-1.text-center.border-0.w-1/3", data.temp_ambiente_punto_cedencia || "-"));
  mount(additionalTbodyTempAmb, tr);

  // Fila 3 para "Reologías a temp. Ambiente"
  tr = el("tr");
  td = el("td.py-2.px-1.text-right.border-0", "Gel 10 segundos");
  mount(tr, td);
  const gel10segTempAmb = data.temp_ambiente_gel_10_seg || "-";
  mount(tr, el("td.py-2.px-1.text-center.border-0", gel10segTempAmb));
  mount(additionalTbodyTempAmb, tr);

  // Fila 4 para "Reologías a temp. Ambiente"
  tr = el("tr");
  td = el("td.py-2.px-1.text-right.border-0", "Gel 10 minutos");
  mount(tr, td);
  const gel10minTempAmb = data.temp_ambiente_gel_10_min || "-";
  mount(tr, el("td.py-2.px-1.text-center.border-0", gel10minTempAmb));
  mount(additionalTbodyTempAmb, tr);

  mount(additionalTableTempAmb, additionalTbodyTempAmb);
  mount(additionalTableContainerTempAmb, additionalTableTempAmb);

  // Montar la tabla adicional para "Reologías a temp. Ambiente"
  mount(tableContainer, additionalTableContainerTempAmb);

  // Agregar la primera tabla y su tabla adicional al contenedor principal
  mount(tablesContainer, tableContainer);

  // Crear el contenedor para la segunda tabla con su título
  tableContainer = el("div.w-1/2.p-2"); // Cambiado a w-1/2 para que ocupe la mitad del ancho disponible
  h5 = el("h5.text-center.mb-2", "Reologías a temp. Ensayo"); // Título para la segunda tabla
  table = el("table.w-full.text-sm.border.border-gray-300"); // Tabla con ancho completo

  thead = el("thead.bg-gray-200.text-gray-700");
  tr = el("tr");
  ["RPM", "Up", "Down", "Cociente", "Prom."].forEach(header => {
    th = el("th.p-1.text-center.border.border-gray-300", header);
    mount(tr, th);
  });
  mount(thead, tr);
  mount(table, thead);

  tbody = el("tbody.bg-gray-50");
  [300, 200, 100, 60, 30, 6, 3].forEach(rpm => {
    tr = el("tr.border-b");
    const up = parseFloat(data[`tem_ensayo_${rpm}_up`]) || null;
    const down = parseFloat(data[`tem_ensayo_${rpm}`]) || null;
    
    let cociente = "-";
    let promedio = "-";
    
    if (up && down) {
      cociente = (up / down).toFixed(2);
      promedio = Math.ceil((up + down) / 2).toFixed(2);
    }
    
    mount(tr, el("td.py-2.px-1.text-center", rpm));
    mount(tr, el("td.py-2.px-1.text-center", up !== null ? up : "-"));
    mount(tr, el("td.py-2.px-1.text-center", down !== null ? down : "-"));
    mount(tr, el(`td.py-2.px-1.text-center#coc-${rpm}-desc`, cociente));
    mount(tr, el(`td.py-2.px-1.text-center#prom-${rpm}-desc`, promedio));
    mount(tbody, tr);
  });
  mount(table, tbody);
  mount(tableContainer, h5); // Montar el título antes de la tabla
  mount(tableContainer, table);

  // Crear el contenedor para la tabla adicional con ítems para "Reologías a temp. Ensayo"
  const additionalTableContainerTempEnsayo = el("div.w-full.mt-4"); // Contenedor para la nueva tabla
  const additionalTableTempEnsayo = el("table.w-full.text-sm.border-gray-300");

  const additionalTbodyTempEnsayo = el("tbody");

  // Fila 1 para "Reologías a temp. Ensayo"
  tr = el("tr");
  td = el("td.py-2.px-1.text-right.border-0.w-2/3", "Viscosidad Plástica");
  mount(td, el("small", " (cp)"));
  mount(tr, td);
  mount(tr, el("td.py-2.px-1.text-center.border-0.w-1/3", data.temp_ensayo_viscosidad || "-"));
  mount(additionalTbodyTempEnsayo, tr);

  // Fila 2 para "Reologías a temp. Ensayo"
  tr = el("tr");
  td = el("td.py-2.px-1.text-right.border-0.w-2/3", "Punto de Cedencia");
  mount(td, el("small", " (lb/100ft2)"));
  mount(tr, td);
  mount(tr, el("td.py-2.px-1.text-center.border-0.w-1/3", data.temp_ensayo_punto_cedencia || "-"));
  mount(additionalTbodyTempEnsayo, tr);

  // Fila 3 para "Reologías a temp. Ensayo"
  tr = el("tr");
  td = el("td.py-2.px-1.text-right.border-0", "Gel 10 segundos");
  mount(tr, td);
  const gel10segTempEnsayo = data.temp_ensayo_gel_10_seg || "-";
  mount(tr, el("td.py-2.px-1.text-center.border-0", gel10segTempEnsayo));
  mount(additionalTbodyTempEnsayo, tr);

  // Fila 4 para "Reologías a temp. Ensayo"
  tr = el("tr");
  td = el("td.py-2.px-1.text-right.border-0", "Gel 10 minutos");
  mount(tr, td);
  const gel10minTempEnsayo = data.temp_ensayo_gel_10_min || "-";
  mount(tr, el("td.py-2.px-1.text-center.border-0", gel10minTempEnsayo));
  mount(additionalTbodyTempEnsayo, tr);

  mount(additionalTableTempEnsayo, additionalTbodyTempEnsayo);
  mount(additionalTableContainerTempEnsayo, additionalTableTempEnsayo);

  // Montar la tabla adicional para "Reologías a temp. Ensayo"
  mount(tableContainer, additionalTableContainerTempEnsayo);

  // Agregar la segunda tabla y su tabla adicional al contenedor principal
  mount(tablesContainer, tableContainer);

  // Agregar el contenedor de tablas al acordeón
  mount(accordionItem, tablesContainer);

  // Agregar el acordeón al documento
  mount(accordionReologia, accordionItem);
};
