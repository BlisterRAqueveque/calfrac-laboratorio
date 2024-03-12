const btnHabilitarEdicion = document.getElementById('btnHabilitarEdicion');

if (btnHabilitarEdicion) {
    btnHabilitarEdicion.addEventListener('click', e => {
        e.preventDefault();
        let all_fields = document.querySelectorAll('.form-control');
        for (let i = 0; i < all_fields.length; i++) {
            all_fields[i].removeAttribute('readonly');        
        }
    
        let all_select = document.querySelectorAll('.form-select');
        for (let i = 0; i < all_select.length; i++) {
            all_select[i].removeAttribute('disabled');        
        }
        btnHabilitarEdicion.classList.add('hidden')
        btnDeshabilitarEdicion.classList.remove('hidden')
    
        let div_sector_edition = document.querySelector('.div_sector_edicion');
        div_sector_edition.classList.remove('hidden');
    });
}

// Deshabilitar la edición
const btnDeshabilitarEdicion = document.getElementById('btnDeshabilitarEdicion');

if (btnDeshabilitarEdicion) {
    btnDeshabilitarEdicion.addEventListener('click', e => {
        window.location.reload();
    })
}
