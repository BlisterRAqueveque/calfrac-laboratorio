const container_formulaciones_tentativas_fractura = document.getElementById(
    "container_formulaciones_tentativas_fractura"
  );
  const btnAddFormulacionFractura = document.getElementById("btnAddFormulacionFractura");
  let aux_aditivo_fractura = 0;
  
  /**
   * Crea las formulaciones para agregar los lotes, aditivos y/o también la concentración
   */
  
  btnAddFormulacionFractura.addEventListener("click", (e) => {
    e.preventDefault();
    let flex, button, div, input;

    // Opciones para el select de "Curva Hidratación"
    const hidratacionOptions = [
      { value: 'Si', text: 'Si' },
      { value: 'No', text: 'No' },
    ];
  
    flex = el("div.flex justify-between mb-2");
    button = el(
      "button.bg-red-600 bg-opacity-70 border border-red-600 w-7 h-auto text-white flex justify-center items-center rounded-l-md hover:bg-red-500 cursor-pointer transition-all duration-500",
      "-"
    );
    div = el("div.w-full flex bg-gray-100 gap-2 p-2");
  
    button.addEventListener("click", (e) => {
      e.preventDefault();
      flex.remove();
    });
  
    // Lote
    input = el(
      "input.form-control text-xs rounded-l-none p-2 col-span-4 md:col-span-1",
      { placeholder: "Lote", name: `aditivos[${aux_aditivo_fractura}][lote]` }
    );
    mount(div, input);

    // Aditivo
    select = document.createElement("select");
    select.className = "form-control text-xs rounded-l-none p-2 col-span-4 md:col-span-1";
    select.name = `aditivos[${aux_aditivo_fractura}][aditivo]`;

    // Añadir opción placeholder
    const placeholderOption = document.createElement('option');
    placeholderOption.value = '';
    placeholderOption.textContent = 'Aditivo';
    placeholderOption.disabled = true;
    placeholderOption.selected = true;
    select.appendChild(placeholderOption);

    // Añadir opción "S/D"
    const sdOption = document.createElement('option');
    sdOption.value = 'SD';
    sdOption.textContent = 'S/D';
    select.appendChild(sdOption);
    

    // Añadir opciones de aditivos
    aditivos.forEach(aditivo => {
    const option = document.createElement('option');
    option.value = aditivo.id;
    option.textContent = aditivo.nombre;
    select.appendChild(option);
    });
    div.appendChild(select);

    // Nuevo input para comentario hidden
    const newinput = document.createElement("input");
    newinput.className = "hidden form-control text-xs rounded-l-none p-2 w-1/2";
    newinput.placeholder = "Comentario";
    newinput.name = `aditivos[${aux_aditivo_fractura}][comentario]`;
    div.appendChild(newinput);
  
    // Escuchar cambios en el select de aditivos -> vieja conf
    select.addEventListener('change', function() {
      const aditivoSelect = this;
      if (aditivoSelect.value === 'SD') {
        aditivoSelect.classList.add('w-1/2');
        newinput.classList.remove('hidden');
      } else {
        aditivoSelect.classList.remove('w-1/2');
        newinput.classList.add('hidden');
      }
    });
  
    // Concentración
    input = el(
      "input.form-control text-xs rounded-l-none p-2 col-span-3 md:col-span-1",
      {
        placeholder: "Concentración",
        name: `aditivos[${aux_aditivo_fractura}][concentracion]`,
      }
    );
    mount(div, input);

    // Curva Hidratación (select)
    select = document.createElement("select");
    select.className = "form-control text-xs rounded-l-none p-2 col-span-4 md:col-span-1";
    select.name = `aditivos[${aux_aditivo_fractura}][hidratacion]`;

    // Añadir opción placeholder
    const hidratacionPlaceholder = document.createElement('option');
    hidratacionPlaceholder.value = '0';
    hidratacionPlaceholder.textContent = 'Curva de Hidratación';
    hidratacionPlaceholder.disabled = true;
    hidratacionPlaceholder.selected = true;
    select.appendChild(hidratacionPlaceholder);

    hidratacionOptions.forEach(optionData => {
        const option = document.createElement('option');
        option.value = optionData.value;
        option.textContent = optionData.text;
        select.appendChild(option);
    });
    div.appendChild(select);
  
    mount(flex, button);
    mount(flex, div);
    mount(container_formulaciones_tentativas_fractura, flex);
  
    aux_aditivo_fractura++;
  });