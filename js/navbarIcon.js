'use strict';

const menu = document.querySelector(".menu");
const menuPopUp = document.querySelector(".menuPopUp");

const stickyMenuTextBar = document.querySelector('.stickyMenuTextBar');
const stickyArrowBar = document.querySelector('.stickyArrowBar');

const toggleNavbar = document.querySelector('.toggleNavbar');

const arrow = document.querySelector('.arrow')
const down = document.querySelector('.down')

arrow.addEventListener('click', () => {
  menu.classList.toggle('menuPopUp');
})
down.addEventListener('click', () => {
  menu.classList.toggle('menuPopUp');
})

stickyArrowBar.addEventListener('click', () => {
  menu.classList.toggle('menuPopUp');
})
// stickyMenuTextBar.addEventListener('click', () => {
//   menu.classList.toggle('menuPopUp');
// })
//
// function addPopupOnMenuIcon(){
//   const menu = document.getElementsByClassName("menu");
//   menu.classList.add("menuPopUp");
// }
