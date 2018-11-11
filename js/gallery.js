const picTwo = document.querySelector('.picture-two');


picTwo.addEventListener('click', () => {
  picTwo.classList.remove('small')
  picTwo.classList.add('big');
  console.log(picTwo);
})
