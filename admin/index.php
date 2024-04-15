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
      
      <!-- partial:partials/_sidebar.html -->
      <?php include 'includes/side.php'; ?>
      <!-- partial -->
      <div class="container-fluid page-body-wrapper">
        <!-- partial:partials/_navbar.html -->
        <?php include 'includes/top.php' ?>
        <!-- partial -->
 
        <div class="main-panel">
          <div class="content-wrapper">
            <div class="row"></div>
          </div>
          <!-- content-wrapper ends -->
          <!-- partial:partials/_footer.html -->
          <?php include 'includes/footer.php'; ?>
          <!-- partial -->
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