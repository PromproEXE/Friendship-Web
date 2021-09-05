$(document).ready(function(){
  $('input:checkbox').prop('checked', false);
});

// $('#btn-image').click(function() {
//     $('#btn-write').removeClass('btn-primary');
//     $('#btn-write').addClass('btn-outline-primary');
//     $('#btn-image').removeClass('btn-outline-primary');
//     $('#btn-image').addClass('btn-primary');
//     $('#upload-img').slideDown();
// });

// $('#btn-write').click(function() {
//   $('#btn-image').removeClass('btn-primary');
//   $('#btn-image').addClass('btn-outline-primary');
//   $('#btn-write').removeClass('btn-outline-primary');
//   $('#btn-write').addClass('btn-primary');
//   $('#upload-img').slideUp();
//   document.getElementById('img').value = ''
// });

$('#incognito').click(function() {
  if (document.getElementById('incognito').checked == true) {
    document.getElementById('name').value = '';
    document.getElementById('name').disabled = true;
  }
  else {
    document.getElementById('name').disabled = false;
  }
  
});
