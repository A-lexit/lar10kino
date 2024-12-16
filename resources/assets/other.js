$(document).ready(function (){
$('#datemask').inputmask('dd/mm/yyyy', { 'placeholder': 'dd/mm/yyyy' })

$('#datemask2').inputmask('mm/dd/yyyy', { 'placeholder': 'mm/dd/yyyy' })

$('[data-mask]').inputmask()


$('#reservationdate').datetimepicker({
format: 'L'
});


$('#reservationdatetime').datetimepicker({ icons: { time: 'far fa-clock' } });


})
