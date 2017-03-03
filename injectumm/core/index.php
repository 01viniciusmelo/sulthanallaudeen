<!DOCTYPE html>
<html>
<head>
<script src="jquery.min.js"></script>
<script>
$(document).ready(function(){
	$("#start").click(function(){
	var counter = 0;
	var count = $("#hit").val();
	var t = 'lac.php';
	var t = 'sunnybee.php';
	var t = 'sublime.in'; //smtp error
	//rohan@lightscape.in smtp
	//green201 from greentree
	//biglaundry was big, more form
	//vexo very old
	//wearezorba
	//tabtree.php mail chimp error'
	//skyvillie 
	//mylivechat
	//worldonaplate was not good
	//pdot g syntax error
	//wearefomra - 1
	//evocon - a href id error

	var t = 'altimiz';
	var t = 'velamal.php';
	var t = 'bambaram.php';

	for (i = 0; i <= count; i++) 
	{
    $.post( "bambaram.php", { name: "John", email: "john@gmail.com", phone : "9876543210" , message : "Hey, there" })
	  .done(function( data ) {
	  	console.log(data)
	    $("#result").append(counter+"th Iteration");
	    counter++;
	  });
	}        
    });
});
</script>
</head>
<body>
<input type="text" value="" placeholder="Number of Hits" id="hit">
<button id="start">Initiate</button>
<div id="result"></div>
</body>
</html>