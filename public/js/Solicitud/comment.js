const rtaComment = document.querySelectorAll('.rtaComment');
const containerRta = document.querySelectorAll('.containerRta');
for (let i = 0; i < rtaComment.length; i++) {

    rtaComment[i].addEventListener('click', e => {
        e.preventDefault();
        document.querySelector('.formRta_'+i).classList.remove('hidden');
        rtaComment[i].classList.add('hidden');
    })

}

function removeRta(btnCancel) {
    event.preventDefault();
    let btnComment = btnCancel.parentElement.parentElement.getAttribute('data-btn-rta');
    document.querySelector(`.${btnComment}`).classList.remove('hidden');
    btnCancel.parentElement.parentElement.classList.add('hidden');

}