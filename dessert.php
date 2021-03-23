<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title>Resep masakan - AzharHana</title>
		<!-- Description, Keywords and Author -->
		<meta name="description" content="Your description">
		<meta name="keywords" content="Your,Keywords">
		<meta name="author" content="ResponsiveWebInc">
		
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		
		<!-- Styles -->
		<!-- Bootstrap CSS -->
		<link href="css/bootstrap.min.css" rel="stylesheet">
		<!-- Font awesome CSS -->
		<link href="css/font-awesome.min.css" rel="stylesheet">		
		<!-- Custom CSS -->
		<link href="css/style.css" rel="stylesheet">
		
		<!-- Favicon -->
		<link rel="shortcut icon" href="#">
	</head>
	<body>
		<div class="wrapper">
		
			<!-- header -->
			<header>
				<!-- navigation -->
				<nav class="navbar navbar-default" role="navigation">
					<div class="container">
						<!-- Brand and toggle get grouped for better mobile display -->
						<div class="navbar-header">
							<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
								<span class="sr-only">Toggle navigation</span>
								<span class="icon-bar"></span>
								<span class="icon-bar"></span>
								<span class="icon-bar"></span>
							</button>
							<a class="navbar-brand" href="#"><img class="img-responsive" src="img/logo.png" alt="Logo" /></a>
						</div>

						<!-- Collect the nav links, forms, and other content for toggling -->
						<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
							<ul class="nav navbar-nav navbar-right">
								<li><a href="registration.php">Signup</a></li>
								<li><a href="login.php">Login</a></li>
								<li><a href="logout.php">Logout</a></li>
								<li class="dropdown">
									<a href="#" class="dropdown-toggle" data-toggle="dropdown">Menu <span class="caret"></span></a>
									<ul class="dropdown-menu" role="menu">
										<li><a href="dessert.php">Dessert</a></li>
										<li><a href="#Makanan">Makanan</a></li>
										<li><a href="#Minuman">Minuman</a></li>
										<li><a href="#Cake">Cake</a></li>
									</ul>
								</li>
							</ul>
						</div><!-- /.navbar-collapse -->
					</div><!-- /.container-fluid -->
				</nav>
			</header>
			
			<div class="after-banner">
				<div class="container">
					<div class="row">
						<div class="col-md-12 col-sm-12">
							<!-- after banner item -->
							<table class="table">
								<tr>
									<th width="30%">Nama masakan</th>
									<th width="30%">Deskripsi</th>
									<th width="30%">Gambar</th>
								</tr>
								<tr>
									<td>Pai</td>
									<td>
										<a class="btn btn-primary" href="bahan.php" role="button">Bahan</a>
										<a class="btn btn-primary" href="caramasak.php" role="button">Cara Masak</a>
									</td>
									<td><img class="img-responsive" src="img/image/ayam bakar.jpg" width="50%" /></td>
								</tr>
							</table>
						</div>
					</div>
				</div>
			</div>
			
		</div>
	</body>
	
	<!-- Javascript files -->
	<!-- jQuery -->
	<script src="js/jquery.js"></script>
	<!-- Bootstrap JS -->
	<script src="js/bootstrap.min.js"></script>
	<!-- Respond JS for IE8 -->
	<script src="js/respond.min.js"></script>
	<!-- HTML5 Support for IE -->
	<script src="js/html5shiv.js"></script>
	<!-- Custom JS -->
	<script src="js/custom.js"></script>
	</body>
</html>
	