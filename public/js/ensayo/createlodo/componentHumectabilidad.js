const accordionHumectabilidadLodo = document.getElementById("accordionHumectabilidadLodo");

componentHumectabilidadLodo = (data = {}) => {
  console.log(data); // Verificar los valores de 'data'

  if (!accordionHumectabilidadLodo) {
    console.error("El contenedor 'accordionHumectabilidadLodo' no se encontró en el DOM");
    return; // Salir si el contenedor no existe
  }

  let accordionItem, titulo, texto, inputContainer;

  // Contenedor principal y título
  accordionItem = el("div.mb-2");
  titulo = el("h5", "HUMECTABILIDAD:");
  mount(accordionItem, titulo);

  // Texto descriptivo
  texto = el("p.text-sm.text-gray-700.font-semibold.tracking-wide.mb-2", 
    `Se evalúa la capacidad del colchón mecánico de invertir la fase externa oleosa no conductiva eléctricamente del lodo, por una fase externa acousa conductiva.
    El procedimiento considera el agregado de colchón en un volumen determinado de lodo, ambos son pre acondicionados a BHCT y finalmente se determina el porcentaje de espaciador necesario para invertir la fase externa del lodo.
    % Vol de Espaciador = (Vol Total de Espaciador / (Vol de lodo + Espaciador) * 100)`
  );
  mount(accordionItem, texto);

  // Contenedor para el input de humectabilidad
  inputContainer = el("div.grid.grid-cols-6.gap-3");
  const colSpanDiv = el("div.col-span-2.xl:col-span-1");

  const label = el("label.text-sm.text-gray-700.font-semibold.tracking-wide.mb-2", 
    ` % Humectabilidad`
  );
  mount(colSpanDiv, label);

  const input = el("input#humectabilidad.form-control.text-sm.p-2", {
    type: "number",
    name: "humectabilidad",
    value: data.humectabilidad || '', // Si 'data.humectabilidad' existe, usar su valor, sino dejar vacío
    placeholder: "%",
    readonly: true
  });
  mount(colSpanDiv, input);
  mount(inputContainer, colSpanDiv);
  mount(accordionItem, inputContainer);

  // Montamos el contenedor principal en el contenedor
  mount(accordionHumectabilidadLodo, accordionItem);
};
