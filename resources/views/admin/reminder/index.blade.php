@extends('admin.layout.index')
@section('content')
<link href="{{ asset('/').('public/admin/plugins/jquery-datatable/skin/bootstrap/css/dataTables.bootstrap.css') }}" rel="stylesheet">
<link href="{{ asset('/').('public/admin/plugins/bootstrap-select/css/bootstrap-select.css') }}" rel="stylesheet">
<link href="{{ asset('/').('public/admin/plugins/bootstrap-material-datetimepicker/css/bootstrap-material-datetimepicker.css') }}" rel="stylesheet">
<link href="{{ asset('/').('public/admin/plugins/sweetalert/sweetalert.css') }}" rel="stylesheet">

<section class="content">
        <div class="container-fluid">
            <div class="block-header">
                <h2>
                <a type="button" class="btn btn-primary pull-right create-reminder" id='config' data-toggle="modal" data-target="#largeModal">Create Reminder</a>
                    Reminder
                    <small>Reminder Config List</small>
                </h2>
            </div>
            @if (session('success'))
            <div class="alert alert-success">
            <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span></button>
                {{session('success')}}
            </div>
            @endif
            <!-- Basic Examples -->
            <div class="row clearfix">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="card">
                        <div class="header">
                            <h2>
                                Reminder
                            </h2>
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
                            <div class="table-responsive">
                                <table class="table table-bordered table-striped table-hover dataTable" id='my-table'>
                                    <thead>
                                        <tr>
                                            <th>S.No</th>
                                            <th>Reminder</th>
                                            <th>Type</th>
                                            <th>Date Time</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                    @foreach($datas as $data)
                                        <tr>
                                            <td>{{$data->id}}</td>
                                            <td>{{$data->title}}</td>
                                            <td><?php
                                                if($data->type=='1'){
                                                    echo 'Once';
                                                    $date = $data->date;
                                                }else{
                                                    $date = date("H:i", strtotime($data->date));
                                                    echo 'Daily';
                                                }
                                            ?></td>
                                            <td>{{$date}}</td>
                                            <td>
                                            <button class="btn btn-danger waves-effect readReminder" id='{{$data->id}}' data-toggle="modal" data-target="#largeModal">Read</button>
                                            <button class="btn btn-danger waves-effect deleteReminder" id='{{$data->id}}'>X</button>
                                            <input type='hidden' class='id_{{$data->id}}' value='{{$data->id}}'>
                                            <input type='hidden' class='title_{{$data->id}}' value='{{$data->title}}'>
                                            <input type='hidden' class='message_{{$data->id}}' value='{{$data->message}}'>
                                            <input type='hidden' class='type_{{$data->id}}' value='{{$data->type}}'>
                                            <input type='hidden' class='date_{{$data->id}}' value='{{$date}}'>
                                            </td>
                                        </tr>
                                    @endforeach    
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- #END# Basic Examples -->
        </div>
    </section>
    
<!-- Start of Modal -->
<div class="modal fade" id="largeModal" tabindex="-1" role="dialog">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title" id="largeModalLabel">Create Reminder</h4>
            </div>
            <div class="modal-body">
                <div class="row clearfix">
                    <div class="col-sm-12">
                        <div class="form-group">
                            <div class="form-line">
                                <input type="text" class="form-control" placeholder="Title" id='title'>
                                <input type="hidden" class="form-control" placeholder="Key" id='id'>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="form-line">
                                <textarea class='form-control' placeholder="Message" id='message'></textarea>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="form-line">
                                <select class="form-control show-tick" id='reminder_type'>
                                        <option value="">Reminder Type</option>
                                        <option value="1">Once</option>
                                        <option value="2">Daily</option>
                                    </select>
                            </div>
                        </div>
                        <div class="form-group">
                            <input type="text" id='datetime' class="datetimepicker form-control" placeholder="Please choose a date and time...">
                            <input type="text" id='time' class="timepicker form-control" placeholder="Please choose a time...">
                        </div>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-link waves-effect" id='saveReminder'>SAVE CHANGES</button>
                <button type="button" class="btn btn-link waves-effect" id='updateReminder'>UPDATE CHANGES</button>
                <button type="button" class="btn btn-link waves-effect" data-dismiss="modal">CLOSE</button>
            </div>
        </div>
    </div>
</div>
<!-- End of Modal -->
<script src="{{ asset('/').('public/admin/plugins/jquery-datatable/jquery.dataTables.js') }}"></script>
<script src="{{ asset('/').('public/admin/js/pages/tables/jquery-datatable.js') }}"></script>
<script src="{{ asset('/').('public/admin/js/pages/ui/modals.js') }}"></script>
<script src="{{ asset('/').('public/admin/plugins/bootstrap-select/js/bootstrap-select.js') }}"></script>
<script src="{{ asset('/').('public/admin/plugins/momentjs/moment.js') }}"></script>
<script src="{{ asset('/').('public/admin/plugins/bootstrap-material-datetimepicker/js/bootstrap-material-datetimepicker.js') }}"></script>
<script src="{{ asset('/').('public/admin/plugins/sweetalert/sweetalert.min.js') }}"></script>
<script>
 $(function () {
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