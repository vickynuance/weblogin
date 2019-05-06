
<!DOCTYPE html>
<html lang="en">
<head>
  <?php
   $replaces = str_replace(".php","",$_SERVER['PHP_SELF']);
   $title = str_replace("/workphp/","",$replaces);

  if ($title == 'index') {
    $home = ('Home');
  }
  else{
    $home = $title;
  }

  ?>

  <title><?php echo ucfirst($home); ?></title>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="css/bootstrap.min.css">
  <link rel="stylesheet" href="css/style.css">
  <link href="https://fonts.googleapis.com/css?family=Saira:100,200,300,400,500,600,700,800,900" rel="stylesheet">
  <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
  <link rel="icon" href="https://pngimage.net/wp-content/uploads/2018/05/favicon-32x32-png-2.png" sizes="16x16 32x32" type="image/png"> 
</head>
<body>
<section class="topbars">
  <div class="container">
    <div class="row">
      <div class="col-sm-6">
        
      </div>
      <div class="col-sm-6">
        <ul class="custom_ul">
          <li><a href="javascript:void(0);" id="demo"></a></li>
          <li><a href="javascript:void(0);" id="demonew"></a></li>
        </ul>
      </div>
    </div>
  </div>
</section>
<nav class="navbar navbar-inverse cus">
  <div class="container">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span> 
      </button>
      <a class="navbar-brand" href="index.php">Login System</a>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav">
        <li class="active"><a href="index.php">Home</a></li>
        <!-- <li><a href="userlist.php">User list</a></li>
        <li><a href="update-profile.php">Update Profiles</a></li> -->
        <li><a href="">About us</a></li>

      </ul>
      <ul class="nav navbar-nav navbar-right">
        <?php
        //print_r($_SESSION);
          if (isset($_SESSION["f_name"])) {

            echo '<li class="dropdown"><a  data-toggle="dropdown" href="#">';
            if (isset($_SESSION["profileimage"]) && ($_SESSION["profileimage"]) !='') {
             echo '<img src="img/'.$_SESSION["profileimage"].'" width="20">' ;
             
            }
            else{
              echo '<img src="img/avatar.png" width="25">';
            }
            
            echo ' Welcome ( '.$_SESSION["f_name"].' ) <span class="caret"></span></a> <ul class="dropdown-menu"><li><a href="userlist.php">User list</a></li><li><a href="update-profile.php">Update Profiles</a></li></ul></li> <li><a href="logout.php"><i class="fa fa-power-off" aria-hidden="true"></i> Logout</a></li> ';
          }

          else{

             echo '<li><a href="register.php"><span class="glyphicon glyphicon-user"></span> Sign Up</a></li>
        <li><a href="login.php"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>';
          }

        ?>
      </ul>
    </div>
  </div>
</nav>
