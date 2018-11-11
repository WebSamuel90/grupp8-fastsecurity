const progressbar = document.querySelector('.progressbar')

  console.log(progressbar);
console.log(window.pageYOffset)
  console.log(document.body.scrollHeight);
progressbar.addEventListener('scroll', (e) => {
})

//
//
window.addEventListener('scroll', (e) => {
  let s = window.pageYOffset,
    d = document.documentElement.scrollHeight,
    c = window.pageYOffset;
  scrollPercent = (s / (d-c)) * 100;
  var position = scrollPercent;
  progressbar.value = position;

})
