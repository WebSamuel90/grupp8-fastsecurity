'use strict';


const mobileMenu = document.querySelector(".mobileMenu");
const menuPopUp = document.querySelector(".menuPopUp");


const arrow = document.querySelector(".arrow");

arrow.addEventListener('click', ()=>{
  mobileMenu.classList.toggle('menuPopUp');
})




//------------------------------------------------------------------------------
// OLD, SUPPOSEDLY NOT WORKING CODE
//------------------------------------------------------------------------------
// const menu = document.querySelector(".mobileMenu");
// const menuPopUp = document.querySelector(".menuPopUp");
//
// const stickyMenuTextBar = document.querySelector('.stickyMenuTextBar');
// const stickyArrowBar = document.querySelector('.stickyArrowBar');
//
// const toggleNavbar = document.querySelector('.toggleNavbar');
//
// const arrow = document.querySelector('.arrow')
// const down = document.querySelector('.down')
//
// arrow.addEventListener('click', () => {
//   menu.classList.toggle('menuPopUp');
//
// })
// down.addEventListener('click', () => {
//   menu.classList.toggle('menuPopUp');
// })
//
// stickyArrowBar.addEventListener('click', () => {
//   menu.classList.toggle('menuPopUp');
// })
//------------------------------------------------------------------------------
//------------------------------------------------------------------------------






// stickyMenuTextBar.addEventListener('click', () => {
//   menu.classList.toggle('menuPopUp');
// })
//
// function addPopupOnMenuIcon(){
//   const menu = document.getElementsByClassName("menu");
//   menu.classList.add("menuPopUp");
// }
