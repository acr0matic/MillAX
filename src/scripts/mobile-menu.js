const mobileButton = document.getElementById('mobile-menu-btn');
const mobileMenu = document.getElementById('mobile-menu');
const mobileItems = mobileMenu.querySelectorAll('.mobile-menu__link');

mobileButton.addEventListener('click', () => {
  mobileButton.classList.toggle('is-active')
  mobileMenu.classList.toggle('mobile-menu--open');
});

mobileItems.forEach(item => {
  item.addEventListener('click', () => {
    mobileButton.classList.toggle('is-active')
    mobileMenu.classList.toggle('mobile-menu--open');
  });
});