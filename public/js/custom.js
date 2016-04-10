$(document).ready(function () {
    var url = window.location.href;     // Returns full URL
    if (url.indexOf("localhost") > -1) {
        var mode = 'local';
    } else {
        var mode = 'live';
    }
    
    if (mode == 'local')
    {
        var saUrl = 'http://localhost/sulthanallaudeen';
        localStorage.setItem("saUrl", saUrl);
    }
    else
    {
        var saUrl = 'http://sulthanallaudeen.com';
        localStorage.setItem("saUrl", saUrl);
    }
    alert(url);
    $("#searchBlog").on("input", function () {
        var searchQuery = $("#searchBlog").val();
        console.log(searchQuery);
        console.log(searchQuery.length);
        if (searchQuery.length == 0)
        {
            $("#blogArea").show();
            $("#resultArea").html('');
        } else
        {
            $("#blogArea").hide();
            var token = $("#_token").val();
            $.post(saUrl+"/searchBlog", {_token: token, searchQuery: searchQuery})
                    .done(function (data) {
                        if (data.success == 1)
                        {
                            $("#resultArea").html('<div class="alert alert-success" role="alert"><strong>Searching for the Posts contains the word "' + searchQuery + '" ( ' + data.count + ' Results )</div>');
                            $.each(data.data, function (index, value) {
                                $("#resultArea").append('<h2><a href="blog/' + value.blogUrl + '" style="text-decoration:none">' + value.blogTitle + '</a></h2>');
                                $("#resultArea").append('<p class="lead">by <a style="text-decoration:none">Sulthan Allaudeen</a></p>');
                                $("#resultArea").append('<p style="float:right"><span class="glyphicon glyphicon-time"></span> Posted on ' + value.blogDate + ' </p>');
                            });
                        } else
                        {
                            $("#resultArea").html('<div class="alert alert-danger" role="alert"><strong>Searching for the Posts contains the word "' + searchQuery + '" ( 0  Result)"</div>');
                        }
                    });
        }
    });

    //Get Contact Info
    var _token = $("input[name=_token]").val();
$.post( "getAdminContactData", { _token : _token})
  .done(function( data ) {
    var result = jQuery.parseJSON(JSON.stringify(data));
    if (result.success==1)
    {
    $("#adminemail").val(result.adminData.id);
    $("#adminmobile").text(result.adminData.mobile);
    $("#adminemail").text(result.adminData.email);
    $("#admintwitter").text(result.adminData.twitter);
    $("#adminskype").text(result.adminData.skype);
    $("#adminfacebook").text(result.adminData.facebook);
    }
    else
    {
    $("#adminProfileStatusBarFailure").show();
    $("#adminProfileStatusBarFailure").html("Error in Fetching Data");
    }
  });
});