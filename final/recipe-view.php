<?php
include_once 'config.php';
include_once 'database.php';
include_once 'header.php';
class Recipe extends database{
	public function getCurrentPost($id)
	{
		$where['cl_id'] = $id;
		return $this->fetchRow('tb_recipe', $where);
	}
	

}
if(isset($_GET['id']) && $_GET['id'] != "")
{
	$id = $_GET['id'];
}
$obj = new Recipe();
$data = $obj->getCurrentPost($id);
?>
        <!-- Page content-->
        <div class="container page-content mt-5 mb-5">
            <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3 mt-3">
				<div class="col-md-12 mb-5">
					<a href="recipe.php?id=<?php echo htmlspecialchars($data[COLUMN_PREFIX . '_category_id']) ;?>"><img src="assets/Vector.png"/></a>
				</div>
		          <div class="col-md-8 m-auto">
				  
								<img class="bd-placeholder-img card-img-top" src="<?php echo DOMAIN ?>/admin/uploads/<?php echo htmlspecialchars($data[COLUMN_PREFIX . '_image']) ;?>" width="100%" >
								
					  <h1 class="recipe-name text-center text-capitalize"><?php echo htmlspecialchars($data[COLUMN_PREFIX . '_name']) ;?></h1>
					  
					
				  
					</div>
				
                  <div class="col-md-10 m-auto p-3 description-div">
					  <p class="text-recipe"><?php echo htmlspecialchars($data[COLUMN_PREFIX . '_description']) ;?></p>
				</div>
                  <div class="col-md-10 m-auto p-3 mt-5">
                      <div class='row'>
                            <h3 class="recipe-sub">Ingredients</h3>
                            <div class="text-recipe mt-3"><?php echo $data[COLUMN_PREFIX . '_ingradient'];?></div>
                            <h3 class="recipe-sub mt-5">Instructions</h3>
                            <div class="text-recipe mt-3"><?php echo $data[COLUMN_PREFIX . '_instruction'] ;?></div>
                        </div>
                  </div>
                
               
          		
      </div>
        </div>
<?php
include_once 'footer.php';
?>