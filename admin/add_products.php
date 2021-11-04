    <?php
        include('Sidebar.php');
    ?>
    <br>
    <br>
    <style type="text/css">
    	.productForm
    	{
    		margin-left: 20%;
    		color: purple;
    	}
    	.productForm input
    	{
    		width: 400px;
    		max-width: 100%;
    	}
    	.productForm button
    	{
    		background: purple;
    		color: white;
    	}
    </style>
	<div class="productForm">
	    <h3><strong>Add Products Here..</strong></h3>
	    <form action="add_productsPHP.php" method="post" enctype="multipart/form-data">
	    	<label>Product Name</label>
	    	<input type="text" name="productName" placeholder="Product Name" required>
	    	<br>
	    	<label>Upload Product Image</label>
	    	<input type="file" name="imageFile" required>
	    	<br>
	    	<label>Product Price</label>
	    	<input type="text" name="productPrice" placeholder="Product Price" required>
	    	<br>
	    	<label>Product Additional Description</label>
	    	<input type="text" name="productDescription" placeholder="Product Description" required>
	    	<br>
	    	<button type="Submit" name="submitProduct">Submit</button>
	    </form>
	</div>


    <?php
    include('footeradmin.php');
    ?>
