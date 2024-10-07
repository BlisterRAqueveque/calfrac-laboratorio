// Obtener el contenedor del acordeón para Estática
const accordionEstaticaLodo = document.getElementById("accordionEstaticaLodo");

// Función principal para crear el componente Estática Lodo
const componentEstaticaLodo = (data = {}) => {
    // Verificar si el elemento DOM existe antes de continuar
    if (!accordionEstaticaLodo) {
        console.error("El elemento accordionEstaticaLodo no está disponible en el DOM.");
        return;
    }

    console.log(data); // Verificar los valores de 'data'

    // Limpiar el contenido existente en accordionEstaticaLodo
    accordionEstaticaLodo.innerHTML = '';

    // Contenedor row
    const rowDiv = document.createElement('div');
    rowDiv.classList.add('row', 'mt-3', 'py-2', 'px-2');

    // Contenedor Flex para la tabla y los adjuntos
    const flexContainer = document.createElement('div');
    flexContainer.classList.add('flex', 'flex-wrap');

    // Contenedor de la tabla
    const tableContainer = document.createElement('div');
    tableContainer.classList.add('w-full', 'md:w-1/2');

    // Título de la tabla
    const tableTitle = document.createElement('div');
    tableTitle.classList.add('mb-2', 'text-center');
    tableTitle.innerHTML = '<h5 class="mb-1">Registro de Remoción Estática del Lodo</h5>';

    // Crear la tabla
    const removalTable = document.createElement('table');
    removalTable.classList.add('w-full', 'text-sm', 'border', 'border-gray-300');

    // Crear el encabezado de la tabla
    const removalTableHead = document.createElement('thead');
    removalTableHead.classList.add('bg-gray-200', 'text-gray-700');
    removalTableHead.innerHTML = `
      <tr>
        <th class="p-1 text-center border border-gray-300">Tiempo de contacto (min)</th>
        <th class="p-1 text-center border border-gray-300">${colchonNombre}</th>
      </tr>
    `;

    // Crear el cuerpo de la tabla (tbody)
    const tbody = document.createElement('tbody');

    // Filas de la tabla, usando datos de 'data'
    const times = [1, 2, 3, 4, 5];
    times.forEach((time, index) => {
        const tr = document.createElement('tr');
        tr.innerHTML = `
          <td class="p-1 text-center border border-gray-300">${time}</td>
          <td class="py-2 px-1 text-center border border-gray-300">
            ${data[`tiempo_estatica_${index + 1}`] ? data[`tiempo_estatica_${index + 1}`] : '-'}
          </td>
        `;
        tbody.appendChild(tr);
    });

    // Agregar encabezado y cuerpo de la tabla
    removalTable.appendChild(removalTableHead);
    removalTable.appendChild(tbody);

    // Añadir la tabla al contenedor de la tabla
    tableContainer.appendChild(tableTitle);
    tableContainer.appendChild(removalTable);

    // Contenedor de los adjuntos
    const attachmentsContainer = document.createElement('div');
    attachmentsContainer.classList.add('w-full', 'md:w-1/2', 'pl-4');

    // Función para crear los adjuntos
    function createAttachment(title, imgSrc, imgId, imgName) {
        const attachmentDiv = document.createElement('div');
        attachmentDiv.classList.add('mb-2', 'mt-2', 'text-center');

        const section = document.createElement('section');
        section.innerHTML = `
          <div class="relative flex items-center p-2 border rounded-md border-gray-200 hover:bg-gray-50">
            <div class="w-12 h-12 rounded-full bg-gray-100 flex-shrink-0">
              <img src="${imgSrc}" class="w-12 h-12 object-cover rounded-full cursor-pointer" alt=""
                   onclick="openModal('${imgId}', 'modalImgLodo', '${imgSrc}')">
            </div>
            <div class="text-left w-full ms-2">
              <h6 class="text-md">Archivo adjunto</h6>
              <div class="flex justify-between items-center text-gray-500 text-sm">
                <p class="mb-0">${imgName}</p>
              </div>
            </div>
          </div>
        `;

        const titleElement = document.createElement('h5');
        titleElement.classList.add('mb-1');
        titleElement.textContent = title;

        attachmentDiv.appendChild(titleElement);
        attachmentDiv.appendChild(section);

        return attachmentDiv;
    }

    // Crear los adjuntos usando datos de 'data'
    const adjunto1 = createAttachment(
        'Adjunto 1',
        data.img_1 ? `${baseUrl}/${data.img_1}` : '',
        'myModalLodo',
        data.img_1 ? data.img_1 : 'No disponible'
    );

    const adjunto2 = createAttachment(
        'Adjunto 2',
        data.img_2 ? `${baseUrl}/${data.img_2}` : '',
        'myModalLodo2',
        data.img_2 ? data.img_2 : 'No disponible'
    );

    // Añadir los adjuntos al contenedor
    attachmentsContainer.appendChild(adjunto1);
    attachmentsContainer.appendChild(adjunto2);

    // Añadir la tabla y los adjuntos al contenedor flex
    flexContainer.appendChild(tableContainer);
    flexContainer.appendChild(attachmentsContainer);

    // Añadir el contenedor flex al rowDiv
    rowDiv.appendChild(flexContainer);

    // Añadir el rowDiv al accordionEstaticaLodo
    accordionEstaticaLodo.appendChild(rowDiv);
};
