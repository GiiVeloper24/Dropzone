<?php
$storeFolder = 'uploads';
if (!empty($_FILES)) {
	if(is_array($_FILES['myFile'])){
		$files = $_FILES['myFile'];
		for($i=0;$i<count($files['name']);$i++){
			$tempFile = $_FILES['myFile']['tmp_name'][$i];
		      
		    $targetPath = dirname( __FILE__ ) .DIRECTORY_SEPARATOR. $storeFolder .DIRECTORY_SEPARATOR;  //4
		     
		    $targetFile =  $targetPath. $_FILES['myFile']['name'][$i];
		 
		    move_uploaded_file($tempFile,$targetFile);
		}

	}else{
		$tempFile = $_FILES['myFile']['tmp_name'];
	      
	    $targetPath = dirname( __FILE__ ) .DIRECTORY_SEPARATOR. $storeFolder .DIRECTORY_SEPARATOR;  //4
	     
	    $targetFile =  $targetPath. $_FILES['myFile']['name'];
	 
	    move_uploaded_file($tempFile,$targetFile);
	}     
}
?> 