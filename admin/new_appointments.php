<?php
        include('Sidebar.php');
    ?>
    <br>
    <br>


   </div>
   <h2 style="margin-left: 30%; color: blue"> New Appointments List</h2>
    <div class="col-sm-8" style=" padding-left: 10%; color: black; overflow: scroll;">
      <div class="col-md-8" id="md-8">
			
      <?php
      $sql = "SELECT * FROM appointments WHERE Status = 'Waiting' order by Id DESC";
        $result = mysqli_query($conn, $sql);
          while ($row = mysqli_fetch_array($result)) { 
            $userid = $row['UserId'];
            $query = "SELECT * FROM users WHERE Id = '$userid'";
            $runQuery = mysqli_query($conn, $query);
            $userinfo = mysqli_fetch_assoc($runQuery);
            $name = $userinfo['FirstName']." ".$userinfo['LastName'];
            $phone = $userinfo['PhoneNumber'];
            $email = $userinfo['Email'];
            $city = $userinfo['City'];
            $gender = $userinfo['Gender'];
            ?>
                <div class="well">
                  <h3><strong><?php echo $name." "; ?></strong><span style="font-size: 20px">(<?php echo $email.", ".$phone; ?>)</span></h3>
                  <p style="margin-top: -20px"><strong>Gender:</strong><?php echo " ".$gender.", "; ?><strong>City:</strong><?php echo " ".$city; ?></p>
                </div>
                 <table class="table" id="view_all_users">
                  <h5 style="color: purple"><strong>Appointment Detail</strong><span style="font-size: 20px">(Status:<?php echo " ".$row['Status']; ?>)</span></h5>
                    <tr>
                      <th>Id</th>
                      <td><?php echo $row['Id']; ?></td>
                      <th>Date</th>
                      <td><?php echo $row['AppointmentDate']; ?></td>
                      <th>Time</th>
                      <td><?php echo $row['AppointmentTime']; ?></td>
                      <td colspan="2"><a href="#messageForm"><button style="color: blue" onclick="showMsgForm()">Reply This Appointment</button></a></td>
                    </tr>
                    <tr>
                      <th>Additional Information</th>
                      <td colspan="5"><?php echo $row['AdditionalInfo']; ?></td>
                      <td colspan="2"><a href="reply_appointment.php?id=<?php echo $row['Id']; ?>"> <button  style="color: blue">Delete This Appointment</button></a> </td>
                    </tr>
                 </table>
                 <div id="messageForm" style="display: none">
                 <h5 style="margin-left: 20%; color: green"><strong>Type Message Here</strong></h5>  
                <form style="height: 100px; width: 350px; border: 1px solid green; margin-left: 20%" action="reply_user.php?id=<?php echo $row['Id'] ?>" method="post">
                  <textarea name="message" style="width: 100%; height: 100%"></textarea>
                  <button type="submit" style=" height: 40px; background: blue; color: white" name="sendAppointmentMsg">Send Message</button>
                </form> </div> <br>
                <?php } ?>
         <br/> 
         <script type="text/javascript">
            function showMsgForm()
            {
              var x = document.getElementById("messageForm");
                if (x.style.display === "none") {
                x.style.display = "block";
              }
              else
              {
                x.style.display = "none";
             }
           }
          </script>
    </div>
  </div>
</div>
