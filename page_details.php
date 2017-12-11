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

$id = $_GET['id'];

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
	<div  id="home">
	<br /><br /><br /><br />
		<div>
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
									<span class="fa fa-envelope-o list-icon" aria-hidden="true"></span>
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
			
			
			
			
			
		</div>
	</div>




<?php
$query1 = "SELECT * FROM restaurent where restaurent_id = $id"; 
$result1 = mysql_query_or_die($conn,$query1);
$row1 = mysqli_fetch_assoc($result1);
?>




<div class="section w3ls-banner-btm-main" id="about">
		<div class="container">
			<div class="banner-btm">
				<div class="col-md-6 banner-btm-g1">
					<img src="images/about.jpg" class="img-responsive" alt="" />
				</div>
				<div class="col-md-6 banner-btm-g2">
					<h3 class="title-main"><?php echo $row1['Description']; ?> </h3>
					
					
					<div class="find-about">
						<a href="#" data-toggle="modal" data-target="#myModal">Find out more</a>
					</div>
				</div>
				<div class="clearfix"></div>
			</div>
		</div>
	</div>