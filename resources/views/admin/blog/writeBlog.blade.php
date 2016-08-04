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
                            Write Blog
                        </div>
                        <div class="panel-body">
                            <div class="row">
                                <div class="col-lg-12">
                                    {!! Form::open(array('url' => 'blogPost', 'name' => 'blogPost', 'id' => 'blogPost','class' => 'form-horizontal'))!!}
                                        <div class="form-group">
                                            <label>Blog Title</label>
                                            <input class="form-control" placeholder='Blog Title Here' id="blog_title">
                                        </div>
                                        <div class="form-group">
                                            <label>Blog Url</label>
                                            <input class="form-control" placeholder="Never Mind, We'l Generate"  id="blog_url">
                                            <p class="help-block">Blog Url will be auto-generated</p>
                                        </div>
                                        <div class="form-group">
                                            <label>Blog Content</label>
                                            <textarea class="ckeditor" rows="3" name="blogpost"></textarea>
                                        </div>
                                        <div class="form-group">
                                            <label>Blog Tags </label><br>
                                            @foreach($tags as $tag)
                                            <label class="checkbox-inline">
                                                <input type="checkbox" name="blogTags" value="{{ $tag->id}}">{{$tag->tag_title}}
                                            </label> 
                                            @endforeach
                                        </div>
                                        <div class="form-group">
                                  <label class="col-lg-4 control-label">Blog Status</label>
                                  <div class="col-lg-8">
                                    <div class="radio">
                                      <label>
                                        <input type="radio" name="blog_status" id="optionsRadios1" value="1" checked>
                                        Publish
                                      </label>
                                    </div>
                                    <div class="radio">
                                      <label>
                                        <input type="radio" name="blog_status" id="optionsRadios2" value="0">
                                        Draft
                                      </label>
                                    </div>
                                  </div>
                                </div>
                                <div class="form-group">
                                <span style='align:left'><b>Blog Date : </b></span><input type="text" class="default_datetimepicker" id='blog_date'/>
                                </div>
                                        <p align="center">
                                        <button type="button" class="btn btn-default" id="postBlog">Post Blog</button>
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
  console.log('page rendered');
$( "#blog_title" ).keypress(function() {
  console.log('test');
  var blog_title =  $("#blog_title").val();
  var blog_url = blog_title.replace(/\s+/g, "-");
  $("#blog_url").val(blog_url);
});
  $( "#postBlog" ).click(function() {
  var _token = $("input[name=_token]").val();
  var blog_title =  $("#blog_title").val();
  var blog_url =  $("#blog_url").val();
  var blog_date =  $("#blog_date").val();
  var blog_content = CKEDITOR.instances['blogpost'].getData();
  var blog_status =   $('input:radio[name=blog_status]:checked').val();
  var blogTags = [];
  $('input[name=blogTags]:checked').map(function() {
              blogTags.push($(this).val());
  });


  $.post( "postBlog", { _token : _token, blog_title: blog_title, blog_url: blog_url, blog_content:blog_content, blogTags:blogTags, blog_date : blog_date, blog_status:blog_status })
  .done(function( data ) {
    var result = jQuery.parseJSON(JSON.stringify(data));

    if (result.success==1)
    {
  
      $("#blogPostFailure").hide();
      $("#blogPostSuccess").html("Blog Posted successfully.. Blog Id is "+result.blogId+" !");
      $("#blogPostSuccess").show(1000);
      $("#blogPostSuccess").hide(2000);
      $('#blogPost').trigger("reset");
      for (instance in CKEDITOR.instances){
     CKEDITOR.instances[instance].setData(" ");
        }


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