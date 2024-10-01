const openModalButton = document.getElementById('open-modal');
const closeModalButton = document.getElementById('close-modal');
const modal = document.getElementById('modal');
const fade = document.getElementById('fade');

openModalButton.addEventListener('click', () => {
    modal.classList.remove('hide');
    fade.classList.remove('hide');
});

closeModalButton.addEventListener('click', () => {
    modal.classList.add('hide');
    fade.classList.add('hide');
});

// Fecha o modal ao clicar no fundo
fade.addEventListener('click', () => {
    modal.classList.add('hide');
    fade.classList.add('hide');
});