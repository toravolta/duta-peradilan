"use strict";

$(".registWebinar").fireModal({
  title: '',
  body: $("#modal-daftar-webinar"),
  footerClass: 'bg-whitesmoke',
  autoFocus: false,

});

$("#join_quiz").fireModal(show());

$("#toastr-4").click(function () {
  iziToast.error({
    title: 'Hello, world!',
    message: 'This awesome plugin is made by iziToast',
    position: 'topRight'
  });
});

