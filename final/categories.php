<?php
include_once 'config.php';
include_once 'database.php';
include_once 'header.php';
class Categorylist extends database{
	
  public function all($page)
  {
	    return $this->fetchAll("tb_category", null, 'created_at', 'ASC', ($page - 1) * NO_OF_RECORDS, NO_OF_RECORDS);
  }
 
}

$page = 1;
if(isset($_GET['page']) && is_numeric($_GET['page']) && $_GET['page'] > 1)
{
  $page = $_GET['page'];
}


$obj = new Categorylist();
$list = $obj->all($page);
?>
		 
		 
		 <div class="container text-center search-container mt-5 mb-2">
			<form action="recipe.php">
			  <input class="search px-3" type="text" placeholder="Search.." name="search">
			  <button type="submit" class="search-icon"><img src="assets/Search Icon.png"></button>
			</form>
		  </div>
        <!-- Page content-->
        <div class="container-fluid page-content mt-2 col-12">
            <div class='row'>
		 <?php
                      if(!empty($list))
                      foreach($list AS $pos)
                      {
						
                        ?>
            <a href="recipe.php?id=<?php echo htmlspecialchars($pos['cl_id']);?>" class="text-capitalize text-decoration-none col-12">
			<div class="text-center text-white mt-5 py-5 row index_category_image" style="background-image:url('<?php echo DOMAIN ?>/admin/uploads/<?php echo htmlspecialchars($pos[COLUMN_PREFIX . '_image']) ;?>')">
                <h3 class="cat-head"><?php echo htmlspecialchars($pos[COLUMN_PREFIX . '_name']); ?> <h3>
            </div>
			</a>
			<?php
				}
				?>
            </div>	
        </div>
<?php
include_once 'footer.php';
?>