<?php
// ตรวจสอบว่ามีการส่งไฟล์หรือไม่
if (isset($_FILES['file'])) {
    $uploadDirectory = 'uploads/';
    $uploadedFile = $uploadDirectory . basename($_FILES['file']['name']);

    // อัพโหลดไฟล์ไปยังโฟลเดอร์ที่กำหนด
    if (move_uploaded_file($_FILES['file']['tmp_name'], $uploadedFile)) {
        echo 'File uploaded successfully.';
    } else {
        echo 'Failed to upload file.';
    }
}
?>

?>
