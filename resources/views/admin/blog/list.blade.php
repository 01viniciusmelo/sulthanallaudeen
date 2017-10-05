@extends('admin.layout.index')
@section('content')
<link href="{{ asset('/').('public/admin/plugins/jquery-datatable/skin/bootstrap/css/dataTables.bootstrap.css') }}" rel="stylesheet">
<section class="content">
        <div class="container-fluid">
            <div class="block-header">
                <h2>
                <a type="button" class="btn btn-primary pull-right" href='{{ URL::to('admin/blog/create') }}'>Create Blog</a>
                    Blog
                    <small>Manage Blog List</small>
                </h2>
                @if(isset($success))
                <div class="alert alert-success">
                    <strong>Well done!</strong> You successfully read this important alert message.
                </div>
                @endif
            </div>
            <!-- Basic Examples -->
            <div class="row clearfix">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="card">
                        <div class="header">
                            <h2>
                                Blogs
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
                                <table class="table table-bordered table-striped table-hover js-basic-example dataTable">
                                    <thead>
                                        <tr>
                                            <th>S.No</th>
                                            <th>Title</th>
                                            <th>Date</th>
                                            <th>Status</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                    @foreach($blogs as $blog)
                                        <tr>
                                            <td>{{$blog->id}}</td>
                                            <td>{{$blog->title}}</td>
                                            <td>{{$blog->date}}</td>
                                            <?php
                                            if($blog->status==1){
                                                $status = 'Active';
                                            }else{
                                                $status = 'InActive';
                                            }
                                            ?>
                                            <td>{{$status}}</td>
                                            <td>
                                            <button class="btn btn-warning waves-effect">Edit</button>
                                            <button class="btn btn-danger waves-effect js-sweetalert" data-type="confirm">Delete</button>
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
@stop