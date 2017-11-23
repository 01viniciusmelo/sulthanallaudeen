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


    //Not a Generic

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

    $('.delete-form').on('click', function() {
        var id = this.id;
        var page = $(this).attr("page-name");
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
                deletethis(id, page)
            } else {
                swal("Cancelled", "It's safe :)", "error");
            }
        });
    });

    function deletethis(id, page) {
        $.post(appUrl + 'admin/' + page + '/delete', { _token: _token, id: id })
            .done(function(data) {
                if (data.success == 1) {
                    //alert(data.message)
                    location.reload();
                } else {
                    console.log(data.data);
                }
            });
    }
    //Reminder Function
    $('.create-reminder').on('click', function() {
        //clearing defaults
        $('#saveReminder').show();
        $('#updateReminder').hide();
        $("#id").val('')
        $("#title").val('')
        $("#message").val('')
        $("#date").val('')
        $("#time").val('')
        $('.show-tick').selectpicker('val', '');
    });

    $('.readReminder').on('click', function() {
        var id = this.id;
        $("#id").val($(".id_" + id).val())
        $("#title").val($(".title_" + id).val())
        $("#message").val($(".message_" + id).val())
        var type = $(".type_" + id).val();
        $('.show-tick').selectpicker('val', type);
        if (type == '1') {
            $("#datetime").show();
            $("#datetime").val($(".date_" + id).val());
            $("#time").hide();
        } else {
            $("#datetime").hide();
            $("#time").val($(".date_" + id).val());
            $("#time").show();
        }
        $('#saveReminder').hide();
        $('#updateReminder').show();
    });


    $('#saveReminder').on('click', function() {
        var title = $('#title').val();
        var message = $('#message').val();
        if ($(".show-tick option:selected").text() == 'Once') {
            var type = '1';
            var date = $('#datetime').val();
        } else {
            var type = '2';
            var date = $('#time').val();
        }
        var data = { title: title, message: message, date: date, type: type, _token: _token }
        var url = 'admin/reminder/create';
        postCall(url, data)
            // postCall(url, data, function(data) {
            //     if (data.success == '1') {
            //         alert(data.message);
            //         location.reload();
            //     } else {
            //         alert(data.message);
            //     }
            // });
    });

    $('#updateReminder').on('click', function() {
        var id = $('#id').val();
        var title = $('#title').val();
        var message = $('#message').val();
        if ($(".show-tick option:selected").text() == 'Once') {
            var type = '1';
            var date = $('#datetime').val();
        } else {
            var type = '2';
            var date = $('#time').val();
        }
        var data = { id: id, title: title, message: message, date: date, type: type }
        var url = 'admin/reminder/edit';
        postCall(url, data);
    });

    $('.deleteReminder').on('click', function() {
        var id = this.id;
        var data = { id: id }
        var page = 'reminder';
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
                deletethis(id, page)
            } else {
                swal("Cancelled", "It's safe :)", "error");
            }
        });
    });

    //Generic Rest Calls

    function postCall(url, data) {
        $.post(appUrl + url, data)
            .done(function(data) {
                if (data.success == '1') {
                    alert(data.message);
                    location.reload();
                } else {
                    alert(data.message);
                }
            });
    }

    // function postCall(url, data, callback) {
    //     $.post(appUrl + url, data)
    //         .done(function(data) {
    //             callback(data);
    //         });
    // }

    //Other Util Functions
    // $("#datetime").hide();
    // $("#time").hide();
    // $("#reminder_type").change(function() {
    //     if ($(".show-tick option:selected").text() == 'Once') {
    //         $("#datetime").show();
    //         $("#time").hide();
    //     } else {
    //         $("#datetime").hide();
    //         $("#time").show();
    //     }
    // });
});