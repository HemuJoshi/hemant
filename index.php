 <!DOCTYPE html>
<html lang="en">
<head>
  <title>Quiz</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body>
    <br>
<div class="container">
    <div class="row"><br>
    
    </div>
</div>
        <div class="container">
        <div class="row">
            <div class="col-sm-6">
                <div class="panel panel-success">
                    <div class="panel-heading">  <h3>Login form</h3></div>
                       <div class="panel-body">
                           <?php  
                           if(isset($_GET['run']) && $_GET['run']=="failed")
                           {
                               echo"your email or password is incorrect";
                           }
                           ?>
                            <form role="form" action="signin.php" method="post">
                                <div class="form-group">
                                <label for="email">Email:</label>
                                <input type="email" class="form-control" name="e" id="email" placeholder="Enter email">
                                </div>
                                <div class="form-group">
                                <label for="pwd">Password:</label>
                                <input type="password" class="form-control" name="p" id="pwd" placeholder="Enter password">
                                </div>
                                <button type="submit" class="btn btn-default">Submit</button>
                            </form>
                         </div>
                    </div>
                </div>
            
            <div class="col-sm-6">  
                <div class="panel panel-success">
                        <div class="panel-heading">  <h3>Sign Up form</h3></div>
                         <div class="panel-body">
                             <?php
                             if(isset($_GET['run'])&&$_GET['run']=="success")
                                 {
                                 echo "<mark>Successfully Registered</mark>";
                                 }
                                  ?>
                            <form role="form" method="post" action="signup.php" enctype="multipart/form-data" >
                                <div class="form-group">
                                <label for="name">Name:</label>
                                <input type="text" name="n" class="form-control" id="name" placeholder="Enter name">
                                </div>
                                <label for="email">Email:</label>
                                <input type="email" name="e" class="form-control" id="email" placeholder="Enter email">
                                </div>
                                <div class="form-group">
                                <label for="pwd">Password:</label>
                                <input type="password" name="p" class="form-control" id="pwd" placeholder="Enter password">
                                </div>
                                <div class="form-group">
                                <label for="img">Upload Image:</label><br>
                                <input type="file" class="form-control" name="img" id="file"><br>
                                </div>
                                <button type="submit" class="btn btn-default">Submit</button>
                            </form>
                           </div>
                    </div>
             </div> 
        </div>
        </div>
</div>
</body>
</html>