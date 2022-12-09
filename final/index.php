<?php
include_once 'config.php';
include_once 'database.php';
include_once 'header.php';
class Alist extends database{
	
  public function all($search,$page)
  {
	    return $this->fetchAll("tb_recipe", null, 'created_at', 'DESC', 0, 20);
  }
  
  
}

$obj = new Alist();

$search = '';
$list = $obj->all($search,$page);
?>
		<div class="container text-center search-container mt-5 mb-5">
                    
			<form action="recipe.php">
			  <input class="search px-3" type="text" placeholder="Search.." name="search">
			  <button type="submit" class="search-icon"><img src="assets/Search Icon.png"></button>
			</form>
                    
                    <div class="col-12">
                        <div class="text-capitalize text-decoration-none col-12">
			<div class="text-center text-white mt-5 py-5 row index_category_image" style="background-image:url('<?php echo DOMAIN ?>/assets/bg.png');border-radius: 30px;max-width: 95%;
    margin: 0 auto;">
                <h3 class="cat-head">Motherland Meals<h3>
            </div>
			</div>
                    </div>
		  </div>
        <!-- Page content-->
        <div class="container page-content mt-5">
            <div class="row g-3 mt-3">
                <div class="col-12 header">
                    Popular Recipes
                </div>
				  <?php
                      if(!empty($list))
                      foreach($list AS $pos)
                      {
						
                        ?>
		          <div class="col-md-4">
				  <a href="recipe-view.php?id=<?php echo htmlspecialchars($pos['cl_id']);?>" class="text-capitalize text-decoration-none text-dark">
				  <div class="card shadow-sm">
								<img class="bd-placeholder-img card-img-top" src="<?php echo DOMAIN ?>/admin/uploads/<?php echo htmlspecialchars($pos[COLUMN_PREFIX . '_image']) ;?>" width="100%" >
								<div class="card-body recipe-name-bg">
					  <h3 class="card-text text-center recipe-n"><?php echo htmlspecialchars($pos[COLUMN_PREFIX . '_name']); ?></h3>
					  
					</div>
				  </div>
				  </a>
				</div>
				
                 <?php
				}
				?>
                  
                  
                 
                 
          		<center>
		<nav aria-label="Page navigation example">
					  <ul class="pagination justify-content-center">
											  </ul>
					</nav>
		</center>
      </div>
        </div>
<?php
include_once 'footer.php';
?>