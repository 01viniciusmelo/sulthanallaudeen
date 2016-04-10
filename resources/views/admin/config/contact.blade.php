@extends('layout.admin')
@section('content')
<div id="page-wrapper">
    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">Contact Details</h1>
            <div class="alert alert-success" id="adminProfileStatusBarSuccess" style="display:none"></div>
            <div class="alert alert-danger" id="adminProfileStatusBarFailure" style="display:none"></div>
        </div>
        <!-- /.col-lg-12 -->						
    </div>
    <!-- /.row -->
    <div class="row">
        <div class="col-lg-8">
            <div class="panel panel-default">
                <div class="panel-heading">
                    Site Contact
                </div>
                <!-- /.panel-heading -->
                <div class="panel-body">
                    <input type="hidden" id="adminProfileId" value=''>
                    <!-- Nav tabs -->
                    <ul class="nav nav-tabs">
                        <li class="active"><a href="#mobile" data-toggle="tab">Mobile</a>
                        </li>
                        <li><a href="#mail" data-toggle="tab">Mail</a>
                        </li>
                        <li><a href="#github" data-toggle="tab">Github</a>
                        </li>
                        <li><a href="#stackoverflow" data-toggle="tab">Stackoverflow</a>
                        </li>
                        <li><a href="#twitter" data-toggle="tab">Twitter</a>
                        </li>
                        <li><a href="#facebook" data-toggle="tab">Facebook</a>
                        </li>
                        <li><a href="#skype" data-toggle="tab">Skype</a>
                        </li>
                    </ul>

                    <!-- Tab panes -->
                    <div class="tab-content">
                        <div class="tab-pane fade in active" id="mobile">
                            <h5>Mobile Number</h5>
                            <div class="col-lg-12">
                                <div class="panel panel-green">
                                    <div class="panel-heading">
                                        Current Mobile Number <button type="button" class="btn btn-default disabled" id='adminmobile'></button>
                                    </div>
                                    <div class="panel-body">
                                        <input class="form-control" placeholder='New Mobile Number' id="newmobile">
                                    </div>
                                    <div class="panel-footer">
                                        <p align="center">
                                            <button type="button" class="updateData btn btn-default" id="updatemobile">Update Mobile</button>
                                        </p>
                                    </div>
                                </div>
                                <!-- /.col-lg-4 -->
                            </div>
                        </div>
                        <div class="tab-pane fade" id="mail">
                            <h5>Email Id</h5>
                            <div class="col-lg-12">
                                <div class="panel panel-green">
                                    <div class="panel-heading">
                                        Current Email Id <button type="button" class="btn btn-default disabled" id='adminemail'></button>
                                    </div>
                                    <div class="panel-body">
                                        <input class="form-control" placeholder='New Email Id' id="newemail">
                                    </div>
                                    <div class="panel-footer">
                                        <p align="center">
                                            <button type="button" class="updateData btn btn-default" id="updateemail">Update Email</button>
                                        </p>
                                    </div>
                                </div>
                                <!-- /.col-lg-4 -->
                            </div>
                        </div>
                        <div class="tab-pane fade" id="github">
                            <h5>Github</h5>
                            <div class="col-lg-12">
                                <div class="panel panel-green">
                                    <div class="panel-heading">
                                        Current Github Id <button type="button" class="btn btn-default disabled" id='admingithub'></button>
                                    </div>
                                    <div class="panel-body">
                                        <input class="form-control" placeholder='New Github Id' id="newgithub">
                                    </div>
                                    <div class="panel-footer">
                                        <p align="center">
                                            <button type="button" class="updateData btn btn-default" id="updategithub">Update Github Id</button>
                                        </p>
                                    </div>
                                </div>
                                <!-- /.col-lg-4 -->
                            </div>
                        </div>
                        <div class="tab-pane fade" id="stackoverflow">
                            <h5>Stackoverflow Id</h5>
                            <div class="col-lg-12">
                                <div class="panel panel-green">
                                    <div class="panel-heading">
                                        Current Stackoverflow <button type="button" class="btn btn-default disabled" id='adminstackoverflow'></button>
                                    </div>
                                    <div class="panel-body">
                                        <input class="form-control" placeholder='New StackOverflow Id' id="newstackoverflow">
                                    </div>
                                    <div class="panel-footer">
                                        <p align="center">
                                            <button type="button" class="updateData btn btn-default" id="updatestackoverflow">Update Stackoverflow Id</button>
                                        </p>
                                    </div>
                                </div>
                                <!-- /.col-lg-4 -->
                            </div>
                        </div>
                        <div class="tab-pane fade" id="twitter">
                            <h5>Twitter Id</h5>
                            <div class="col-lg-12">
                                <div class="panel panel-green">
                                    <div class="panel-heading">
                                        Current Twitter Id <button type="button" class="btn btn-default disabled" id='admintwitter'></button>
                                    </div>
                                    <div class="panel-body">
                                        <input class="form-control" placeholder='New Twitter Id' id="newtwitter">
                                    </div>
                                    <div class="panel-footer">
                                        <p align="center">
                                            <button type="button" class="updateData btn btn-default" id="updatetwitter">Update Twitter Id</button>
                                        </p>
                                    </div>
                                </div>
                                <!-- /.col-lg-4 -->
                            </div>
                        </div>
                        <div class="tab-pane fade" id="facebook">
                            <h5>Facebook Id</h5>
                            <div class="col-lg-12">
                                <div class="panel panel-green">
                                    <div class="panel-heading">
                                        Current Facebook Id <button type="button" class="btn btn-default disabled" id='adminfacebook'></button>
                                    </div>
                                    <div class="panel-body">
                                        <input class="form-control" placeholder='New Facebook Id' id="newfacebook">
                                    </div>
                                    <div class="panel-footer">
                                        <p align="center">
                                            <button type="button" class="updateData btn btn-default" id="updatefacebook">Update Facebook Id</button>
                                        </p>
                                    </div>
                                </div>
                                <!-- /.col-lg-4 -->
                            </div>
                        </div>
                        <div class="tab-pane fade" id="skype">
                            <h5>Skype Id</h5>
                            <div class="col-lg-12">
                                <div class="panel panel-green">
                                    <div class="panel-heading">
                                        Current Skype Id <button type="button" class="btn btn-default disabled" id='adminskype'></button>
                                    </div>
                                    <div class="panel-body">
                                        <input class="form-control" placeholder='New Skype Id' id="newskype">
                                    </div>
                                    <div class="panel-footer">
                                        <p align="center">
                                            <button type="button" class="updateData btn btn-default" id="updateskype">Update Skype Id</button>
                                        </p>
                                    </div>
                                </div>
                                <!-- /.col-lg-4 -->
                            </div>
                        </div>
                    </div>
                </div>
                <!-- /.panel-body -->
            </div>
            <!-- /.panel -->
        </div>

        <!-- /.col-lg-6 -->

        <!-- /.col-lg-6 -->
    </div>
    <!-- /.row -->

    <!-- /.row -->

