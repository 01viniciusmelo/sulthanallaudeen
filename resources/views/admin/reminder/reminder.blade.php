@extends('layout.admin')
@section('content')

        <div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">Reminder</h1>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
            <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            Reminder Data
                        </div>
                        <!-- /.panel-heading -->
                        <div class="panel-body">
                            <div class="dataTable_wrapper">
                                <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                                    <thead>
                                        <tr>
                                            <th>Id</th>
                                            <th>Type</th>
                                            <th>Reminder</th>
                                            <th>Date / Time</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                    <?php $count = 0; ?>
                                    @foreach($reminderData as $data)
                                    <?php $count++;?>
                                        <tr class="odd gradeX">
                                            <td>{{ $count}}</td>
                                            <?php
                                            if($data->reminder_type==1)
                                            {
                                                $reminder = 'Daily';
                                            }
                                            elseif($data->reminder_type==2)
                                            {
                                                $reminder = 'Once';
                                            }
                                            elseif($data->reminder_type==3)
                                            {
                                                $reminder = 'Instant SMS';
                                            }
                                            else
                                            {
                                                $reminder = 'Undefined';
                                            }
                                            ?>
                                            <td>{{ $reminder}}</td>
                                            <td>{{ $data->reminder_name}} : {{ $data->reminder_note}}  {{$data->reminder_phone}}</td>
                                            <td>{{ $data->reminder_date}} {{ $data->reminder_time}}</td>
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