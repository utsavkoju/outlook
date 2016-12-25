<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8" />
	<title>PSI-BES</title>
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta content="width=device-width, initial-scale=1" name="viewport" />
	<meta content="" name="description" />
	<meta content="" name="utsavkoju" />

	<link rel="shortcut icon" href="{!! URL::to('images/favicon.ico')!!}" type="image/x-icon">

	<link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Roboto:400,100,300,500">
	{!! HTML::style('css/bootstrap.min.css') !!}
	{!! HTML::style('css/font-awesome.min.css') !!}
	{!! HTML::style('https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css') !!}
	{!! HTML::style('css/AdminLTE.min.css') !!}

	{!! HTML::script('https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js') !!}
	{!! HTML::script('js/bootstrap.min.js') !!}

	<!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>
<body class="hold-transition login-page">
	@yield('login')
</body>
</html>