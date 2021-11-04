<?php
		$errors = array();
		$uploadedFiles = array();
		$extension = array("jpeg","jpg","png","gif");
		$bytes = 1024;
		$KB = 1024;
		$totalBytes = $bytes * $KB;
		$UploadFolder = "uploads";
				
		$counter = 0;
				
		foreach($_FILES["files"]["tmp_name"] as $key=>$tmp_name){
			$temp = $_FILES["files"]["tmp_name"][$key];
			$name = $_FILES["files"]["name"][$key];
			$fileExt=explode('.', $name);
			$fileActualExt=strtolower(end($fileExt));
			
			if(empty($temp))
			{
				break;
			}
			
			$counter++;
			$UploadOk = true;
			
			if($_FILES["files"]["size"][$key] > $totalBytes)
			{
				$UploadOk = false;
				array_push($errors, $name." file size is larger than the 1 MB.");
			}
			
			if(in_array($fileActualExt, $extension) == false){
				$UploadOk = false;
				array_push($errors, $name." is invalid file type.");
			}
			
			if($UploadOk == true){
					$fileNameNew = uniqid('', true).'.'.$fileActualExt;
					$fileDestination = 'uploads/'.$fileNameNew;
					move_uploaded_file($temp,$fileDestination);
					$total = count(($_FILES["files"]["tmp_name"]));
					array_push($uploadedFiles, $name);
				}
			}
			
			if($counter>0){
				if(count($errors)>0)
				{
					echo "<b>Errors:</b>";
					echo "<br/><ul>";
					foreach($errors as $error)
					{
						echo "<li>".$error."</li>";
					}
					echo "</ul><br/>";
				}
				
				if(count($uploadedFiles)>0){
					echo "<b>Uploaded Files:</b>";
					echo "<br/><ul>";
					foreach($uploadedFiles as $fileName)
					{
						echo "<li>".$fileName."</li>";
					}
					echo "</ul><br/>";
					
					echo count($uploadedFiles)." file(s) are successfully uploaded.";
				}
			}
			else{
				echo "Please, Select file(s) to upload.";
			}
	?>