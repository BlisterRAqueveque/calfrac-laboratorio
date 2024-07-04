let accordionItem,
  h2,
  accordionCollapse,
  accordionBody,
  divFlex,
  p,
  table,
  thead,
  tbody,
  tr,
  th,
  td;
const accordionReologia = document.getElementById("accordionReologia");
const componentReologia = (data = "") => {
  accordionItem = el("div");
  
  p = el(
    "p.flex items-center text-gray-700 mb-0",
    "Registro creado por Mirko Dinamarca el día 04/04/24 a las 10:02hs"
  );

  table = el("table.w-full text-sm border border-gray-300");

  thead = el("thead.bg-gray-200 text-gray-700");
  tr = el("tr");
  th = el("th.border border-gray-300");
  mount(tr, th);
  th = el("th.p-1 text-center border border-gray-300", "RPM");
  mount(tr, th);
  th = el("th.p-1 text-center border border-gray-300", "300");
  mount(tr, th);
  th = el("th.p-1 text-center border border-gray-300", "200");
  mount(tr, th);
  th = el("th.p-1 text-center border border-gray-300", "100");
  mount(tr, th);
  th = el("th.p-1 text-center border border-gray-300", "60");
  mount(tr, th);
  th = el("th.p-1 text-center border border-gray-300", "30");
  mount(tr, th);
  th = el("th.p-1 text-center border border-gray-300", "6");
  mount(tr, th);
  th = el("th.p-1 text-center border border-gray-300", "3");
  mount(tr, th);

  mount(thead, tr);
  mount(table, thead);

  tbody = el("tbody.bg-gray-50");
  tr = el("tr.border-b");
  td = el("td.py-2 px-1 text-center", "T° Ambiente");
  mount(tr, td);
  td = el("td.py-2 px-1 text-center", `${data.tem_ambiente_rpm ? data.tem_ambiente_rpm : '-'}°C`);
  mount(tr, td);
  td = el("td.py-2 px-1 text-center", `${data.tem_ambiente_300 ? data.tem_ambiente_300 : '-'}`);
  mount(tr, td);
  td = el("td.py-2 px-1 text-center", `${data.tem_ambiente_200 ? data.tem_ambiente_200 : '-'}`);
  mount(tr, td);
  td = el("td.py-2 px-1 text-center", `${data.tem_ambiente_100 ? data.tem_ambiente_100 : '-'}`);
  mount(tr, td);
  td = el("td.py-2 px-1 text-center", `${data.tem_ambiente_60 ? data.tem_ambiente_60 : '-'}`);
  mount(tr, td);
  td = el("td.py-2 px-1 text-center", `${data.tem_ambiente_30 ? data.tem_ambiente_30 : '-'}`);
  mount(tr, td);
  td = el("td.py-2 px-1 text-center", `${data.tem_ambiente_6 ? data.tem_ambiente_6 : '-'}`);
  mount(tr, td);
  td = el("td.py-2 px-1 text-center", `${data.tem_ambiente_3 ? data.tem_ambiente_3 : '-'}`);
  mount(tr, td);

  mount(tbody, tr);
  tr = el("tr.border-b");
  td = el("td.py-2 px-1 text-center", "T° Ensayo");
  mount(tr, td);
  td = el("td.py-2 px-1 text-center", `${data.tem_ensayo_rpm ? data.tem_ensayo_rpm : '-'}°C`);
  mount(tr, td);
  td = el("td.py-2 px-1 text-center", `${data.tem_ensayo_300 ? data.tem_ensayo_300 : '-'}`);
  mount(tr, td);
  td = el("td.py-2 px-1 text-center", `${data.tem_ensayo_200 ? data.tem_ensayo_200 : '-'}`);
  mount(tr, td);
  td = el("td.py-2 px-1 text-center", `${data.tem_ensayo_100 ? data.tem_ensayo_100 : '-'}`);
  mount(tr, td);
  td = el("td.py-2 px-1 text-center", `${data.tem_ensayo_60 ? data.tem_ensayo_60 : '-'}`);
  mount(tr, td);
  td = el("td.py-2 px-1 text-center", `${data.tem_ensayo_30 ? data.tem_ensayo_30 : '-'}`);
  mount(tr, td);
  td = el("td.py-2 px-1 text-center", `${data.tem_ensayo_6 ? data.tem_ensayo_6 : '-'}`);
  mount(tr, td);
  td = el("td.py-2 px-1 text-center", `${data.tem_ensayo_3 ? data.tem_ensayo_3 : '-'}`);
  mount(tr, td);

  mount(tbody, tr);
  mount(table, tbody);

  mount(accordionItem, table)

  table = el("table.w-full text-sm mt-3 border border-gray-300");
  thead = el("thead.bg-gray-200 text-gray-700");
  tr = el("tr");
  th = el("th.p-1 text-center border border-gray-300");
  mount(tr, th);
  th = el("th.p-1 text-center border border-gray-300", "T° Ambiente");
  mount(tr, th);
  th = el("th.p-1 text-center border border-gray-300", "T° Ensayo");
  mount(tr, th);

  mount(thead, tr);

  tbody = el("tbody.bg-gray-50");
  tr = el("tr.border-b");
  td = el("td.py-2 px-1 text-center");
  mount(tr, td);

  td = el("td.py-2 px-1 text-center", `${data.temp_ambiente ? data.temp_ambiente : ''}°C`);
  mount(tr, td);

  td = el("td.py-2 px-1 text-center", `${data.temp_ensayo ? data.temp_ensayo : ''}°C`);
  mount(tr, td);

  // Punto de Ceciaden
  mount(tbody, tr);
  tr = el("tr.border-b");
  td = el("td.py-2 px-1 text-center", "Punto de Cedencia (lb/100ft2)");
  mount(tr, td);

  td = el("td.py-2 px-1 text-center", `${data.temp_ambiente_punto_cedencia ? data.temp_ambiente_punto_cedencia : ''}`);
  mount(tr, td);
  td = el("td.py-2 px-1 text-center", `${data.temp_ensayo_punto_cedencia ? data.temp_ensayo_punto_cedencia : ''}`);
  mount(tr, td);

  // Gel 10 segundos
  mount(tbody, tr);
  tr = el("tr.border-b");
  td = el("td.py-2 px-1 text-center", "Gel 10 segundos");
  mount(tr, td);

  td = el("td.py-2 px-1 text-center", `${data.temp_ambiente_gel_10_seg ? data.temp_ambiente_gel_10_seg : ''}`);
  mount(tr, td);
  td = el("td.py-2 px-1 text-center", `${data.temp_ensayo_gel_10_seg ? data.temp_ensayo_gel_10_seg : ''}`);
  mount(tr, td);

  // Gel 10 minutos
  mount(tbody, tr);
  tr = el("tr.border-b");
  td = el("td.py-2 px-1 text-center", "Gel 10 minutos");
  mount(tr, td);

  td = el("td.py-2 px-1 text-center", `${data.temp_ambiente_gel_10_min ? data.temp_ambiente_gel_10_min : ''}`);
  mount(tr, td);
  td = el("td.py-2 px-1 text-center", `${data.temp_ensayo_gel_10_min ? data.temp_ensayo_gel_10_min : ''}`);
  mount(tr, td);
  mount(tbody, tr);

  mount(table, thead)
  mount(table, tbody)

  mount(accordionItem, table);
  mount(accordionReologia, accordionItem);
};
