<?php
// admin/api/get-components.php
header('Content-Type: application/json');
header('Access-Control-Allow-Origin: *');
require_once '../core/Studio.php'; // 引入 SDK

try {
    $studio = new Studio(); // 实例化
    $list = $studio->getComponents(); // 调用方法
    
    echo json_encode(['status' => 'success', 'components' => $list]);
} catch (Exception $e) {
    echo json_encode(['status' => 'error', 'message' => $e->getMessage()]);
}
?>