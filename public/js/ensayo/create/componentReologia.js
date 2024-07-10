let accordionItem,
  h5_1,
  h5_2,
  h5_3,
  h5_4,
  br,
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

  h5_1 = el("h5.mb-1 text-center ", "Registro de Reologías");
  h5_2 = el("h5.mb-1 text-center ", "Reología (avg reads)");
  br = el("br");
  mount(accordionItem, h5_1);
  mount(accordionItem, br);
  mount(accordionItem, h5_2);

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
  th = el("th.p-1 text-center border border-gray-300", "Temperatura °C");
  mount(tr, th);
  th = el("th.p-1 text-center border border-gray-300", "T° Ambiente");
  mount(tr, th);
  th = el("th.p-1 text-center border border-gray-300", "T° Ensayo");
  mount(tr, th);

  mount(thead, tr);

  tbody = el("tbody.bg-gray-50");
  tr = el("tr.border-b");
  td = el("td.py-2 px-1 text-center", "Viscosidad plastica (lb/100ft2)");
  mount(tr, td);

  td = el("td.py-2 px-1 text-center", `${data.temp_ambiente ? data.temp_ambiente : ''}`);
  mount(tr, td);

  td = el("td.py-2 px-1 text-center", `${data.temp_ensayo ? data.temp_ensayo : ''}`);
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

  h5_3 = el("h5.mb-1 text-center ", "Reología (up reads)");
  br = el("br");

  mount(accordionItem, br);
  mount(accordionItem, h5_3);

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
  td = el("td.py-2 px-1 text-center", `${data.tem_ambiente_rpm_up ? data.tem_ambiente_rpm_up : '-'}°C`);
  mount(tr, td);
  td = el("td.py-2 px-1 text-center", `${data.tem_ambiente_300_up ? data.tem_ambiente_300_up : '-'}`);
  mount(tr, td);
  td = el("td.py-2 px-1 text-center", `${data.tem_ambiente_200_up ? data.tem_ambiente_200_up : '-'}`);
  mount(tr, td);
  td = el("td.py-2 px-1 text-center", `${data.tem_ambiente_100_up ? data.tem_ambiente_100_up : '-'}`);
  mount(tr, td);
  td = el("td.py-2 px-1 text-center", `${data.tem_ambiente_60_up ? data.tem_ambiente_60_up : '-'}`);
  mount(tr, td);
  td = el("td.py-2 px-1 text-center", `${data.tem_ambiente_30_up ? data.tem_ambiente_30_up : '-'}`);
  mount(tr, td);
  td = el("td.py-2 px-1 text-center", `${data.tem_ambiente_6_up ? data.tem_ambiente_6_up : '-'}`);
  mount(tr, td);
  td = el("td.py-2 px-1 text-center", `${data.tem_ambiente_3_up ? data.tem_ambiente_3_up : '-'}`);
  mount(tr, td);

  mount(tbody, tr);
  tr = el("tr.border-b");
  td = el("td.py-2 px-1 text-center", "T° Ensayo");
  mount(tr, td);
  td = el("td.py-2 px-1 text-center", `${data.tem_ensayo_rpm_up ? data.tem_ensayo_rpm_up : '-'}°C`);
  mount(tr, td);
  td = el("td.py-2 px-1 text-center", `${data.tem_ensayo_300_up ? data.tem_ensayo_300_up : '-'}`);
  mount(tr, td);
  td = el("td.py-2 px-1 text-center", `${data.tem_ensayo_200_up ? data.tem_ensayo_200_up : '-'}`);
  mount(tr, td);
  td = el("td.py-2 px-1 text-center", `${data.tem_ensayo_100_up ? data.tem_ensayo_100_up : '-'}`);
  mount(tr, td);
  td = el("td.py-2 px-1 text-center", `${data.tem_ensayo_60_up ? data.tem_ensayo_60_up : '-'}`);
  mount(tr, td);
  td = el("td.py-2 px-1 text-center", `${data.tem_ensayo_30_up ? data.tem_ensayo_30_up : '-'}`);
  mount(tr, td);
  td = el("td.py-2 px-1 text-center", `${data.tem_ensayo_6_up ? data.tem_ensayo_6_up : '-'}`);
  mount(tr, td);
  td = el("td.py-2 px-1 text-center", `${data.tem_ensayo_3_up ? data.tem_ensayo_3_up : '-'}`);
  mount(tr, td);

  mount(tbody, tr);
  mount(table, tbody);

  mount(accordionItem, table)

  h5_4 = el("h5.mb-1 text-center ", "Reología (down reads)");
  br = el("br");

  mount(accordionItem, br);
  mount(accordionItem, h5_4);

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
  td = el("td.py-2 px-1 text-center", `${data.tem_ambiente_rpm_down ? data.tem_ambiente_rpm_down : '-'}°C`);
  mount(tr, td);
  td = el("td.py-2 px-1 text-center", `${data.tem_ambiente_300_down ? data.tem_ambiente_300_down : '-'}`);
  mount(tr, td);
  td = el("td.py-2 px-1 text-center", `${data.tem_ambiente_200_down ? data.tem_ambiente_200_down : '-'}`);
  mount(tr, td);
  td = el("td.py-2 px-1 text-center", `${data.tem_ambiente_100_down ? data.tem_ambiente_100_down : '-'}`);
  mount(tr, td);
  td = el("td.py-2 px-1 text-center", `${data.tem_ambiente_60_down ? data.tem_ambiente_60_down : '-'}`);
  mount(tr, td);
  td = el("td.py-2 px-1 text-center", `${data.tem_ambiente_30_down ? data.tem_ambiente_30_down : '-'}`);
  mount(tr, td);
  td = el("td.py-2 px-1 text-center", `${data.tem_ambiente_6_down ? data.tem_ambiente_6_down : '-'}`);
  mount(tr, td);
  td = el("td.py-2 px-1 text-center", `${data.tem_ambiente_3_down ? data.tem_ambiente_3_down : '-'}`);
  mount(tr, td);

  mount(tbody, tr);
  tr = el("tr.border-b");
  td = el("td.py-2 px-1 text-center", "T° Ensayo");
  mount(tr, td);
  td = el("td.py-2 px-1 text-center", `${data.tem_ensayo_rpm_down ? data.tem_ensayo_rpm_down : '-'}°C`);
  mount(tr, td);
  td = el("td.py-2 px-1 text-center", `${data.tem_ensayo_300_down ? data.tem_ensayo_300_down : '-'}`);
  mount(tr, td);
  td = el("td.py-2 px-1 text-center", `${data.tem_ensayo_200_down ? data.tem_ensayo_200_down : '-'}`);
  mount(tr, td);
  td = el("td.py-2 px-1 text-center", `${data.tem_ensayo_100_down ? data.tem_ensayo_100_down : '-'}`);
  mount(tr, td);
  td = el("td.py-2 px-1 text-center", `${data.tem_ensayo_60_down ? data.tem_ensayo_60_down : '-'}`);
  mount(tr, td);
  td = el("td.py-2 px-1 text-center", `${data.tem_ensayo_30_down ? data.tem_ensayo_30_down : '-'}`);
  mount(tr, td);
  td = el("td.py-2 px-1 text-center", `${data.tem_ensayo_6_down ? data.tem_ensayo_6_down : '-'}`);
  mount(tr, td);
  td = el("td.py-2 px-1 text-center", `${data.tem_ensayo_3_down ? data.tem_ensayo_3_down : '-'}`);
  mount(tr, td);

  mount(tbody, tr);
  mount(table, tbody);

  mount(accordionItem, table)
};
