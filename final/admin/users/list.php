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

class Userlist extends database{
	
  public function all($page)
  {
    return $this->fetchAll("tb_users", null, 'created_at', 'DESC', ($page - 1) * NO_OF_RECORDS, NO_OF_RECORDS);
  }
}

$page = 1;
if(isset($_GET['page']) && is_numeric($_GET['page']) && $_GET['page'] > 1)
{
  $page = $_GET['page'];
}

$obj = new Userlist();
$list = $obj->all($page);


include '../header.php';
?>

<!-- Main content -->
    <main class="main">

      <!-- Breadcrumb -->
      <ol class="breadcrumb">
        <li class="breadcrumb-item">User</li>
        
        <li class="breadcrumb-item active">List</li>

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
                <div class="card-header">
                    Users
					<a href="add.php" class="btn btn-sm btn-success pull-right"> + Add User</a>
                </div>
                <div class="card-body">
                  <?php include_once "../check_errors.php";?>
                 
					     <table class="table table-responsive-sm table-bordered datatable" id="abradant-table">
                    <thead>
                      <tr>
                        <th data-priority="2">Name</th>
                       
					
						<th>Role</th>
              <th>Email</th>
            <th>
              Created On
            </th>
                        <th data-priority="1">

                        </th>
                      </tr>
                    </thead>
                    <tbody>
                      <?php
                      if(!empty($list))
                      foreach($list AS $pos)
                      {
						
                        ?>
                        <tr>
                          <td>
                            <?php echo htmlspecialchars($pos[COLUMN_PREFIX . '_first_name']). " " .htmlspecialchars($pos[COLUMN_PREFIX . '_last_name']); ?> 
                          </td>
                          <td>
                            <?php echo htmlspecialchars($pos[COLUMN_PREFIX . '_type']) ;?>
                          </td>
                        
						  <td>
								 <?php echo htmlspecialchars($pos[COLUMN_PREFIX . '_email']) ;?>
                          </td>
						  <td>
								 <?php echo htmlspecialchars(date("d M Y", strtotime($pos[COLUMN_PREFIX . '_created_at']))) ;?>
                          </td>
                          <td class="action_container">
                            <a href="edit.php?id=<?php echo htmlspecialchars($pos['cl_id']);?>" class="btn btn-success btn-sm"><i class="fa fa-edit"></i></a>
               <div class="error-input"></div>
                        </tr>
                        <?php
						  
                      }
                      ?>
                    </tbody>
                    
                  </table>
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