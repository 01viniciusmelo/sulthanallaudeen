@extends('public.layout.index')
@section('content')
    <div class="container">
      <div class="jumbotron">
        <form>
          <p class="text-center">
            I can be reached via email at <b>sa (SHIFT+2) sulthanallaudeen (period) com  </b>*
          </p>
          <div class="form-group">
            <label for="exampleInputEmail1">Email address</label>
            <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
          </div>
          <div class="form-group">
            <label for="exampleInputPassword1">Message</label>
            <textarea  class="form-control" placeholder="Enter Message"></textarea>
          </div>
          <button type="submit" class="btn btn-primary">Submit</button>
        </form>
      </div>
    </div>
@stop