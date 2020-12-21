const subscriptionCards = document.querySelectorAll('.subscription__card');

if (subscriptionCards.length !== 0) {
  const modalReservation = document.getElementById('modal-subscribe');
  const modalReservationTitle = modalReservation.querySelector('.modal__title');
  const subscribeType = modalReservation.querySelector('.subscribe-type');

  subscriptionCards.forEach(card => {
    const title = card.querySelector('.subscription__title');
    const button = card.querySelector('.subscription__button');

    button.addEventListener('click', () => {
      modalReservationTitle.innerHTML = 'Тариф ' + title.innerHTML;
      subscribeType.value = title.innerHTML;
    })
  });
}