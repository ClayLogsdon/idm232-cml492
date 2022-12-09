<?php
session_start();
require_once '../../config.php';
require_once '../../database.php';
require_once '../check_session.php';
require_once '../check_edit_page.php';
require_once '../auth.php';
$auth = array('admin');
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
		return $this->fetchRow('tb_users', $where);
	}

}

$obj = new Edit();
$data = $obj->getCurrentPost($id);
if(!$data)
{
  header('Location: list.php');
  exit;
}
$templateType = 'edit';

include '../header.php';
?>


<!-- Main content -->
    <main class="main">

      <!-- Breadcrumb -->
      <ol class="breadcrumb">
        <li class="breadcrumb-item">User</li>
        <li class="breadcrumb-item active">Edit</li>

        <!-- Breadcrumb Menu-->
<!--        <li class="breadcrumb-menu d-md-down-none">
          <div class="btn-group" role="group" aria-label="Button group">
            <a class="btn" href="#"><i class="icon-speech"></i></a>
            <a class="btn" href="./"><i class="icon-graph"></i> &nbsp;Dashboard</a>
            <a class="btn" href="#"><i class="icon-settings"></i> &nbsp;Settings</a>
          </div>
        </li>-->
      </ol>

      <div class="container-fluid">
        <div class="animated fadeIn">
			
            <div class="col-sm-12">
              <div class="card">
                <form method="post"  class="form_artist" cluster-url="../ajax/users/edit_ajax.php?id=<?php echo htmlspecialchars($id) ?>" cluster-redirect="list.php">
					<?php include "template/form.php"; ?>
				</form>
					</div>
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