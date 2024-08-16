// vieja conf
// const container_formulaciones_tentativas = document.getElementById(
//   "container_formulaciones_tentativas"
// );
// const btnAddFormulacion = document.getElementById("btnAddFormulacion");
// let aux_aditivo = 0;

// // Opciones para el select "Blend"
// const blendOptions = [
//   { value: 'Si', text: 'Si' },
//   { value: 'No', text: 'No' },
// ];

// /**
//  * Crea las formulaciones para agregar los lotes, aditivos y/o también la concentración
//  */

// btnAddFormulacion.addEventListener("click", (e) => {
//   e.preventDefault();
//   let flex, button, div, input;

//   flex = el("div.flex justify-between mb-2");
//   button = el(
//     "button.bg-red-600 bg-opacity-70 border border-red-600 w-7 h-auto text-white flex justify-center items-center rounded-l-md hover:bg-red-500 cursor-pointer transition-all duration-500",
//     "-"
//   );
//   div = el("div.w-full grid grid-cols-4 bg-gray-100 gap-3 p-2");

//   button.addEventListener("click", (e) => {
//     e.preventDefault();
//     flex.remove();
//   });

//   // Lote
//   input = el(
//     "input.form-control text-xs rounded-l-none p-2 col-span-4 md:col-span-1",
//     { placeholder: "Lote", name: `aditivos[${aux_aditivo}][lote]` }
//   );
//   mount(div, input);

//   // Aditivo
//   input = el(
//     "input.form-control text-xs rounded-l-none p-2 col-span-4 md:col-span-1",
//     { placeholder: "Aditivo", name: `aditivos[${aux_aditivo}][aditivo]` }
//   );
//   mount(div, input);

//   // Concentración
//   input = el(
//     "input.form-control text-xs rounded-l-none p-2 col-span-4 md:col-span-1",
//     {
//       placeholder: "Concentración",
//       name: `aditivos[${aux_aditivo}][concentracion]`,
//     }
//   );
//   mount(div, input);

//   // Blend (select)
//   select = el("select.form-control text-xs rounded-l-none p-2 col-span-4 md:col-span-1", {
//     name: `aditivos[${aux_aditivo}][blend]`,
//   });

//   // Añadir opción placeholder
//   const placeholderOption = document.createElement('option');
//   placeholderOption.value = '';
//   placeholderOption.textContent = 'Blend';
//   placeholderOption.disabled = true;
//   placeholderOption.selected = true;
//   select.appendChild(placeholderOption);

//   blendOptions.forEach(optionData => {
//     const option = document.createElement('option');
//     option.value = optionData.value;
//     option.textContent = optionData.text;
//     select.appendChild(option);
//   });
//   mount(div, select);

//   mount(flex, button);
//   mount(flex, div);
//   mount(container_formulaciones_tentativas, flex);

//   aux_aditivo++;
// });
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
  flex.className = "flex justify-between mb-2";

  button = document.createElement("button");
  button.className = "bg-red-600 bg-opacity-70 border border-red-600 w-7 h-auto text-white flex justify-center items-center rounded-l-md hover:bg-red-500 cursor-pointer transition-all duration-500";
  button.innerHTML = "-";
  
  div = document.createElement("div");
  div.className = "w-full grid grid-cols-4 bg-gray-100 gap-3 p-2";

  button.addEventListener("click", (e) => {
    e.preventDefault();
    flex.remove();
  });

  // Lote
  input = document.createElement("input");
  input.className = "form-control text-xs rounded-l-none p-2 col-span-4 md:col-span-1";
  input.placeholder = "Lote";
  input.name = `aditivos[${aux_aditivo}][lote]`;
  div.appendChild(input);

  // Aditivo (select)
  select = document.createElement("select");
  select.className = "form-control text-xs rounded-l-none p-2 col-span-4 md:col-span-1";
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

  // Concentración
  input = document.createElement("input");
  input.className = "form-control text-xs rounded-l-none p-2 col-span-4 md:col-span-1";
  input.placeholder = "Concentración";
  input.name = `aditivos[${aux_aditivo}][concentracion]`;
  div.appendChild(input);

  // Blend (select)
  select = document.createElement("select");
  select.className = "form-control text-xs rounded-l-none p-2 col-span-4 md:col-span-1";
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

