<?php
include("users.php");
$email=$_SESSION['email'];
$profile=new users;
$profile->profile($email);

?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>HOME</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body>

<div class="container">
  <h2>Online Quiz</h2>
  <ul class="nav nav-tabs">
    <li><a data-toggle="tab" href="#menu1">Profile</a></li>
    <li style="float:right"><a data-toggle="tab" href="#menu3">Logout</a></li>
  </ul>

  <div class="tab-content">
    <div id="menu1" class="tab-pane fade">
      <h3>Showing Profile</h3>
      <table class="table">
    <thead>
      <tr>
        <th>ID</th>
        <th>Name</th>
        <th>Email</th>
        <th>Image</th>
      </tr>
    </thead>
    <tbody>
        <?php  
        foreach($profile->data as $pro)
        {
        ?>
      <tr>
        <td><?php echo $pro['id'];?></td>
        <td><?php echo $pro['name'];?></td>
        <td><?php echo $pro['email'];echo $pro['img'];?></td>
        <td><img src="img/<?php echo $pro['img'] ; ?>"widht="90px" height="80px" /></td>
      </tr>
    </tbody>
   <?php  }?>
  </table>
    </div>
  </div>
</div>

</body>
</html>
