<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8" />
		<title>PSI-BES</title>
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta content="width=device-width, initial-scale=1" name="viewport" />
		<meta content="" name="description" />
		<meta content="" name="utsavkoju" />

		{!! HTML::style('css/bootstrap.min.css') !!}
		{!! HTML::style('css/bootstrap-theme.min.css') !!}
		{!! HTML::style('css/skins/_all-skins.min.css') !!}
		{!! HTML::style('css/font-awesome.min.css') !!}
		{!! HTML::style('https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css') !!}
		{!! HTML::style('css/AdminLTE.min.css') !!}
    {!! HTML::style('packages/uploadify/uploadify.css') !!}

		{!! HTML::script('https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js') !!}
		{!! HTML::script('js/bootstrap.min.js') !!}
		{!! HTML::script('js/app.min.js') !!}
    {!! HTML::script('packages/uploadify/jquery.uploadify-3.1.js') !!}

	<!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

	</head>
  <body class="skin-blue sidebar-mini">
    <div class="wrapper">

      <header class="main-header">
    <!-- Logo -->
    <a href="home.php" class="logo">
      <!-- mini logo for sidebar mini 50x50 pixels -->
      <span class="logo-mini"><b>O</b><small>365</small></span>
      <!-- logo for regular state and mobile devices -->
      <span class="logo-lg"><b>Outlook</b> Email-Sender</span>
    </a>
    <!-- Header Navbar: style can be found in header.less -->
    <nav class="navbar navbar-static-top">
      <!-- Sidebar toggle button-->
      <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </a>

      <div class="navbar-custom-menu">
        <ul class="nav navbar-nav">
          <!-- Tasks: style can be found in dropdown.less -->
          <!-- User Account: style can be found in dropdown.less -->
          <li class="dropdown user user-menu">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
              <img src="img/avatar2.png" class="user-image" alt="User Image">
              <span class="hidden-xs"><?php echo $user['user_name'];?></span>
            </a>
            <ul class="dropdown-menu">
              <!-- User image -->
              <li class="user-header">
                <img src="img/avatar2.png" class="img-circle" alt="User Image">

                <p>
                  <small><?php echo $user['user_email'];?></small>
                </p>
              </li>
              <!-- Menu Footer-->
              <li class="user-footer">
                <div class="pull-left">
                  <a href="#" class="btn btn-default btn-flat">Profile</a>
                </div>
                <div class="pull-right">
                  <a href="#" class="btn btn-default btn-flat">Sign out</a>
                </div>
              </li>
            </ul>
          </li>

        </ul>
      </div>
    </nav>
  </header>
  </div>
  @include('_includes.navigation')
  @yield('main');
  <footer class="main-footer" style="position:absolute; left:0; bottom:0;height:50px;width:100%;">
    <div class="pull-right hidden-xs">
      <b>Version</b> 1.0
    </div>
    <strong>Copyright © <?php date('Y');?> <a href="http://psi.org.np">PSI Nepal</a>.</strong> All rights
    reserved.
  </footer>
  </body>
  </html>