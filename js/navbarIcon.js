'use strict';

const menu = document.querySelector(".menu");
const menuPopUp = document.querySelector(".menuPopUp");

const stickyMenuTextBar = document.querySelector('.stickyMenuTextBar');
const stickyArrowBar = document.querySelector('.stickyArrowBar');


stickyArrowBar.addEventListener('click', () => {
  menu.classList.toggle('menuPopUp');
})
// stickyMenuTextBar.addEventListener('click', () => {
//   menu.classList.toggle('menuPopUp');
// })

// function addPopupOnMenuIcon(){
//   const menu = document.getElementsByClassName("menu");
//   menu.classList.add("menuPopUp");
// }
