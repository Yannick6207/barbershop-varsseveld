const dialog = document.getElementById('booking-dialog');
const treatment = document.getElementById('treatment');
document.querySelectorAll('.booking, .service-action').forEach(button => {
  button.addEventListener('click', () => {
    if (button.dataset.service) treatment.value = button.dataset.service;
    dialog.showModal();
  });
});
document.querySelectorAll('.close, .close-dialog').forEach(button => button.addEventListener('click', () => dialog.close()));
dialog.addEventListener('click', event => {
  const rect = dialog.getBoundingClientRect();
  if (event.target === dialog && (event.clientX < rect.left || event.clientX > rect.right || event.clientY < rect.top || event.clientY > rect.bottom)) dialog.close();
});
