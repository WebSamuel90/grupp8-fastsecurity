'use strict';

const toggle = document.querySelector('.toggle-signup');
const sidebar = document.querySelector('.popup-signup');
const popup = document.querySelector('.popup');
const submit = document.querySelector('input[type="submit"]')
const form = document.querySelector('form')
const arrowImg = document.querySelector('.popup-signup img')


toggle.addEventListener('click', () => {
  popup.classList.toggle('active');
  toggle.classList.toggle('active');
  form.reset();
})

sidebar.addEventListener('click', (e) => {
  sidebar.classList.add('white');
  arrowImg.src = 'images/icons_menu_arrow_active.svg';
})

toggle.addEventListener('click', (e) => {
  sidebar.classList.remove('white');

  //Ta bort den inlaggda bilden
  // arrowImg.src = '';
})

arrowImg.addEventListener('click', () => {
  popup.classList.remove('active');
  form.reset();
})

submit.addEventListener('click', (e) => {
  e.preventDefault();
  form.reset();
  popup.classList.remove('active');
})

popup.addEventListener('click', (e) => {
  // If user clicks inside the element, do nothing
	if (event.target.closest(".popup-signup")) return;
	// If user clicks outside the element, hide it!
	popup.classList.remove('active');
});




// toggle.addEventListener('click', () => {
//   toggle.classList.toggle('active');
//   sidebar.classList.toggle('active');
// })
