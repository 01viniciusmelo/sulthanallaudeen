@extends('admin.layout.index')
@section('content')
<link href="{{ asset('/').('public/admin/plugins/bootstrap-select/css/bootstrap-select.css') }}" rel="stylesheet">
<link href="{{ asset('/').('public/admin/plugins/bootstrap-material-datetimepicker/css/bootstrap-material-datetimepicker.css') }}" rel="stylesheet">
<section class="content">
        <div class="container-fluid">
            <div class="block-header">
                <h2>
                    Edit Reminder
                    <a type="button" class="btn btn-primary pull-right" href='{{ URL::to('admin/reminder') }}'>Back to Reminder</a>
                    <small>Manage Reminder List</small>
                    @if ($errors->any())
                        <div class="alert alert-danger">
                            @foreach ($errors->all() as $error)
                            {{ $error }} <br>
                            @endforeach
                        </div>
                    @endif
                    @if(isset($errorjk))
                    <div class="alert alert-danger">
                        {{$error}}
                    </div>
                    @endif
                </h2>
            </div>
            <!-- Basic Validation -->
            <div class="row clearfix">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="card">
                        <div class="header">
                            <h2>Edit Reminder</h2>
                            <ul class="header-dropdown m-r--5">
                                <li class="dropdown">
                                    <a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
                                        <i class="material-icons">more_vert</i>
                                    </a>
                                    <ul class="dropdown-menu pull-right">
                                        <li><a href="javascript:void(0);">Action</a></li>
                                        <li><a href="javascript:void(0);">Another action</a></li>
                                        <li><a href="javascript:void(0);">Something else here</a></li>
                                    </ul>
                                </li>
                            </ul>
                        </div>
                        <div class="body">
                            <form id="form_validation" method="POST" action="update">
                                {{ csrf_field() }}
                                <input type='hidden' value='{{$reminder->id}}' name="id">
                                <div class="form-group form-float">
                                    <div class="form-line">
                                        <input type="text" class="form-control" name="title" id="title" required value="{{ $reminder->title }}">
                                        <label class="form-label">Reminder Title</label>
                                    </div>
                                </div>
                                <div class="form-group form-float">
                                    <div class="form-line">
                                        <textarea name="message" cols="30" rows="5" class="form-control no-resize ckeditor" placeholder='Description' required>@if(old('message')){{ old('message') }}@else{{{$reminder->message}}}@endif</textarea>
                                    </div>
                                </div>
                                <div class="form-group form-float">
                                    <div class="form-line">
                                        <select class="form-control show-tick" id='reminder_type' name='type'>
                                            <option value="">Reminder Type</option>
                                            <option value="1" <?php if($reminder['type']=='1') { echo 'selected'; } ?>>Once</option>
                                            <option value="2" <?php if($reminder['type']=='2') { echo 'selected'; } ?>>Daily</option>
                                            <option value="3" <?php if($reminder['type']=='3') { echo 'selected'; } ?>>Periodic</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <input name='datetime' type="text" id='datetime' class="datetimepicker form-control" placeholder="Please choose a date and time..." value='<?php echo date("Y-m-d H:i:00", strtotime($reminder->date)); ?>'>
                                    <input name='time' type="text" id='time' class="timepicker form-control" placeholder="Please choose a time..." value='<?php echo date("H:i", strtotime($reminder->date)); ?>'>
                                </div>
                                <div class="demo-radio-button">
                                <input name="status" type="radio" id="draft" class="radio-col-red" value="0" 
                                <?php
                                if(old('status')){
                                    if(old('status')==0){
                                        echo 'checked';
                                    }
                                }
                                else{
                                    if ($reminder->status==0){
                                        echo 'checked';
                                    }
                                }
                                ?>
                                >
                                <label for="draft">Draft</label>
                                <input name="status" type="radio" id="publish" class="radio-col-pink" value="1" 
                                <?php
                                if(old('status')){
                                    if(old('status')==1){
                                        echo 'checked';
                                    }
                                }
                                else{
                                    if ($reminder->status==1){
                                        echo 'checked';
                                    }
                                }
                                ?>
                                required
                                >
                                <label for="publish">Publish</label>
                                </div>
                                <button class="btn btn-primary waves-effect" type="submit">SUBMIT</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <!-- #END# Basic Validation -->
        </div>
    </section>

<!-- Jquery Validation Plugin Css -->
<!-- Jquery Validation Plugin Css -->
<script src="{{ asset('/').('public/admin/plugins/jquery-validation/jquery.validate.js') }}"></script>
<script src="{{ asset('/').('public/admin/js/pages/forms/form-validation.js') }}"></script>
<script src="{{ asset('/').('public/admin/plugins/bootstrap-select/js/bootstrap-select.js') }}"></script>
<script src="{{ asset('/').('public/admin/plugins/momentjs/moment.js') }}"></script>
<script src="{{ asset('/').('public/admin/plugins/bootstrap-material-datetimepicker/js/bootstrap-material-datetimepicker.js') }}"></script>
<script>
 $(function () {
     <?php
     if($reminder['type']=='1'){
        ?>
        $("#time").hide();
        <?php
     }else{
        ?>
        $("#datetime").hide();
        <?php
     }
     ?>
     
     
     $("#reminder_type").change(function() {
        if ($(".show-tick option:selected").text() == 'Once') {
            $("#datetime").show();
            $("#time").hide();
            $(".ckeditor").attr("placeholder", "Description");
        } else if ($(".show-tick option:selected").text() == 'Call')
            {
            $("#datetime").show();
            $("#time").hide();
            $(".ckeditor").attr("placeholder", "Enter Phone Number");
        }
        else {
            $(".ckeditor").attr("placeholder", "Description");
            $("#datetime").hide();
            $("#time").show();
        }
    });
     //Datetimepicker plugin
    $('.datetimepicker').bootstrapMaterialDatePicker({
        format: 'YYYY-MM-DD HH:mm:ss',
        clearButton: true,
        weekStart: 1
    });

    $('.datepicker').bootstrapMaterialDatePicker({
        format: 'YYYY-MM-DD HH:mm:ss',
        clearButton: true,
        weekStart: 1,
        time: false
    });

    $('.timepicker').bootstrapMaterialDatePicker({
        format: 'HH:mm',
        clearButton: true,
        date: false
    });
});
</script>
@stop