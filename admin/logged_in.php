<?php  
include 'includes/connect.php';
session_start();

if ($_SESSION['id']){
  
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>TDL  •  Admin</title>
    <?php include 'includes/style.php'; ?>
  </head>
  <body>
    <div class="container-scroller">
      
      <?php include 'includes/side.php'; ?>
      <div class="container-fluid page-body-wrapper">
        <?php include 'includes/top.php' ?>

        <div class="main-panel">

          
          <div class="content-wrapper">
            <div class="row">
              <div class="page-header">
                <h3 class="page-title"> Registered users </h3>
                <nav aria-label="breadcrumb">
                  <a href="users.php?download" class="btn btn-success d-flex"> <b class="mdi mdi-cloud-download icon-md"></b></a>
                </nav>
              </div>   

              <?php  
              if (isset($_GET['succ'])){
              ?>
              <div class="d-block success">
                <center>
                  <div class="alert alert-success d-flex p-1" style="width: 35%;">
                    <b class="mdi mdi-check-circle icon-lg"></b>
                    <p class="mt-1 mx-5 h4"><br>Account <?php echo $_GET['status']; ?><br>ID: <?php echo $_GET['succ']; ?></p>
                  </div>
                </center>
              </div>
              <?php } ?>
              <?php if (isset($_GET['err'])){ ?>
              <div class="d-block fail">
                <center>
                  <div class="alert alert-danger d-flex p-1" style="width: 35%;">
                    <b class="mdi mdi-window-close icon-lg"></b>
                    <p class="mt-1 mx-5 h3"><br>Operation failed</p>
                  </div>
                </center>
              </div>
              <?php } ?>
              <div class="col grid-margin stretch-card">
                <div class="card">
                  <div class="card-body">
                    
                    <div class="table-responsive">
                      <table class="table table-bordered">
                        <thead>
                          <tr>
                            <th style="width: 2%;">#</th>
                            <th>User ID</th>
                            <th>User Name</th>
                            <th>E-mail</th>
                            <th>Country</th>
                            <th>Status</th>
                            <th class="text-center">Verify</th>
                            <th class="text-center">Block</th>
                          </tr>
                        </thead>
                        <tbody>
                          <?php  
                          $fetch = mysqli_query($con, "SELECT * FROM users ORDER BY status");
                          $i=0;
                          while($row = mysqli_fetch_assoc($fetch)){
                          ?>
                          <tr>
                            <td><?php echo ++$i; ?></td>
                            <td><?php echo $row['u_id']; ?></td>
                            <td><?php echo $row['name']; ?></td>
                            <td><?php echo $row['email']; ?></td>
                            <td class="text-uppercase"><?php echo $row['country']; ?></td>
                            <td>
                              <?php  
                              if ($row['status'] == 0){
                                echo "<label class='badge badge-warning'>Pending</label>";
                              }elseif ($row['status'] == 1){
                                echo "<label class='badge badge-danger'>Blocked</label>";
                              }else{
                                echo "<label class='badge badge-success'>Verified</label>";
                              }
                              ?>
                            </td>
                            <td class="text-center"><a href="php/acc_modify.php?id=<?php echo $row['u_id'] ?>&ver" class="btn btn-success mdi mdi-account-check"></a></td>
                            <td class="text-center"><a href="php/acc_modify.php?id=<?php echo $row['u_id'] ?>&block" class="btn btn-danger mdi mdi-account-remove"></a></td>
                          </tr>
                          <?php } ?>
                        </tbody>
                      </table>
                    </div>                
              
                  </div>
                </div>
              </div>                        
              
            </div>
          </div>


          <?php include 'includes/footer.php'; ?>
        </div>
        <!-- main-panel ends -->
      </div>
      <!-- page-body-wrapper ends -->
    </div>
    <!-- container-scroller -->
    <?php include 'includes/scripts.php'; ?>
  </body>
</html>
<?php }else{header("location: login.php");} ?>