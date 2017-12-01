@extends('admin.layout.index')
@section('content')
<link href="{{ asset('/').('public/admin/plugins/jquery-datatable/skin/bootstrap/css/dataTables.bootstrap.css') }}" rel="stylesheet">
<link href="{{ asset('/').('public/admin/plugins/sweetalert/sweetalert.css') }}" rel="stylesheet">
<section class="content">
        <div class="container-fluid">
            <div class="block-header">
                <h2>
                <a type="button" class="btn btn-primary pull-right" href='{{ URL::to('admin/reminder/create') }}'>Create Reminder</a>
                    Reminder
                    <small>Manage Reminder List</small>
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
                                Reminders
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
                                            <th>Title</th>
                                            <th>Type</th>
                                            <th>Date Time</th>
                                            <th>Status</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                    @foreach($reminders as $reminder)
                                        <tr>
                                            <td>{{$reminder->id}}</td>
                                            <td>{{$reminder->title}}</td>
                                            <?php
                                            if($reminder->status==1){
                                                $status = 'Active';
                                                $url = 'InActive';
                                                
                                            } else if ($reminder->status==2){
                                                $status = 'Active';
                                                $url = 'InActive';
                                            }else{
                                                $status = 'Finished';
                                                $url = 'Renew';
                                            }
                                            ?>
                                            <td><?php
                                                if($reminder->type=='1'){
                                                    echo 'Once';
                                                    $date = $reminder->date;
                                                }else if($reminder->type=='2')
                                                {
                                                    echo 'Daily';
                                                    $date = date("H:i", strtotime($reminder->date));
                                                }
                                                {
                                                    $date = $reminder->date;
                                                    echo 'Call';
                                                }
                                            ?></td>
                                            <td>{{$date}}</td>
                                            <td>{{$status}}</td>
                                            <td>
                                            <a class="btn btn-warning waves-effect" href='reminder/status/{{$reminder->id}}/{{$url}}'>{{$url}}</a>
                                            <a class="btn btn-warning waves-effect" href='reminder/edit/{{$reminder->id}}'>Edit</a>
                                            <button class="btn btn-danger waves-effect js-sweetalert delete" data-type="confirm" id='{{$reminder->id}}'>Delete</button>
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
<script src="{{ asset('/').('public/admin/plugins/jquery-datatable/jquery.dataTables.js') }}"></script>
<script src="{{ asset('/').('public/admin/js/pages/tables/jquery-datatable.js') }}"></script>
<script src="{{ asset('/').('public/admin/plugins/sweetalert/sweetalert.min.js') }}"></script>
@stop