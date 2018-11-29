
const boxes = document.querySelectorAll(".box")

// boxes.forEach((box) => {
//
//     box.addEventListener('click', () => {
//
//       if (box.classList.contains('top')) {
//         box.classList.remove('top');
//         box.classList.add('big');
//       }
//     })
// })


boxes.forEach(function (box) {
  box.addEventListener('click', function () {

    let boxes2 = document.querySelectorAll(".box");

      for(i = 0; i < boxes2.length; i++){
        boxes2[i].classList.remove('big');
      }

      box.classList.add('big')
  })
})
