<?php
// Check if file exists
if (isset($_GET['file'])) {
    $filename = $_GET['file'];
    $filepath = 'uploads/' . $filename;

    // Check if the file exists in the directory
    if (file_exists($filepath)) {
        // Set headers
        header('Content-Description: File Transfer');
        header('Content-Type: application/octet-stream');
        header('Content-Disposition: attachment; filename="' . basename($filepath) . '"');
        header('Expires: 0');
        header('Cache-Control: must-revalidate');
        header('Pragma: public');
        header('Content-Length: ' . filesize($filepath));
        ob_clean();
        flush();
        readfile($filepath);
        exit;
    } else {
        echo "File not found.";
    }
} else {
    echo "Invalid request.";
}
?>
docdocker run -d -p 8090:80 my-web-app.2.0   