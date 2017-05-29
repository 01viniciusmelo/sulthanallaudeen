@extends('layout.admin')
@section('content')
<script src="{{ asset('/').('public/lib/ckeditor/ckeditor.js') }}"></script>  
        <div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">Tag</h1>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
            <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            Edit Tag
                        </div>
                        <div class="panel-body">
                            <div class="row">
                                <div class="col-lg-12">
                                    {!! Form::open(array('url' => 'blogPost', 'name' => 'blogPost', 'id' => 'blogPost','class' => 'form-horizontal'))!!}
                                    <input type="hidden" name="tagId" value="{{ $tagData->id }}" id="tagId">
                                        <div class="form-group">
                                            <label>Tag Title</label>
                                            <input class="form-control" placeholder='Blog Title Here' id="tag_title" value="{{ $tagData->tag_title }}">
                                        </div>
                                        <div class="form-group">
                                            <label>Tag Content</label>
                                            <textarea class="ckeditor" name="tag_title" >{{ $tagData->tag_title }}</textarea>
                                        </div>
                                        <div class="form-group">
                                  <label class="col-lg-4 control-label">Tag Status</label>
                                  <div class="col-lg-8">
                                    <div class="radio">
                                      <label>
                                        <input type="radio" name="tag_status" id="optionsRadios1" value="1" <?php if($tagData->tag_status==1) { echo 'checked'; }  ?>>
                                        Publish
                                      </label>
                                    </div>
                                    <div class="radio">
                                      <label>
                                      <input type="radio" name="tag_status" id="optionsRadios1" value="0" <?php if($tagData->tag_status==0) { echo 'checked'; }  ?>>
                                        Draft
                                      </label>
                                    </div>
                                  </div>
                                </div>

                                        <p align="center">
                                        <button type="button" class="btn btn-default" id="editTag">Update Tag</button>
                                        <button type="reset" class="btn btn-default">Reset</button>
                                        </p>
                                        {!! Form::close() !!}
                                        <div class="alert alert-success" id="tagPostSuccess" style="display:none"></div>
                                        <div class="alert alert-warning" id="tagPostFailure" style="display:none"></div>
                                </div>
                                <!-- /.col-lg-6 (nested) -->
                                
                                <!-- /.col-lg-6 (nested) -->
                            </div>
                            <!-- /.row (nested) -->
                        </div>
                        <!-- /.panel-body -->
                    </div>
                    <!-- /.panel -->
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
        </div>
        <!-- /#page-wrapper -->

    </div>
    <!-- /#wrapper -->

<script>
$(document).ready(function() {

  

  $( "#editTag" ).click(function() {


  var _token = $("input[name=_token]").val();
  
  var id =  $("#tagId").val();
  var tag_title =  $("#tag_title").val();
  var tag_content = CKEDITOR.instances['tag_title'].getData();
  var tag_status =   $('input:radio[name=tag_status]:checked').val();
  

  $.post( "../updateTag", { _token : _token, id: id, tag_title, tag_title: tag_title, tag_status: tag_status, tag_content : tag_content })
  .done(function( data ) {
    var result = jQuery.parseJSON(JSON.stringify(data));
    
    if (result.success==1)
    {
  
      $("#tagPostFailure").hide();
      $("#tagPostSuccess").html("Tag Edited successfully.. Tag Id is "+result.tagId+" !");
      $("#tagPostSuccess").show(1000);
      $("#tagPostSuccess").hide(2000);
  
    }
    else
    {
    var _token = $("input[name=_token]").val();
    $("#tagPostFailure").html(" ");  
    $("#tagPostSuccess").hide();
    $("#tagPostFailure").html(result.err.tag_title);
    $("#tagPostFailure").append(result.err.tag_title);
    $("#tagPostFailure").show(1000);
      

      


    }

  });
});


} );

</script>

@stop