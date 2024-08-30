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
  accordionItem = el("div.flex.flex-row.p-2"); // Cambiado a flex-row para alinear las tablas en línea

  // Crear el contenedor para la primera tabla con su título
  tableContainer = el("div.w-1/2.p-2"); // Contenedor para la primera tabla
  h5 = el("h5.text-center.mb-2", "Reologías a temp. Ambiente"); // Título para la primera tabla
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
    const up = parseFloat(data[`tem_ambiente_${rpm}_up`]) || null;
    const down = parseFloat(data[`tem_ambiente_${rpm}`]) || null;
    //const down = parseFloat(data[`tem_ensayo_${rpm}`]) || null;
    
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

  // Montar el contenedor de la primera tabla en el acordeón
  mount(accordionItem, tableContainer);

  // Crear el contenedor para la segunda tabla con su título
  tableContainer = el("div.w-1/2.p-2"); // Contenedor para la segunda tabla
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

  // Montar el contenedor de la segunda tabla en el acordeón
  mount(accordionItem, tableContainer);

  // Montar el contenido final en el acordeón
  mount(accordionReologia, accordionItem);
};
