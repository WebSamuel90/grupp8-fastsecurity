
const boxes = document.querySelectorAll(".box")

boxes.forEach(function (box) {
  box.addEventListener('click', function () {

    let boxes2 = document.querySelectorAll(".box");

      for(i = 0; i < boxes2.length; i++){
        boxes2[i].classList.remove('big');
      }

      box.classList.add('big')
  })
})
