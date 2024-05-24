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
    type: "text",
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
    type: "text",
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
    type: "text",
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
    type: "text",
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
    type: "text",
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
    type: "text",
    value: data.tiempo ? data.tiempo : '00:00',
    readonly: true,
  });
  mount(div, label);
  mount(div, input);
  mount(colSpan, div);
  mount(divGrid, colSpan);

  let div_img = el('div.mb-2 mt-2 text-center')
  let h5 = el('h5.mb-1', 'Adjunto')
  let section = el('section')
  let div_relative = el('div.relative md:w-1/2 xl:w-1/3 mx-auto flex items-center p-2 border rounded-md border-gray-200 hover:bg-gray-50')
  let contain_img = el('div.w-12 h-12 rounded-full bg-gray-100 flex-shrink-0')
  let img = el('img.w-12 h-12 object-cover rounded-full cursor-pointer')
  img.setAttribute('src', _setUrl('uploads/ensayos', data.img))
img.setAttribute('onclick', `openModal('myModalUca', 'modalImgUca', '${_setUrl('uploads/ensayos', data.img)}')`)
  mount(contain_img, img)
  mount(div_relative, contain_img)

  let div_txt = el('div.text-left w-full ms-2')
  let h6 = el('text-md', 'Archivo adjunto')
  let div_flex = el('div.flex justify-between items-center text-gray-500 text-sm', el('p.mb-0', data.img))

  mount(div_txt, h6)
  mount(div_txt, div_flex)

  mount(div_relative, div_txt)
  mount(section, div_relative)
  
  mount(div_img, h5)
  mount(div_img, section)

  mount(registro_uca, divGrid)
  mount(registro_uca, div_img)
};

{/* <div class="mb-2 mt-2 text-center">
                <h5 class="mb-1">Adjunto</h5>
                <section>
                    <div
                        class="relative md:w-1/2 xl:w-1/3 mx-auto flex items-center p-2 border rounded-md border-gray-200 hover:bg-gray-50 ">
                        <div class="w-12 h-12 rounded-full bg-gray-100 flex-shrink-0">
                            <img src="{{ asset('uploads/ensayos/') . '/' . $s_l[0]->rel_uca[0]->img }}"
                                class="w-12 h-12 object-cover rounded-full cursor-pointer" alt=""
                                onclick="openModal('{{ asset('uploads/ensayos/') . '/' . $s_l[0]->rel_uca[0]->img }}')">
                        </div>
                        <div class="text-left w-full ms-2">
                            <h6 class="text-md">Archivo adjunto</h6>
                            <div class="flex justify-between items-center text-gray-500 text-sm">
                                <p class="mb-0">{{ $s_l[0]->rel_uca[0]->img }}</p>
                                {{-- <small><b>Tamaño: 750kb</b></small> --}}
                            </div>
                        </div>

                    </div>
                </section>
            </div> */}