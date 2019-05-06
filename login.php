<?php include('header.php') ?>
<?php include('action_page.php') ?>

<?php


$f_name = '';
$msg ='';
$megsuccess='';
if(isset($_POST['login'])){

$email = $_POST['email'];
$pass = $_POST['pass'];

$result = "SELECT * FROM rigester where email= '".$email."' and pass= '".$pass."'";
$result = mysqli_query($con,$result);

 if (mysqli_num_rows($result) > 0) {
         while ($row = mysqli_fetch_array($result)) {
               $f_name = $row['f_name'];
               $_SESSION["f_name"] = $f_name;
               $profileimage = $row['profileimage'];
              $_SESSION["profileimage"] = $profileimage;

              $id = $row['id'];
              $_SESSION["id"] = $id;
         }
         //print_r($_SESSION);
         $megsuccess = "Login Success ! Indicates a successful or positive action.";
         header("Location: index.php");
      } else {
                $msg = "Cant Log in ! indicates a dangerous or potentially negative action";
      }
    }
     //echo $f_name;

?>
<section class="mains">
  <div class="container">
    <div class="row">
      <div class="">
        <div class="col-sm-4 col-sm-offset-4">
          <div class="inner-box">
            <?php
              if ($megsuccess !="") {
                
              ?>
            <div class="alert alert-success fade in alert-dismissible">
              <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
              <?php echo $megsuccess; ?>
            </div>
           <?php }
            ?>

            <?php
              if ($msg !="") {
                
              ?>
            <div class="alert alert-danger fade in alert-dismissible">
              <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
              <?php echo $msg; ?>
            </div>
           <?php }
            ?>


            <!-- <div class="msg"><?php //echo $msg; ?></div> -->
          	<h2 class="text-center">Login</h2>
            
            <form action="" method="post">
			  <div class="form-group">
			    <label for="email">Email address:</label>
			    <input type="email" name="email" class="form-control" id="email">
			  </div>
			  <div class="form-group">
			    <label for="pwd">Password:</label>
			    <input type="password" name="pass" class="form-control" id="pwd">
			  </div>
			  <button type="submit" name="login" class="btn btn-default">Login</button>
			</form>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>




<?php include('footer.php'); ?>