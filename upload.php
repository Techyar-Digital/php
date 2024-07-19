<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $fileName = $_POST['Name'];
    $fileDescription = $_POST['Description'];
    $fileCategories = $_POST['Categories'];
    $filePrice = $_POST['Price'];
    $uploadDate = date('d/m/Y');
    $uploadTime = date('h:i A');
    $downloads = 0;
    $likes = 0;
    $uploaderIp = $_SERVER['REMOTE_ADDR'];

    // Directories
    $previewDir = './../files/preview/';
    $fileDir = './../files/';

    // Ensure directories exist
    if (!is_dir($previewDir)) {
        mkdir($previewDir, 0777, true);
    }
    if (!is_dir($fileDir)) {
        mkdir($fileDir, 0777, true);
    }

    // Handling file upload
    $previewImage = $_FILES['Image']['name'];
    $fileUrl = $_FILES['Url']['name'];

    // Function to generate a unique file name
    function getUniqueFileName($directory, $fileName) {
        $extension = pathinfo($fileName, PATHINFO_EXTENSION);
        $baseName = pathinfo($fileName, PATHINFO_FILENAME);
        $i = 1;
        $newFileName = $fileName;
        
        // Loop until we find a unique name
        while (file_exists($directory . $newFileName)) {
            $newFileName = $baseName . $i . '.' . $extension;
            $i++;
        }
        
        return $newFileName;
    }

    // Generate unique file names
    $previewImage = getUniqueFileName($previewDir, $previewImage);
    $fileUrl = getUniqueFileName($fileDir, $fileUrl);

    $previewImagePath = $previewDir . $previewImage;
    $filePath = $fileDir . $fileUrl;

    // Move files to respective directories
    if (move_uploaded_file($_FILES['Image']['tmp_name'], $previewImagePath) && move_uploaded_file($_FILES['Url']['tmp_name'], $filePath)) {
        // Create individual HTML page for the upload
        $safeFileName = preg_replace('/[^A-Za-z0-9\-]/', '_', $fileName);
        $htmlFileName = $safeFileName . '.html';
        
        // Check if HTML file already exists
        $i = 1;
        while (file_exists($fileDir . $htmlFileName)) {
            $htmlFileName = $safeFileName . $i . '.html';
            $i++;
        }

        $htmlPageContent = "
        <!DOCTYPE html>
        <html lang='en'>
        <head>
            <meta charset='UTF-8'>
            <meta name='viewport' content='width=device-width, initial-scale=1.0'>
            <title>$fileName</title>
        </head>
        <body>
            <h1>$fileName</h1>
            <p>$fileDescription</p>
            <p>Categories: $fileCategories</p>
            <p>Price: $filePrice</p>
            <img src='$previewImagePath' alt='$fileName Preview' width='200'>
            <p><a href='$filePath' download>Download File</a></p>
            <p>Upload Date: $uploadDate</p>
            <p>Upload Time: $uploadTime</p>
        </body>
        </html>";

        $htmlPagePath = $fileDir . $htmlFileName;
        file_put_contents($htmlPagePath, $htmlPageContent);

        // JSON data structure with HTML page URL
        $fileData = array(
            "FileName" => $fileName,
            "Description" => $fileDescription,
            "Categories" => $fileCategories,
            "Price" => $filePrice,
            "PreviewImage" => $previewImagePath,
            "Url" => $filePath,
            "UploadDate" => $uploadDate,
            "UploadTime" => $uploadTime,
            "Downloads" => $downloads,
            "Likes" => $likes,
            "UploaderIp" => $uploaderIp,
            "Link" => $htmlFileName // HTML page URL
        );

        $jsonFilePath = './../files/data/files_details.json';
        if (file_exists($jsonFilePath)) {
            $jsonData = json_decode(file_get_contents($jsonFilePath), true);
            if ($jsonData === null) {
                $jsonData = array();
            }
        } else {
            $jsonData = array();
        }

        // Push only if the file data with the same link does not already exist
        $linkExists = false;
        foreach ($jsonData as $data) {
            if (isset($data['Link']) && $data['Link'] === $htmlFileName) {
                $linkExists = true;
                break;
            }
        }

        if (!$linkExists) {
            $jsonData[] = $fileData;
            file_put_contents($jsonFilePath, json_encode($jsonData, JSON_PRETTY_PRINT | JSON_UNESCAPED_SLASHES));
        }

        // Output success message with link to uploaded file
        echo "<script>alert('File uploaded successfully!'); window.location.href='$htmlPagePath';</script>";
    } else {
        echo "<script>alert('Failed to upload files. Please try again.'); window.history.back();</script>";
    }
}
?>
