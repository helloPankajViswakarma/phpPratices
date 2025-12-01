<?php

header('Content-Type: application/json; charset=utf-8');
header('Access-Control-Allow-Origin: *');

include "config.php";

$data = json_decode(file_get_contents("php://input"), true);

// ✅ Check input
if (!isset($data['sid']) || empty($data['sid'])) {
    echo json_encode([
        'message' => 'Student ID is required',
        'status'  => false
    ]);
    exit;
}

$student_id = (int)$data['sid']; // ✅ type casting for safety

$sql = "SELECT * FROM student WHERE id = ?";
$stmt = mysqli_prepare($conn, $sql);

mysqli_stmt_bind_param($stmt, "i", $student_id);
mysqli_stmt_execute($stmt);

$result = mysqli_stmt_get_result($stmt);

if (mysqli_num_rows($result) > 0) {
    echo json_encode(mysqli_fetch_all($result, MYSQLI_ASSOC));
} else {
    echo json_encode([
        'message' => 'No record found',
        'status' => false
    ]);
}

?>

