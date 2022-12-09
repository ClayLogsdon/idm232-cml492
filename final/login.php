<?php
include_once "../config.php";
include_once "../database.php";
include_once "header_outer.php";
	
?>



    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card-group mb-0">
                    <div class="card p-4">
                        <div class="card-block">
                            <h1>Login</h1>
                            <p class="text-muted">Sign In to your account</p>
                            
                           
							<form class="form" method="post" id="form" cluster-url="ajax/login.php" cluster-warning="Logging you in...." cluster-redirect="index.php">
								<div class="error-main"></div>
								<div class="input-container mb-3">
									
									<input type="text" class="form-control " id="email" name="email" placeholder="Username" />
									<div class="error-input"></div>
								</div>
								<div class="input-container mb-3">
									
									<input type="password" class="form-control" id="password" name="password" placeholder="Password" />
									<div class="error-input"></div>
								</div>
								<div class="row">
	                                <div class="col-6">
	                                    <button type="submit" class="btn btn-primary px-4">Login</button>
	                                </div>
                                        <div class="col-6" style="text-align:right">
	                                    <a href="register.php" class="btn btn-warning px-4">Register</a>
	                                </div>
	                                
	                            </div>
							</form>
						</div>
					
			
		
	</div> <!-- end #page-content -->
	
</div>
</div>
</div>
</div>
<?php include_once "footer_outer.php"; ?>

