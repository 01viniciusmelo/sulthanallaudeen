$(document).ready(function () {
var url = window.location.href; // Returns full URL
if (url.indexOf("localhost") > - 1) {
var mode = 'local';
} else {
var mode = 'live';
}

if (mode == 'local')
{
var saUrl = 'https://localhost/sulthanallaudeen';
        localStorage.setItem("saUrl", saUrl);
} else
{
var saUrl = 'https://sulthanallaudeen.com';
        localStorage.setItem("saUrl", saUrl);
}

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
        $.post(saUrl + "/searchBlog", {_token: token, searchQuery: searchQuery})
        .done(function (data) {
        if (data.success == 1)
        {
        $("#resultArea").html('<div class="alert alert-success" role="alert"><strong>Searching for the Posts contains the word "' + searchQuery + '" ( ' + data.count + ' Results )</div>');
                $.each(data.data, function (index, value) {
                $("#resultArea").append('<h2><a href="' +saUrl+'/blog/'+ value.blog_url + '" style="text-decoration:none">' + value.blog_title + '</a></h2>');
                        $("#resultArea").append('<p class="lead">by <a style="text-decoration:none">Sulthan Allaudeen</a></p>');
                        $("#resultArea").append('<p style="float:right"><span class="glyphicon glyphicon-time"></span> Posted on ' + value.blog_date + ' </p>');
                });
        } else
        {
        $("#resultArea").html('<div class="alert alert-danger" role="alert"><strong>Searching for the Posts contains the word "' + searchQuery + '" ( 0  Result)"</div>');
        }
        });
}
});
        var currentPage = window.location.href.split("/").pop();
        if (currentPage == '' || currentPage == 'contact')
{
//Get Contact Info
var _token = $("input[name=_token]").val();
        $.post("getAdminContactData", {_token: _token})
        .done(function (data) {
        var result = jQuery.parseJSON(JSON.stringify(data));
                if (result.success == 1)
        {
        $.each(result.adminData, function (key, value) {
        $("#admin"+key).html(value);
        });
        } else
        {
        $("#adminProfileStatusBarFailure").show();
                $("#adminProfileStatusBarFailure").html("Error in Fetching Data");
        }
        });
}

});