'use strict';

const mobileNavbarContainer = document.querySelector('.mobile-navbar-container');
const mobileLogo = document.querySelector('.mobile-logo');
// const mobileNavbarPopup = document.querySelector('.mobile-navbar-popup');
const mobileClosingArrow = document.querySelector('.mobile-closing-arrow')

mobileLogo.addEventListener('click', ()=>{
  mobileNavbarContainer.classList.add('mobile-navbar-popup');

})

mobileClosingArrow.addEventListener('click', ()=>{
  mobileNavbarContainer.classList.remove('mobile-navbar-popup');
})
