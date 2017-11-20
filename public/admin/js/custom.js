$(document).ready(function() {
    var url = window.location.href;
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

});