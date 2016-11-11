<!DOCTYPE html>
<html lang="">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>Send Email With Sweet Alert</title>

		<!-- Bootstrap CSS -->
		<link href="//netdna.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css" rel="stylesheet">
		<!-- Sweet Alert CSS -->
		<link rel="stylesheet" type="text/css" href="public/sweetalert.css">

		<!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
		<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
		<!--[if lt IE 9]>
			<script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
			<script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
		<![endif]-->
	</head>
	<body>
		<div class="container">
			<div class="row">
				<div class="col-md-6 col-md-offset-3">
					<div class="panel panel-success">
						<div class="panel-heading">
							<h4>Send Email</h4>
						</div>
						<div class="panel-body">
							<form id="contact-form" role="form" method="post">
								<div class="form-group">
									<label for="name">Name</label>
  									<input type="text" class="form-control" placeholder="Full Name" name="name" required>
								</div>
								<div class="form-group">
									<label for="email">Email</label>
  									<input type="email" class="form-control" placeholder="Your Email" name="email" required>
								</div>
								<div class="form-group">
									<label>Message</label>
  									<textarea name="message" class="form-control" placeholder="Your Message" rows="9"></textarea>
								</div>
								<button type="submit" class="btn btn-primary">Send</button>
							</form>
						</div>
					</div>
				</div>
			</div>
		</div>

		<!-- jQuery -->
		<script src="//code.jquery.com/jquery.js"></script>
		<!-- Bootstrap JavaScript -->
		<script src="//netdna.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
		<!-- Sweet Alert Js -->
		<script src="public/sweetalert.min.js"></script>
		<!-- My js  -->
		<script src="public/app.js"></script>
	</body>
</html>