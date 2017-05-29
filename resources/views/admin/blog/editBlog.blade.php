@extends('layout.admin')
@section('content')
<script src="{{ asset('/').('public/lib/ckeditor/ckeditor.js') }}"></script>  
        <div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">Blog</h1>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
            <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            Edit Blog
                        </div>
                        <div class="panel-body">
                            <div class="row">
                                <div class="col-lg-12">
                                    {!! Form::open(array('url' => 'blogPost', 'name' => 'blogPost', 'id' => 'blogPost','class' => 'form-horizontal'))!!}
                                    <input type="hidden" name="blogId" value="{{ $blogData->id }}" id="blogId">
                                        <div class="form-group">
                                            <label>Blog Title</label>
                                            <input class="form-control" placeholder='Blog Title Here' id="blog_title" value="{{ $blogData->blog_title }}">
                                        </div>
                                        <div class="form-group">
                                            <label>Blog Url</label>
                                            <input class="form-control" placeholder="Never Mind, We'l Generate"  id="blog_url" value="{{ $blogData->blog_url }}">
                                            <p class="help-block">Blog Url will be auto-generated</p>
                                        </div>
                                        <div class="form-group">
                                            <label>Blog Content</label>
                                            <textarea class="ckeditor" name="blogpost">{{ $blogData->blog_content }}</textarea>
                                        </div>
                                        <div class="form-group">
                                            <label>Blog Tags </label><br>
                                            @foreach($allTags as $tag)
                                    <label class="checkbox-inline">
                                      <input type="checkbox" name="blogTags" value="{{ $tag->id}}" 

                                      <?php 
                                      foreach ($blogTag as $key) 
                                      {
                                      if($tag->id==$key['tag_id'])
                                      {
                                        echo 'checked';
                                      }  
                                      }
                                      ?>
                                      >
                                       {{ $tag->tag_title}}
                                    </label>
                                    @endforeach
                                        </div>
                                        <div class="form-group">
                                  <label class="col-lg-4 control-label">Blog Status</label>
                                  <div class="col-lg-8">
                                    <div class="radio">
                                      <label>
                                        <input type="radio" name="blog_status" id="optionsRadios1" value="1" <?php if($blogData->blog_status==1) { echo 'checked'; }  ?>>
                                        Publish
                                      </label>
                                    </div>
                                    <div class="radio">
                                      <label>
                                        <input type="radio" name="blog_status" id="optionsRadios2" value="0" <?php if($blogData->blog_status==0) { echo 'checked'; }  ?>>
                                        Draft
                                      </label>
                                    </div>
                                  </div>
                                </div>
                                <span style='align:left'><b>Blog Date : </b></span><input type="text" class="default_datetimepicker" id='blog_date' value="{{ $blogData->blog_date }}" />
                                        <p align="center">
                                        <button type="button" class="btn btn-default" id="postBlog">Update Blog</button>
                                        <button type="reset" class="btn btn-default">Reset</button>
                                        </p>
                                        {!! Form::close() !!}
                                        <div class="alert alert-success" id="blogPostSuccess" style="display:none"></div>
                                        <div class="alert alert-warning" id="blogPostFailure" style="display:none"></div>
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

  

$( "#blog_title" ).keypress(function() {
  var blog_title =  $("#blog_title").val();
  var blog_url = blog_title.replace(/\s+/g, "-");
  $("#blog_url").val(blog_url);
});
  $( "#postBlog" ).click(function() {
  var _token = $("input[name=_token]").val();
  var blogId =  $("#blogId").val();
  var blog_title =  $("#blog_title").val();
  var blog_url =  $("#blog_url").val();
  var blog_content = CKEDITOR.instances['blogpost'].getData();
  var blog_date =  $("#blog_date").val();
  var blog_status =   $('input:radio[name=blog_status]:checked').val();
  var blogTags = [];
  $('input[name=blogTags]:checked').map(function() {
              blogTags.push($(this).val());
  });


  $.post( "../updateBlog", { _token : _token, id: blogId, blog_title: blog_title, blog_url: blog_url, blog_content:blog_content, blog_date : blog_date, blogTags:blogTags, blog_status:blog_status })
  .done(function( data ) {
    var result = jQuery.parseJSON(JSON.stringify(data));

    if (result.success==1)
    {
  
      $("#blogPostFailure").hide();
      $("#blogPostSuccess").html("Blog Updated successfully.. Blog Id is "+result.blogId+" !");
      $("#blogPostSuccess").show(1000);
      $("#blogPostSuccess").hide(2000);
  
    }
    else
    {
    $("#blogPostFailure").html(" ");  
    $("#blogPostSuccess").hide();
    $("#blogPostFailure").html(result.err.blog_title);
    $("#blogPostFailure").append(result.err.blog_url);
    $("#blogPostFailure").append(result.err.blog_content);
    $("#blogPostFailure").show(1000);
      

      


    }

  });
});


} );

</script>
<!--Date-->
<link href="{{ asset('/').('public/lib/date/date.css') }}" type="text/css" rel="stylesheet"/>
<script src="{{ asset('/').('public/lib/date/date.js') }}"></script>  
<script>
$(document).ready(function() {
$.datetimepicker.setLocale('en');
$('.default_datetimepicker').datetimepicker({
  formatTime:'H:i',
  formatDate:'d.m.Y',
  //defaultDate:'8.12.1986', // it's my birthday
  defaultDate:'+03.01.1970', // it's my birthday
  defaultTime:'10:00',
  timepickerScrollbar:false
});
});
</script>
<!--End of Date PIcker-->

@stop