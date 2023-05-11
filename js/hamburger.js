const hamburger = document.querySelector('.Hamburger');
const menu = document.querySelector('.Menu');
const shad = document.querySelector('.Shadow');

hamburger.addEventListener('click', function() {
  menu.classList.toggle('active');
  shad.classList.toggle('activeS');
});

cerrar.addEventListener('click', function () {
  menu.classList.toggle('active');
  shad.classList.toggle('activeS');
});

