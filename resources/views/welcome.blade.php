<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		 <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->

    <title>{{config('app.name','EARS')}}</title>

		<!-- Google font -->
		<link href="https://fonts.googleapis.com/css?family=Lato:700%7CMontserrat:400,600" rel="stylesheet">

		<!-- Custom stlylesheet -->
        <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
        <link type="text/css" rel="stylesheet" href="{{asset('css/app.css')}}"/>
        <link type="text/css" rel="stylesheet" href="{{asset('css/customcss/landing.css')}}"/>

    </head>
	<body>
		<!-- Header -->
		<div id="home" class="hero-area">
        <div class="bg-image bg-parallax overlay" style="background-image:url('{{asset('images/landing1.jpg')}}')"></div>
			<!-- /Backgound Image -->
			<div class="home-wrapper">
				<div class="container">
					<div class="row">
						<div class="col-md-12">
							<h1 class="white-text">Garbage Monitoring and Assessment System</h1>
							<p class="lead white-text">G.M.A.S. is a website to monitor garbage in a locality.</p>
							<a class="main-button icon-button" href="/login">Monitor</a>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- /Home -->
		<!-- About -->
		<div id="about" class="section">
			<!-- container -->
			<div class="container">
				<!-- row -->
				<div class="row">
					<div class="col-md-6">
						<div class="section-header">
							<h2>Welcome to G.M.A.S</h2>
							<p class="lead">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Delectus aliquam porro ipsum doloribus voluptatum laudantium molestiae ex suscipit, praesentium minus modi necessitatibus vero unde optio a quod ut excepturi numquam?</p>
						</div>
						<!-- feature -->
						<div class="feature">
							<i class="feature-icon fa fa-desktop"></i>
							<div class="feature-content">
								<h4>Smart Monitoring</h4>
								<p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Labore iste assumenda molestias aut provident, sequi explicabo officia maiores repudiandae quod error? Cum nihil minima expedita dolorum, atque nulla eaque debitis!</p>
							</div>
						</div>
						<!-- /feature -->
					</div>
					<div class="col-md-6">
						<div class="about-img">
                            <img src="{{asset('images/landing2.jpg')}}" alt="">     
						</div>
                    </div>
                    

				</div>
				<!-- row -->

			</div>
			<!-- container -->
		</div>
		<!-- /About -->

			</div>
			<!-- /container -->

		<!-- preloader -->
		<div id='preloader'><div class='preloader'></div></div>
		<!-- /preloader -->


		<!-- jQuery Plugins -->
		<script type="text/javascript" src="{{asset('js/customjs/jquery.min.js')}}"></script>
		<script type="text/javascript" src="{{asset('js/customjs/bootstrap.min.js')}}"></script>
		<script type="text/javascript" src="{{asset('js/customjs/main.js')}}"></script>

	</body>
</html>