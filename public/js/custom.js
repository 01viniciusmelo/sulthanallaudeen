$(document).ready(function() {
    var url = window.location.href; // Returns full URL
    if (url.indexOf("localhost") > -1) {
        var mode = 'local';
    } else {
        var mode = 'live';
    }
    if (mode == 'local') {
        var saUrl = 'https://localhost/sulthanallaudeen';
        localStorage.setItem("saUrl", saUrl);
    } else {
        var saUrl = 'https://sulthanallaudeen.com';
        localStorage.setItem("saUrl", saUrl);
    }
    var token = $("#csrf_token").html();
    $("#searchBlog").on("input", function() {
        var searchQuery = $("#searchBlog").val();
        if (searchQuery.length == 0) {
            $("#blogArea").show();
            $("#resultArea").html('');
        } else {
            $("#blogArea").hide();
            var json = {
                _token: token,
                searchQuery: searchQuery
            };
            var url = saUrl + "/searchBlog";
            httpCall(url, json, function(data) {
                if (data.success == 1) {
                    $("#resultArea").html('<div class="alert alert-success" role="alert"><strong>Searching for the Posts contains the word "' + searchQuery + '" ( ' + data.count + ' Results )</div>');
                    $.each(data.data, function(index, value) {
                        $("#resultArea").append('<div class="col-9 col-lg-9"><h2>' + value.title + '</h2><p><a class="btn btn-primary" href="' + saUrl + '/blog/' + value.url + '" role="button">Read more »</a></p><p style="float:right"><span class="fa fa-clock-o"></span> Posted on ' + value.created_at + ' </p></div>');
                    });
                } else {
                    $("#resultArea").html('<div class="alert alert-danger" role="alert"><strong>Searching for the Posts contains the word "' + searchQuery + '" ( 0  Result)"</div>');
                }
            });
        }
    });
    //Contact SA
    $("#contactSA").click(function() {
        event.preventDefault();
        $("error").html("");
        var email = $("#email").val();
        var message = $("#message").val();
        var json = {
            _token: token,
            email: email,
            message: message
        };
        var url = saUrl + "/contactSA";
        httpCall(url, json, function(data) {
            if (data.success == '1') {
                $(".form-control").val("");
                $(".formMessage").html('<div class="alert alert-success"><strong>Form submitted, Referal id is #' + data.id);
            } else {
                $.each(data.error, function(index, value) {
                    $("." + index).html("");
                    $.each(value, function(key, val) {
                        $("." + index).append(val);
                    });
                });
            }
        });
    });

    function httpCall(url, data, callback) {
        $.post(url, data)
            .done(function(data) {
                callback(data);
            });
    }
});