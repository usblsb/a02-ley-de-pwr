	jQuery(document).ready(function ($) {
	
	$('#borrar').on('click', function () {
	
	$('#corriente').val('');
	$('#vatios').val('');
	$('#voltaje').val('');
	$('.resultado').html('');
	});
	
									

$('#calcular').on('click', function () {
var vatios = parseFloat($('#vatios').val());
var corriente = parseFloat($('#corriente').val());
var voltaje = parseFloat($('#voltaje').val());





	 if (!isNaN(vatios) && !isNaN(corriente)){
voltaje = vatios / corriente;
$('.resultado').html('voltaje (V): ' + voltaje.toFixed(2) + ' V');} 
else if (!isNaN(vatios) && !isNaN(voltaje)){
corriente = vatios / voltaje;
$('.resultado').html('Corriente (I): ' + corriente.toFixed(2) + ' A');} 
else if (!isNaN(corriente) && !isNaN(voltaje)){
vatios = corriente * voltaje;
$('.resultado').html('vatios (W): ' + vatios.toFixed(2) + ' W');} 
else {$('.resultado').html('Por favor, ingrese dos valores para calcular el tercero.');}
});


});