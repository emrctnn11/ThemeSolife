'use strict';
var notify = $.notify('<i class="fa fa-bell-o"></i><strong>Sayfa Yükleniyor</strong> lütfen sayfayı kapatmayınız...', {
    type: 'theme',
    allow_dismiss: true,
    delay: 2000,
    showProgressbar: true,
    timer: 300
});

setTimeout(function() {
    notify.update('message', '<i class="fa fa-bell-o"></i><strong>Yükleniyor</strong> Datalar.');
}, 1000);
