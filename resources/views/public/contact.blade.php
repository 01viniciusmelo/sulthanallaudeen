@extends('public.layout.index')
@section('content')
    <div class="container">
      <div class="jumbotron">
        <form>
          <p class="text-center">
            I can be reached via email at <b>sa (SHIFT+2) sulthanallaudeen (period) com  </b>*
          </p>
          <span class="formMessage"></span>
          <div class="form-group">
            <label for="exampleInputEmail1">Email address</label>
            <input type="text" class="form-control" id="email" placeholder="Enter email">
            <span class="email error">
          </div>
          <div class="form-group">
            <label for="exampleInputPassword1">Message</label>
            <textarea  class="form-control" id="message" placeholder="Enter Message"></textarea>
            <span class="message error">
          </div>
          <button type="button" id="contactSA" class="btn btn-primary">Submit</button>
        </form>
      </div>
    </div>
@stop