$(document).ready(function() {
    var url = window.location.href; // Returns full URL
    if (url.indexOf("localhost") > -1) {
        var mode = 'local';
    } else {
        var mode = 'live';
    }

    if (mode == 'local') {
        var saUrl = 'https://localhost/sulthanallaudeen';
    } else {
        var saUrl = 'https://sulthanallaudeen.com';
    }

    $("#searchBlog").on("input", function() {
        var searchQuery = $("#searchBlog").val();
        console.log(searchQuery)
    });

});