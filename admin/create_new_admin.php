<?php
        include('Sidebar.php');
    ?>
    <br>
    <br><?php

    // Include config file

    require_once 'Connection.php';
    if (isset($_POST['register'])) {
        $username = mysqli_real_escape_string($conn, $_POST['username']);
        $role     = mysqli_real_escape_string($conn, $_POST['role']);
        $password = mysqli_real_escape_string($conn, $_POST['password']);
        $confirm_password = mysqli_real_escape_string($conn, $_POST['confirm_password']);
        if ($password == $confirm_password) {
            $sql = "INSERT INTO admin (Username, Role, Password) VALUES ('$username', '$role', '$password')";
            $runQuery = mysqli_query($conn, $sql);
            if (!$runQuery) {
                echo ("<script LANGUAGE='JavaScript'>
                alert('Registeration Failed! Try Again!')
                window.location.href='create_new_admin.php';
              </script>");
            }
            else
            {
                echo ("<script LANGUAGE='JavaScript'>
                alert('Registeration Successful')
                window.location.href='index.php';
              </script>");
            }
        }
        else
        {
            echo ("<script LANGUAGE='JavaScript'>
                alert('Passwords do not match!')
                window.location.href='create_new_admin.php';
              </script>");
        }
    }
 ?>

     

    <!DOCTYPE html>
<html lang="en">
<head>

  <!-- Basic Page Needs
  –––––––––––––––––––––––––––––––––––––––––––––––––– -->
  <meta charset="utf-8">
  <title>Register New Admin Page</title>
  <meta name="description" content="">
  <meta name="author" content="">

  <!-- Mobile Specific Metas
  –––––––––––––––––––––––––––––––––––––––––––––––––– -->
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- CSS
  –––––––––––––––––––––––––––––––––––––––––––––––––– -->
  <link rel="stylesheet" href="css/normalize.css">
  <link rel="stylesheet" href="css/skeleton.css">

  <!-- Favicon
  –––––––––––––––––––––––––––––––––––––––––––––––––– -->
  <link rel="icon" type="image/png" href="images/favicon.png">

</head>
<body style="background: seagreen; color: black">
<div class="container" style="background:mediumseagreen; width:600px;height: 570px;">
    
<br>
            <h3 style="padding-left:123px"><strong> Register New Admin</strong></h3>

            <p style="padding-left:140px"><strong>Please fill this form to create New Admin</strong></p>

            <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post" style="padding-left: 100px;">

                <div class="form-group">
                    <label>Username</label>
                    <input type="text" name="username" class="form-control" placeholder="Enter Your Username" style="width: 400px; max-width: 100%">
                </div>
                <!-- Admin role -->
                  <div class="form-group">
                    <label>Assign a Role</label>
                    <select class="select2" name="role" style="width: 400px;background: lemonchiffon;">
                        <option value="">Select Role</option>
                        <option value="1">Admin</option>
                        <option value="2">Normal</option>
                    </select>
                </div>
                <div class="form-group">
                    <label>Password</label>
                    <input type="password" name="password" class="form-control" placeholder="Create Your Password" style="width: 400px; max-width: 100%;background:lemonchiffon;">
                </div>
                <div class="form-group">
                    <label>Confirm Password</label>
                    <input type="password" name="confirm_password" class="form-control" placeholder="Confirm Your Password" style="width: 400px; max-width: 100%;background: lemonchiffon;">
                </div>
                <div class="form-group">
                    <button type="submit" name="register" class="btn btn-primary" style="background:skyblue; color:black;">Register</button>
                </div>

                <p>Already have an account? <a href="login.php" style="color:black;"><strong>Login here</strong></a></p>

            </form>
        </div>    
</div>
    </body>

    </html>


    <!-- <?php
    include('footeradmin.php');
    ?>
 -->

