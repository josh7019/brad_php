<?php
if (!isset($_FILES["upload"])) exit(0);
//notice:檔案是由apache管理  非php   $_FILES["upload"]是處理狀態
//若要上傳大檔案 需修改php.ini     memory_limit > post_limit  > upload_limit
$upload = $_FILES["upload"];
var_dump($upload);
foreach ($upload as $k => $value) {
    echo "<br>$k=>$value";
}
if (!is_uploaded_file($upload["tmp_name"])) exit("upload fail");
if ($upload['error'] == 0) {
    if (move_uploaded_file($upload["tmp_name"], "upload/{$upload['name']}")) {
        echo "upload ok";
    } else {
        echo "upload fail";
    }
}

?>