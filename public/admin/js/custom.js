$(document).ready(function() {
    var url = window.location.href;
    var appUrl = url.includes("localhost");
    if (appUrl === false) {
        appUrl = 'https://www.sulthanallaudeen.com/'
    } else {
        appUrl = 'https://localhost/sulthanallaudeen/'
    }
    var _token = $("#csrf_token").html();

    $('.delete').on('click', function() {
        var id = this.id;
        swal({
            title: "Are you sure to delete?",
            text: "You will not be able to recover this!",
            type: "warning",
            showCancelButton: true,
            confirmButtonColor: "#DD6B55",
            confirmButtonText: "Yes, delete it!",
            cancelButtonText: "No, cancel plx!",
            closeOnConfirm: false,
            closeOnCancel: false
        }, function(isConfirm) {
            if (isConfirm) {
                window.location.href = url + '/delete/' + id;
            } else {
                swal("Cancelled", "It's safe :)", "error");
            }
        });
    });

    var tablePage = url.includes("edit");
    if (tablePage === false) {
        $('#my-table').DataTable({
            "order": [
                [0, "desc"]
            ]
        });
    } else {
        console.log('Other page than list page');
    }


    $('.readContact').on('click', function() {
        var id = this.id;
        $(".modal-title").html("Email from " + $(".email_" + id).val())
        $(".modal-body").html($(".message_" + id).val())
    });


    //Generic

    $('.save-form').on('click', function() {
        var key = $('#key').val();
        var value = $('#value').val();
        $.post(appUrl + 'admin/' + this.id + '/create', { _token: _token, key: key, value: value })
            .done(function(data) {
                if (data.success == 1) {
                    alert(data.message)
                    location.reload();
                    //$(".close-form").trigger("click");
                } else {
                    console.log(data.data);
                }
            });
    });

    $('.create-data').on('click', function() {
        $("#key").val('');
        $("#value").val('');
        $('.save-form').show();
        $('.edit-form').hide();
    });

    $('.show-form').on('click', function() {
        var id = this.id;
        $("#id").val($(".id_" + id).val())
        $("#key").val($(".key_" + id).val())
        $("#value").val($(".value_" + id).val())
        $('.save-form').hide();
        $('.edit-form').show();
    });

    $('.edit-form').on('click', function() {
        var id = this.id;
        var _id = $('#id').val();
        var key = $('#key').val();
        var value = $('#value').val();
        $.post(appUrl + 'admin/' + this.id + '/edit', { _token: _token, id: _id, key: key, value: value })
            .done(function(data) {
                if (data.success == 1) {
                    alert(data.message)
                    location.reload();
                    //$('.close-form').trigger.click();
                } else {
                    console.log(data.data);
                }
            });
    });




});