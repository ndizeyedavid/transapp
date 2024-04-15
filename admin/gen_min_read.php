<?php  
include 'includes/connect.php';
session_start();

if ($_SESSION['id']){
  if (isset($_GET['id'])){  
    $id = $_GET['id'];
    $fetch = mysqli_query($con, "SELECT * FROM minor_genre WHERE id = '{$id}'");
    $data = mysqli_fetch_assoc($fetch);
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>TDL  •  Admin</title>
    <?php include 'includes/style.php'; ?>

    <style>
      .lng{
        border-left: 2px solid;
      }
    </style>

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
                <h3 class="page-title">
                  <b>Title</b>: <?php echo $data['title']; ?> <br>  
                  <b>Id</b>: <?php echo $data['gen_id']; ?> <br>

                </h3>
                <nav aria-label="breadcrumb">
                  <a href="gen_min_edit.php?id=<?php echo $id; ?>" class="btn btn-success"> <b class="mdi mdi-pencil-box"></b> Edit</a>
                </nav>
              </div>   
              
              <div class="col grid-margin stretch-card">
                <div class="card">
                  <div class="card-header" style="text-align: right;">
                    <b>Release Date</b>: <?php echo $data['release_date']; ?> 
                  </div>
                  <div class="card-body">
                    <div class="d-flex">
                      
                      <div class="container cover-img" style="width: 50%">
                        <img src="uploads/cover/<?php echo $data['cover_img'] ?>" style="width: 100%; height: 220px;" class="rounded">
                      </div>

                      <div class="container title">
                        <h2>Titles</h2>
                        <hr>
                        <h4>English Title: <span class="h3"><?php echo $data['eng_title']; ?></span> </h4>
                        <h4>French Title: <span class="h3"><?php echo $data['fre_title']; ?></span> </h4>
                        <h4>Kinyarwanda Title: <span class="h3"><?php echo $data['kiny_title']; ?></span> </h4>
                        <h4>Kiswahili Title: <span class="h3"><?php echo $data['swah_title']; ?></span> </h4>
                      </div>

                    </div>
                    <div class="title-meaning container mt-2"><b>Summary</b>: <?php echo $data['title_meaning']; ?></div>
                    <hr>
                    <hr>

                    <div class="row">

                      <div class="col">
                        <h3 class="text-center">ENGLISH</h3>
                        <hr>
                        <p class="container"><?php echo $data['english']; ?></p>  
                      </div>

                      <div class="col lng">
                        <h3 class="text-center">FRENCH</h3>
                        <hr>
                        <p class="container"><?php echo $data['french']; ?></p>  
                      </div>

                      <div class="col lng">
                        <h3 class="text-center">KINYARWANDA</h3>
                        <hr>
                        <p class="container"><?php echo $data['kiny'] ?></p>  
                      </div>

                      <div class="col lng">
                        <h3 class="text-center">KISWAHILI</h3>
                        <hr>
                        <p class="container"><?php echo $data['swah'] ?></p>  
                      </div>


                    </div>

                  </div>                  
                </div>

              </div>

            </div>
              <a href="gen_min.php" class="btn btn-info"><i class="mdi mdi-keyboard-return"></i> Back Genre Minor</a>
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
<?php }else{header("location: gen_min.php");}}else{header("location: login.php");} ?>