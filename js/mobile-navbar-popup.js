'use strict';

const mobileNavbarContainer = document.querySelector('.mobile-navbar-container');
const mobileLogo = document.querySelector('.mobile-logo');
// const mobileNavbarPopup = document.querySelector('.mobile-navbar-popup');

mobileLogo.addEventListener('click', ()=>{
  mobileNavbarContainer.classList.toggle('mobile-navbar-popup');

})
