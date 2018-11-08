const picTwo = document.querySelector('.picture-two');

picTwo.addEventListener('click', () => {
  picTwo.classList.add('picture-one.big');
  picTwo.classList.remove('picture-two')
  console.log(picTwo);
})
