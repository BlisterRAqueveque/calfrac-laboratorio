const btnHabilitarEdicionLodo = document.getElementById('btnHabilitarEdicionLodo');

if (btnHabilitarEdicionLodo) {
    btnHabilitarEdicionLodo.addEventListener('click', e => {
        e.preventDefault();

        document.getElementsByName('locacion_lodo')[1].removeAttribute('disabled');
        document.getElementsByName('cliente_lodo')[1].removeAttribute('disabled');
        document.getElementsByName('equipo_lodo')[1].removeAttribute('disabled');
        document.getElementsByName('servicio_lodo')[1].removeAttribute('disabled');
       

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

        btnHabilitarEdicionLodo.classList.add('hidden')
        btnDeshabilitarEdicionLodo.classList.remove('hidden')
        document.querySelector('.btn_add_formulacion').classList.remove('inactive')
    
        let div_sector_edition = document.querySelector('.div_sector_edicion');
        div_sector_edition.classList.remove('hidden');
        let mode_edicion = document.querySelector('.mode_edicion');
        mode_edicion.classList.add('active');
    });
}

// Deshabilitar la edición
const btnDeshabilitarEdicionLodo = document.getElementById('btnDeshabilitarEdicionLodo');

if (btnDeshabilitarEdicionLodo) {
    btnDeshabilitarEdicionLodo.addEventListener('click', e => {
        window.location.reload();
    })
}
