const close = document.querySelector('.close-button');
const modal = document.querySelector('.modal-container');

function openModal() {
    modal.classList.add('show');
}

setTimeout(openModal, 3000);

close.addEventListener('click', function(){
    modal.classList.remove('show');
});