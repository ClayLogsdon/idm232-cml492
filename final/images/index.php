<?php
session_start();
require_once '../../config.php';
require_once '../database.php';
require_once '../check_session.php';
require_once '../auth.php';

$auth = array('admin');
$authRes = checkAuth($auth, $user);
if(!$authRes)
{
    header('Location: ../index.php');
    exit;
}

class Images extends database{
	
  public function all()
  {
    return $this->fetchAll("tb_image");
  }
}

$obj = new Images();
$images = $obj->all();


include '../header.php';
?>
 <link href="<?php echo DOMAIN ?>/admin/dropzone/dist/dropzone.css" rel="stylesheet" />
 <script src="<?php echo DOMAIN ?>/admin/dropzone/dist/dropzone.js"></script>

<!-- Main content -->
    <main class="main">

      <!-- Breadcrumb -->
      <ol class="breadcrumb">
        <li class="breadcrumb-item">Posts</li>
        
        <li class="breadcrumb-item active">List</li>


      </ol>

      <div class="container-fluid">
        <div class="animated fadeIn">
			
            <div class="col-sm-12">
              <div class="card">
                <div class="card-header">
                    Images
				
                </div>
                <div class="card-body">
                  <?php include_once "../check_errors.php";?>
                 <form action="../ajax/upload_image_bulk.php"
                  class="dropzone"
                  id="flie_upload_dropzone">
                    

                  </form>
                  <a href="index.php" class="btn btn-success pull-right">Refresh Page</a>


					     <table class="table table-responsive-sm table-bordered" id="abradant-table">
                    <thead>
                      <tr>
                        <th>Link</th>
            						<th>Image</th>
            						<th>Name</th>
                        <th>

                        </th>
                      </tr>
                    </thead>
                    <tbody>
                      <?php
                        if(!empty($images))
                        {
                          foreach($images AS $image)
                          {
                            ?>
                            <tr>
                              <td>
                                <?php echo DOMAIN . '/uploads/' . htmlspecialchars($image['cl_name']) ?>
                              </td>
                              <td>
                                <img src="<?php echo DOMAIN . '/uploads/' . htmlspecialchars($image['cl_name']) ?>" style="max-width:70px"/>
                              </td>
                              <td>
                                <?php echo htmlspecialchars($image['cl_actual_name']) ?>
                              </td>
                              <td class="action_container">
                                <button class="btn btn-sm btn-delete btn-danger" cluster-confirm="Are you sure you want to delete this image?" cluster-href="../ajax/delete_image.php?id=<?php echo htmlspecialchars($image['cl_id']);?>"><i class="fa fa-trash"></i></button>
                                <div class="error-input"></div>
                              </td>
                            </tr>
                            <?php
                          }
                        }
                      ?>
                     </tbody>
                  </table>
                </div>
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