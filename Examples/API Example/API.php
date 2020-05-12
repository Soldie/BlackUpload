<?php
header("Access-Control-Allow-Origin: *");
header("Content-Type: application/json");

include '../../Upload.php';
$upload = new Upload;

$upload->setINI(["file_uploads" => 1,]);

$upload->setController("../../");
$input = $upload->fix_array($_FILES['file']);
foreach($input as $file){
	if($upload->factory($file)){
		$resp = true;
	}
}

if(isset($resp) && $resp === true){
echo json_encode($upload->get_files());
}
