@extends('layout.admin')
@section('content')

<div id="page-wrapper">
    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">Messages</h1>
        </div>
        <!-- /.col-lg-12 -->
    </div>
    <!-- /.row -->
    <div class="row">
        <div class="col-lg-12">
            <div class="panel panel-default">
                <div class="panel-heading">
                    All Messages
                </div>
                {!! Form::open(array('url' => 'blogPost', 'name' => 'blogPost', 'id' => 'blogPost','class' => 'form-horizontal'))!!}
                {!! Form::close() !!}
                <!-- /.panel-heading -->
                <div class="panel-body">
                    <div class="dataTable_wrapper">
                        <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                            <thead>
                                <tr>
                                    <th>Id</th>
                                    <th>From</th>
                                    <th>Status</th>
                                    <th>Received At</th>
                                    <th>Read</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($mails as $mail)
                                <?php
                                if($mail->message_status==1)
                                {
                                    $status = "Unread";
                                }
                                else
                                {
                                    $status = "Read";
                                }
                                ?>
                                <tr class="odd gradeX">
                                    <td>{{ $mail->id}}</td>
                                    <td>{{ $mail->user_email}}</td>
                                    <td id="msg__{{ $mail->id}}">{{ $status}}</td>
                                    <td>{{ $mail->created_at}}</td>
                                    <td>
                                        <button type="button" class="btn btn-success readMessage" id='{{ $mail->id }}' data-toggle="modal" data-target="#myModal">Read</button>
                                        <?php
                                        if ($mail->message_status == 0) {
                                            ?>
                                            <button type="button" class="read btn-info btn-circle" id='msg_{{ $mail->id }}'><i class="fa fa-check"></i></button>
                                            <?php
                                        } else {
                                            ?>
                                            <button type="button" class="read btn btn-info btn-circle messageUnRead" id='msg_{{ $mail->id }}'><i class="fa fa-check"></i></button>
                                            <?php
                                        }
                                        ?>
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>


                        <!-- Modal -->
                        <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                                        <h4 class="modal-title" id="mailTitle"></h4>
                                    </div>
                                    <div class="modal-body" id='mailContent'></div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                        <button type="button" class="btn btn-primary" id='mailId' style='display:none'>Mark as Read</button>
                                    </div>
                                </div>
                                <!-- /.modal-content -->
                            </div>
                            <!-- /.modal-dialog -->
                        </div>

                    </div>
                    <!-- /.table-responsive -->
                </div>
                <!-- /.panel-body -->
            </div>
            <!-- /.panel -->
        </div>
        <!-- /.col-lg-12 -->
    </div>

</div>
<!-- /#page-wrapper -->

</div>
<!-- /#wrapper -->

<script>
$(document).ready(function() {





$( ".readMessage" ).click(function() {
var id = $(this).attr('id')
var _token = $("input[name=_token]").val();
$.post( "getMessage", { _token : _token, id : id})
  .done(function( data ) {
    var result = jQuery.parseJSON(JSON.stringify(data));

    if (result.success==1)
    {
        $("#mailTitle").html('<font color="green">From : </font>'+result.mailData.user_email+' <font color="green">Receied at</font> : '+result.mailData.created_at);
        $("#mailContent").html('<font color="green">Message : </font>'+result.mailData.user_message);
    }
    else
    {
        $("#mailTitle").html('Error');
        $("#mailContent").html('Something goes Wrong !!');
    }
  });
} );


$( ".read" ).click(function() {
    
var id = $(this).attr('id').slice(4);
var _token = $("input[name=_token]").val();
$.post( "messageMarkAsRead", { _token : _token, id : id})
  .done(function( data ) {
    var result = jQuery.parseJSON(JSON.stringify(data));
    if (result.success==1)
    {
        
        if(result.status==1)
        {
            $("#msg_"+id).toggleClass('messageUnRead');
            $("#msg__"+id).html('Unread');
        }
        else
        {
            $("#msg_"+id).toggleClass('messageUnRead');
            $("#msg__"+id).html('Read');   
        }
    }
    else
    {        
    }
  });
});

});
</script>
@stop