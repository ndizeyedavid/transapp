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
  <title>TDL  •  User</title>

  <?php include 'includes/style.php'; ?>

</head>
<body>
  <div class="container-scroller">

    <?php include 'includes/top.php'; ?>

    <div class="container-fluid page-body-wrapper">
      
      <?php include 'includes/side.php'; ?>

      <div class="main-panel">

        <div class="content-wrapper">
          <div class="row">
            <div class="col-sm-12 mb-4 mb-xl-0">
              <h4 class="font-weight-bold text-dark">Hi, welcome back!</h4>
              <p class="font-weight-normal mb-2 text-muted"><?php echo date("M d, Y") ?></p>
            </div>
          </div>

          <div class="row mt-3"></div>
          <div class="row"></div>
          <div class="row"></div>
        </div>

        <?php include 'includes/footer.php'; ?>

      </div>
      <!-- main-panel ends -->
    </div>
    <!-- page-body-wrapper ends -->
  </div>
  <!-- container-scroller -->
 <?php include "includes/script.php" ?>
</body>

</html>
<?php }else{header("location: login.html");} ?>
