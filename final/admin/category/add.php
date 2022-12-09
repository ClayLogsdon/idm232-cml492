<?php
session_start();
require_once '../../config.php';
require_once '../../database.php';
require_once '../check_session.php';
require_once '../auth.php';

$auth = array('admin');
$authRes = checkAuth($auth, $user);
if(!$authRes)
{
    header('Location: ../index.php');
    exit;
}




$templateType = 'add';
include '../header.php';
?>

<!-- Main content -->
    <main class="main mb-md-5">

     

      <div class="container">
        <div class="animated fadeIn">
      
            <div class="col-sm-12">
              <div class="card">
                <form method="post"  class="form" cluster-url="../ajax/category/add_ajax.php" cluster-redirect="list.php">
                  <?php include_once "template/form.php"; ?>
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