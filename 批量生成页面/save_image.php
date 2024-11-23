<?php

if (isset($_POST['image_url']) && isset($_POST['filename'])) {
    $image_url = $_POST['image_url'];
    $filename = $_POST['filename'];
    
    // 设置保存路径
    $save_path = __DIR__ . '/img/' . $filename;

    // 下载图片并保存
    $image_content = file_get_contents($image_url);
    if ($image_content === false) {
        echo json_encode(['status' => 'error', 'message' => '下载图片失败']);
        exit;
    }

    // 保存文件
    if (file_put_contents($save_path, $image_content) !== false) {
        echo json_encode(['status' => 'success']);
    } else {
        echo json_encode(['status' => 'error', 'message' => '保存文件失败']);
    }
} else {
    echo json_encode(['status' => 'error', 'message' => '缺少必要参数']);
}
?>
