const headerBottom = document.querySelector('.header-bottom');
const headerDropdown = document.querySelectorAll('.navbar__item--dropdown');

headerDropdown.forEach(dropdown => {
  dropdown.addEventListener('mouseover', () => {
    headerBottom.classList.add('header-bottom--visible');
  })

  dropdown.addEventListener('mouseout', (e) => {
    if (e.target != headerBottom)
      headerBottom.classList.remove('header-bottom--visible');
  })
});


// Добавление пробелов в цену
const numbers = document.querySelectorAll('.number-space');
numberSpace(numbers);

function numberSpace(numbers) {
  if (numbers)
    numbers.forEach(number => {
      number.innerHTML = parseInt(number.innerHTML).toLocaleString() + ' ₽';
    });
}