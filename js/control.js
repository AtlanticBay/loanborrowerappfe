$(document).ready(function(){
   $('#helloButton').click(function(){
   	var userInput = $('#helloInput').val();

   	$('#helloStuff').text('You entered: ' + userInput);
   });
});