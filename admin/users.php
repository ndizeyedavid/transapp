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
  <body onload="init_print()">
    <div class="table-responsive">
      <h3 class="text-center">TDL Pending and Verified accounts</h3>
      <table class="table table-bordered">
        <thead>
          <tr>
            <th style="width: 2%;">#</th>
            <th>User Name</th>
            <th>E-mail</th>
            <th>Country</th>
            <th>Status</th>
          </tr>
        </thead>
        <tbody>
          <?php  
          $fetch = mysqli_query($con, "SELECT * FROM users");
          $i=0;
          while($row = mysqli_fetch_assoc($fetch)){
          ?>
          <tr>
            <td><?php echo ++$i; ?></td>
            <td><?php echo $row['name']; ?></td>
            <td><?php echo $row['email']; ?></td>
            <td class="text-uppercase"><?php echo $row['country']; ?></td>
            <td>
              <label class="badge badge-danger">Logged out</label>
            </td>
          </tr>
          <?php } ?>
        </tbody>
      </table>
    </div>
    <script>
      function init_print(){
        print();
        setTimeout(red, 3000);
        function red(){
          window.location.assign("logged_in.php");
        }
      }
    </script>
  </body>
</html>
<?php }else{header("location: login.php");} ?>