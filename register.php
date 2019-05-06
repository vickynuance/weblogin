 <?php include('action_page.php'); ?>
<?php include('header.php');

if(isset($_POST['sub'])){
 $f_name = $_POST['f_name'];
  $l_name = $_POST['l_name'];
  $optradioa = $_POST['optradioa'];
  $email = $_POST['email'];
  $pass = $_POST['pass'];
  $profileimage = $_FILES["profileimage"]['name'];
  //print_r($_FILES); exit();
  
  if (move_uploaded_file($_FILES['profileimage']['tmp_name'],'./img/'. $_FILES["profileimage"]['name'])) {
    echo "Uploaded";
} else {
   echo "File was not uploaded";
}

 $sql="INSERT INTO `rigester`(`f_name`, `l_name`, `email`, `pass`, `optradioa`, `profileimage`) VALUES ('$f_name','$l_name','$email','$pass','$optradioa', '$profileimage')";
mysqli_query($con,$sql);

}

 ?>


<section class="mains">
  <div class="container">
    <div class="row">
      <div class="">

        <div class="col-sm-6 col-sm-offset-3">
          <div class="inner-box">
            
          	<h2>Register</h2><br>
            <form action="" method="post" enctype="multipart/form-data">
            	<div class="row">
            		<div class="col-sm-6">
            			<div class="form-group">
						    <label for="email">First Name</label>
						    <input type="text" name="f_name" class="form-control" id="email">
						 </div>
            		</div>
            		<div class="col-sm-6">
			  			<div class="form-group">
			    			<label for="email">Last Name</label>
			    			<input type="text" name="l_name" class="form-control" id="email">
			  			</div>
					</div>
				</div>
				<div class="row">
					<div class="col-sm-6">
						<div class="form-group">
			    <label for="email">Email address</label>
			    <input type="email" name="email" class="form-control" id="email" required="">
			  </div>
					 
					</div>
					<div class="col-sm-6">
					  <div class="form-group">
					    <label for="file">Profile Upload</label>
					    <input type="file" name="profileimage" class="form-control" id="profileimage" required="">
					  </div>
					</div>
				</div>

			   <div class="form-group">
					  	<label for="email">Gender </label>
					  	<label class="radio-inline"><input type="radio" name="optradioa" value="male">Male</label>
						<label class="radio-inline"><input type="radio" name="optradioa" value="female">Female</label>
					  </div>
			  <div class="form-group">
			    <label for="pwd">Password</label>
			    <input type="password" name="pass" class="form-control" id="pwd">
			  </div>
			  <button type="submit" name="sub" class="btn btn-default">Submit</button>
			</form>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>




<?php include('footer.php'); ?>