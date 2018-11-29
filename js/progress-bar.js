'use strict';
const progressbar = document.querySelector('.progressbar');


window.addEventListener('scroll', (e) => {
  let s = window.pageYOffset,
    d = document.documentElement.scrollHeight,
    c = window.pageYOffset;
  let scrollPercent = (s / (d-c)) * 100;
  let position = scrollPercent;
  progressbar.value = position;
})
