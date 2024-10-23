const container_formulaciones_tentativas_aditivos_lodo = document.getElementById(
  "container_formulaciones_tentativas_aditivos_lodo"
);
const btnAddFormulacionEnsayoAditivoLodo = document.getElementById(
  "btnAddFormulacionEnsayoAditivoLodo"
);
let aux_ensayo_lodo = 0;
if (btnAddFormulacionEnsayoAditivoLodo)
  btnAddFormulacionEnsayoAditivoLodo.addEventListener("click", (e) => {
    e.preventDefault();
    let flex, button, div, input, select;
    flex = el("div.flex justify-between mb-2");
    button = el(
      "button.bg-red-600 bg-opacity-70 border border-red-600 w-7 h-auto text-white flex justify-center items-center rounded-l-md hover:bg-red-500 cursor-pointer transition-all duration-500",
      "-"
    );
    div = el("div.w-full flex bg-gray-100 gap-2 p-2");
    button.addEventListener("click", (e2) => {
      e2.preventDefault();
      flex.remove();
    });
    input = el("input.form-control text-xs rounded-l-none p-2 col-span-3 md:col-span-1", {
      placeholder: "Lote",
      name: `aditivos[${aux_ensayo_lodo}][lote]`
    });
    mount(div, input);
    select = document.createElement("select");
    select.className = "form-control text-xs rounded-l-none p-2 col-span-4 md:col-span-1";
    select.name = `aditivos[${aux_ensayo_lodo}][aditivo]`;
    const placeholderOption = document.createElement("option");
    placeholderOption.value = "";
    placeholderOption.textContent = "Aditivo";
    placeholderOption.disabled = true;
    placeholderOption.selected = true;
    select.appendChild(placeholderOption);
    const sdOption = document.createElement("option");
    sdOption.value = "SD";
    sdOption.textContent = "S/D";
    select.appendChild(sdOption);
    aditivos.forEach((aditivo) => {
      const option = document.createElement("option");
      option.value = aditivo.id;
      option.textContent = aditivo.nombre;
      select.appendChild(option);
    });
    div.appendChild(select);
    const newinput = document.createElement("input");
    newinput.className = "hidden form-control text-xs rounded-l-none p-2 w-1/2";
    newinput.placeholder = "Comentario";
    newinput.name = `aditivos[${aux_ensayo_lodo}][comentario]`;
    div.appendChild(newinput);
    select.addEventListener("change", function() {
      const aditivoSelect = this;
      if (aditivoSelect.value === "SD") {
        aditivoSelect.classList.add("w-1/2");
        newinput.classList.remove("hidden");
      } else {
        aditivoSelect.classList.remove("w-1/2");
        newinput.classList.add("hidden");
      }
    });
    input = el("input.form-control text-xs rounded-l-none p-2 col-span-3 md:col-span-1", {
      placeholder: "Concentración",
      name: `aditivos[${aux_ensayo_lodo}][concentracion]`
    });
    mount(div, input);
    const unidadSelect = document.createElement("select");
    unidadSelect.className = "form-control text-xs rounded-l-none p-2 col-span-3 md:col-span-1";
    unidadSelect.name = `aditivos[${aux_ensayo_lodo}][unidad]`;
    const unidadPlaceholder = document.createElement("option");
    unidadPlaceholder.value = "";
    unidadPlaceholder.textContent = "Unidad";
    unidadPlaceholder.disabled = true;
    unidadPlaceholder.selected = true;
    unidadSelect.appendChild(unidadPlaceholder);
    const optionLt = document.createElement("option");
    optionLt.value = "lt/m³";
    optionLt.textContent = "lt/m³";
    unidadSelect.appendChild(optionLt);
    const optionKg = document.createElement("option");
    optionKg.value = "kg/m³";
    optionKg.textContent = "kg/m³";
    unidadSelect.appendChild(optionKg);
    div.appendChild(unidadSelect);
    mount(flex, button);
    mount(flex, div);
    mount(container_formulaciones_tentativas_aditivos_lodo, flex);
    aux_ensayo_lodo++;
  });
