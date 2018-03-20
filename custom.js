// test on mobile
$('head').append('<meta name="viewport" content="width=device-width, initial-scale=1" />');

// bootstrap-select
$('select').selectpicker({
    mobile: false
});

// inpu mtasking
$('.mask-date').mask("00/00/0000", {
    placeholder: "__-__-____"
});

$('.mask-money').mask('000.000.000.000.000,00', {
    reverse: true
});

// custom checkbox and radio
$('input').iCheck({
    checkboxClass: 'icheckbox_square-blue',
    radioClass: 'iradio_square-blue'
});