![Logo](https://h.top4top.io/p_1531l8fhu1.png)

![GradeA](https://www.code-inspector.com/project/8000/status/svg)  [![License: MIT](https://img.shields.io/badge/License-MIT-yellow.svg)](https://opensource.org/licenses/MIT) ![Version](https://badgen.net/badge/version/v2.5/blue)

# BlackUpload PHP Library

PHP Library to help you build your own file sharing website.

Comes with more then 20 features and you can setup it in less then 5 minutes using pre-made simple examples.

The class has more then 5 protection levels to make your life better and your server secure.

You can use it as an API for your website or add a database wrapper to it and create a whole file sharing service.

Developed using PHP and comes with 3 main examples to show you how this PHP Class work

1. Real Life Example with all filters and security levels enabled

2. Simple Test Example with multiple file upload enabled and no filters to show you how it works

3. Simple API without Auth with all filters enabled to show you how to use it as a service 


# Features

1. Simple to use and implement
2. 4 Protection levels
   + Mime Type
   + Extensions
   + Size
   + Forbidden names
3. Image Dimenstion Checker
4. Image Validator
5. Out Of The Box Functions
6. Multi-File Upload Support
7. Quality [ Grade A ] Code
8. Callbacks Support
   + Single Argument
   + Multiple Arguments
9. Logs System Function
10. File and Dir checker
11. Will Documented and easy to read
12. QR Code Generator
13. Download URL Generator
14. Comes with more then 1 example
15. File information
   + File name
   + File SHA-128 Hash
   + File Size
   + File Upload Date
16. Generate HTML Forms [Single,Multi] Inputs
17. Upload folder creator and protector
18. SHA-128 File name Hashing
19. Error Messages Manager
20. Upload Worker Factory Genertor
21. Easy to setup in less then 5 minutes

# Documentation

## $Upload::setUpload($upload_input)

Function to set the upload input

Example:
```php
$upload->setUpload($_FILES['file']);
```

## $Upload::setController($contoller)
Function to set the controller folder

Controller folder is the folder that contains the .json filters and the Upload.php file

Example:
```php
$upload->setController("../UploadClass/");
```

## $Upload::setUploadController($upload_controller)
Set the upload controller file that contain the upload worker

Example:
```php
$upload->setUploadController("upload.php");
```

## $Upload::setHashName($use_hash)
Set $hash_name to true or false when needed

Use the file hashed name insted of the raw name

Example:
```php
$upload->setHashName(true);
```

## $Upload::enableProtection()
Enable Class Protection

Set All Filters Arrays using JSON Filters

Example: 
```php
$upload->enableProtection();
```

## $Upload::setForbiddenFilter($forbidden_array)
Set Forbidden array to a custom list when needed

Example:
```php
$upload->setForbiddenFilter(
    [
        "shell.php",
        "c99.php",
        "c99.png",
        "malware.jpg"
    ]
);
```

## $Upload::setExtensionFilter($ext_array)
Set Extension array to a custom list when needed

Example:
```php
$upload->setExtensionFilter(
    [
        "png",
        "jpg",
        "zip"
    ]
);
```

## $Upload::setMimeFilter($mime_array)
Set Mime array to a custom list when needed

Example:
```php
$upload->setMimeFilter(
    [
        "image/png"
    ]
);
```

## $Upload::setSizeLimit($size)
Set file size limit when needed

Example:
```php
$upload->setSizeLimit("10 MB");
```

## $Upload::setUploadFolder($folder_name)
Set upload folder when needed

Example:
```php
$upload->setUploadFolder("uploads");
```

## $Upload::checkExtension()
Firewall 1: Check File Extension 

Check if the file extension is whitelisted

Example:
```php
if($upload->checkExtension() === true){
    echo "True";
}
```

## $Upload::getExtension()
Function to return the uploaded file extension

Example:
```php
echo $upload->getExtension();
```


## $Upload::checkMime()
Firewall 2: Check File Mime Type

Check if the file mime type is whitelisted

Example:
```php
if($upload->checkMime() === true){
    echo "True";
}
```

## $Upload::getMime()
Function to get the mime type using the server

Example:
```php
echo $upload->getMime();
```

## $Upload::getFileType()
Function to return the mime type using php default settings

Example:
```php
echo $upload->getFileType();
```

## $Upload::checkForbidden()
Firewall 3: Check if a file name is forbidden or not

Example:
```php
if($upload->checkForbidden() === true){
    echo "Name is not forbidden";
}
```

## $Upload::checkSize()
Firewall 4: Check file size limit

Example:
```php
if($upload->checkSize() === true){
    echo "True";
}
```

## $Upload::getSize()
Return the size of the uploaded file as bytes

Example:
```php
echo $upload->getSize();
```

## $Upload::checkIfEmpty()
Function to check if a the HTML input is empty

Example:
```php
if($upload->checkIfEmpty() === true){
    echo "True";
}
```

## $Upload::getName()
Return the name of the uploaded file

Example:
```php
echo $upload->getName();
```

## $Upload::getTempName()
Function that returns the PHP Generated name for the uploaded file

Example:
```php
echo $upload->getTempName();
```

## $Upload::generateQrCode($qr_size)
Generate a Qr Code of the file download url using Google Charts API

Example:
```php
echo $upload->generateQrCode();
```

## $Upload::generateDownloadLink()
Generate a download link of the uploaded file

Example:
```php
echo $upload->generateDownloadLink();
```

## $Upload::generateForm($multiple)
Function to generate a simple upload form

Example:
```php
$upload->setUploadController("upload.php");
echo $upload->generateForm(false);
```

## $Upload::generateMultiInput($size)
Generate a multi inputs upload form with a defined size

$size is the number of file inputs

Example:
```php
echo $upload->generateMultiInput(10);
```

## $Upload::hashName()
Return an "SHA1 Hashed File Name" of the uploaded file

Example:
```php
echo $upload->hashName();
```

## $Upload::getDate()
Get the date of the uploaded file

Example:
```php
echo date("Y/m/d h:i:s A", $upload->getDate());
```

## $Upload:upload()
Function to upload the file to the server

Example:
```php
$upload->upload();
```

## $Upload::fix_array($file_post)
Fix file input array to make it easy to make it to iterate through it

Example:
```php
$new_input = fix_array($_FILES['file']);
```

## $Upload::create_upload_folder($folder_name)
Function to create and upload folder and secure it

Example:
```php
$upload->create_upload_folder("upload");
```

## $Upload::protect_foler($folder_name)
Function to potect a folder using .htaccess and 403 code in index.php

Example:
```php
$upload->protect_foler("upload");
```

## $Upload::sanitize($value)
Function that helps with input filtering and sanitizing

Example:
```php
echo $upload->sanitize("<script>alert("XSS CODE")</script>");
```

## $Upload::formatBytes($bytes, $precision = 2)
Function that format file bytes to a readable format => Example: 7201450 to ( 7.2 MB )

Example:
```php
echo $upload->formatBytes(7201450);
```

## $Upload::sizeInBytes($size)
Return any type of readable storage size to bytes Example | 7.2 MB => 7201450

Example:
```php
echo $upload->sizeInBytes("10 MB");
```

## $Upload::getUploadDirFiles()
Return the files from the upload folder to view them

Example:
```php
$files = $upload->getUploadDirFiles();
print_r($files);
```

## $Upload::isFile($file_name)
Check if a file exist and it is a real file

Example:
```php
if($upload->isFile("index.php") === true){
   echo "True";
}
```

## $Upload::isDir($dir_name)
Check if a directory exist and it is a real directory

Example:
```php
if($upload->isFile("../uploads") === true){
   echo "True";
}
```

## $Upload::callback($function, $args = null)
Create a callback function when needed after or before an operation

Example:
```php
echo $upload->callback(function ($args){ return $args; },"This is a callback function");
```

## $Upload::add_log($id, $message)
Add a log message to the system logs

Example:
```php
$upload->add_log("log_1","This is a log message");
```

## $Upload::getLogs()
Get all logs from system log to view them

Example:
```php
$messages = $upload->getLogs();
print_r($messages);
```

## $Upload::getLog($log_id)
Get a system log message by an array index id

Example:
```php
echo $upload->getLog("log_1");
```
## $Upload::setFileOverwriting($status)
Set file overwriting to true or false

Example:
```php
$upload->setFileOverwriting(true);
```

## $Upload::setINI($ini_settings)
Set php.ini settings using an array

Example:
```php
$upload->setINI(
    [
        "file_uploads"=>1
    ]
);
```

## $Upload::fixIntegerOverflow($int)
Ensure correct value for big integers | Example: 43204295316111414 => 4.3204295316111E+16

Example:
```php
echo $upload->fixIntegerOverflow(43204295316111414);
```

## $Upload::getJSON()
Get all the uploaded file information in JSON

Example:
```php
echo $upload->getJSON();
```

## $Upload::add_file($json_string)
Function to add a file to the files array

Example:
```php
$upload->add_file($upload->getJSON());
```

## $Upload::get_files()
Function to return all the uploaded files information array

Example:
```php
$files = $get_files();
```

## $Upload::getMessage($index)
Function to get a log message using a message index id

Example:
```php
echo $upload->getMessage(5);
```

## $Upload::includeBootstrap()
Include Bootstrap CSS using Bootstrap CDN

Example:
```php
echo $upload->includeBootstrap();
```

## $Upload::includeJquery()
Include jQuery Javascript files using CDN

Example:
```php
echo $upload->includeJquery();
```

## $Upload::factory($upload_input, $size_limit)
Function to create an upload worker using one line of code and with all firewalls enabled with a size limit of 10MB per uploaded file

Example:
```php
$upload->factory();
```

## $Upload::checkDimenstion()
Check an image dimenstions aginst the class dimenstions

Example:
```php
if($checkDimenstion()){
    echo "This a valid image dimenstion";
}
```

## $Upload::setDimenstion($height, $width)
Function to set class image dimenstions to validate them

Example:
```php
$upload->setDimenstion(512, 512);
```

## $Upload::isImage()
Function to check if uploaded file is an image

Example:
```php
if($upload->isImage()){
    echo "This is a valid image";
}
```
# Screenshots
![Simple Example](https://i.imgur.com/PGLoQzm.png)

![Advanced and Real Life Example](https://i.imgur.com/hukis3T.png)

# How to Use

1. Create a new folder for your project and inside a folder call it "upload"

2. Change folder permissions for "upload" to 777 using cPanel or this bash line
```bash
chmod 777 -R upload
```

2. Download The Project and extract inside that folder

3. Move Upload.php and the json filters inside a folder and call it "BlackUpload"

4. Create a file and call it "index.php"

5. Include Upload.php in your file
```php
include 'BlackUpload/Upload.php';
```

6. Use the proposed snippet code to generate a simple upload form
```php
$upload = new Upload;
$upload->setUploadController($upload->sanitize("upload.php"));
echo $upload->generateForm(false);
```

7. Create a file and call it "upload.php"

8. Include Upload.php in the upload.php file
```php
include 'BlackUpload/Upload.php';
```

9. Use the proposed snippet code to create a simple upload worker using the factory
```php
$upload = new Upload;

$upload->setINI(["file_uploads" => 1]);

$upload->setController("BlackUpload/");

if ($upload->factory()) {
    echo $upload->getJSON();
}
```

10. Enjoy your new file sharing website

# Copyright
Developed by Black.Hacker

Thanks to @Gargron for some functions
