    <?php
    
        include('Sidebar.php');


       if (!isset($_SESSION['user_id']))
     {
        header('location:login.php');       
    }

    ?>
    <br>
    <br>
   <br><br><br><br>

    <h1 style="color: wheat; margin-left: 100px; margin-right: 100px; text-align: center;"> Admin Panel</h1><h3 style="color: wheat; margin-left: 100px; margin-right: 100px; text-align: center;">Welcome To Admin Panel 
      <br>You Can Use The Side Bar Menus <br> To Perform Different Activities</h3>

 <br><br><br><br><br><br><br>
    <!-- 
    <?php
    /*include('footeradmin.php');*/
    ?> -->
