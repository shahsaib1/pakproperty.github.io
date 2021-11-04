<?php
include('Connection.php');
if(isset($_POST['btn_upload']))
{
	if(isset($_FILES['file_img']) && !empty($_FILES['file_img']['name'])) { 
		for($i = 0; $i < count($_FILES['file_img']['name']); $i++)
		{
			$filetmp = $_FILES["file_img"]["tmp_name"][$i];
			$filename = $_FILES["file_img"]["name"][$i];
			$filetype = $_FILES["file_img"]["type"][$i];
			$fileSize=$_FILES['file_img']['size'][$i];
			$fileError=$_FILES['file_img']['error'][$i];
			$fileType=$_FILES['file_img']['type'][$i];
			$fileExt=explode('.', $filename);
			$fileActualExt=strtolower(end($fileExt));
			$allowed = array('jpg', 'jpeg', 'png');
			if (in_array($fileActualExt, $allowed)) {
				if ($fileError === 0) {
					if ($fileSize <5000000) {
						$fileNameNew = uniqid('', true).'.'.$fileActualExt;
						$filepath = 'uploads/'.$fileNameNew;
						move_uploaded_file($filetmp,$filepath);
						$sql = "INSERT INTO upload_img (img_name,img_path,img_type) VALUES ('$fileNameNew','$filepath','$filetype')";
						$result = mysqli_query($conn, $sql);
					}
					else
					{

					}
				}
				else
				{

				}
			}
			else
			{

			}
		
		
		
		}
	}
}
?>