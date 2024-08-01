let registro_filtrado = document.getElementById('registro_filtrado')
let div, divField, label, input
const componentFiltrado = (data = '') => {
  div = el('div.flex justify-center', el('p', 'Registro de Pérdida de Filtrado'))

  mount(registro_filtrado, div)
  div = el('div.grid grid-cols-3 gap-3 mb-3')

  // Temperatura
  divField = el('div')
  label = el('label.text-sm text-gray-700 font-semibold tracking-wide mb-2', 'Temperatura °C')
  input = el('input.form-control text-sm p-2', {'readonly':'true', value:`${data.temperatura}`})
  mount(divField, label)
  mount(divField, input)
  mount(div, divField)
  // --
  
  // Fluido Acumulado
  divField = el('div')
  label = el('label.text-sm text-gray-700 font-semibold tracking-wide mb-2', 'Fluido Acumulado mL')
  input = el('input.form-control text-sm p-2', {'readonly':'true', value:`${data.fluido_acumulado}`})
  mount(divField, label)
  mount(divField, input)
  mount(div, divField)
  // --

  // Filtrado API
  divField = el('div')
  label = el('label.text-sm text-gray-700 font-semibold tracking-wide mb-2', 'Filtrado API')
  input = el('input.form-control text-sm p-2', {'readonly':'true', value:`${data.filtrado_api}`})
  mount(divField, label)
  mount(divField, input)
  mount(div, divField)
  // --

  mount(registro_filtrado, div)
}


{/* <div class="flex justify-center">
<p>Registro de Pérdida de Filtrado</p>
</div>

<div class="grid grid-cols-3 gap-3 mb-3">
<div>
    <label for="perdida_temperatura" class="text-sm text-gray-700 font-semibold tracking-wide mb-2">Temperatura °C</label>
    <input type="text" class="form-control text-sm p-2" readonly>
</div>
<div>
    <label for="perdida_fluido_acumulado"
        class="text-sm text-gray-700 font-semibold tracking-wide mb-2">Fluido Acumulado mL</label>
    <input type="text"
        class="form-control text-sm p-2" readonly>
</div>
<div>
    <label for="perdida_filtrado_api"
        class="text-sm text-gray-700 font-semibold tracking-wide mb-2">Filtrado API
        ml/30min</label>
        <input type="text"
        class="form-control text-sm p-2" readonly>
</div>
</div> */}