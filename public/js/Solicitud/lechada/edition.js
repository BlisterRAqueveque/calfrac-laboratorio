const btnHabilitarEdicionLechada = document.getElementById('btnHabilitarEdicionLechada');

if (btnHabilitarEdicionLechada) {
    btnHabilitarEdicionLechada.addEventListener('click', e => {
        e.preventDefault();

        document.getElementsByName('locacion_lechada')[1].removeAttribute('disabled');
        document.getElementsByName('cliente_lechada')[1].removeAttribute('disabled');
        document.getElementsByName('tipo_requerimiento_lechada')[1].removeAttribute('disabled');
        document.getElementsByName('tipo_trabajo_lechada')[1].removeAttribute('disabled');
        document.getElementsByName('tipo_cementacion_lechada')[1].removeAttribute('disabled');

        let all_fields = document.querySelectorAll('.form-control');
        for (let i = 0; i < all_fields.length; i++) {
            all_fields[i].removeAttribute('readonly');        
        }

        let inp_edit = document.querySelectorAll('.inp_edit');
        for (let i = 0; i < inp_edit.length; i++) {
            inp_edit[i].removeAttribute('disabled');        
        }
    
        let all_select = document.querySelectorAll('.form-select');
        for (let i = 0; i < all_select.length; i++) {
            all_select[i].removeAttribute('disabled');        
        }

        let all_btn_del_formulacion = document.querySelectorAll('.btn_del_formulacion');
        for (let i = 0; i < all_btn_del_formulacion.length; i++) {
            if (all_btn_del_formulacion[i].classList.contains('inactive')) {
                all_btn_del_formulacion[i].classList.remove('inactive')
            }        
        }

        btnHabilitarEdicionLechada.classList.add('hidden')
        btnDeshabilitarEdicionLechada.classList.remove('hidden')
        document.querySelector('.btn_add_formulacion').classList.remove('inactive')
    
        let div_sector_edition = document.querySelector('.div_sector_edicion');
        div_sector_edition.classList.remove('hidden');
        let mode_edicion = document.querySelector('.mode_edicion');
        mode_edicion.classList.add('active');
    });
}

// Deshabilitar la edición
const btnDeshabilitarEdicionLechada = document.getElementById('btnDeshabilitarEdicionLechada');

if (btnDeshabilitarEdicionLechada) {
    btnDeshabilitarEdicionLechada.addEventListener('click', e => {
        window.location.reload();
    })
}
