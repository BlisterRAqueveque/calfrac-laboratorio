const container_formulaciones_tentativas_aditivos_lodo = document.getElementById(
  "container_formulaciones_tentativas_aditivos_lodo"
);
const btnAddFormulacionEnsayoAditivoLodo = document.getElementById("btnAddFormulacionEnsayoAditivoLodo");
let aux_ensayo_lodo = 0;

// Opciones para el select "Unidad"
const unidadOptions = [
  { value: 'lt/m³', text: 'lt/m³' },
  { value: 'kg/m³', text: 'kg/m³' },
];

btnAddFormulacionEnsayoAditivoLodo.addEventListener("click", (e) => {
  e.preventDefault();
  let flex, button, div, input, select;

  flex = document.createElement("div");
  flex.className = "flex justify-between mb-2";

  button = document.createElement("button");
  button.className = "bg-red-600 bg-opacity-70 border border-red-600 w-7 h-auto text-white flex justify-center items-center rounded-l-md hover:bg-red-500 cursor-pointer transition-all duration-500";
  button.innerHTML = "-";

  div = document.createElement("div");
  div.className = "w-full flex bg-gray-100 gap-2 p-2";

  button.addEventListener("click", (e) => {
    e.preventDefault();
    flex.remove();
  });

  // Lote
  input = document.createElement("input");
  input.className = "form-control text-xs rounded-l-none p-2 col-span-4 md:col-span-1";
  input.placeholder = "Lote";
  input.name = `aditivos[${aux_ensayo_lodo}][lote]`;
  div.appendChild(input);

  // Aditivo (select)
  select = document.createElement("select");
  select.className = "form-control text-xs rounded-l-none p-2 col-span-4 md:col-span-1";
  select.name = `aditivos[${aux_ensayo_lodo}][aditivo]`;

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

  const newinput = document.createElement("input");
  newinput.className = "hidden form-control text-xs rounded-l-none p-2 w-1/2";
  newinput.placeholder = "Comentario";
  newinput.name = `aditivos[${aux_ensayo_lodo}][comentario]`;
  div.appendChild(newinput);

  // Escuchar cambios en el select de aditivos
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
  input = document.createElement("input");
  input.className = "form-control text-xs rounded-l-none p-2 col-span-4 md:col-span-1";
  input.placeholder = "Concentración";
  input.name = `aditivos[${aux_ensayo_lodo}][concentracion]`;
  div.appendChild(input);

  // Unidad (select) - nuevo input agregado
  select = document.createElement("select");
  select.className = "form-control text-xs rounded-l-none p-2 col-span-4 md:col-span-1"; // estilo similar a blend
  select.name = `aditivos[${aux_ensayo_lodo}][unidad]`;

  // Añadir opción placeholder
  const unidadPlaceholder = document.createElement('option');
  unidadPlaceholder.value = '';
  unidadPlaceholder.textContent = 'Unidad';
  unidadPlaceholder.disabled = true;
  unidadPlaceholder.selected = true;
  select.appendChild(unidadPlaceholder);

  // Añadir opciones de unidad
  unidadOptions.forEach(optionData => {
    const option = document.createElement('option');
    option.value = optionData.value;
    option.textContent = optionData.text;
    select.appendChild(option);
  });
  div.appendChild(select);

  flex.appendChild(button);
  flex.appendChild(div);
  container_formulaciones_tentativas_aditivos_lodo.appendChild(flex);

  aux_ensayo_lodo++;
});
