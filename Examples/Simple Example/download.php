<?php
include '../../Upload.php';

$upload = new Upload;
$files = $upload->getUploadDirFiles();
$filename = $_GET['name'];
$array = ["..",".","index.php",".htaccess"];
foreach($files as $file){
	if(!in_array($file,$array)){
		echo sha1($file) . "<br />";
	}
}
