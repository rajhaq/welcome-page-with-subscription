<!DOCTYPE html>
<html lang="en">
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
		<title>Kushiara International Convention Hall | Sylhet</title>
		<meta name="description" content="'LUXURY' Kushiara International Convention Hall is the biggest and most luxury convention hall in Sylhet, it can serve more than 1800 people at a time, most common features are Helipad, Free WiFi Zone, Security, Trained Service Staff.
	The Owner of the Convention Hall is Humayun Ahmed & Sayem Ahmed.

	This places on Chondipul Point, South Surma, Sylhet.">
		<meta name="keywords" content="wedding, birthday, corporate, business, holud, walima, reciption, booking">
		<meta name="author" content="Kushiara, kushiara.ich@gmail.com">
		<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
		<meta http-equiv="X-UA-Compatible" content="ie=edge">
		<link href="./Coming Soon - Kushiara International Convention Hall" rel="stylesheet" type="text/css">
		<link rel="stylesheet" type="text/css" href="css/styles-light.css">
        <link href="https://fonts.googleapis.com/css?family=Playfair+Display|Playfair+Display+SC" rel="stylesheet">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
        <?php
            include_once 'dbConfig.php';
        ?>
	</head>
	<body class="coming-soon">
        <?php
            if(isset($_POST['save'])){
                $sql = "INSERT INTO users (email)
                VALUES ('".$_POST["email"]."')";
                $result = mysqli_query($mysqli,$sql);
            }
        
        ?>

		<div class="main-wrapper">
			<!-- Header Section -->
			<header id="main-header">
				<div class="inner-container container">
					<div class="l-sec col-md-4">
						<a href="#" id="t-logo">
							<span class="title"><img src="img/name.png" height="80"></span>
						</a>
					</div>
				</div>
			</header>
			<!-- End of Header Section -->

			<!--Coming Soon Section-->
			<section id="coming-soon">
				<div class="ravis-title">
					<div class="inner-box">
                        
						<div class="title">Coming Soon</div>
						<div class="sub-title">Website maintainance on process</div>
					</div>
				</div>
				<div class="content">
                    <div class="title">For booking dail +8801777827778</div>
                    <?php
                        if(isset($_POST['save'])){
                            $sql = "INSERT INTO users (email)
                            VALUES ('".$_POST["email"]."')";
                            $result = mysqli_query($mysqli,$sql);
                    ?>
                    <!-- alart -->
                    <div class="alert alert-success alert-dismissible">
                        <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                        <strong>Success!</strong> Thank you for Subscribing KICH.
                    </div>
                    <?php
                         }
                    ?>
					<div class="sub-title">Subscribe Here :</div>
					<!-- Search Box -->
					<div class="search-box">
						<form method="POST" class="search-form">
							<label>
								<input type="email" name="email" class="search-field" placeholder="Enter your email here" title="Subscribe">
							</label>
							<input type="submit" class="search-submit" name="save" value="Subscribe">
						</form>
					</div>
					<ul class="social-icons list-inline">
							<li><a href="https://www.facebook.com/kushiara.ich/"><i class="fa fa-facebook"></i></a></li>
							<li><a href="https://www.instagram.com/kushiara.ich/"><i class="fa fa-instagram"></i></a></li>
						</ul>
				</div>

			</section>
			<!--End of Coming Soon Section-->

		</div>
		

	</body>
</html>