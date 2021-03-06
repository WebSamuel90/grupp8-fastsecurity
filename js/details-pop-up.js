

const buttonDiv = document.querySelector('.details.popup');
const details = document.querySelectorAll('.button.details .hover');
const box = document.querySelector('.popup-details');

console.log(details);
//gör medtoder tillgängliga. spread operatior.
// const arrowClose = [...document.querySelectorAll('.arrow-close')];
const arrowClose = document.querySelector('.arrow-close');
// console.log(typeof arrowClose);
details.forEach((detail) => {
    detail.addEventListener('click', () => {
        buttonDiv.classList.add('active');
    })
})

arrowClose.addEventListener('click', () => {
  buttonDiv.classList.remove('active');
})

buttonDiv.addEventListener('click', () => {
  // If user clicks inside the element, do nothing
  if (event.target.closest(".popup-details")) return;
  // If user clicks outside the element, hide it!
  buttonDiv.classList.remove('active');
})
