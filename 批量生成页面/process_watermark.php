<?php
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $imageUrl = $_POST['image'];
    $filename = $_POST['filename'];

    // 修改图片名称
    $newFilepath = '/path/to/save/images/' . $filename;
    
    // 模拟下载操作
    header('Content-Type: application/octet-stream');
    header('Content-Disposition: attachment; filename="' . $filename . '"');
    header('Content-Length: ' . filesize($imageUrl));
    readfile($imageUrl);

    // 关闭当前窗口
    echo "<script>window.close();</script>";
    exit;
}
?>
