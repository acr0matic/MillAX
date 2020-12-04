AOS.init({
  once: true,
});

MicroModal.init({
  awaitCloseAnimation: true,
});

if (window.matchMedia("(max-width: 420px)").matches) {
  const accordions = Array.from(document.querySelectorAll('.handorgel')).map((selector) => new handorgel(selector));
}
