const container_formulaciones_tentativas = document.getElementById("container_formulaciones_tentativas");
const btnAddFormulacion = document.getElementById("btnAddFormulacion");
let aux_aditivo = 0;

// Opciones para el select "Blend"
const blendOptions = [
  { value: 'Si', text: 'Si' },
  { value: 'No', text: 'No' },
];

btnAddFormulacion.addEventListener("click", (e) => {
  e.preventDefault();
  let flex, button, div, input, select;

  flex = document.createElement("div");
  flex.className = "flex gap-2 mb-2 ";

  button = document.createElement("button");
  button.className = "bg-red-600 bg-opacity-70 border border-red-600 w-7 h-auto text-white flex justify-center items-center rounded-l-md hover:bg-red-500 cursor-pointer transition-all duration-500";
  button.innerHTML = "-";
  
  div = document.createElement("div");
  div.className = "flex gap-2 w-full bg-gray-100 p-2";

  button.addEventListener("click", (e) => {
    e.preventDefault();
    flex.remove();
  });

  // Lote
  input = document.createElement("input");
  input.className = "form-control text-xs rounded-l-none p-2 w-1/4";
  input.placeholder = "Lote";
  input.name = `aditivos[${aux_aditivo}][lote]`;
  div.appendChild(input);

  // Aditivo (select)
  select = document.createElement("select");
  select.className = "form-control text-xs rounded-l-none p-2 w-1/4";
  select.name = `aditivos[${aux_aditivo}][aditivo]`;

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

  // Contenedor para el nuevo input (Comentario)
  const comentarioInput = document.createElement("input");
  comentarioInput.className = "hidden form-control text-xs rounded-l-none p-2 w-1/2"; // Inicialmente oculto
  comentarioInput.placeholder = "Comentario";
  comentarioInput.name = `aditivos[${aux_aditivo}][comentario]`;
  div.appendChild(comentarioInput);

  // Escuchar cambios en el select de aditivos
  select.addEventListener('change', function() {
    const aditivoSelect = this;
    if (this.value === 'SD') {
      aditivoSelect.classList.add('w-1/2');
      comentarioInput.classList.remove('hidden'); // Mostrar campo de Comentario
    } else {
      aditivoSelect.classList.remove('w-1/2');
      comentarioInput.classList.add('hidden'); // Ocultar campo de Comentario
    }
  });

  // Concentración
  input = document.createElement("input");
  input.className = "form-control text-xs rounded-l-none p-2 w-1/4";
  input.placeholder = "Concentración";
  input.name = `aditivos[${aux_aditivo}][concentracion]`;
  div.appendChild(input);

  // Blend (select)
  select = document.createElement("select");
  select.className = "form-control text-xs rounded-l-none p-2 w-1/4";
  select.name = `aditivos[${aux_aditivo}][blend]`;

  // Añadir opción placeholder
  const blendPlaceholder = document.createElement('option');
  blendPlaceholder.value = '0';
  blendPlaceholder.textContent = 'Blend';
  blendPlaceholder.disabled = true;
  blendPlaceholder.selected = true;
  select.appendChild(blendPlaceholder);

  blendOptions.forEach(optionData => {
    const option = document.createElement('option');
    option.value = optionData.value;
    option.textContent = optionData.text;
    select.appendChild(option);
  });
  div.appendChild(select);

  flex.appendChild(button);
  flex.appendChild(div);
  container_formulaciones_tentativas.appendChild(flex);

  aux_aditivo++;
});

