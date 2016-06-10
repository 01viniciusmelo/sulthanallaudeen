@extends('layout.admin')
@section('content')

        <div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">Logs</h1>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
            <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            Sysaxiom User Logs
                        </div>
                        <!-- /.panel-heading -->
                        <div class="panel-body">
                            <div class="dataTable_wrapper">
                                <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                                    <thead>
                                        <tr>
                                            <th>Id</th>
											<th>Ip</th>
											<th>Platform - OS</th>
											<th>Browser</th>
											<th>Version</th>
											<th>Time</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                    @foreach($userLog as $Log)
                                        <tr class="odd gradeX">
                                            <td>{{ $Log-> id}}</td>
											<td>{{ $Log-> ip}}</td>
											<td>{{ $Log-> platform}}</td>
											<td>{{ $Log-> browser}}</td>
											<td>{{ $Log-> version}}</td>
											<td>{{ $Log-> created_at}}</td>
                                        </tr>
                                    @endforeach
                                    </tbody>
                                </table>
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
    
@stop