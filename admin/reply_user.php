<?php
     include('Sidebar.php');
if(isset($_GET['id'])) {
  if (isset($_POST['sendAppointmentMsg'])) {
        $id = $_GET['id'];
        $message = $_POST['message'];
        $status = "Replied";
        $query = "update appointments set status = '$status', Message = '$message', MsgTime = CURRENT_TIMESTAMP where Id = '$id'";
        $runQuery = mysqli_query($conn, $query);
        if($runQuery) {
          echo ("<script LANGUAGE='JavaScript'>
                alert('Message Sent Successfully')
                window.location.href='index.php';
              </script>");
            } else {
                echo ("<script LANGUAGE='JavaScript'>
                alert('Error Sending Message')
                window.location.href='index.php';
              </script>");
            }
    }
    elseif (isset($_POST['sendOrderMsg'])) {
      $productid = $_GET['id'];
      $userid = $_POST['userid'];
        $message = $_POST['message'];
        $status = "Replied";
        $query = "INSERT INTO messages (UserId, ProductId, Message) VALUES ('$userid', '$productid', '$message')";
        $runQuery = mysqli_query($conn, $query);
        if($runQuery) {
          echo ("<script LANGUAGE='JavaScript'>
                alert('Message Sent Successfully')
                window.location.href='index.php';
              </script>");
            } else {
                echo ("<script LANGUAGE='JavaScript'>
                alert('Error Sending Message')
                window.location.href='index.php';
              </script>");
            }
    }
}
?>

