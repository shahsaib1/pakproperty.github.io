<?php
        include('Sidebar.php');
    ?>
    <br>
    <br>


   </div>
   <h2 style="margin-left: 30%; color: blue"> All Products List</h2>
    <div class="col-sm-8" style=" padding-left: 10%; color: black; overflow: scroll;">
      <div class="col-md-8" id="md-8">
			
      <?php
      $sql = "SELECT * FROM products order by Id DESC";
        $result = mysqli_query($conn, $sql);
          while ($row = mysqli_fetch_array($result)) { ?>
              <div style="margin-left: 20%">
                
                <table style="width: 400px">
                  <tr>
                    <td colspan="2">
                      <?php echo "<img src='"."../".$row['ImagePath']."' height='300' width='240' class='img-responsive'/>"; ?>
                    </td>
                  </tr>
                  <tr>
                    <th>Product Name</th>
                    <td><?php echo $row['ProductName']; ?></td>
                  </tr>
                  <tr>
                    <th>Product Price</th>
                    <td><?php echo $row['ProductPrice']; ?></td>
                  </tr>
                  <tr>
                    <th>Product Description</th>
                    <td><?php echo $row['ProductDescription']; ?></td>
                  </tr>
                  <tr>
                    <td colspan="2">
                      <a href="delete_product.php?id=<?php echo $row['Id']; ?>"><button style="background: purple; color: white; margin-left: 20%">Delete This Product</button></a>
                    </td>
                  </tr>
                </table>
              </div>
                 
                <?php } ?>
         <br/>   
    </div>
  </div>
</div>