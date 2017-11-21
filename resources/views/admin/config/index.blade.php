@extends('admin.layout.index')
@section('content')
<link href="{{ asset('/').('public/admin/plugins/jquery-datatable/skin/bootstrap/css/dataTables.bootstrap.css') }}" rel="stylesheet">
<link href="{{ asset('/').('public/admin/plugins/sweetalert/sweetalert.css') }}" rel="stylesheet">

<section class="content">
        <div class="container-fluid">
            <div class="block-header">
                <h2>
                <a type="button" class="btn btn-primary pull-right create-data" id='config' data-toggle="modal" data-target="#largeModal">Create Config</a>
                    Config
                    <small>Manage Config List</small>
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
                                Config
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
                                            <th>Name</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                    @foreach($configs as $config)
                                        <tr>
                                            <td>{{$config->id}}</td>
                                            <td>{{$config->name}}</td>
                                            <td>
                                            <button class="btn btn-danger waves-effect show-form" id='{{$config->id}}' data-toggle="modal" data-target="#largeModal">Read</button>
                                            <button class="btn btn-danger waves-effect delete-form pull-right" id='{{$config->id}}' page-name="config">X</button>
                                            <input type='hidden' class='id_{{$config->id}}' value='{{$config->id}}'>
                                            <input type='hidden' class='key_{{$config->id}}' value='{{$config->name}}'>
                                            <input type='hidden' class='value_{{$config->id}}' value='{{$config->desc}}'>
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
                <h4 class="modal-title" id="largeModalLabel">Create Config</h4>
            </div>
            <div class="modal-body">
                <div class="row clearfix">
                    <div class="col-sm-12">
                        <div class="form-group">
                            <div class="form-line">
                                <input type="text" class="form-control" placeholder="Key" id='key'>
                                <input type="hidden" class="form-control" placeholder="Key" id='id'>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="form-line">
                                <input type="text" class="form-control" placeholder="Value" id='value'>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-link waves-effect save-form" id='config'>SAVE CHANGES</button>
                <button type="button" class="btn btn-link waves-effect edit-form" id='config'>UPDATE CHANGES</button>
                <button type="button" class="btn btn-link waves-effect close-form" data-dismiss="modal">CLOSE</button>
            </div>
        </div>
    </div>
</div>
<!-- End of Modal -->
<script src="{{ asset('/').('public/admin/plugins/jquery-datatable/jquery.dataTables.js') }}"></script>
<script src="{{ asset('/').('public/admin/js/pages/tables/jquery-datatable.js') }}"></script>
<script src="{{ asset('/').('public/admin/js/pages/ui/modals.js') }}"></script>
<script src="{{ asset('/').('public/admin/plugins/sweetalert/sweetalert.min.js') }}"></script>
@stop