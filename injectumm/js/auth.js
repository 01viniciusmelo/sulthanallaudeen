$(document).ready(function(){
    localStorage.removeItem("valid");
    $("#login").click(function(){
    var username = $("#username").val();
    var password = $("#password").val();
    var error = ""
    if(username=="")
    {
        $("#username_error").html("Username is required")
        error="username";
    }
    else
    {
        $("#username_error").html("")
    }
    if(password=="")
    {
        $("#password_error").html("Password is required")
        error="password";
    }
    else
    {
        $("#password_error").html("")   
    }
    if(error!="")
    {
        $("#err").html("");
        return;
    }
    $.post( "core/auth.php", { username : username , password : password })
      .done(function( data ) {
        if(data=="success")
        {
            localStorage.setItem("valid" , "yes");
            window.location = "dashboard.php";
        }
        else
        {
            $("#err").html(data) 
        }
      });
      });
});