</div>
<!-- /#page-wrapper -->

</div>
<!-- /#wrapper -->
<script>
    $(document).ready(function () {
        var _token = $("input[name=_token]").val();
        $.post("getAdminContactData", {_token: _token})
                .done(function (data) {
                    var result = jQuery.parseJSON(JSON.stringify(data));
                    if (result.success == 1)
                    {
                        $.each(result.adminData, function (key, value) {
                            $("#admin" + key).html(value);
                        });
                    } else
                    {
                        $("#adminProfileStatusBarFailure").show();
                        $("#adminProfileStatusBarFailure").html("Error in Fetching Data");
                    }
                });
        $(".updateData").click(function () {

            var updateItem = this.id;
            if (updateItem == 'updateemail')
            {
                var updateKey = 'email';
            } else if (updateItem == 'updatemobile')
            {
                var updateKey = 'mobile';
            } else if (updateItem == 'updategithub')
            {
                var updateKey = 'github';
            } else if (updateItem == 'updatestackoverflow')
            {
                var updateKey = 'stackoverflow';
            } else if (updateItem == 'updatetwitter')
            {
                var updateKey = 'twitter';
            } else if (updateItem == 'updatefacebook')
            {
                var updateKey = 'facebook';
            } else if (updateItem == 'updateskype')
            {
                var updateKey = 'skype';
            } else
            {
                alert('Invalid Update');
                return false;
            }


            var _token = $("input[name=_token]").val();
            var updateElement = $("#new" + updateKey).val();

            if (updateElement == '')
            {
                $("#adminProfileStatusBarSuccess").hide();
                $("#adminProfileStatusBarFailure").html('The field "' + updateKey + '" should not be empty');
                $("#adminProfileStatusBarFailure").show(1000);
                $("#adminProfileStatusBarFailure").hide(2000);
            }

            var id = $("#adminProfileId").val();
            $.post("updateAdminContactData", {_token: _token, updateKey: updateKey, updateElement: updateElement})
                    .done(function (data) {
                        var result = jQuery.parseJSON(JSON.stringify(data));
                        if (result.success == 1)
                        {
                            $("#new" + updateKey).val('');
                            $("#admin" + result.key).html(updateElement);
                            $("#adminProfileStatusBarFailure").hide();
                            $("#adminProfileStatusBarSuccess").html("Contact Info for " + result.key + " updated successfully..");
                            $("#adminProfileStatusBarSuccess").show(1000);
                            $("#adminProfileStatusBarSuccess").hide(2000);
                        } else
                        {
                            $("#adminProfileStatusBarSuccess").hide();
                            $("#adminProfileStatusBarFailure").html('Error in Update');
                            $("#adminProfileStatusBarFailure").show(1000);
                            $("#adminProfileStatusBarFailure").hide(2000);
                        }
                    });
        });




    });
</script>
@stop