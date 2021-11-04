<?php

    // Include Connection file

    require_once 'Connection.php';

     

    // Define variables and initialize with empty values

    $username = $password = $confirm_password = "";

    $username_err = $password_err = $confirm_password_err = "";

     

    // Processing form data when form is submitted

    if($_SERVER["REQUEST_METHOD"] == "POST"){

     

        // Validate username

        if(empty(trim($_POST["username"]))){

            $username_err = "Please enter a username.";

        } else{

            // Prepare a select statement

            $sql = "SELECT id FROM users WHERE username = :username";

            

            if($stmt = $pdo->prepare($sql)){

                // Bind variables to the prepared statement as parameters

                $stmt->bindParam(':username', $param_username, PDO::PARAM_STR);

                

                // Set parameters

                $param_username = trim($_POST["username"]);

                

                // Attempt to execute the prepared statement

                if($stmt->execute()){

                    if($stmt->rowCount() == 1){

                         $username_err = "This username is already taken.";

                    } else{

                        $username = trim($_POST["username"]);

                    }

                } else{

                    echo "Oops! Something went wrong. Please try again later.";

                }

            }

             

            // Close statement

            unset($stmt);

        }

        

        // Validate password

        if(empty(trim($_POST['password']))){

            $password_err = "Please enter a password.";     

        } elseif(strlen(trim($_POST['password'])) < 6){

            $password_err = "Password must have atleast 6 characters.";

        } else{

            $password = trim($_POST['password']);

        }

        

        // Validate confirm password

        if(empty(trim($_POST["confirm_password"]))){

            $confirm_password_err = 'Please confirm password.';     

        } else{

            $confirm_password = trim($_POST['confirm_password']);

            if($password != $confirm_password){

                $confirm_password_err = 'Password did not match.';

            }

        }

        

        // Check input errors before inserting in database

        if(empty($username_err) && empty($password_err) && empty($confirm_password_err)){

            

            // Prepare an insert statement

            $sql = "INSERT INTO users (username, password) VALUES (:username, :password)";

             

            if($stmt = $pdo->prepare($sql)){

                // Bind variables to the prepared statement as parameters

                $stmt->bindParam(':username', $param_username, PDO::PARAM_STR);

                $stmt->bindParam(':password', $param_password, PDO::PARAM_STR);

                

                // Set parameters

                $param_username = $username;

                $param_password = password_hash($password, PASSWORD_DEFAULT); // Creates a password hash

                

                // Attempt to execute the prepared statement

                if($stmt->execute()){

                    // Redirect to login page

                    header("location: login.php");

                } else{

                    echo "Something went wrong. Please try again later.";

                }

            }

             

            // Close statement

            unset($stmt);

        }

        

        // Close connection

        unset($pdo);

    }

    ?>

     

    <!DOCTYPE html>
<html lang="en">
<head>

  <!-- Basic Page Needs
  –––––––––––––––––––––––––––––––––––––––––––––––––– -->
  <meta charset="utf-8">
  <title>Your page title here</title>
  <meta name="description" content="">
  <meta name="author" content="">

  <!-- Mobile Specific Metas
  –––––––––––––––––––––––––––––––––––––––––––––––––– -->
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- FONT
  –––––––––––––––––––––––––––––––––––––––––––––––––– -->
  <link href="https://fonts.googleapis.com/css?family=Raleway:400,300,600" rel="stylesheet" type="text/css">

  <!-- CSS
  –––––––––––––––––––––––––––––––––––––––––––––––––– -->
  <link rel="stylesheet" href="css/normalize.css">
  <link rel="stylesheet" href="css/skeleton.css">

  <!-- Favicon
  –––––––––––––––––––––––––––––––––––––––––––––––––– -->
  <link rel="icon" type="image/png" href="images/favicon.png">

</head>
<body style="background: lightseagreen;">
<div class="container">
        <br>
            <br>

            <h2 style="padding-left: 300px;">Sign Up</h2>

            <p style="padding-left: 300px">Please fill this form to create an account</p>

            <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post" style="padding-left: 300px;">

                <div class="form-group <?php echo (!empty($username_err)) ? 'has-error' : ''; ?>">

                    <label>Username:<sup style="color:darkred;">*</sup></label>

                    <input type="text" name="username"class="u-full-width" value="<?php echo $username; ?>" style="background: lemonchiffon;width: 400px;">

                    <p><?php echo $username_err; ?></p>

                </div>    

                <div class="form-group <?php echo (!empty($password_err)) ? 'has-error' : ''; ?>">

                    <label>Password:<sup style="color:darkred;">*</sup></label>

                    <input type="password" name="password" class="u-full-width" value="<?php echo $password; ?>"style="background: lemonchiffon; width: 400px;">

                    <p><?php echo $password_err; ?></p>

                </div>

                <div class="form-group <?php echo (!empty($confirm_password_err)) ? 'has-error' : ''; ?>">

                    <label>Confirm Password:<sup style="color:darkred;">*</sup></label>

                    <input type="password" name="confirm_password" class="u-full-width" value="<?php echo $confirm_password; ?>"style="background: lemonchiffon; width: 400px;">

                    <p><?php echo $confirm_password_err; ?></p>

                </div>

                <div class="form-group">

                    <input type="submit" class="btn btn-primary" value="Submit" style="background: green; color: white;" >

                    <input type="reset" class="btn btn-default" value="Reset" style="background: green; color:white;">

                </div>

                <p>Already have an account? <a href="login.php" style="color: black;">Login here</a></p>

            </form>

        </div>    
</div>
    </body>

    </html>
