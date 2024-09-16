// let registro_aditivos = document.getElementById("registro_aditivos");
// const componentShowAditivos = (data = "") => {
// };

let registro_aditivos = document.getElementById("registro_aditivos");

const componentShowAditivos = (data = []) => {
    if (!data.length) return; // Si no hay datos, no hace nada

    const titulo = el("h5.text-center.text-xl.font-bold.mb-4", "Registros de aditivos");
    mount(registro_aditivos, titulo); // Montamos el título

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
