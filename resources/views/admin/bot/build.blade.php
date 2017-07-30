@extends('layout.admin')
@section('content')

        <div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">Bot Basics</h1>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
            <div class="row">
                <div class="col-lg-12">
                  <div class="panel panel-default">
                      <div class="panel-heading">
                          Basic Bot Details
                      </div>
                      <div class="panel-body">
                      <form role="form">
                          <div class="row">
                              <div class="col-lg-6">
                                      <div class="form-group">
                                          <label>Bot Name</label>
                                          <input class="form-control" value="botData['name']>
                                      </div>
                              </div>
                              <!-- /.col-lg-6 (nested) -->
                              <div class="col-lg-6">
                                  <form role="form">
                                    <form role="form">
                                        <div class="form-group">
                                            <label>Bot Description</label>
                                            <textarea class="form-control">botData['description']</textarea>
                                        </div>
                              </div>
                              <!-- /.col-lg-6 (nested) -->
                                <center>
                                <button type="submit" class="btn btn-primary">Primary</button>
                                </center>
                          </div>
                          <!-- /.row (nested) -->
                          </form>
                      </div>
                      <!-- /.panel-body -->
                  </div>
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
<script>
$(document).ready(function() {
$('.tags').tagsInput();
});
</script>
<!--End of Date PIcker-->


 <script type="text/javascript" src="public/lib/tags/jquery.tagsinput.js"></script>
 <link rel="stylesheet" type="text/css" href="public/lib/tags/jquery.tagsinput.css" />


@stop
