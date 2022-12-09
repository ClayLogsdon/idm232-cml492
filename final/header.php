<?php
$actual_link = "http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";

$arr = explode(DOMAIN, $actual_link);
$link = $arr[1];

$linkArray = explode('?', $link);
$path = $linkArray[0];
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>The Lebanese Cookbook</title>
        <!-- Favicon-->
        <link rel="icon" type="image/x-icon" href="assets/favicon.ico" />
        <!-- Core theme CSS (includes Bootstrap)-->
        <link href="css/styles.css?version=<?php echo VERSION ?>" rel="stylesheet" />
		<link href="css/divu-style.css?version=<?php echo VERSION ?>" rel="stylesheet" />
    </head>
    <body>
		<header class=" head-div container-fluid">
		    <div class="row">
    <div class="col-lg-1 col-4 header_logo_div" href="#"><img src="<?php echo DOMAIN ?>/assets/image11.png" width="100"/></div>
    <div class="col-lg-9 col-8 header_logo_div header_logo_text col-lg-offset-1 text-center" href="#">
        The Lebanese Cookbook
    </div>
	</div>
		
	  </header>
        <!-- Responsive navbar-->
        <nav class="navbar navbar-expand-lg navbar-dark">
            <div class="container-fluid">
				<div class="col-12 menu ">
				<div class="row">
				 <div class="col-4  text-center">
					<a class="text-decoration-none 
                                           <?php
                                           
                                           if($path == '/index.php' || $path == '/')
                                           {
                                               echo 'active';
                                           }
                                           
                                           ?>" href="<?php echo DOMAIN ?>">Home</a>
                                        <a href="header.php"></a>
				 </div>
				 <div class="col-4   text-center">
					 <a class="text-decoration-none
                                            <?php
                                           
                                           if($path == '/categories.php')
                                           {
                                               echo 'active';
                                           }
                                           
                                           ?>" href="<?php echo DOMAIN ?>/categories.php">Categories</a>
				 </div>
				 <div class="col-4   text-center">
					 <a class="text-decoration-none" href="<?php echo DOMAIN ?>/admin">Admin Panel</a>
				 </div>
				</div>
			
			 </div>
                
            </div>
        </nav>
        