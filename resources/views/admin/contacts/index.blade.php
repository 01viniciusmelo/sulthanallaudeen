@extends('admin.layout.index')
@section('content')
<link href="{{ asset('/').('public/admin/plugins/jquery-datatable/skin/bootstrap/css/dataTables.bootstrap.css') }}" rel="stylesheet">
<section class="content">
        <div class="container-fluid">
            <div class="block-header">
                <h2>
                <a type="button" class="btn btn-primary pull-right" href='{{ URL::to('admin/tag/create') }}'>Create Tag</a>
                    Contacts
                    <small>Manage Contacts List</small>
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
                                Contacts
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
                                            <th>Email</th>
                                            <th>Status</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                    @foreach($mails as $mail)
                                        <tr>
                                            <td>{{$mail->id}}</td>
                                            <td>{{$mail->email}}</td>
                                            <?php
                                                if($mail->read==0){
                                                    $status = 'Received just now';
                                                }else if ($mail->read==1){
                                                    $status = 'Email sent to Inbox';
                                                }else{
                                                    $status = 'Status Unknown';
                                                }
                                            ?>
                                            <td>{{$status}}</td></td>
                                            <td>
                                            <button class="btn btn-danger waves-effect readContact" id='{{$mail->id}}' data-toggle="modal" data-target="#largeModal">Read</button>
                                            <input type='hidden' class='email_{{$mail->id}}' value='{{$mail->email}}'>
                                            <input type='hidden' class='message_{{$mail->id}}' value='{{$mail->message}}'>
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
                <h4 class="modal-title" id="largeModalLabel"></h4>
            </div>
            <div class="modal-body">
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-link waves-effect hide">SAVE CHANGES</button>
                <button type="button" class="btn btn-link waves-effect" data-dismiss="modal">CLOSE</button>
            </div>
        </div>
    </div>
</div>
<!-- End of Modal -->
<script src="{{ asset('/').('public/admin/plugins/jquery-datatable/jquery.dataTables.js') }}"></script>
<script src="{{ asset('/').('public/admin/js/pages/tables/jquery-datatable.js') }}"></script>
<script src="{{ asset('/').('public/admin/js/pages/ui/modals.js') }}"></script>
@stop