const containerFormulaciones = document.getElementById(
  "container_formulaciones"
);
const btnAddFormulacion = document.getElementById("btnAddFormulacion");

let div_grid, div_col, div, inp;
let i = 1;

/**
 * Genera los campos del input para agregar en la Formulación Tentativa
 */
btnAddFormulacion.addEventListener("click", (e) => {
  e.preventDefault();

  div_grid = el("div.grid grid-cols-3 gap-y-2 my-2");
  div = el("div.text-center", el("p.text-sm", `( ${i} )`));

  mount(div_grid, div);

  // PRINCIPAL
  div_col = el("div.col-span-1 grid grid-cols-3 gap-3");

  // Mount Lote
  div = el(
    "div",
    el(
      "p.text-sm",
      el("input.form-control text-xs", {
        name: `formulacion[${i}][lote_principal]`,
        placeholder: "N° Lote",
      })
    )
  );
  mount(div_col, div);

  // Mount Aditivo
  div = el(
    "div",
    el(
      "p.text-sm",
      el("input.form-control text-xs", {
        name: `formulacion[${i}][aditivo_principal]`,
        placeholder: "Aditivo",
      })
    )
  );
  mount(div_col, div);

  // Mount Concentración
  div = el(
    "div",
    el(
      "p.text-sm",
      el("input.form-control text-xs", {
        name: `formulacion[${i}][conc_principal]`,
        placeholder: "0.0%",
      })
    )
  );
  mount(div_col, div);

  mount(div_grid, div_col);

  // RELLENO

  div_col = el("div.col-span-1 grid grid-cols-3 gap-3 ms-2");
  // Mount Lote
  div = el(
    "div",
    el(
      "p.text-sm",
      el("input.form-control text-xs", {
        name: `formulacion[${i}][lote_relleno]`,
        placeholder: "N° Lote",
      })
    )
  );
  mount(div_col, div);

  // Mount Aditivo
  div = el(
    "div",
    el(
      "p.text-sm",
      el("input.form-control text-xs", {
        name: `formulacion[${i}][aditivo_relleno]`,
        placeholder: "Aditivo",
      })
    )
  );
  mount(div_col, div);

  // Mount Concentración
  div = el(
    "div",
    el(
      "p.text-sm",
      el("input.form-control text-xs", {
        name: `formulacion[${i}][conc_relleno]`,
        placeholder: "0.0%",
      })
    )
  );
  mount(div_col, div);
  mount(div_grid, div_col);
  mount(containerFormulaciones, div_grid);
  i++;
});


// =======================================================================
const container_formulaciones_principal_phone = document.querySelector('.container_formulaciones_principal_phone');
const btnAddFormulacionPrincipalPhone = document.getElementById('btnAddFormulacionPrincipalPhone');

btnAddFormulacionPrincipalPhone.addEventListener('click', e => {
    e.preventDefault();

    div_grid = el('div.grid grid-cols-3 gap-2 my-2');

    // Mount Lote
    inp = el('input.form-control text-sm', {placeholder: 'Nº Lote'});
    mount(div_grid, inp);

    // Mount Aditivo
    inp = el('input.form-control text-sm', {placeholder: 'Aditivo'});
    mount(div_grid, inp);

    // Mount Concentración
    inp = el('input.form-control text-sm', {placeholder: 'Concentración'});
    mount(div_grid, inp);

    mount(container_formulaciones_principal_phone, div_grid);
})

// =======================================================================

const container_formulaciones_relleno_phone = document.querySelector('.container_formulaciones_relleno_phone');
const btnAddFormulacionRellenoPhone = document.getElementById('btnAddFormulacionRellenoPhone');

btnAddFormulacionRellenoPhone.addEventListener('click', e => {
    e.preventDefault();

    div_grid = el('div.grid grid-cols-3 gap-2 my-2');

    // Mount Lote
    inp = el('input.form-control text-sm', {placeholder: 'Nº Lote'});
    mount(div_grid, inp);

    // Mount Aditivo
    inp = el('input.form-control text-sm', {placeholder: 'Aditivo'});
    mount(div_grid, inp);

    // Mount Concentración
    inp = el('input.form-control text-sm', {placeholder: 'Concentración'});
    mount(div_grid, inp);

    mount(container_formulaciones_relleno_phone, div_grid);
})