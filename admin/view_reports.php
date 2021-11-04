<?php
        include('Sidebar.php');
    ?>
    <br>
    <br>

</style>
   </div>
   <div class="container" style="background:mediumseagreen;width: 800px;height: 100%;"><br>
   <h2 style="margin-left: 18%; color: black;"><strong>Ad Reports Information List</strong></h2>
    <div class="col-sm-8" style=" padding-left: 4%; color: black; ">
      <div class="col-md-8" id="md-8" style="width: 870px;">
			 <?php
        $sql = "SELECT * FROM reports";
        $runQuery = mysqli_query($conn, $sql);    
        while ($row = mysqli_fetch_array($runQuery)) {
          $reportText = $row['ReportText'];
          $adid = $row['AdId'];
          $query1 = "SELECT * FROM ads WHERE AdId = '$adid'";
          $runQuery1 = mysqli_query($conn, $query1);
          $result1 = mysqli_fetch_array($runQuery1);
          $adTitle = $result1['Title'];
          $userid = $result1['UserId'];
          //Fetching user's details
          $query2 = "SELECT * FROM users WHERE UserId = '$userid'";
          $runQuery2 = mysqli_query($conn, $query2);
          $result2 = mysqli_fetch_array($runQuery2);
          $user_name = $result2['FirstName']." ".$result2['LastName'];
          $userid = $result1['UserId'];
          //Fetching name of the person who has posted this report
          $personId = $row['UserId'];
          $query3 = "SELECT * FROM users WHERE UserId = '$personId'";
          $runQuery3 = mysqli_query($conn, $query3);
          $result3 = mysqli_fetch_array($runQuery3);
          $report_By = $result3['FirstName']." ".$result2['LastName'];
          ?>
     
                 <table class="table" id="view_all_users"style="border-style:ridge;border-color: seagreen;">
                    <tr style="border-top:ridge;border-color: seagreen;">
                      <th style="text-align: center;border-top:ridge;border-color: seagreen;">Ad Title</th>
                      <th style="border-top:ridge;border-color: seagreen;">Ad Posted By</th>
                      <th style="border-top:ridge;border-color: seagreen;">Report Posted By</th>

                      <td rowspan="3" style="border-top:ridge;border-color: seagreen;">
                        <a href="delete.php?reportid=<?php echo $row['ReportId'] ?>">
                          <button id="adminButton" style="background: skyblue;color:black;">Delete Report</button>
                        </a>
                        <br><br>
                        <a href="../AdDetail.php?adid=<?php echo $row['AdId'] ?>">
                          <button type="button" id="adminButton" style="background: skyblue;color: black;">View Ad</button>
                        </a>
                    </tr>
                    <tr style="border-style:ridge;border-color: seagreen;">
                      <td style="border-top:ridge;border-color: seagreen;"><?php echo $adTitle; ?></td>
                      <td style="border-top:ridge;border-color: seagreen;"><?php echo $user_name; ?></td>
                      <td style="border-top:ridge;border-color: seagreen;"><?php echo $report_By; ?></td>
                      
                    </tr>
                    <tr>
                      <td colspan="3"style="border-top:ridge;border-color: seagreen;"><?php echo $reportText; ?></td>
                    </tr>
                 </table>
         <br/> 
         <?php } ?>  
    </div>
  </div>
</div>
</div>