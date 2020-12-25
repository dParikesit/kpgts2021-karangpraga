
function loadNomor() {
  var A = $('#no-pag').val();
  var B = $('#no-soal').val();
  var N = $('#no-peserta').val();
  var S = $('#pemisah').val();

  if (A == '' || B == '' || N == '') return;

  var list = [];
  var text = '';

  for (var i=0; i<2; i++) { list.push(B%10); text = '' + (B%10) + text; B = Math.floor(B/10); } text = S + text;
  for (var i=0; i<3; i++) { list.push(A%10); text = '' + (A%10) + text; A = Math.floor(A/10); } text = text + S;

  var result = $('#result');
  result.html('<ul>');

  for (var i = 1; i <= N; i++) {
    var C = i;
    var list_C = [];
    var text_C = '';

    for (var j=0; j<3; j++) { list_C.push(C%10); text_C = '' + (C%10) + text_C; C = Math.floor(C/10); }
    text_C = text + text_C + S;

    list_C = list_C.concat(list);

    var calc_sum = 0;
    for (var j=0; j<list_C.length; j++) {
      if (j&1) calc_sum += list_C[j] * 7;
      else     calc_sum += list_C[j] * 3;
    }

    var check_digit = Math.floor((calc_sum + 9)/10)*10 - calc_sum;

    text_C = '<li>' + text_C + (check_digit) + '</li>';
    result.append(text_C);
    
  }

  result.append('</ul>');
}

$('#close-modal').click(function() {
  $('#modal-nomor-pag').fadeOut(300, function() {
    $('#modal-nomor-pag').removeClass('is-active');
  });
});

$('#open-modal').click(function() {  
  $('#modal-nomor-pag').css('display', 'flex').hide();
  $('#modal-nomor-pag').fadeIn(300, function() {
    $('#modal-nomor-pag').addClass('is-active');
  });
});

$('#no-pag'    ).on('keyup' , loadNomor);
$('#no-soal'   ).on('change', loadNomor);
$('#no-peserta').on('keyup' , loadNomor);
$('#pemisah'   ).on('keyup' , loadNomor);