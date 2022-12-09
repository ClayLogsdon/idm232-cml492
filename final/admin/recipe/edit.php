<?php
session_start();
require_once '../../config.php';
require_once '../../database.php';
require_once '../check_session.php';
require_once '../check_edit_page.php';
require_once '../auth.php';
$auth = array('admin','company');
$authRes = checkAuth($auth, $user);
if(!$authRes)
{
    header('Location: ../index.php');
    exit;
}

class Edit extends database{
	public function getCurrentPost($id)
	{
    $where['cl_id'] = $id;
		return $this->fetchRow('tb_recipe', $where);
	}
	public function getCategory()
	{
			
    		return $this->fetchAll('tb_category');
	}
}

$obj = new Edit();
$data = $obj->getCurrentPost($id);
$category =$obj->getCategory();
if(!$data)
{
  header('Location: list.php');
  exit;
}
$templateType = 'edit';

include '../header.php';
?>


<!-- Main content -->
    <main class="main" style="background:#FFFAF4;">

     

      <div class="container-fluid">
        <div class="animated fadeIn">
			
            <div class="col-sm-12">
             
                <form method="post"  class="form" cluster-url="../ajax/recipe/edit_ajax.php?id=<?php echo htmlspecialchars($id) ?>" cluster-redirect="list.php">
					<?php include "template/form.php"; ?>
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