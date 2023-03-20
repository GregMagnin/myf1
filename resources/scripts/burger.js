const menuIcon = document.querySelector('.menu-icon');
const modalContainer = document.querySelector('.modal-container');
let accountIcon = document.querySelector('.accountIcon');
let modalContainerMenu = document.querySelector('.modal-container-menu');

menuIcon.addEventListener('click', function() {
  modalContainer.style.display = 'block';
  setTimeout(function() {
    modalContainer.style.opacity = '1';
  }, 100);
  this.classList.toggle('menu-icon-active');
});

accountIcon.addEventListener('click', (event) => {
    modalContainerMenu.style.display = 'block';
    setTimeout(function() {
      modalContainerMenu.style.opacity = '1';
    }, 100);
    this.classList.toggle('menu-icon-active');
})

modalContainer.addEventListener('click', function(event) {
  if (event.target === modalContainer) {
    modalContainer.style.opacity = '0';
    menuIcon.classList.toggle('menu-icon-active');
    setTimeout(function() {
      modalContainer.style.display = 'none';
    }, 500);
  }
});

modalContainerMenu.addEventListener('click', function(event) {
    if (event.target === modalContainerMenu) {
      modalContainerMenu.style.opacity = '0';
      menuIcon.classList.toggle('menu-icon-active');
      setTimeout(function() {
        modalContainerMenu.style.display = 'none';
      }, 500);
    }
  });