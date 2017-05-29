
$(document).ready(function () {

var url = window.location.href;
var location = /[^/]*$/.exec(url)[0];


if(location=='dashboard' || location=='dashboard#')
{
 loadDashBoard();
}




//Functions

function loadDashBoard()
{
	var _token = $("input[name=_token]").val();
	$.ajax({
            url: 'getNotification',
            type: 'POST',
            data: {_token:_token},
            success: function (message)
            {

                if (message.success == 1)
                {
             		fillData(message.reminder)
                } else
                {
                    
                }


            }
        });
}

function fillData(data)
{
	$.each(data, function (key, value) {
                if (value.reminder_type == 1) {
                    var logo = "fa-tags";
                } else {
                    var logo = "fa-clock-o";
                }
                $(".reminderData").append('<a href="#" class="list-group-item"><i class="fa ' + logo + ' fa-fw"></i> ' + value.reminder_name + '<span class="pull-right text-muted small"><em>' + value.updated_at + '</em></span></a>');
            });
}

});