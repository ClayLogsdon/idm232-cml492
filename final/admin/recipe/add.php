<?php
session_start();
require_once '../../config.php';
require_once '../../database.php';
require_once '../check_session.php';
require_once '../auth.php';

$auth = array('admin','company');
$authRes = checkAuth($auth, $user);
if(!$authRes)
{
    header('Location: ../index.php');
    exit;
}
class Add extends database{
	
public function getCategory()
	{
			
    		return $this->fetchAll('tb_category');
	}
}

$obj = new Add();

$category =$obj->getCategory();

$templateType = 'add';
include '../header.php';
?>

<!-- Main content -->
    <main class="main" style="background:#FFFAF4;">

     

      <div class="container-fluid">
        <div class="animated fadeIn">
      
            <div class="col-sm-12">
              
                <form method="post"  class="form" cluster-url="../ajax/recipe/add_ajax.php" cluster-redirect="list.php">
                  <?php include_once "template/form.php"; ?>
                </form>
          
        </div>
        
      </div>
      
    
  </div> <!-- end #page-content -->
</main>
<?php
include '../right_side.php';
?>
</div>
<?php
include '../footer.php';
?>