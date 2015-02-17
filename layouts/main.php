<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>




<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

<title><?php echo $config['site_title']; //change in config/main.php ?></title>
<meta name="language" content="en" />
<link rel="stylesheet" type="text/css" href='assets/css/bootstrap.css'>
<link rel="stylesheet" type="text/css" href='assets/css/theme.css'>
<link rel="stylesheet" type="text/css" href='assets/css/main.css'>

<script src = 'assets/js/jquery-1.11.1.min.js'></script>
<script src = 'assets/js/bootstrap.min.js'></script>
<script src = 'assets/js/history.min.js'></script>
<script src = 'assets/js/bootstrap-hover-dropdown.min.js'></script>
<script src = 'assets/js/main.js'></script>

</head>

<body>
	<nav class="navbar navbar-default navbar-static-top" role="navigation">
	  <div class="container-fluid">
		    <!-- Brand and toggle get grouped for better mobile display -->
		    <div class="navbar-header">
			      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
				        <span class="sr-only">Toggle navigation</span>
				        <span class="icon-bar"></span>
				        <span class="icon-bar"></span>
				        <span class="icon-bar"></span>
			      </button>
			      <img src="<?php  echo $config['logo']; ?>" height='70px' class='pull-left' alt="NRL Seal"/>
      			  <span class="navbar-brand" ><?php echo $config['site_name'];  //change in config/main.php  ?></span>
		    </div>

		    <!-- Collect the nav links, forms, and other content for toggling -->
		    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
			      <ul class="nav navbar-nav pull-right">

			        	<li class="active"><a  class='site-link' href="views/home/index.php" >Home</a></li>
			        	<!--Example of a dropdown navigation menu link-->
			        	<li class='dropdown'>
			        		<a class='site-link dropdown-toggle' data-toggle="dropdown" data-hover="dropdown" href="views/dropdown/index.php">Dropdown <span class="caret"></span></a>
							<ul class="dropdown-menu" >
								<li>
									<a class='site-link' tabindex="-1" href="views/dropdown/page1.php">Page 1</a>
		            			</li>
		            			<li>
									<a class='site-link' tabindex="-1" href="views/dropdown/page2.php">Page 2</a>
		            			</li>
					        </ul>
			        	</li>
						<li >
							<!--Example of a static navigation menu link-->
							<a class='site-link' href="views/static_link/index.php"> Static Link</a>
						</li>
			      </ul>
		    </div>
	   </div>
	</nav>

<div class="container">
	<div class="cont container-fluid" >
	  <?php if(isset($breadcrumbs)):?>

	  <?php endif?>




	  <div  id='main-content'>
			<?php echo $content  //This is where the content returned form the static page will go ?>
		</div>

</div><!--/.container-fluid-->

</div>
</body>
</html>
