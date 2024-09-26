// let registro_aditivos_lodo = document.getElementById("registro_aditivos_lodo");
// const componentShowAditivos = (data = "") => {
// };

let registro_aditivos_lodo = document.getElementById("registro_aditivos_lodo");

const componentShowAditivosLodo = (data) => {
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
    if (!registro_aditivos_lodo) {
        console.error("Contenedor de aditivos no encontrado.");
        return;
    }

    const titulo = el("h5.text-center.text-xl.font-bold.mb-4", "Registros de aditivos");
    mount(registro_aditivos_lodo, titulo); // Montamos el título

    // Crear encabezado
    let header = el('div.grid grid-cols-3 text-center bg-gray-100 py-2 my-3');
    ['N° Lote', 'Aditivo', 'Conc. %'].forEach(text => {
        let p = el('p', text);
        mount(header, p);
    });
    mount(registro_aditivos_lodo, header);

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

        // Montar en el contenedor
        mount(flex, div);
        mount(registro_aditivos_lodo, flex);
    });
};
