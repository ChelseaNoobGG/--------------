<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>File Upload and Download</title>
</head>
<body>
    <h1>File Upload and Download</h1>

    <!-- แบบฟอร์มสำหรับส่งไฟล์ -->
    <form action="upload.php" method="post" enctype="multipart/form-data">
        <input type="file" name="file">
        <button type="submit">Upload</button>
    </form>

    <hr>

    <!-- รายการไฟล์ที่อัปโหลดและสามารถดาวน์โหลดได้ -->
    <h2>Uploaded Files</h2>
    <ul>
        <?php
        $files = scandir('uploads/');
        foreach ($files as $file) {
            if ($file !== '.' && $file !== '..') {
                echo "<li><a href='downloads/$file' download>$file</a></li>";
            }
        }
        ?>
    </ul>

    <hr>

    <!-- แบบฟอร์มสำหรับค้นหาไฟล์ -->
    <form action="search.php" method="get">
        <input type="text" name="query" placeholder="Enter filename to search">
        <button type="submit">Search</button>
    </form>
</body>
</html>


