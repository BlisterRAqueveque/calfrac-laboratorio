let accordionBombeabilidad = document.getElementById("accordionBombeabilidad");

const componentBombeabilidad = (data = "") => {
  cant_bombeabilidad++;
  let html = `
    <div class="accordion-item">
                    <h2 class="accordion-header bomb_header_${data.id}">
                        <button class="accordion-button collapsed p-2" type="button" data-bs-toggle="collapse"
                            data-bs-target="#bombeabilidad_${
                              data.id
                            }" aria-expanded="false"
                            aria-controls="bombeabilidad_${data.id}">
                            Bombeabilidad - Intento Nº${cant_bombeabilidad}
                        </button>
                    </h2>
                    <div id="bombeabilidad_${
                      data.id
                    }" class="accordion-collapse collapse"
                        data-bs-parent="#accordionBombeabilidad">
                        <div class="accordion-body overflow-auto">
                            <div class="flex justify-between items-center mb-3">
                                <p class="flex items-center text-gray-700 mb-0">
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                        stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                        <path stroke-linecap="round" stroke-linejoin="round"
                                            d="M9 12h3.75M9 15h3.75M9 18h3.75m3 .75H18a2.25 2.25 0 0 0 2.25-2.25V6.108c0-1.135-.845-2.098-1.976-2.192a48.424 48.424 0 0 0-1.123-.08m-5.801 0c-.065.21-.1.433-.1.664 0 .414.336.75.75.75h4.5a.75.75 0 0 0 .75-.75 2.25 2.25 0 0 0-.1-.664m-5.8 0A2.251 2.251 0 0 1 13.5 2.25H15c1.012 0 1.867.668 2.15 1.586m-5.8 0c-.376.023-.75.05-1.124.08C9.095 4.01 8.25 4.973 8.25 6.108V8.25m0 0H4.875c-.621 0-1.125.504-1.125 1.125v11.25c0 .621.504 1.125 1.125 1.125h9.75c.621 0 1.125-.504 1.125-1.125V9.375c0-.621-.504-1.125-1.125-1.125H8.25ZM6.75 12h.008v.008H6.75V12Zm0 3h.008v.008H6.75V15Zm0 3h.008v.008H6.75V18Z" />
                                    </svg>
                                    Registro creado por ${
                                      data.usuario_carga
                                    } el día ${data.dia} de ${data.mes}, ${
    data.anio
  } a las ${data.time} hs
                                </p>

                                <div class="flex items-center gap-3 bombeabilidad_selected">
                                    <form id="form_assignment_${data.id}">
                                        <input type="hidden" name="id_assignment"
                                            value="${data.id}">
                                        <button data-form="form_assignment_${
                                          data.id
                                        }"
                                            onClick=submitBombeabilidadSelected(${
                                              data.id
                                            })
                                            class="w-full md:w-auto bg-green-700 bg-opacity-60 text-white p-2 rounded-sm hover:shadow-lg transition-all duration-75 font-bold text-sm flex items-center gap-2 btnSubmitAssignment">
                                            <svg xmlns="http://www.w3.org/2000/svg" fill="none"
                                                viewBox="0 0 24 24" stroke-width="1.8" stroke="currentColor"
                                                class="w-4 h-4">
                                                <path stroke-linecap="round" stroke-linejoin="round"
                                                    d="m4.5 12.75 6 6 9-13.5" />
                                            </svg>
                                            Seleccionar Bombeabilidad
                                        </button>
                                    </form>
                                </div>
                            </div>

                            <div class="grid grid-cols-3 gap-3 mb-3">
                                <div>
                                    <label
                                        class="text-sm text-gray-700 font-semibold tracking-wide mb-2">Consistómetro
                                        N°</label>
                                    <input type="text"
                                        class="form-control text-sm p-2"
                                        value="${
                                          data.consistometro
                                            ? data.consistometro
                                            : "No aplica"
                                        }"
                                        readonly>
                                </div>

                                <div>
                                    <label for="bombeabilidad_acondicionamiento"
                                        class="text-sm text-gray-700 font-semibold tracking-wide mb-2">Tiempo de
                                        Acondicionamiento</label>
                                    <input type="text" class="form-control text-sm p-2"
                                        value="${
                                          data.time_acondicionamiento
                                            ? data.time_acondicionamiento
                                            : "No aplica"
                                        }"
                                        readonly>
                                </div>

                                <div>
                                    <label for="bombeabilidad_planilla"
                                        class="text-sm text-gray-700 font-semibold tracking-wide mb-2">Planilla
                                        N°</label>
                                    <input type="text" class="form-control text-sm p-2"
                                        value="${
                                          data.planilla
                                            ? data.planilla
                                            : "No aplica"
                                        }"
                                        readonly>
                                </div>

                                <div>
                                    <label for="bombeabilidad_gradiente"
                                        class="text-sm text-gray-700 font-semibold tracking-wide mb-2">Gradiente
                                        °F/100ft</label>
                                    <input type="text" class="form-control text-sm p-2"
                                        value="${
                                          data.gradiente
                                            ? data.gradiente
                                            : "No aplica"
                                        }"
                                        readonly>
                                </div>

                                <div>
                                    <label for="bombeabilidad_temperatura"
                                        class="text-sm text-gray-700 font-semibold tracking-wide mb-2">Temperatura
                                        °C</label>
                                    <input type="text" class="form-control text-sm p-2"
                                        value="${
                                          data.temperatura
                                            ? data.temperatura
                                            : "No aplica"
                                        }"
                                        readonly>
                                </div>

                                <div>
                                    <label for="bombeabilidad_presion"
                                        class="text-sm text-gray-700 font-semibold tracking-wide mb-2">Presión
                                        (psi)
                                    </label>
                                    <input type="text" class="form-control text-sm p-2"
                                        value="${
                                          data.presion
                                            ? data.presion
                                            : "No aplica"
                                        }"
                                        readonly>
                                </div>

                                <div>
                                    <label for="bombeabilidad_40_bc"
                                        class="text-sm text-gray-700 font-semibold tracking-wide mb-2">40 Bc
                                        (hh:mm)</label>
                                    <input type="text" class="form-control text-sm p-2"
                                        value="${
                                          data.bc_40 ? data.bc_40 : "00:00"
                                        }"
                                        readonly>
                                </div>

                                <div>
                                    <label for="bombeabilidad_70_bc"
                                        class="text-sm text-gray-700 font-semibold tracking-wide mb-2">70 Bc
                                        (hh:mm)</label>
                                    <input type="text" class="form-control text-sm p-2"
                                        value="${
                                          data.bc_70 ? data.bc_70 : "00:00"
                                        }"
                                        readonly>
                                </div>

                                <div>
                                    <label for="bombeabilidad_100_bc"
                                        class="text-sm text-gray-700 font-semibold tracking-wide mb-2">100 Bc
                                        (hh:mm)</label>
                                    <input type="text" class="form-control text-sm p-2"
                                        value="${
                                          data.bc_100 ? data.bc_100 : "00:00"
                                        }"
                                        readonly>
                                </div>

                                <div class="col-span-3">
                                    <div class="mb-2 mt-2 text-center">
                                        <h5 class="mb-1">Adjunto</h5>
                                        <section>
                                            <div class="relative md:w-1/2 xl:w-1/3 mx-auto flex items-center p-2 border rounded-md border-gray-200 hover:bg-gray-50 ">
                                                <div class="w-12 h-12 rounded-full bg-gray-100 flex-shrink-0">
                                                    <img src="${_setUrl('uploads/ensayos', data.img)}" class="w-12 h-12 object-cover rounded-full cursor-pointer" alt="" onclick="openModal('myModalBombeabilidad', 'modalImgBombeabilidad', '${_setUrl('uploads/ensayos', data.img)}')">
                                                </div>
                                                <div class="text-left w-full ms-2">
                                                    <h6 class="text-md">Archivo adjunto</h6>
                                                    <div class="flex justify-between items-center text-gray-500 text-sm">
                                                        <p class="mb-0">${data.img}</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </section>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                </div> 
    `;

  accordionBombeabilidad.innerHTML += html;
};

const clearInputs = (clase) => {
  let inps = document.querySelectorAll(`.${clase}`);
  for (let i = 0; i < inps.length; i++) {
    inps[i].value = "";
  }
};
