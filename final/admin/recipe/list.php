<?php
session_start();
require_once '../../config.php';
require_once '../../database.php';
require_once '../check_session.php';
require_once '../auth.php';

$auth = array('admin', 'company');
$authRes = checkAuth($auth, $user);
if(!$authRes)
{
    header('Location: ../index.php');
    exit;
}



class Alist extends database{
	
  public function all($page)
  {
	    return $this->fetchAll("tb_recipe", null, 'created_at', 'DESC', ($page - 1) * NO_OF_RECORDS, NO_OF_RECORDS);
  }
  
}

$page = 1;
if(isset($_GET['page']) && is_numeric($_GET['page']) && $_GET['page'] > 1)
{
  $page = $_GET['page'];
}


$obj = new Alist();


$list = $obj->all($page);


include '../header.php';
?>

<!-- Main content -->
    <main class="main pb-lg-5">
		

  <div class="album">
    <div class="container">
		<center><a href="add.php" class="btn btn-secondary mb-5 btn-add"> + Add Recipe</a></center>
		<?php include_once "../check_errors.php";?>
      <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3">
        
		  <?php
                      if(!empty($list))
                      foreach($list AS $pos)
                      {
						
                        ?>
        <div class="col-md-4">
          <div class="card shadow-sm">
            <?php
				if($pos[COLUMN_PREFIX . '_image'] =="")
				{ ?>
					<img class="bd-placeholder-img card-img-top" src="<?php echo DOMAIN ?>/admin/uploads/no-image.jpg" width="100%" height="380"/>
				<?php }
				else
				{
			?>
			<img class="bd-placeholder-img card-img-top" src="<?php echo DOMAIN ?>/admin/uploads/<?php echo htmlspecialchars($pos[COLUMN_PREFIX . '_image']) ;?>" width="100%" height="380"/>
			<?php
				}
				?>
            <div class="card-body">
              <h3 class="card-text text-center"><?php echo htmlspecialchars($pos[COLUMN_PREFIX . '_name']); ?> </h3>
              <div class="d-flex justify-content-between align-items-center">
                <div class="btn-group">
                  
				   <a href="edit.php?id=<?php echo htmlspecialchars($pos['cl_id']);?>" class="btn btn-success btn-sm"><i class="fa fa-edit"></i></a>
				<button type="button" class="btn btn-sm btn-delete btn-danger" cluster-confirm="Are you sure you want to delete this info?" cluster-href="../ajax/recipe/delete_ajax.php?id=<?php echo htmlspecialchars($pos['cl_id']);?>"><i class="fa fa-trash"></i></button>
                <div class="error-input"></div>
				</div>
                <!--<small class="text-muted">9 mins</small>-->
              </div>
            </div>
          </div>
        </div>
          <?php
						  
                      }
                      ?>
		<center>
		<nav aria-label="Page navigation example">
					  <ul class="pagination justify-content-center">
						<?php
						if($page > 1)
						  { ?>
						<li class="page-item"><a class="page-link" href="?page=<?php echo ($page - 1) ?>">Previous</a></li>
						<?php
					  }
						if(count($list) >= NO_OF_RECORDS)
						  { ?>
						<li class="page-item"><a class="page-link" href="?page=<?php echo ($page + 1) ?>">Next</a></li>
					  <?php } ?>
					  </ul>
					</nav>
		</center>
      </div>
    </div>
  </div>
  
      
</main>
      
<?php
include '../right_side.php';
?>
</div>
<?php
include '../footer.php';
?>