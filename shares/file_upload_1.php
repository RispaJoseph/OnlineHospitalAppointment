<?php
	$fldr = "../uploads";
	$allowedExts = array("jpg", "gif", "jpeg");
	$extension = pathinfo($_FILES['file']['name'], PATHINFO_EXTENSION);
	
	$size = $_FILES["file"]["size"];
	if($_FILES["file"]["size"] > 5000000){
		die("File Size is ".($size/1000000)."MB, Maximum allowed size is 5MB");
	}
	if ((($_FILES["file"]["type"] == "image/jpg")
	|| ($_FILES["file"]["type"] == "image/jpeg")
	|| ($_FILES["file"]["type"] == "image/gif")
	|| ($_FILES["file"]["type"] == "image/tif"))

	&& ($_FILES["file"]["size"] <= 50000000)
	&& in_array($extension, $allowedExts)){
		if ($_FILES["file"]["error"] > 0)
		{
			echo "Return Code: " . $_FILES["file"]["error"] . "<br />";
		}
		else
		{
		if (file_exists("$fldr/" . $_FILES["file"]["name"]))
		{
			echo $_FILES["file"]["name"] . " already exists. ";
		}
		else
		{
			move_uploaded_file($_FILES["file"]["tmp_name"],
			"$fldr/" . $_FILES["file"]["name"]);

			$mv_name = $_FILES["file"]["name"];
			$mv_type = $_FILES["file"]["type"];
			$mv_size = $_FILES["file"]["size"];

			echo "saved";
		}
		}
	}
	else
	{
		echo "Invalid file";
	}

?>