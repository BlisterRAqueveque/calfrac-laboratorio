let registro_agua_libre = document.getElementById("registro_agua_libre");
const componentAguaLibre = (data = "") => {
  // Agua Libre
  let div = el('div')
  let label = el('label.text-sm text-gray-700 font-semibold tracking-wide mb-2', 'Agua Libre °C')
  let input = el('input.form-control text-sm p-2', {value: data.agua_libre ? data.agua_libre : 'No aplica', readonly: true})
  mount(div, label)
  mount(div, input)
  mount(registro_agua_libre, div)
  
  // Volumen mL
  div = el('div')
  label = el('label.text-sm text-gray-700 font-semibold tracking-wide mb-2', 'Volumen mL')
  input = el('input.form-control text-sm p-2', {value: data.volumen ? data.volumen : 'No aplica', readonly: true})
  mount(div, label)
  mount(div, input)
  mount(registro_agua_libre, div)
  
  // API Agua Libre %
  div = el('div')
  label = el('label.text-sm text-gray-700 font-semibold tracking-wide mb-2', 'API Agua Libre %')
  input = el('input.form-control text-sm p-2', {value: data.api_agua_libre ? data.api_agua_libre : 'No aplica', readonly: true})
  mount(div, label)
  mount(div, input)
  mount(registro_agua_libre, div)
};
