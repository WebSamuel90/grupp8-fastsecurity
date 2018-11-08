const picTwo = document.querySelector('.picture-two');
console.log(picTwo);

picTwo.addEventListener('click', () => {
  picTwo.classList.remove('small')
  picTwo.classList.add('big');
  console.log(picTwo);
})
