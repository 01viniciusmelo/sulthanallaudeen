@extends('admin.layout.index')
@section('content')
<link href="{{ asset('/').('public/admin/plugins/bootstrap-select/css/bootstrap-select.css') }}" rel="stylesheet">
<link href="{{ asset('/').('public/admin/plugins/bootstrap-material-datetimepicker/css/bootstrap-material-datetimepicker.css') }}" rel="stylesheet">
<section class="content">
        <div class="container-fluid">
            <div class="block-header">
                <h2>
                    Create Reminder
                    <a type="button" class="btn btn-primary pull-right" href='{{ URL::to('admin/reminder') }}'>Back to Reminder</a>
                    <small>Manage Reminder List</small>
                    @if ($errors->any())
                        <div class="alert alert-danger">
                            @foreach ($errors->all() as $error)
                            {{ $error }} <br>
                            @endforeach
                        </div>
                    @endif
                </h2>
            </div>
            <!-- Basic Validation -->
            <div class="row clearfix">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="card">
                        <div class="header">
                            <h2>Create Reminder</h2>
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
                            <form id="form_validation" method="POST" action="write">
                                {{ csrf_field() }}
                                <div class="form-group form-float">
                                    <div class="form-line">
                                        <input type="text" class="form-control" name="title" id="title" required value="{{ old('title') }}">
                                        <label class="form-label">Reminder Title</label>
                                    </div>
                                </div>
                                <div class="form-group form-float">
                                    <div class="form-line">
                                        <textarea name="message" cols="30" rows="5" class="form-control no-resize ckeditor" placeholder='Reminder Description' required>{{ old('message') }}</textarea>
                                    </div>
                                </div>
                                <div class="form-group form-float">
                                    <div class="form-line">
                                        <select class="form-control show-tick" id='reminder_type' name='type'>
                                                <option value="">Reminder Type</option>
                                                <option value="1">Once</option>
                                                <option value="2">Daily</option>
                                                <option value="3">Call</option>
                                            </select>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <input name='datetime' type="text" id='datetime' class="datetimepicker form-control" placeholder="Please choose a date and time...">
                                    <input name='time' type="text" id='time' class="timepicker form-control" placeholder="Please choose a time...">
                                </div>

                                <div class="demo-radio-button">
                                <input name="status" type="radio" id="draft" class="radio-col-red" value="0" 
                                @if(old('status')==0)
                                checked
                                @endif
                                required
                                >
                                <label for="draft">Draft</label>
                                <input name="status" type="radio" id="publish" class="radio-col-pink" value="1" 
                                @if(old('status')==1)
                                checked
                                @endif
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
<script src="{{ asset('/').('public/admin/plugins/jquery-validation/jquery.validate.js') }}"></script>
<script src="{{ asset('/').('public/admin/js/pages/forms/form-validation.js') }}"></script>
<script src="{{ asset('/').('public/admin/plugins/bootstrap-select/js/bootstrap-select.js') }}"></script>
<script src="{{ asset('/').('public/admin/plugins/momentjs/moment.js') }}"></script>
<script src="{{ asset('/').('public/admin/plugins/bootstrap-material-datetimepicker/js/bootstrap-material-datetimepicker.js') }}"></script>
<script>
 $(function () {
     $("#datetime").hide();
     $("#time").hide();
     $("#reminder_type").change(function() {
        if ($(".show-tick option:selected").text() == 'Once') {
            $("#datetime").show();
            $("#time").hide();
        } else {
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