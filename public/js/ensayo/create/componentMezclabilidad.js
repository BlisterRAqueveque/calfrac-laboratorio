let registro_mezclabilidad = document.getElementById("registro_mezclabilidad");
const componentMezclabilidad = (data = "") => {
  // Mezclabilidad
  let grid = el('div.grid grid-cols-3 gap-3 my-3')
  let div = el('div')
  let label = el('label.text-sm text-gray-700 font-semibold tracking-wide mb-2', 'Mezclabilidad')
  let input = el('input.form-control text-sm p-2', {value: data.mezclabilidad ? data.mezclabilidad : 'No aplica', readonly: true})
  mount(div, label)
  mount(div, input)
  mount(grid, div)
  mount(registro_mezclabilidad, grid)

  let p = el('p.text-sm', 'Observación: Mezclabilidad 5 es si la lechada se mezcla muy bien ; 1 si cuesta mezclar')
  mount(registro_mezclabilidad, p)
};
