<?php
include '../../Upload.php';
$upload = new Upload;

$upload->setINI(
    [
        "file_uploads" => 1,
        "display_errors" => 1,
        "log_errors" => 1,
        "error_log" => "error_logs/php_scripts_error.log",
        "upload_max_filesize" => "10M",
        "max_file_uploads" => "10",
        "post_max_size" => "50M",
        "max_input_time" => "60",
        "memory_limit" => "35M",
        "max_execution_time" => "30",
    ]
);

$upload->setController("../../");
$upload->setUploadController($upload->sanitize($_SERVER['PHP_SELF']));
if (isset($_POST['upload'])) {
    $inputs = $upload->fix_array($_FILES['file']);
    foreach ($inputs as $file) {
        $upload->factory($file);
    }
}
$resp = $upload->getLogs();
$files = $upload->get_files();
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <title>BlackUpload Test</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <style>
    .upload_inputs{
        border: 1px black solid;
        padding-top: 10px;
        padding-bottom: 10px;
        padding-left: 10px;
        width:380px;
        display: block;
    }

    .upload_input{

		margin: 5px 5px 5px 5px;

	}
    .upload_info{
        padding-top: 10px;
    }
    </style>
  </head>
  <body>
    <h1>BlackUpload Simple Example</h1>
    <p>Simple File sharing script using BlackUpload as an API</p>

   <div class="upload_inputs">
	   <?php echo $upload->generateMultiInput(3); ?>
   </div>

    <div class="upload_info">
        <?php if (isset($resp)) {foreach ($resp as $msg) {if ($msg !== 5) {echo $upload->sanitize($upload->getMessage($msg)) . "<br />";}}}?>
    </div>

    <?php if (isset($_FILES['file'])): ?>
		<?php foreach ($files as $file): ?>
			<ul>
			  <li>
				  File Name:
				  <?php echo $file->filename; ?>
			  </li>
			  <li>
				  File size:
				  <?php echo $file->filesize; ?>
			  </li>
			  <li>
				  Upload Date:
				  <?php echo $file->uploaddate; ?>
			  </li>
			  <li>
				  Download Link:
				  <a href="<?php echo $file->downloadurl; ?>" download>Download</a>
			  </li>
			</ul>
		<?php endforeach;?>
    <?php endif;?>
  </body>
</html>
