@extends('_templates/login')
@section('login')
<?php 
	$redirectUri = 'http://localhost/outlook/public/authorize';
?>
<div class="login-box">
  <div class="login-logo">
    <b>Outlook</b> Email Sender
  </div>
  <!-- /.login-logo -->
  <div class="login-box-body">
    <p class="login-box-msg">Sign in with your Office 365 Account</p>


    <div class="social-auth-links text-center">
    	<a href="<?php echo $controller->getLoginUrl($redirectUri);?>" class="btn btn-block btn-social btn-facebook btn-flat"><i class="fa fa-windows"></i> Signin using Office 365</a>
    </div>
  </div>
  <!-- /.login-box-body -->
</div>
<!-- /.login-box -->

@stop