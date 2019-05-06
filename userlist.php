<?php include('header.php'); ?>
<?php include('action_page.php'); ?>

<section class="mains">
  <div class="container">
    <div class="row">
      <div class="col-sm-10 col-sm-offset-1">
          <div class="inner-box">
            <h2 class="text-center">User List</h2>
            <br>
<table class="table table-condensed">
	<tr>
    <th>ID</th>
		<th>First Name</th>
		<th>Last Name</th>
		<th>Gender</th>
		<th>Email address</th>  
    <th>Profile image</th>
    <th>Delete</th>
    <th>Edit</th>
	</tr>

  <?php 
    if(isset($_GET['del'])){
      $id = $_GET['del'];
       $userdetele = "DELETE FROM rigester WHERE id='$id'";
       $result = mysqli_query($con, $userdetele);
    }

   
    //$userdetele = "DELETE FROM rigester WHERE id='$id'";


    $userlist ="SELECT * FROM `rigester` order by id DESC ";
    $result = mysqli_query($con, $userlist);

    if (mysqli_num_rows($result) > 0) { 
    // output data of each row
    while($row = mysqli_fetch_assoc($result)) {


      ?>
       <tr>
      <td>
       <?php echo $row["id"] ?>
      </td>

      <td>
       <?php echo $row["f_name"] ?>
      </td>

      <td>
       <?php echo $row["l_name"] ?>
      </td>

      <td>
       <?php echo $row["optradioa"] ?>
      </td>

      <td>
       <?php echo $row["email"] ?>
      </td>
      <td>
        <?php
          if($row["profileimage"]){
            echo '<img src="img/'.$row["profileimage"].'" width="50"></td>';
          }
          else{
            echo '<img src="img/avatar.png" width="50">';
          }
        ?>
        
      <td>
        <a href="http://localhost/workphp/userlist.php?del=<?php echo $row["id"];?>" class="btn btn-danger">Delete</a>
      </td>

      <td>
        <a href="http://localhost/workphp/update-profile.php?edit=<?php echo $row["id"];?>" class="btn btn-primary">Edit</a>
      </td>

    </tr>
      <?php
        

    }
} else {
    echo "0 results";
}


   ?>

</table>
</div>
</div>
</div>
</div>
</section>

<?php include('footer.php') ?>