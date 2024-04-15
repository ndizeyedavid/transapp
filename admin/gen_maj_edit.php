<?php  
include 'includes/connect.php';
session_start();

if ($_SESSION['id']){
  if (isset($_GET['id'])){
    $id = $_GET['id'];
    $fetch = mysqli_query($con, "SELECT * FROM major_genre WHERE id='{$id}'");
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
                   Edit Major Genre: <br> 
                   Genre Id: <?php echo $data['gen_id']; ?>
                </h3>
              </div>   
                         
              <div class="col grid-margin stretch-card">
                <div class="card">
                  <div class="card-body">
                      <?php  
                      if (isset($_GET['err'])){
                      ?>
                      <div class="alert alert-danger text-center">
                        <p class="h3">Error!</p>
                        <p class="h5">Operation failed</p>
                      </div>
                      <?php } ?>
                      <h4 class="card-title"><b>Title</b>: <?php echo $data['title']; ?></h4>
                      
                      <form class="forms-sample" action="php/gen_maj_edit.php" method="POST" enctype="multipart/form-data">
                        <input type="hidden" name="id" value="<?php echo $id; ?>">
                        <div class="form-group row">
                          <label for="exampleInputUsername2" class="col-sm-3 col-form-label">English Title</label>
                          <div class="col-sm-9">
                            <input type="text" class="form-control" id="exampleInputUsername2" placeholder="English Title" name="title" value="<?php echo $data['eng_title']; ?>" style="color: white;">
                          </div>
                        </div>
                        <div class="form-group row">
                          <label for="exampleInputEmail2" class="col-sm-3 col-form-label">Kinyarwanda Title</label>
                          <div class="col-sm-9">
                            <input type="text" class="form-control" id="exampleInputEmail2" placeholder="Kinyarwanda translated title" name="kiny_title" value="<?php echo $data['kiny_title'] ?>" style="color: white;">
                          </div>
                        </div>
                        <div class="form-group row">
                          <label for="exampleInputMobile" class="col-sm-3 col-form-label">French Title</label>
                          <div class="col-sm-9">
                            <input type="text" class="form-control" id="exampleInputMobile" placeholder="French translated title" name="fre_title" value="<?php echo $data['fre_title']; ?>" style="color: white;">
                          </div>
                        </div>
                        <div class="form-group row">
                          <label for="exampleInputPassword2" class="col-sm-3 col-form-label">Swahili Title</label>
                          <div class="col-sm-9">
                            <input type="text" class="form-control" id="exampleInputPassword2" placeholder="Swahili translated title" name="swa_title" value="<?php echo $data['swah_title'] ?>" style="color: white;">
                          </div>
                        </div>
                        <div class="form-group row">
                          <label for="exampleInputConfirmPassword2" class="col-sm-3 col-form-label">Title Meaning</label>
                          <div class="col-sm-9">
                            <textarea class="form-control" name="title_meaning" placeholder="Meaning of the title" style="color: white;"><?php echo $data['title_meaning'] ?></textarea>
                          </div>
                        </div>

                        <div class="row">

                          <div class="col-sm-3 form-group" style="height: 300px;">
                            <label>English Translation</label>
                            <textarea class="form-control" style="height: 280px; color: white;" placeholder="English version of the genre" name="eng"><?php echo $data['english']; ?></textarea>
                          </div>

                          <div class="col-sm-3 form-group" style="height: 250px;">
                            <label>Kinyarwanda Translation</label>
                            <textarea class="form-control" style="height: 280px; color: white;" placeholder="Kinyarwanda version of the genre" name="kiny"><?php echo $data['kiny']; ?></textarea>
                          </div>

                          <div class="col-sm-3 form-group" style="height: 250px;">
                            <label>French Translation</label>
                            <textarea class="form-control" style="height: 280px; color: white;" placeholder="French version of the genre" name="fra"><?php echo $data['french']; ?></textarea>
                          </div>

                          <div class="col-sm-3 form-group" style="height: 250px;">
                            <label>Swahili Translation</label>
                            <textarea class="form-control" style="height: 280px; color: white;" placeholder="Kiswahili version of the genre" name="swah"><?php echo $data['swah']; ?></textarea>
                          </div>

                        </div>

                        <div class="form-group row">
                          <label for="exampleInputPassword2" class="col-sm-3 col-form-label">Genre cover</label>
                          <div class="col-sm-9">
                            <input type="file" class="form-control" id="exampleInputPassword2" placeholder="upload image" name="cover">
                            <input type="hidden" name="existing_img" value="<?php echo $data['cover_img']; ?>">
                          </div>
                          <div class="container text-center mb-2 mt-2">
                            Existing cover page<br>
                            <img src="uploads/cover/<?php echo $data['cover_img']; ?>" style="width: 300px; height: 300px;" class="rounded-circle">
                          </div>
                        </div>
                        
                        <button type="submit" name="submit" class="btn btn-primary me-2 form-control">Update</button>
                        
                      </form>
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
<?php }else{header("location: gen_maj.php");}}else{header("location: login.php");} ?>