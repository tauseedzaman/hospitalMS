@extends('layouts.app')

@section('content')
<br><br><br><br>
<div id="getintouch" class="section wb wow fadeIn" style="padding-bottom:0;">
    <div class="container">
       <div class="heading">
          <span class="icon-logo"><img src="images/icon-logo.png" alt="#"></span>
          <h2>Get in Touch</h2>
       </div>
    </div>
    <div class="contact-section">
       <div class="form-contant">
          <form id="ajax-contact" action="assets/mailer.php" method="post">
             <div class="row">
                <div class="col-md-6">
                   <div class="form-group in_name">
                      <input type="text" class="form-control" placeholder="Name" required="required">
                   </div>
                </div>
                <div class="col-md-6">
                   <div class="form-group in_email">
                      <input type="email" class="form-control" placeholder="E-mail" required="required">
                   </div>
                </div>
                <div class="col-md-6">
                   <div class="form-group in_email">
                      <input type="tel" class="form-control" id="phone" placeholder="Phone" required="required">
                   </div>
                </div>
                <div class="col-md-6">
                   <div class="form-group in_email">
                      <input type="text" class="form-control" id="subject" placeholder="Subject" required="required">
                   </div>
                </div>
                <div class="col-md-12">
                   <div class="form-group in_message"> 
                      <textarea class="form-control" id="message" rows="5" placeholder="Message" required="required"></textarea>
                   </div>
                   <div class="actions">
                      <input type="submit" value="Send Message" name="submit" id="submitButton" class="btn small" title="Submit Your Message!">
                   </div>
                </div>
             </div>
          </form>
       </div>
       <div id="googleMap" style="width:100%;height:450px;"></div>
    </div>
 </div>
@endsection