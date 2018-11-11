'use strict';

const toggle = document.querySelector('.toggle-signup');
const sidebar = document.querySelector('.popup-signup');
const popup = document.querySelector('.popup');
const submit = document.querySelector('input[type="submit"]')
const arrow = document.querySelector('.popup-signup i')
const form = document.querySelector('form')


toggle.addEventListener('click', () => {
  popup.classList.toggle('active');
  toggle.classList.toggle('active');
  form.reset();
})

sidebar.addEventListener('click', (e) => {
  sidebar.classList.add('white');
})

toggle.addEventListener('click', (e) => {
  sidebar.classList.remove('white');
})

arrow.addEventListener('click', () => {
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
