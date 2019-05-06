 <?php include('action_page.php'); ?>
<?php include('header.php');

$uplod ='';
$notfils ='';
if(isset($_POST['sub'])){
 $f_name = $_POST['f_name'];
  $l_name = $_POST['l_name'];
  $optradioa = $_POST['optradioa'];
  $email = $_POST['email'];
  $pass = $_POST['pass'];
  $profileimage =  $_FILES["profileimage"]['name'];
  $id = $_GET['edt'];

 // $sql="UPDATE `rigester` SET (`f_name`, `l_name`, `email`, `pass`, `optradioa`) WHERE ('$f_name','$l_name','$email','$pass','$optradioa')";

$sql=" UPDATE `rigester` SET `f_name`='$f_name',`l_name`='$l_name',`email`='$email',`pass`='$pass',`optradioa`='$optradioa',`profileimage`='$profileimage' WHERE `id`= '$id'";

mysqli_query($con,$sql);

 if (move_uploaded_file($_FILES['profileimage']['tmp_name'],'./img/'. $_FILES["profileimage"]['name'])) {
     $uplod = "Uploaded";
} else {
   $notfils = "File was not uploaded";
}


}


 if(isset($_GET['edit'])){
      $id = $_GET['edit'];
       $useredit = "SELECT * FROM rigester WHERE id='$id'";
       $result = mysqli_query($con, $useredit);
       $recs = mysqli_fetch_assoc($result);
       //print_r($recs); exit();
    }
    else{

    	$id = $_SESSION["id"];
       $useredit = "SELECT * FROM rigester WHERE id='$id'";
       $result = mysqli_query($con, $useredit);
       $recs = mysqli_fetch_assoc($result);
       //print_r($recs); exit();

    }

  $profileimage =  $recs["profileimage"];
 ?>


<section class="mains">
  <div class="container">
    <div class="row">
      <div class="">
        <div class="col-sm-6 col-sm-offset-3">
          <div class="inner-box">
            
          	<h2>Update profile</h2><br>
          	<?php
              if ($uplod !="") {
                
              ?>
            <div class="alert alert-success fade in alert-dismissible">
              <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
              <?php echo $uplod; ?>
            </div>
           <?php }
            ?>

            <?php
              if ($notfils !="") {
                
              ?>
            <div class="alert alert-danger fade in alert-dismissible">
              <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
              <?php echo $notfils; ?>
            </div>
           <?php }
            ?>
          	
            <form action="<?php if(isset($_GET["edit"])) {echo '?edt=' .$_GET["edit"];} else{echo '?edt=' .$id = $_SESSION["id"];} ?>" method="post" enctype="multipart/form-data">
            	<div class="form-group">
			    <label for="email">First Name:</label>
			    <input type="text" name="f_name" class="form-control" id="email" value="<?php if($recs['f_name'] !=''){ echo $recs['f_name']; }?>">
			  </div>
			  <div class="form-group">
			    <label for="email">Last Name:</label>
			    <input type="text" name="l_name" class="form-control" id="email" value="<?php if($recs['l_name'] !=''){ echo $recs['l_name']; }?>">
			  </div>
			  <div class="form-group">
			  	<label for="email">Gender:</label>
			  	<label class="radio-inline"><input type="radio" name="optradioa" value="male">Male</label>
				<label class="radio-inline"><input type="radio" name="optradioa" value="female">Female</label>
			  </div>
			  <div class="form-group">
			    <label for="file">Profile Upload:</label>
			    <?php
			    	if($profileimage) {
			    		echo '<img src="img/<?php echo $profileimage ?>" width="50">';
			    	}
			    	else{
			    		echo '<img src="<?php echo $base_url ?>img/avatar.png" width="50">';
			    	}
			    ?>
			    
			    <input type="file" name="profileimage" class="form-control" id="profileimage" required="">
			  </div>
			  <div class="form-group">
			    <label for="email">Email address:</label>
			    <input type="email" readonly="" name="email" class="form-control" id="email" value="<?php if($recs['email'] !=''){ echo $recs['email']; }?>">
			  </div>
			  <div class="form-group">
			    <label for="pwd">Password:</label>
			    <input type="password" name="pass" class="form-control" id="pwd" value="<?php if($recs['pass'] !=''){ echo $recs['pass']; }?>">
			  </div>
			  <button type="submit" name="sub" class="btn btn-default">Upadate</button>
			</form>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>




<?php include('footer.php'); ?>