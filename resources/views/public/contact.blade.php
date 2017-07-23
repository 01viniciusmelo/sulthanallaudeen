<?php namespace App; use App\Blog; use URL; use Form;?>
@extends('layout.public')
@section('content')
<div class="container">
<div class="row">
    <div class="col-md-8">
        <div class="well">
            <p class="text-center">     
            I can be reached via email at <br><b>sa (SHIFT+2) sulthanallaudeen (period) com  </b>*
            </p>
        </div>
    <div class="alert alert-success" id="mailSentSucess" style="display:none"><span id="mailResultSuccess"</span></div>
      <div class="alert alert-danger" id="mailSentFailure" style="display:none"><span id="mailResultFailure"</span></div>
    {!! Form::open(array('class' => 'form-horizontal' )) !!}
    <input type="hidden", "_token"  name="_token" value="{{ csrf_token()}}" >
    <input type="text" id="userEmail" class="form-control" placeholder="Email address">
    <textarea class="form-control" id="userMessage" rows="3" placeholder="Message"></textarea>
    <center>
    <button class="btn btn-primary" type="submit" id="sendMail">Send</button>
    </center>
    {!! Form::close() !!}
    <p>* If you are a human, you should be able to decipher the email address.</p>
    </div>
    <div class="col-md-4">
    </div>
</div>
</div>
@stop