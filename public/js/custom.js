$(document).ready(function() {
    var url = window.location.href; // Returns full URL
    if (url.indexOf("localhost") > -1) {
        var mode = 'local';
    } else {
        var mode = 'live';
    }

    if (mode == 'local') {
        var saUrl = 'http://localhost/sulthanallaudeen';
    } else {
        var saUrl = 'https://sulthanallaudeen.com';
    }

    $("#searchBlog").on("input", function() {
        var searchQuery = $("#searchBlog").val();
        console.log("Queried for", searchQuery);
        if (searchQuery.length == 0) {
            $("#blogArea").show();
            $("#resultArea").html('');
        } else {
            $("#blogArea").hide();
            var _token = $("input[name='_token']").val();
            $.post(saUrl + "/searchBlog", { _token: _token, searchQuery: searchQuery })
                .done(function(data) {
                    if (data.success == 1) {
                        $("#resultArea").html('<div class="alert alert-success" role="alert"><strong>Searching for the Posts contains the word "' + searchQuery + '" ( ' + data.count + ' Results )</div>');
                        $.each(data.data, function(index, value) {
                            $("#resultArea").append('<h2><a href="' + saUrl + '/blog/' + value.blog_url + '" style="text-decoration:none">' + value.blog_title + '</a></h2>');
                            $("#resultArea").append('<p class="lead">by <a style="text-decoration:none">Sulthan Allaudeen</a></p>');
                            $("#resultArea").append('<p style="float:right"><span class="fa fa-clock-o"></span> Posted on ' + value.blog_date + ' </p>');
                        });
                    } else {
                        $("#resultArea").html('<div class="alert alert-danger" role="alert"><strong>Searching for the Posts contains the word "' + searchQuery + '" ( 0  Result)"</div>');
                    }
                });
        }
    });

});