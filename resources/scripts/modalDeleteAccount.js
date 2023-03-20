// Récupération de la modal et du bouton de fermeture
let buttonShowModal = document.getElementById("buttonShowModal");
let modal = document.getElementById("modalDeleteAccount");
let closing = document.getElementsByClassName("closeModal")[0];
let closingButton = document.getElementById("buttonNo")


buttonShowModal.addEventListener('click', (event) => {
    modal.style.display = 'block';
})

closing.addEventListener('click', (event) => {
    modal.style.display = 'none'
})

window.addEventListener('click', (event) => {
    if (event.target == modal) {
        modal.style.display = "none";
      }
})

closingButton.addEventListener('click', (event) => {
    modal.style.display = 'none'
})

