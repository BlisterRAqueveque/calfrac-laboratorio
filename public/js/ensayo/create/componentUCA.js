let registro_uca = document.getElementById("registro_uca");
// let div, divGrid, colSpan, label, input;
const componentUCA = (data = "") => {
  let div = el("div.mb-2 text-center", el("h5.mb-1", "Registro de UCA"));
  mount(registro_uca, div);

  let divGrid = el("div.grid grid-cols-3 gap-3 my-3");

  let colSpan = el("div.col-span-3 grid gap-3 grid-cols-4");

  // Principal
  div = el("div");
  let label = el(
    "label.text-sm text-gray-700 font-semibold tracking-wide mb-2",
    "Principal (ºC)"
  );
  let input = el("input.form-control text-sm p-2", {
    value: data.principal,
    readonly: true,
  });
  mount(div, label);
  mount(div, input);
  mount(colSpan, div);

  // 50 PSI
  div = el("div");
  label = el(
    "label.text-sm text-gray-700 font-semibold tracking-wide mb-2",
    "50 psi (hh:mm)"
  );
  input = el("input.form-control text-sm p-2", {
    type: "time",
    value: data.psi_50 ? data.psi_50 : '00:00',
    readonly: true,
  });
  mount(div, label);
  mount(div, input);
  mount(colSpan, div);

  // 500 PSI
  div = el("div");
  label = el(
    "label.text-sm text-gray-700 font-semibold tracking-wide mb-2",
    "500 psi (hh:mm)"
  );
  input = el("input.form-control text-sm p-2", {
    type: "time",
    value: data.psi_500 ? data.psi_500 : '00:00',
    readonly: true,
  });
  mount(div, label);
  mount(div, input);
  mount(colSpan, div);

  // 1000 PSI
  div = el("div");
  label = el(
    "label.text-sm text-gray-700 font-semibold tracking-wide mb-2",
    "1000 psi (hh:mm)"
  );
  input = el("input.form-control text-sm p-2", {
    type: "time",
    value: data.psi_1000 ? data.psi_1000 : '00:00',
    readonly: true,
  });
  mount(div, label);
  mount(div, input);
  mount(colSpan, div);
  mount(divGrid, colSpan);

  // 12 hs (psi)
  colSpan = el("div");
  div = el("div");
  label = el(
    "label.text-sm text-gray-700 font-semibold tracking-wide mb-2",
    "12 hs (psi)"
  );
  input = el("input.form-control text-sm p-2", {
    value: data.hs_12 ? data.hs_12 : '00:00',
    readonly: true,
  });
  mount(div, label);
  mount(div, input);
  mount(colSpan, div);
  mount(divGrid, colSpan);

  // 24 hs (psi)
  colSpan = el("div");
  div = el("div");
  label = el(
    "label.text-sm text-gray-700 font-semibold tracking-wide mb-2",
    "24 hs (psi)"
  );
  input = el("input.form-control text-sm p-2", {
    value: data.hs_24 ? data.hs_24 : '00:00',
    readonly: true,
  });
  mount(div, label);
  mount(div, input);
  mount(colSpan, div);
  mount(divGrid, colSpan);

  // Impedancia Acústica (M/rayls)
  colSpan = el("div");
  div = el("div");
  label = el(
    "label.text-sm text-gray-700 font-semibold tracking-wide mb-2",
    "24 hs (psi)"
  );
  input = el("input.form-control text-sm p-2", {
    value: data.impedancia_acustica ? data.impedancia_acustica : 'No Aplica',
    readonly: true,
  });
  mount(div, label);
  mount(div, input);
  mount(colSpan, div);
  mount(divGrid, colSpan);

  // SGS cero (hh:mm)
  colSpan = el("div");
  div = el("div");
  label = el(
    "label.text-sm text-gray-700 font-semibold tracking-wide mb-2",
    "SGS cero (hh:mm)"
  );
  input = el("input.form-control text-sm p-2", {
    type: "time",
    value: data.sgs_cero ? data.sgs_cero : '00:00',
    readonly: true,
  });
  mount(div, label);
  mount(div, input);
  mount(colSpan, div);
  mount(divGrid, colSpan);

  // SGS max (hh:mm)
  colSpan = el("div");
  div = el("div");
  label = el(
    "label.text-sm text-gray-700 font-semibold tracking-wide mb-2",
    "SGS max (hh:mm)"
  );
  input = el("input.form-control text-sm p-2", {
    type: "time",
    value: data.sgs_max ? data.sgs_max : '00:00',
    readonly: true,
  });
  mount(div, label);
  mount(div, input);
  mount(colSpan, div);
  mount(divGrid, colSpan);

  // Tiempo (hh:mm)
  colSpan = el("div");
  div = el("div");
  label = el(
    "label.text-sm text-gray-700 font-semibold tracking-wide mb-2",
    "Tiempo (hh:mm)"
  );
  input = el("input.form-control text-sm p-2", {
    type: "time",
    value: data.tiempo ? data.tiempo : '00:00',
    readonly: true,
  });
  mount(div, label);
  mount(div, input);
  mount(colSpan, div);
  mount(divGrid, colSpan);

  mount(registro_uca, divGrid)
};
