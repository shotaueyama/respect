<?php

$picture_id = isset($_GET['id']) ? (int) $_GET['id'] : 0;
$fallback_path = __DIR__ . '/img/common/item_1.png';

if ($picture_id <= 0) {
    header('Content-Type: image/png');
    readfile($fallback_path);
    exit;
}

$connection = new mysqli('mysql2.xbiz.ne.jp', 'remake_wp6', '55Quadrajp', 'remake_respect');
if ($connection->connect_errno) {
    header('Content-Type: image/png');
    readfile($fallback_path);
    exit;
}

$connection->set_charset('utf8mb4');

$statement = $connection->prepare('SELECT picture_bin, mime_type FROM picture WHERE picture_id = ?');
if ($statement === false) {
    $connection->close();
    header('Content-Type: image/png');
    readfile($fallback_path);
    exit;
}

$statement->bind_param('i', $picture_id);

if (!$statement->execute()) {
    $statement->close();
    $connection->close();
    header('Content-Type: image/png');
    readfile($fallback_path);
    exit;
}

$statement->store_result();

if ($statement->num_rows <= 0) {
    $statement->close();
    $connection->close();
    header('Content-Type: image/png');
    readfile($fallback_path);
    exit;
}

$meta = $statement->result_metadata();
$row = array();
$params = array();

while ($field = $meta->fetch_field()) {
    $row[$field->name] = null;
    $params[] = &$row[$field->name];
}

call_user_func_array(array($statement, 'bind_result'), $params);
$statement->fetch();

$image_data = isset($row['picture_bin']) ? $row['picture_bin'] : null;
$image_type = !empty($row['mime_type']) ? $row['mime_type'] : 'image/jpeg';

$statement->close();
$connection->close();

if (!$image_data) {
    header('Content-Type: image/png');
    readfile($fallback_path);
    exit;
}

header('Content-Type: ' . $image_type);
header('Cache-Control: public, max-age=86400');
echo $image_data;
