<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "food court";
//create connection
$conn = mysqli_connect($servername,$username,$password,$dbname); 
 
function mysql_query_or_die($conn,$query) {
    $result = mysqli_query($conn,$query);
    if ($result){
		
        return $result;
	}
    else {
		
        $err = mysqli_error();
        die("<br>{$query}<br>*** {$err} ***<br>");
    }
}

?>






<!DOCTYPE html>


<head>
	<title>Food Bank Website Template | Home :: w3layouts</title>
	
	</script>
	<!-- //for-mobile-apps -->
	<link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
	<link href="css/font-awesome.css" rel="stylesheet" type="text/css" media="all" />
	
	<!--about-bottom -->
	<link href="//fonts.googleapis.com/css?family=Yesteryear" rel="stylesheet">
	<link href="//fonts.googleapis.com/css?family=Rancho" rel="stylesheet">
	<link href="//fonts.googleapis.com/css?family=PT+Sans:400,400i,700,700i" rel="stylesheet">
	<link href="css/style.css" rel="stylesheet" type="text/css" media="all" />
</head>

<body>
	<div class="agile-banner-main" id="home">
		<div class="banner-layer">
			<div class="header-main">
				<div class="container">
					<nav class="navbar navbar-default">
						<div class="navbar-header">
							

						</div>
						<!-- navbar-header -->
						
						
						<?php
					$query = "SELECT * FROM city"; 
					$result = mysql_query_or_die($conn,$query);
					?>
						
						
						
						
						
						
						<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
							<ul class="nav navbar-nav navbar-right">
								<li class="scroll hvr-underline-from-center">
									<a href="index.php">Home</a>
								</li>
								
								<?php
									while ($row = mysqli_fetch_assoc($result)) {
								?>
								<li>
									<a href="main_menu.php?id=<?php echo $row['city_id']; ?>"><?php echo $row['city_name']; ?></a>
								</li>
								
								<?php
									}
								?>
							
								<li>
									<a class="scroll hvr-underline-from-center" href=>Log in</a>
								</li>
							</ul>
							<ul class="list-right">
								<li>
									
									<a href="mailto:info@example.com">info@example.com</a>
								</li>
								<li>
									<span class="fa fa-phone list-icon" aria-hidden="true"></span>
									<p> 1234 423 23 </p>
								</li>
							</ul>
						</div>


					</nav>
					
				</div>
			</div>
			
					<div class="banner-info">
						<h1>
							<a href="index.html">
								<img src="images/logo.png" class="img-responsive" alt="" />Food Bank</a>
						</h1>
						<h2>Taste in every bite!</h2>

						<div class="about-p text-center">
							<span class="sub-title"></span>
							<span class="fa fa-cutlery" aria-hidden="true"></span>
							<span class="sub-title"></span>
						</div>
						<p>make your kinda meal
							<p>

					</div>
				</div>

			</div>

			
	</div>
	
	
	
	

</body>

</html>