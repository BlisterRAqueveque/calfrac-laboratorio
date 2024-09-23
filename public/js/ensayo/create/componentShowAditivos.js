// let registro_aditivos = document.getElementById("registro_aditivos");
// const componentShowAditivos = (data = "") => {
// };

let registro_aditivos = document.getElementById("registro_aditivos");

const componentShowAditivos = (data, calculos) => {
    // Convertir `calculos` en un array si es un objeto
    if (typeof calculos === 'object' && !Array.isArray(calculos)) {
        calculos = [calculos];
    }

    // Verifica si `data` es un array o un objeto
    if (Array.isArray(data)) {
        if (!data.length) {
            console.log("No hay datos de aditivos para mostrar");
            return;
        }
    } else if (typeof data === 'object') {
        // Si es un objeto, lo convertimos en un array de un solo elemento
        data = [data];
    } else {
        console.error("Formato de datos inesperado.");
        return;
    }

    // Asegúrate de que el contenedor de aditivos existe
    if (!registro_aditivos) {
        console.error("Contenedor de aditivos no encontrado.");
        return;
    }

    const titulo = el("h5.text-center.text-xl.font-bold.mb-4", "Registros de aditivos");
    mount(registro_aditivos, titulo); // Montamos el título

    // Crear inputs para densidad, rendimiento y bolsa
    const inputContainer = el('div.grid.grid-cols-6.gap-3');
    
    // Verificar si `calculos` tiene al menos un elemento
    if (calculos.length > 0) {
        // Densidad
        let densidadDiv = el('div.col-span-6.md:col-span-2');
        let densidadLabel = el('label.text-sm.text-gray-700.font-semibold.tracking-wide.mb-2', 'Densidad');
        let densidadInput = el('input.form-control.text-sm', { 
            value: calculos[0].densidad_ensayo || '-', 
            readonly: true 
        });
        mount(densidadDiv, densidadLabel);
        mount(densidadDiv, densidadInput);
        mount(inputContainer, densidadDiv);

        // Rendimiento
        let rendimientoDiv = el('div.col-span-6.md:col-span-2');
        let rendimientoLabel = el('label.text-sm.text-gray-700.font-semibold.tracking-wide.mb-2', 'Rendimiento');
        let rendimientoInput = el('input.form-control.text-sm', { 
            value: calculos[0].rendimiento_ensayo || '-', 
            readonly: true 
        });
        mount(rendimientoDiv, rendimientoLabel);
        mount(rendimientoDiv, rendimientoInput);
        mount(inputContainer, rendimientoDiv);

        // Bolsa
        let bolsaDiv = el('div.col-span-6.md:col-span-2');
        let bolsaLabel = el('label.text-sm.text-gray-700.font-semibold.tracking-wide.mb-2', 'L/bolsa');
        let bolsaInput = el('input.form-control.text-sm', { 
            value: calculos[0].bolsa_ensayo || '-', 
            readonly: true 
        });
        mount(bolsaDiv, bolsaLabel);
        mount(bolsaDiv, bolsaInput);
        mount(inputContainer, bolsaDiv);
    } else {
        console.log("No hay datos de cálculos para mostrar");
    }

    // Montar los inputs en el contenedor
    mount(registro_aditivos, inputContainer);

    // Crear encabezado
    let header = el('div.grid grid-cols-5 text-center bg-gray-100 py-2 my-3');
    ['N° Lote', 'Aditivo', 'Conc. %', 'Units', 'OM'].forEach(text => {
        let p = el('p', text);
        mount(header, p);
    });
    mount(registro_aditivos, header);

    // Iterar sobre los datos
    data.forEach((formulacion, index) => {
        let flex = el('div.flex gap-2 justify-between mb-2 border');
        let div = el('div.w-full flex gap-2 bg-gray-100 p-2');

        // Lote
        let inputLote = el('input.form-control text-xs rounded-l-none p-2 col-span-4 md:col-span-1', {
            value: formulacion.lote,
            readonly: true
        });
        mount(div, inputLote);

        // Aditivo
        let inputAditivo = el('input.form-control text-xs p-2 ' + (formulacion.aditivo === 'SD' ? 'w-1/2' : ''), {
            value: formulacion.aditivos?.nombre || formulacion.aditivo,
            readonly: true
        });
        mount(div, inputAditivo);

        // Comentario (se muestra solo si el aditivo es 'SD')
        if (formulacion.aditivo === 'SD') {
            let inputComentario = el('input.form-control text-xs p-2 w-1/2', {
                value: formulacion.comentario,
                readonly: true
            });
            mount(div, inputComentario);
        }

        // Concentración
        let inputConcentracion = el('input.form-control text-xs p-2 col-span-4 md:col-span-1', {
            value: formulacion.concentracion,
            readonly: true
        });
        mount(div, inputConcentracion);

        // Units (hardcoded como %BOWC)
        let inputUnits = el('input.form-control text-xs p-2 col-span-4 md:col-span-1', {
            value: '%BOWC',
            readonly: true
        });
        mount(div, inputUnits);

        // OM
        let inputOM = el('input.form-control text-xs p-2 col-span-4 md:col-span-1', {
            value: formulacion.om,
            readonly: true
        });
        mount(div, inputOM);

        // Montar en el contenedor
        mount(flex, div);
        mount(registro_aditivos, flex);
    });
};
