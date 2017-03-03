$(document).ready(function(){
  if (localStorage.getItem("valid") === null) {
                window.location = "index.php";
  }
  $(".start").click(function(){
  var id = this.id+".php";
	var counter = 0;
	var count = $("#hit").val();
  if(count=="")
  {
    count = 0;
  }
	//sublime //smtp error
	//rohan@lightscape.in smtp
	//green201 from greentree
	//biglaundry was big, more form
	//vexo very old
	//wearezorba
	//tabtree.php mail chimp error'
	//pdot g syntax error
	//wearefomra - 1
	//evocon - a href id error
  //mylivechat
	for (i = 0; i < count; i++) 
	{
    $.post( "core/"+id, {  })
	  .done(function( data ) {
	  	console.log(data)
      counter++;
	    $("#result").append(counter+"th Iteration<br>");
      $("#log").html(data+"<br>");
	  });
	}        
    });
});