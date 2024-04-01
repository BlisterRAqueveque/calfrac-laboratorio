const btnAddAditivo = document.getElementById("btnAddAditivo");
const contenedor_aditivos = document.getElementById("contenedor_aditivos");
let count = 1;
let div_row, article, label, input, select, opt, div_flex;

btnAddAditivo.addEventListener("click", (e) => {
  e.preventDefault();
  let aux = count;
  div_row = el("div.row mt-2 rounded-md p-3 bg-gray-50 border mb-3 dark:card-bg-head dark:border-none");
  article = el("article.col-xs-12.col-md-1 my-2");
  label = el("label.font-semibold tracking-wide sz dark:text-gray-300", "Orden");
  input = el(
    "input.form-control orden sz text-center placeholder:text-gray-300 placeholder:font-light p-2 dark:inp_bg_2 dark:text-gray-300 dark:placeholder:text-gray-400 dark:border-none",
    { value: aux, disabled: "true" }
  );

  // Inserta el Input 'Orden'
  mount(article, label);
  mount(article, input);
  mount(div_row, article);

  article = el("article.col-xs-12.col-md-3 my-2");
  label = el("label.font-semibold tracking-wide sz dark:text-gray-300", "Material");
  select = el("select.form-select sz p-2 dark:inp_bg_2 dark:text-gray-300 dark:placeholder:text-gray-400 dark:border-none", {
    name: `aditivos[${aux}][material]`,
    id: "material",
  });
  opt = el("option", { value: "" }, "-- Seleccione --");

  // Inserta el Select 'Material'
  mount(select, opt);

  aditivos.forEach((e) => {
    opt = el("option", { value: e.id }, e.nombre);
    mount(select, opt);
  });

  mount(article, label);
  mount(article, select);
  mount(div_row, article);

  // Inserta el input de 'Concentración'
  article = el("article.col-xs-12.col-md-3 my-2");
  label = el("label.font-semibold tracking-wide sz dark:text-gray-300", "Concentración");
  div_flex = el("div.flex gap-3");
  input = el(
    "input.form-control sz text-center placeholder:text-gray-300 placeholder:font-light p-2 dark:inp_bg_2 dark:text-gray-300 dark:placeholder:text-gray-400 dark:border-none",
    { placeholder: "00.00", min: "0", name: `aditivos[${aux}][concentracion]` }
  );
  select = el("select.form-select sz p-2 dark:inp_bg_2 dark:text-gray-300 dark:placeholder:text-gray-400 dark:border-none", {
    name: `aditivos[${aux}][concentracion_type]`,
    id: "concentracion_type",
  });
  opt = el("option", { value: "" }, "-- Seleccione --");

  mount(select, opt);
  mount(div_flex, input);
  mount(div_flex, select);
  mount(article, label);
  mount(article, div_flex);
  mount(div_row, article);

  // Inserta el input de 'Agregado'
  article = el("article.col-xs-12.col-md-2 my-2");
  label = el("label.font-semibold tracking-wide sz dark:text-gray-300", "Agregado");
  select = el("select.form-select sz p-2 dark:inp_bg_2 dark:text-gray-300 dark:placeholder:text-gray-400 dark:border-none", {
    name: `aditivos[${aux}][agregado]`,
    id: "agregado",
  });
  opt = el("option", { value: "" }, "-- Seleccione --");

  mount(select, opt);

  mount(article, label);
  mount(article, select);
  mount(div_row, article);

  // Inserta el input de 'Nº de Lote'
  article = el("article.col-xs-12.col-md-2 my-2");
  label = el("label.font-semibold tracking-wide sz dark:text-gray-300", "Nº de Lote");
  input = el(
    "input.form-control sz text-center placeholder:text-gray-300 placeholder:font-light p-2 dark:inp_bg_2 dark:text-gray-300 dark:placeholder:text-gray-400 dark:border-none",
    {
      type: "number",
      placeholder: "Ingrese el Nº",
      min: "0",
      name: `aditivos[${aux}][numero_lote]`,
    }
  );

  mount(article, label);
  mount(article, input);
  mount(div_row, article);

  // Inserta el Botón de 'Acciones'
  article = el("article.col-xs-12.col-md-1 my-2 text-center");
  div_flex = el("div.flex flex-col justify-center");
  label = el("label.font-semibold tracking-wide sz dark:text-gray-300", "Acciones");
  let button = el(
    "button.bg-red-600 flex justify-center text-white p-2 rounded-md border border-red-800"
  );
  button.innerHTML = `
        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
            stroke-width="1.5" stroke="currentColor" class="w-4 h-4">
            <path stroke-linecap="round" stroke-linejoin="round"
                d="m14.74 9-.346 9m-4.788 0L9.26 9m9.968-3.21c.342.052.682.107 1.022.166m-1.022-.165L18.16 19.673a2.25 2.25 0 0 1-2.244 2.077H8.084a2.25 2.25 0 0 1-2.244-2.077L4.772 5.79m14.456 0a48.108 48.108 0 0 0-3.478-.397m-12 .562c.34-.059.68-.114 1.022-.165m0 0a48.11 48.11 0 0 1 3.478-.397m7.5 0v-.916c0-1.18-.91-2.164-2.09-2.201a51.964 51.964 0 0 0-3.32 0c-1.18.037-2.09 1.022-2.09 2.201v.916m7.5 0a48.667 48.667 0 0 0-7.5 0" />
        </svg>
        `;
  button.addEventListener("click", () => {
    button.parentElement.parentElement.parentElement.remove();
    let cant = document.getElementsByClassName("orden");
    for (let i = 0; i < cant.length; i++) {
      cant[i].value = i + 1;
    }
    count = cant.length + 1;
  });

  mount(article, label);
  mount(div_flex, label);
  mount(div_flex, button);
  mount(article, div_flex);
  mount(div_row, article);

  mount(contenedor_aditivos, div_row);
  count++;
});
