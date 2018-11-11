// const progressbar = document.querySelector('#progressbar')
//
//
// window.addEventListener('scroll', () => {
//   var s = window.scrollTop(),
//   d = document.height(),
//   c = window.height();
//   scrollPercent = (s / (d-c)) * 100;
//   var position = scrollPercent;
//
// })
//
//
//
// $(window).scroll(function () {
//
//    $("#progressbar").attr('value', position);
//
// });

$(window).scroll(function () {
  var s = $(window).scrollTop(),
        d = $(document).height(),
        c = $(window).height();
        scrollPercent = (s / (d-c)) * 100;
        var position = scrollPercent;

   $("#progressbar").attr('value', position);

});
