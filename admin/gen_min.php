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
                <h3 class="page-title"> Minor Genres </h3>
                <nav aria-label="breadcrumb">
                  <a href="gen_min_add.php" class="btn btn-success"> <b>+</b> New Genre</a>
                </nav>
              </div>   
              <?php  
              $new = "";
              if (isset($_GET['new'])){
                $new = $_GET['new'];
              }

              $fetch = mysqli_query($con, "SELECT * FROM minor_genre WHERE gen_id!='{$new}' ORDER BY release_date DESC");

              if (mysqli_num_rows($fetch)){
                while ($row = mysqli_fetch_assoc($fetch)){
              ?>         
              <div class="col-md-6 col-xl-4 grid-margin stretch-card">
                <div class="card">
                  <div class="card-body">
                    <div class="full-width">
                      <div class="item">
                       <img src="uploads/cover/<?php echo $row['cover_img'] ?>" alt="" style="height: 200px; width: 100%;">
                      </div>
                    </div>

                    <div class="d-flex py-4">
                      <div class="preview-list w-100">
                        <div class="preview-item p-0">
                          <div class="preview-thumbnail">
                            <img src="assets/images/faces/face15.jpg" class="rounded-circle" alt="">
                          </div>
                          <div class="preview-item-content d-flex flex-grow">
                            <div class="flex-grow">
                              <div class="d-flex d-md-block d-xl-flex justify-content-between">
                                <h6 class="preview-subject"><?php echo $row['title'] ?></h6>
                                <p class="text-muted text-small float-end"><?php echo $row['release_date'] ?></p>
                              </div>
                              <p class="text-muted"><?php echo $row['author'] ?></p>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                    <p class="text-muted"><?php echo $row['title_meaning'] ?></p>
                    
                  </div>
                  <div class="card-footer" style="text-align: right;">
                    <div>
                      <a href="gen_min_read.php?id=<?php echo $row['id']; ?>" class="btn btn-success btn-sm mdi mdi-newspaper" title="Read"></a>
                      <a href="gen_min_edit.php?id=<?php echo $row['id']; ?>" class="btn btn-warning btn-sm mdi mdi-pencil-box" title='Edit'></a>
                      <a href="php/gen_min_del.php?id=<?php echo $row['id']; ?>" class="btn btn-danger btn-sm mdi mdi-delete-variant" title="Delete"></a>
                    </div>
                  </div>
                </div>
              </div>                        
              <?php }}else{echo "<hr><p class='text-muted'>No genre created yet!</p>";} ?>

              <?php  
              if (isset($_GET['new'])) {
                $fetch_new = mysqli_query($con, "SELECT * FROM minor_genre WHERE gen_id='{$new}'");
                $data = mysqli_fetch_assoc($fetch_new);
              ?>

              <div class="col-md-6 col-xl-4 grid-margin stretch-card">
                <div class="card">
                  <div class="card-body">
                      <div style="text-align: right;position: relative; top: -20px; left: 20px; rotate: 20deg; z-index: 3;">
                        <div class="badge badge-info mb-2">New</div>
                      </div>

                    <div class="full-width" style="">
                      <div class="item">
                        <img src="uploads/cover/<?php echo $data['cover_img'] ?>" alt="" style="height: 200px; width: 100%;">
                      </div>                      
                    </div>

                    <div class="d-flex py-4">
                      <div class="preview-list w-100">
                        <div class="preview-item p-0">
                          <div class="preview-thumbnail">
                            <img src="assets/images/faces/face15.jpg" class="rounded-circle" alt="">
                          </div>
                          <div class="preview-item-content d-flex flex-grow">
                            <div class="flex-grow">
                              <div class="d-flex d-md-block d-xl-flex justify-content-between">
                                <h6 class="preview-subject"><?php echo $data['title'] ?></h6>
                                <p class="text-muted text-small float-end"><?php echo $data['release_date'] ?></p>
                              </div>
                              <p class="text-muted"><?php echo $data['author'] ?></p>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                    <p class="text-muted"><?php echo $data['title_meaning'] ?></p>
                  </div>
                  <div class="card-footer" style="text-align: right;">
                    <div>
                      <a href="gen_min_read.php?id=<?php echo $data['id']; ?>" class="btn btn-success btn-sm mdi mdi-newspaper" title="Read"></a>
                      <a href="gen_min_edit.php?id=<?php echo $data['id']; ?>" class="btn btn-warning btn-sm mdi mdi-pencil-box" title='Edit'></a>
                      <a href="php/gen_min_del.php?id=<?php echo $data['id']; ?>" class="btn btn-danger btn-sm mdi mdi-delete-variant" title="Delete"></a>
                    </div>
                  </div>
                </div>
              </div>

              <?php
              }
              ?>
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