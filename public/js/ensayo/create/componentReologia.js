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
  div_img,
  section,
  div_relative,
  contain_img,
  img,
  div_txt,
  h6,
  div_flex,
  td;
const accordionReologia = document.getElementById("accordionReologia");

const componentReologia = (data = "") => {
  accordionItem = el("div");
  
  p = el(
    "p.flex items-center text-gray-700 mb-0",
    "Registro creado el día 04/04/24 a las 10:02hs"
  );

  // h5_1 = el("h5.mb-1 text-center ", "Registro de Reologías");
  h5_2 = el("h5.mb-1 text-center ", "Reología Ascendente");
  br = el("br");
  // mount(accordionItem, h5_1);
  mount(accordionItem, br);
  mount(accordionItem, h5_2);

  table = el("table.w-full text-sm border border-gray-300");

  thead = el("thead.bg-gray-200 text-gray-700");
  tr = el("tr");
  th = el("th.p-1 text-center border border-gray-300", "RPM");
  mount(tr, th);
  th = el("th.p-1 text-center border border-gray-300", "Up");
  mount(tr, th);
  th = el("th.p-1 text-center border border-gray-300", "Down");
  mount(tr, th);
  th = el("th.p-1 text-center border border-gray-300", "Cociente");
  mount(tr, th);
  th = el("th.p-1 text-center border border-gray-300", "Prom.");
  mount(tr, th);

  mount(thead, tr);
  mount(table, thead);

  tbody = el("tbody.bg-gray-50");
  tr = el("tr.border-b");
  td = el("td.py-2 px-1 text-center", "300");
  mount(tr, td);
  td = el("td.py-2 px-1 text-center", `${data.tem_ambiente_300 ? data.tem_ambiente_300 : '-'}`);
  mount(tr, td);
  td = el("td.py-2 px-1 text-center", `${data.tem_ensayo_300 ? data.tem_ensayo_300 : '-'}`);
  mount(tr, td);
  td = el("td.py-2 px-1 text-center", "Calculo");
  mount(tr, td);
  td = el("td.py-2 px-1 text-center", "Calculo");
  mount(tr, td);

  mount(tbody, tr);
  tr = el("tr.border-b");
  td = el("td.py-2 px-1 text-center", "200");
  mount(tr, td);
  td = el("td.py-2 px-1 text-center", `${data.tem_ambiente_200 ? data.tem_ambiente_200 : '-'}`);
  mount(tr, td);
    td = el("td.py-2 px-1 text-center", `${data.tem_ensayo_200 ? data.tem_ensayo_200 : '-'}`);
  mount(tr, td);
  td = el("td.py-2 px-1 text-center", "Calculo");
  mount(tr, td);
  td = el("td.py-2 px-1 text-center", "Calculo");
  mount(tr, td);

  mount(tbody, tr);
  mount(table, tbody);

  mount(accordionItem, table)

  mount(tbody, tr);
  tr = el("tr.border-b");
  td = el("td.py-2 px-1 text-center", "100");
  mount(tr, td);
  td = el("td.py-2 px-1 text-center", `${data.tem_ambiente_100 ? data.tem_ambiente_100 : '-'}`);
  mount(tr, td);
    td = el("td.py-2 px-1 text-center", `${data.tem_ensayo_100 ? data.tem_ensayo_100 : '-'}`);
  mount(tr, td);
  td = el("td.py-2 px-1 text-center", "Calculo");
  mount(tr, td);
  td = el("td.py-2 px-1 text-center", "Calculo");
  mount(tr, td);
  
  mount(tbody, tr);
  mount(table, tbody);

  mount(accordionItem, table)

  mount(tbody, tr);
  tr = el("tr.border-b");
  td = el("td.py-2 px-1 text-center", "60");
  mount(tr, td);
  td = el("td.py-2 px-1 text-center", `${data.tem_ambiente_60 ? data.tem_ambiente_60 : '-'}`);
  mount(tr, td);
    td = el("td.py-2 px-1 text-center", `${data.tem_ensayo_60 ? data.tem_ensayo_60 : '-'}`);
  mount(tr, td);
  td = el("td.py-2 px-1 text-center", "Calculo");
  mount(tr, td);
  td = el("td.py-2 px-1 text-center", "Calculo");
  mount(tr, td);
  
  mount(tbody, tr);
  mount(table, tbody);

  mount(accordionItem, table)

  mount(tbody, tr);
  tr = el("tr.border-b");
  td = el("td.py-2 px-1 text-center", "30");
  mount(tr, td);
  td = el("td.py-2 px-1 text-center", `${data.tem_ambiente_30 ? data.tem_ambiente_30 : '-'}`);
  mount(tr, td);
    td = el("td.py-2 px-1 text-center", `${data.tem_ensayo_30 ? data.tem_ensayo_30 : '-'}`);
  mount(tr, td);
  td = el("td.py-2 px-1 text-center", "Calculo");
  mount(tr, td);
  td = el("td.py-2 px-1 text-center", "Calculo");
  mount(tr, td);
  
  mount(tbody, tr);
  mount(table, tbody);

  mount(accordionItem, table)

  mount(tbody, tr);
  tr = el("tr.border-b");
  td = el("td.py-2 px-1 text-center", "6");
  mount(tr, td);
  td = el("td.py-2 px-1 text-center", `${data.tem_ambiente_6 ? data.tem_ambiente_6 : '-'}`);
  mount(tr, td);
    td = el("td.py-2 px-1 text-center", `${data.tem_ensayo_6 ? data.tem_ensayo_6 : '-'}`);
  mount(tr, td);
  td = el("td.py-2 px-1 text-center", "Calculo");
  mount(tr, td);
  td = el("td.py-2 px-1 text-center", "Calculo");
  mount(tr, td);
  
  mount(tbody, tr);
  mount(table, tbody);

  mount(accordionItem, table)

  mount(tbody, tr);
  tr = el("tr.border-b");
  td = el("td.py-2 px-1 text-center", "3");
  mount(tr, td);
  td = el("td.py-2 px-1 text-center", `${data.tem_ambiente_3 ? data.tem_ambiente_3 : '-'}`);
  mount(tr, td);
  td = el("td.py-2 px-1 text-center", `${data.tem_ensayo_3 ? data.tem_ensayo_3 : '-'}`);
  mount(tr, td);
  td = el("td.py-2 px-1 text-center", "Calculo");
  mount(tr, td);
  td = el("td.py-2 px-1 text-center", "Calculo");
  mount(tr, td);
  
  mount(tbody, tr);
  mount(table, tbody);

  mount(accordionItem, table)

  div_img = el('div.mb-2 mt-2 text-center')
  h5 = el('h5.mb-1', 'Adjunto')
  section = el('section')
  div_relative = el('div.relative md:w-1/2 xl:w-1/3 mx-auto flex items-center p-2 border rounded-md border-gray-200 hover:bg-gray-50')
  contain_img = el('div.w-12 h-12 rounded-full bg-gray-100 flex-shrink-0')
  img = el('img.w-12 h-12 object-cover rounded-full cursor-pointer')
  img.setAttribute('src', _setUrl('uploads/ensayos', data.img_up))
  img.setAttribute('onclick', `openModal('myModalReologiaUp', 'modalImgReologiaUp', '${_setUrl('uploads/ensayos', data.img_up)}')`)
  mount(contain_img, img)
  mount(div_relative, contain_img)

  div_txt = el('div.text-left w-full ms-2')
  h6 = el('text-md', 'Archivo adjunto')
  div_flex = el('div.flex justify-between items-center text-gray-500 text-sm', el('p.mb-0', data.img_up))

  mount(div_txt, h6)
  mount(div_txt, div_flex)

  mount(div_relative, div_txt)
  mount(section, div_relative)
  
  mount(div_img, h5)
  mount(div_img, section)

  mount(accordionItem, div_img)

    // h5_1 = el("h5.mb-1 text-center ", "Registro de Reologías");
    h5_2 = el("h5.mb-1 text-center ", "Reología Descendente");
    br = el("br");
    // mount(accordionItem, h5_1);
    mount(accordionItem, br);
    mount(accordionItem, h5_2);
  
    table = el("table.w-full text-sm border border-gray-300");
  
    thead = el("thead.bg-gray-200 text-gray-700");
    tr = el("tr");
    th = el("th.p-1 text-center border border-gray-300", "RPM");
    mount(tr, th);
    th = el("th.p-1 text-center border border-gray-300", "Up");
    mount(tr, th);
    th = el("th.p-1 text-center border border-gray-300", "Down");
    mount(tr, th);
    th = el("th.p-1 text-center border border-gray-300", "Cociente");
    mount(tr, th);
    th = el("th.p-1 text-center border border-gray-300", "Prom.");
    mount(tr, th);
  
    mount(thead, tr);
    mount(table, thead);
  
    tbody = el("tbody.bg-gray-50");
    tr = el("tr.border-b");
    td = el("td.py-2 px-1 text-center", "300");
    mount(tr, td);
    td = el("td.py-2 px-1 text-center", `${data.tem_ambiente_300_up ? data.tem_ambiente_300_up : '-'}`);
    mount(tr, td);
    td = el("td.py-2 px-1 text-center", `${data.tem_ensayo_300_up ? data.tem_ensayo_300_up : '-'}`);
    mount(tr, td);
    td = el("td.py-2 px-1 text-center", "Calculo");
    mount(tr, td);
    td = el("td.py-2 px-1 text-center", "Calculo");
    mount(tr, td);
  
    mount(tbody, tr);
    tr = el("tr.border-b");
    td = el("td.py-2 px-1 text-center", "200");
    mount(tr, td);
    td = el("td.py-2 px-1 text-center", `${data.tem_ambiente_200_up ? data.tem_ambiente_200_up : '-'}`);
    mount(tr, td);
      td = el("td.py-2 px-1 text-center", `${data.tem_ensayo_200_up ? data.tem_ensayo_200_up : '-'}`);
    mount(tr, td);
    td = el("td.py-2 px-1 text-center", "Calculo");
    mount(tr, td);
    td = el("td.py-2 px-1 text-center", "Calculo");
    mount(tr, td);
  
    mount(tbody, tr);
    mount(table, tbody);
  
    mount(accordionItem, table)
  
    mount(tbody, tr);
    tr = el("tr.border-b");
    td = el("td.py-2 px-1 text-center", "100");
    mount(tr, td);
    td = el("td.py-2 px-1 text-center", `${data.tem_ambiente_100_up ? data.tem_ambiente_100_up : '-'}`);
    mount(tr, td);
      td = el("td.py-2 px-1 text-center", `${data.tem_ensayo_100_up ? data.tem_ensayo_100_up : '-'}`);
    mount(tr, td);
    td = el("td.py-2 px-1 text-center", "Calculo");
    mount(tr, td);
    td = el("td.py-2 px-1 text-center", "Calculo");
    mount(tr, td);
    
    mount(tbody, tr);
    mount(table, tbody);
  
    mount(accordionItem, table)
  
    mount(tbody, tr);
    tr = el("tr.border-b");
    td = el("td.py-2 px-1 text-center", "60");
    mount(tr, td);
    td = el("td.py-2 px-1 text-center", `${data.tem_ambiente_60_up ? data.tem_ambiente_60_up : '-'}`);
    mount(tr, td);
      td = el("td.py-2 px-1 text-center", `${data.tem_ensayo_60_up ? data.tem_ensayo_60_up : '-'}`);
    mount(tr, td);
    td = el("td.py-2 px-1 text-center", "Calculo");
    mount(tr, td);
    td = el("td.py-2 px-1 text-center", "Calculo");
    mount(tr, td);
    
    mount(tbody, tr);
    mount(table, tbody);
  
    mount(accordionItem, table)
  
    mount(tbody, tr);
    tr = el("tr.border-b");
    td = el("td.py-2 px-1 text-center", "30");
    mount(tr, td);
    td = el("td.py-2 px-1 text-center", `${data.tem_ambiente_30_up ? data.tem_ambiente_30_up : '-'}`);
    mount(tr, td);
      td = el("td.py-2 px-1 text-center", `${data.tem_ensayo_30_up ? data.tem_ensayo_30_up : '-'}`);
    mount(tr, td);
    td = el("td.py-2 px-1 text-center", "Calculo");
    mount(tr, td);
    td = el("td.py-2 px-1 text-center", "Calculo");
    mount(tr, td);
    
    mount(tbody, tr);
    mount(table, tbody);
  
    mount(accordionItem, table)
  
    mount(tbody, tr);
    tr = el("tr.border-b");
    td = el("td.py-2 px-1 text-center", "6");
    mount(tr, td);
    td = el("td.py-2 px-1 text-center", `${data.tem_ambiente_6_up ? data.tem_ambiente_6_up : '-'}`);
    mount(tr, td);
      td = el("td.py-2 px-1 text-center", `${data.tem_ensayo_6_up ? data.tem_ensayo_6_up : '-'}`);
    mount(tr, td);
    td = el("td.py-2 px-1 text-center", "Calculo");
    mount(tr, td);
    td = el("td.py-2 px-1 text-center", "Calculo");
    mount(tr, td);
    
    mount(tbody, tr);
    mount(table, tbody);
  
    mount(accordionItem, table)
  
    mount(tbody, tr);
    tr = el("tr.border-b");
    td = el("td.py-2 px-1 text-center", "3");
    mount(tr, td);
    td = el("td.py-2 px-1 text-center", `${data.tem_ambiente_3_up ? data.tem_ambiente_3_up : '-'}`);
    mount(tr, td);
    td = el("td.py-2 px-1 text-center", `${data.tem_ensayo_3_up ? data.tem_ensayo_3_up : '-'}`);
    mount(tr, td);
    td = el("td.py-2 px-1 text-center", "Calculo");
    mount(tr, td);
    td = el("td.py-2 px-1 text-center", "Calculo");
    mount(tr, td);
    
    mount(tbody, tr);
    mount(table, tbody);
  
    mount(accordionItem, table)

  div_img = el('div.mb-2 mt-2 text-center')
  h5 = el('h5.mb-1', 'Adjunto')
  section = el('section')
  div_relative = el('div.relative md:w-1/2 xl:w-1/3 mx-auto flex items-center p-2 border rounded-md border-gray-200 hover:bg-gray-50')
  contain_img = el('div.w-12 h-12 rounded-full bg-gray-100 flex-shrink-0')
  img = el('img.w-12 h-12 object-cover rounded-full cursor-pointer')
  img.setAttribute('src', _setUrl('uploads/ensayos', data.img_down))
  img.setAttribute('onclick', `openModal('modalImgReologiaDown', 'modalImgReologiaDown', '${_setUrl('uploads/ensayos', data.img_down)}')`)
  mount(contain_img, img)
  mount(div_relative, contain_img)

  div_txt = el('div.text-left w-full ms-2')
  h6 = el('text-md', 'Archivo adjunto')
  div_flex = el('div.flex justify-between items-center text-gray-500 text-sm', el('p.mb-0', data.img_down))

  mount(div_txt, h6)
  mount(div_txt, div_flex)

  mount(div_relative, div_txt)
  mount(section, div_relative)
  
  mount(div_img, h5)
  mount(div_img, section)

  // mount(registro_uca, divGrid)
  mount(accordionItem, div_img)
  mount(accordionReologia, accordionItem);





  // td = el("td.py-2 px-1 text-center", `${data.tem_ensayo_rpm ? data.tem_ensayo_rpm : '-'}°C`);
  // mount(tr, td);
  // td = el("td.py-2 px-1 text-center", `${data.tem_ensayo_300 ? data.tem_ensayo_300 : '-'}`);
  // mount(tr, td);

  // td = el("td.py-2 px-1 text-center", `${data.tem_ensayo_100 ? data.tem_ensayo_100 : '-'}`);
  // mount(tr, td);
  // td = el("td.py-2 px-1 text-center", `${data.tem_ensayo_60 ? data.tem_ensayo_60 : '-'}`);
  // mount(tr, td);
  // td = el("td.py-2 px-1 text-center", `${data.tem_ensayo_30 ? data.tem_ensayo_30 : '-'}`);
  // mount(tr, td);
  // td = el("td.py-2 px-1 text-center", `${data.tem_ensayo_6 ? data.tem_ensayo_6 : '-'}`);
  // mount(tr, td);
  // td = el("td.py-2 px-1 text-center", `${data.tem_ensayo_3 ? data.tem_ensayo_3 : '-'}`);
  // mount(tr, td);

  // table = el("table.w-full text-sm mt-3 border border-gray-300");
  // thead = el("thead.bg-gray-200 text-gray-700");
  // tr = el("tr");
  // th = el("th.p-1 text-center border border-gray-300", "Temperatura °C");
  // mount(tr, th);
  // th = el("th.p-1 text-center border border-gray-300", "T° Ambiente");
  // mount(tr, th);
  // th = el("th.p-1 text-center border border-gray-300", "T° Ensayo");
  // mount(tr, th);

  // mount(thead, tr);

  // tbody = el("tbody.bg-gray-50");
  // tr = el("tr.border-b");
  // td = el("td.py-2 px-1 text-center", "Viscosidad plastica (lb/100ft2)");
  // mount(tr, td);

  // td = el("td.py-2 px-1 text-center", `${data.temp_ambiente ? data.temp_ambiente : ''}`);
  // mount(tr, td);

  // td = el("td.py-2 px-1 text-center", `${data.temp_ensayo ? data.temp_ensayo : ''}`);
  // mount(tr, td);

  // // Punto de Ceciaden
  // mount(tbody, tr);
  // tr = el("tr.border-b");
  // td = el("td.py-2 px-1 text-center", "Punto de Cedencia (lb/100ft2)");
  // mount(tr, td);

  // td = el("td.py-2 px-1 text-center", `${data.temp_ambiente_punto_cedencia ? data.temp_ambiente_punto_cedencia : ''}`);
  // mount(tr, td);
  // td = el("td.py-2 px-1 text-center", `${data.temp_ensayo_punto_cedencia ? data.temp_ensayo_punto_cedencia : ''}`);
  // mount(tr, td);

  // // Gel 10 segundos
  // mount(tbody, tr);
  // tr = el("tr.border-b");
  // td = el("td.py-2 px-1 text-center", "Gel 10 segundos");
  // mount(tr, td);

  // td = el("td.py-2 px-1 text-center", `${data.temp_ambiente_gel_10_seg ? data.temp_ambiente_gel_10_seg : ''}`);
  // mount(tr, td);
  // td = el("td.py-2 px-1 text-center", `${data.temp_ensayo_gel_10_seg ? data.temp_ensayo_gel_10_seg : ''}`);
  // mount(tr, td);

  // // Gel 10 minutos
  // mount(tbody, tr);
  // tr = el("tr.border-b");
  // td = el("td.py-2 px-1 text-center", "Gel 10 minutos");
  // mount(tr, td);

  // td = el("td.py-2 px-1 text-center", `${data.temp_ambiente_gel_10_min ? data.temp_ambiente_gel_10_min : ''}`);
  // mount(tr, td);
  // td = el("td.py-2 px-1 text-center", `${data.temp_ensayo_gel_10_min ? data.temp_ensayo_gel_10_min : ''}`);
  // mount(tr, td);
  // mount(tbody, tr);

  // mount(table, thead)
  // mount(table, tbody)

  // mount(accordionItem, table);
  // mount(accordionReologia, accordionItem);

  // h5_3 = el("h5.mb-1 text-center ", "Reología (up reads)");
  // br = el("br");

  // mount(accordionItem, br);
  // mount(accordionItem, h5_3);

  // table = el("table.w-full text-sm border border-gray-300");

  // thead = el("thead.bg-gray-200 text-gray-700");
  // tr = el("tr");
  // th = el("th.border border-gray-300");
  // mount(tr, th);
  // th = el("th.p-1 text-center border border-gray-300", "RPM");
  // mount(tr, th);
  // th = el("th.p-1 text-center border border-gray-300", "300");
  // mount(tr, th);
  // th = el("th.p-1 text-center border border-gray-300", "200");
  // mount(tr, th);
  // th = el("th.p-1 text-center border border-gray-300", "100");
  // mount(tr, th);
  // th = el("th.p-1 text-center border border-gray-300", "60");
  // mount(tr, th);
  // th = el("th.p-1 text-center border border-gray-300", "30");
  // mount(tr, th);
  // th = el("th.p-1 text-center border border-gray-300", "6");
  // mount(tr, th);
  // th = el("th.p-1 text-center border border-gray-300", "3");
  // mount(tr, th);

  // mount(thead, tr);
  // mount(table, thead);

  // tbody = el("tbody.bg-gray-50");
  // tr = el("tr.border-b");
  // td = el("td.py-2 px-1 text-center", "T° Ambiente");
  // mount(tr, td);
  // td = el("td.py-2 px-1 text-center", `${data.tem_ambiente_rpm_up ? data.tem_ambiente_rpm_up : '-'}°C`);
  // mount(tr, td);
  // td = el("td.py-2 px-1 text-center", `${data.tem_ambiente_300_up ? data.tem_ambiente_300_up : '-'}`);
  // mount(tr, td);
  // td = el("td.py-2 px-1 text-center", `${data.tem_ambiente_200_up ? data.tem_ambiente_200_up : '-'}`);
  // mount(tr, td);
  // td = el("td.py-2 px-1 text-center", `${data.tem_ambiente_100_up ? data.tem_ambiente_100_up : '-'}`);
  // mount(tr, td);
  // td = el("td.py-2 px-1 text-center", `${data.tem_ambiente_60_up ? data.tem_ambiente_60_up : '-'}`);
  // mount(tr, td);
  // td = el("td.py-2 px-1 text-center", `${data.tem_ambiente_30_up ? data.tem_ambiente_30_up : '-'}`);
  // mount(tr, td);
  // td = el("td.py-2 px-1 text-center", `${data.tem_ambiente_6_up ? data.tem_ambiente_6_up : '-'}`);
  // mount(tr, td);
  // td = el("td.py-2 px-1 text-center", `${data.tem_ambiente_3_up ? data.tem_ambiente_3_up : '-'}`);
  // mount(tr, td);

  // mount(tbody, tr);
  // tr = el("tr.border-b");
  // td = el("td.py-2 px-1 text-center", "T° Ensayo");
  // mount(tr, td);
  // td = el("td.py-2 px-1 text-center", `${data.tem_ensayo_rpm_up ? data.tem_ensayo_rpm_up : '-'}°C`);
  // mount(tr, td);
  // td = el("td.py-2 px-1 text-center", `${data.tem_ensayo_300_up ? data.tem_ensayo_300_up : '-'}`);
  // mount(tr, td);
  // td = el("td.py-2 px-1 text-center", `${data.tem_ensayo_200_up ? data.tem_ensayo_200_up : '-'}`);
  // mount(tr, td);
  // td = el("td.py-2 px-1 text-center", `${data.tem_ensayo_100_up ? data.tem_ensayo_100_up : '-'}`);
  // mount(tr, td);
  // td = el("td.py-2 px-1 text-center", `${data.tem_ensayo_60_up ? data.tem_ensayo_60_up : '-'}`);
  // mount(tr, td);
  // td = el("td.py-2 px-1 text-center", `${data.tem_ensayo_30_up ? data.tem_ensayo_30_up : '-'}`);
  // mount(tr, td);
  // td = el("td.py-2 px-1 text-center", `${data.tem_ensayo_6_up ? data.tem_ensayo_6_up : '-'}`);
  // mount(tr, td);
  // td = el("td.py-2 px-1 text-center", `${data.tem_ensayo_3_up ? data.tem_ensayo_3_up : '-'}`);
  // mount(tr, td);

  // mount(tbody, tr);
  // mount(table, tbody);

  // mount(accordionItem, table)


  // h5_4 = el("h5.mb-1 text-center ", "Reología (down reads)");
  // br = el("br");

  // mount(accordionItem, br);
  // mount(accordionItem, h5_4);

  // table = el("table.w-full text-sm border border-gray-300");

  // thead = el("thead.bg-gray-200 text-gray-700");
  // tr = el("tr");
  // th = el("th.border border-gray-300");
  // mount(tr, th);
  // th = el("th.p-1 text-center border border-gray-300", "RPM");
  // mount(tr, th);
  // th = el("th.p-1 text-center border border-gray-300", "300");
  // mount(tr, th);
  // th = el("th.p-1 text-center border border-gray-300", "200");
  // mount(tr, th);
  // th = el("th.p-1 text-center border border-gray-300", "100");
  // mount(tr, th);
  // th = el("th.p-1 text-center border border-gray-300", "60");
  // mount(tr, th);
  // th = el("th.p-1 text-center border border-gray-300", "30");
  // mount(tr, th);
  // th = el("th.p-1 text-center border border-gray-300", "6");
  // mount(tr, th);
  // th = el("th.p-1 text-center border border-gray-300", "3");
  // mount(tr, th);

  // mount(thead, tr);
  // mount(table, thead);

  // tbody = el("tbody.bg-gray-50");
  // tr = el("tr.border-b");
  // td = el("td.py-2 px-1 text-center", "T° Ambiente");
  // mount(tr, td);
  // td = el("td.py-2 px-1 text-center", `${data.tem_ambiente_rpm_down ? data.tem_ambiente_rpm_down : '-'}°C`);
  // mount(tr, td);
  // td = el("td.py-2 px-1 text-center", `${data.tem_ambiente_300_down ? data.tem_ambiente_300_down : '-'}`);
  // mount(tr, td);
  // td = el("td.py-2 px-1 text-center", `${data.tem_ambiente_200_down ? data.tem_ambiente_200_down : '-'}`);
  // mount(tr, td);
  // td = el("td.py-2 px-1 text-center", `${data.tem_ambiente_100_down ? data.tem_ambiente_100_down : '-'}`);
  // mount(tr, td);
  // td = el("td.py-2 px-1 text-center", `${data.tem_ambiente_60_down ? data.tem_ambiente_60_down : '-'}`);
  // mount(tr, td);
  // td = el("td.py-2 px-1 text-center", `${data.tem_ambiente_30_down ? data.tem_ambiente_30_down : '-'}`);
  // mount(tr, td);
  // td = el("td.py-2 px-1 text-center", `${data.tem_ambiente_6_down ? data.tem_ambiente_6_down : '-'}`);
  // mount(tr, td);
  // td = el("td.py-2 px-1 text-center", `${data.tem_ambiente_3_down ? data.tem_ambiente_3_down : '-'}`);
  // mount(tr, td);

  // mount(tbody, tr);
  // tr = el("tr.border-b");
  // td = el("td.py-2 px-1 text-center", "T° Ensayo");
  // mount(tr, td);
  // td = el("td.py-2 px-1 text-center", `${data.tem_ensayo_rpm_down ? data.tem_ensayo_rpm_down : '-'}°C`);
  // mount(tr, td);
  // td = el("td.py-2 px-1 text-center", `${data.tem_ensayo_300_down ? data.tem_ensayo_300_down : '-'}`);
  // mount(tr, td);
  // td = el("td.py-2 px-1 text-center", `${data.tem_ensayo_200_down ? data.tem_ensayo_200_down : '-'}`);
  // mount(tr, td);
  // td = el("td.py-2 px-1 text-center", `${data.tem_ensayo_100_down ? data.tem_ensayo_100_down : '-'}`);
  // mount(tr, td);
  // td = el("td.py-2 px-1 text-center", `${data.tem_ensayo_60_down ? data.tem_ensayo_60_down : '-'}`);
  // mount(tr, td);
  // td = el("td.py-2 px-1 text-center", `${data.tem_ensayo_30_down ? data.tem_ensayo_30_down : '-'}`);
  // mount(tr, td);
  // td = el("td.py-2 px-1 text-center", `${data.tem_ensayo_6_down ? data.tem_ensayo_6_down : '-'}`);
  // mount(tr, td);
  // td = el("td.py-2 px-1 text-center", `${data.tem_ensayo_3_down ? data.tem_ensayo_3_down : '-'}`);
  // mount(tr, td);

  // mount(tbody, tr);
  // mount(table, tbody);

  // mount(accordionItem, table)


};
