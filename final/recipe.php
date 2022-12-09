<?php
include_once 'config.php';
include_once 'database.php';
include_once 'header.php';
class Alist extends database{
	
  public function all($search,$page)
  {
      if(trim($search) == '')
      {
	    return $this->fetchAll("tb_recipe", null, 'created_at', 'DESC', ($page - 1) * NO_OF_RECORDS, NO_OF_RECORDS);
      }
      else
      {
          $sql = ' SELECT * FROM tb_recipe WHERE cl_name LIKE ? ORDER BY created_at DESC LIMIT ' . ($page - 1) * NO_OF_RECORDS . ',' . NO_OF_RECORDS;
          $where[] = $search . '%';
          return $this->callQuery($sql, $where);
      }
  }
   public function allr($search,$page,$id)
  {
      if(trim($search) == '')
      {
		$where['cl_category_id'] = $id;
	    return $this->fetchAll("tb_recipe", $where, 'created_at', 'DESC', ($page - 1) * NO_OF_RECORDS, NO_OF_RECORDS);
      }
      else
      {
          $sql = ' SELECT * FROM tb_recipe WHERE cl_category_id=? AND cl_name LIKE ? ORDER BY created_at DESC LIMIT ' . ($page - 1) * NO_OF_RECORDS . ',' . NO_OF_RECORDS;
            $where[] = $id;
          $where[] = $search . '%';
          return $this->callQuery($sql, $where);
      }
  }
  
}

$page = 1;
if(isset($_GET['page']) && is_numeric($_GET['page']) && $_GET['page'] > 1)
{
  $page = $_GET['page'];
}
$obj = new Alist();

$search = '';
if(isset($_GET['search']))
{
    $search = $_GET['search'];
}

if(isset($_GET['id']) && $_GET['id'] != "")
{
	$id = $_GET['id'];
	$list = $obj->allr($search,$page,$id);
}
else
{
    $list = $obj->all($search,$page);
}
?>
		<div class="container text-center search-container mt-5 mb-5">
			<form action="recipe.php">
			  <input class="search px-3" type="text" placeholder="Search.." name="search">
			  <button type="submit" class="search-icon"><img src="assets/Search Icon.png"></button>
			</form>
		  </div>
        <!-- Page content-->
        <div class="container page-content mt-5">
            <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3 mt-3">
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