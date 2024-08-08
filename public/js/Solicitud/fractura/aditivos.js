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
  
    flex = el("div.flex justify-between mb-2");
    button = el(
      "button.bg-red-600 bg-opacity-70 border border-red-600 w-7 h-auto text-white flex justify-center items-center rounded-l-md hover:bg-red-500 cursor-pointer transition-all duration-500",
      "-"
    );
    div = el("div.w-full grid grid-cols-3 bg-gray-100 gap-3 p-2");
  
    button.addEventListener("click", (e) => {
      e.preventDefault();
      flex.remove();
    });
  
    // Lote
    input = el(
      "input.form-control text-xs rounded-l-none p-2 col-span-3 md:col-span-1",
      { placeholder: "Lote", name: `aditivos[${aux_aditivo_fractura}][lote]` }
    );
    mount(div, input);
  
    // Aditivo
    // input = el(
    //   "input.form-control text-xs rounded-l-none p-2 col-span-3 md:col-span-1",
    //   { placeholder: "Aditivo", name: `aditivos[${aux_aditivo_fractura}][aditivo]` }
    // );
    // mount(div, input);
    // Aditivo (select)
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

  // Añadir opciones de aditivos
  aditivos.forEach(aditivo => {
    const option = document.createElement('option');
    option.value = aditivo.id;
    option.textContent = aditivo.nombre;
    select.appendChild(option);
  });
  div.appendChild(select);
  
    // Concentración
    input = el(
      "input.form-control text-xs rounded-l-none p-2 col-span-3 md:col-span-1",
      {
        placeholder: "Concentración",
        name: `aditivos[${aux_aditivo_fractura}][concentracion]`,
      }
    );
    mount(div, input);
  
    mount(flex, button);
    mount(flex, div);
    mount(container_formulaciones_tentativas_fractura, flex);
  
    aux_aditivo_fractura++;
  });