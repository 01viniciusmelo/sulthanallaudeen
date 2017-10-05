@extends('admin.layout.index')
@section('content')
<section class="content">
        <div class="container-fluid">
            <div class="block-header">
                <h2>
                    Create  Blog
                    <a type="button" class="btn btn-primary pull-right" href='{{ URL::to('admin/blog') }}'>Back to Blog</a>
                    <small>Manage Blog List</small>
                    @if ($errors->any())
                        <div class="alert alert-danger">
                            @foreach ($errors->all() as $error)
                            {{ $error }} <br>
                            @endforeach
                        </div>
                    @endif
                </h2>
            </div>
            <!-- Basic Validation -->
            <div class="row clearfix">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="card">
                        <div class="header">
                            <h2>Create Blog</h2>
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
                            <form id="form_validation" method="POST" action="write">
                                {{ csrf_field() }}
                                <div class="form-group form-float">
                                    <div class="form-line">
                                        <input type="text" class="form-control" name="title" id="title" required value="{{ old('title') }}">
                                        <label class="form-label">Blog Title</label>
                                    </div>
                                </div>
                                <div class="form-group form-float">
                                    <div class="form-line">
                                        <input type="text" class="form-control" readonly>
                                        <label class="form-label url">
                                        @if(old('url'))
                                        {{ old('url') }}
                                        @else
                                        Blog Url
                                        @endif
                                        </label>
                                        <input type="hidden" name="url" id="url" value="{{ old('url') }}">
                                    </div>
                                </div>
                                <div class="form-group">
                                    @foreach($tags as $tag)
                                    <input type="checkbox" id="{{$tag->title}}" name="tags[]" value="{{$tag->id}}"
                                    @if(old('tags'))
                                    <?php
                                        if (in_array($tag->id, old('tags'))) {
                                        echo "checked";
                                        }
                                    ?>
                                    @endif
                                    >
                                    <label for="{{$tag->title}}">{{$tag->title}}</label>
                                    @endforeach
                                </div>
                                <div class="form-group form-float">
                                    <div class="form-line">
                                        <textarea name="content" cols="30" rows="5" class="form-control no-resize ckeditor" required>{{ old('content') }}</textarea>
                                        <label class="form-label">Content</label>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="form-line">
                                        <input type="text" class="datepicker form-control" placeholder="Please choose a date..." name="date" vale="{{ old('date') }}">
                                    </div>
                                </div>
                                <div class="demo-radio-button">
                                <input name="status" type="radio" id="draft" class="radio-col-red" value="0" 
                                @if(old('status')==0)
                                checked
                                @endif
                                required
                                >
                                <label for="draft">Draft</label>
                                <input name="status" type="radio" id="publish" class="radio-col-pink" value="1" 
                                @if(old('status')==1)
                                checked
                                @endif
                                required
                                >
                                <label for="publish">Publish</label>
                                </div>
                                <button class="btn btn-primary waves-effect" type="submit">SUBMIT</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <!-- #END# Basic Validation -->
        </div>
    </section>

<!-- Jquery Validation Plugin Css -->
<script src="{{ asset('/').('public/admin/plugins/jquery-validation/jquery.validate.js') }}"></script>
<script src="{{ asset('/').('public/admin/js/pages/forms/form-validation.js') }}"></script>
<script src="{{ asset('/').('public/admin/lib/ckeditor/ckeditor.js') }}"></script>  

<link href="{{ asset('/').('public/admin/plugins/bootstrap-material-datetimepicker/css/bootstrap-material-datetimepicker.css') }}" rel="stylesheet" />

 <!-- Moment Plugin Js -->
 <script src="{{ asset('/').('public/admin/plugins/momentjs/moment.js') }}"></script>  
 <script src="{{ asset('/').('public/admin/plugins/bootstrap-material-datetimepicker/js/bootstrap-material-datetimepicker.js') }}"></script>  






<script>
$(document).ready(function() {
  console.log('page rendered');
$( "#title" ).keypress(function() {
  var title =  $("#title").val();
  var url = title.replace(/\s+/g, "-");
  $(".url").html(url);
  $("#url").val(url);
});

$('.datepicker').bootstrapMaterialDatePicker({
    format: 'YYYY-MM-DD',
    clearButton: true,
    weekStart: 1,
    time: false
});


});
</script>
@stop