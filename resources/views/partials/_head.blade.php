<!DOCTYPE html>
<html lang="en">
	<head>
	  <title>Blog | @yield('title')</title>
	  <meta charset="utf-8">
	  <meta name="viewport" content="width=device-width, initial-scale=1">
	  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	  <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet">
	  <link href="https://fonts.googleapis.com/css?family=Raleway:100,300,400,600,700" rel="stylesheet" type="text/css">
	  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
	  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
	  <script>
        window.Laravel = {!! json_encode([
            'csrfToken' => csrf_token(),
        ]) !!};
      </script>
	  <style>
		  html,body{
		      font: 20px Montserrat, sans-serif;
		      line-height: 1.8;
		      color: #f5f6f7;
		      font-family: 'Raleway', sans-serif;
		      color: #333;
		  }
		  p {font-size: 16px;font-weight: 400;}
		  .margin {margin-bottom: 45px;}
		  nav a{font-weight: 600;}
		  .bg-1 { 
		      background-color: #1abc9c; /* Green */
		      color: #ffffff;
		  }
		  .awesome-feeling { 
		      background-color: #474e5d; /* Dark Blue */
		      color: #ffffff;
		  }
		  .bg-3 { 
		      background-color: #ffffff; /* White */
		      color: #555555;
		  }
		  .bg-4 { 
		      background-color: #2f2f2f; /* Black Gray */
		      color: #fff;
		  }
		  .container.home-pages{
		      padding-top: 70px;
		      padding-bottom: 70px;
		  }.home-pages{
		      padding-top: 70px;
		      padding-bottom: 70px;
		  }
		  .navbar {
		      padding-top: 15px;
		      padding-bottom: 15px;
		      border: 0;
		      border-radius: 0;
		      margin-bottom: 0;
		      font-size: 12px;
		      letter-spacing: 5px;
		      -webkit-box-shadow: 0px 2px 5px 0px rgba(0,0,0,0.75);
				-moz-box-shadow: 0px 2px 5px 0px rgba(0,0,0,0.75);
				box-shadow: 0px 2px 5px 0px rgba(0,0,0,0.75);
		  }
		  .navbar-nav  li a:hover {
		      color: #1abc9c !important;
		  }
		  .heading-style{
		  	text-transform: capitalize;
		  	
		  }
	  </style>
	</head>