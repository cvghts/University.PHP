<?php
if(!empty($_FILES['attachment'])) {
    $file = $_FILES['attachment'];

    $srcFileName = $file['name'];
    $newFilePath = __DIR__. '/uploads/' . $srcFileName;

    $allowedExtensions = ['jpg', 'png', 'gif'];
    $extension = pathinfo($srcFileName, PATHINFO_EXTENSION);
    if (!in_array($extension, $allowedExtensions)) {
        $error = 'Завантаження файлів з таким розширенням заборонено!';
    }
    elseif($file['size'] > 2000000) {
        $error = "Файл занадто великий, дозволено тільки файли менше 2Мб";
    }
    elseif (in_array($extension, ['jpg', 'jpeg', 'png'])) {
        $imageSize = getimagesize($file['tmp_name']);
        if ($imageSize[0] > 1280 || $imageSize[1] > 720) {
            $error = 'Зображення повинне мати ширину не більше 1280px та висоту не більше 720px';
        }
    }
    elseif($file['error'] !== UPLOAD_ERR_OK) {
        $error = "Помилка при завантаженні файла";
    }
    elseif(file_exists($newFilePath)) {
        $error = "Файл з таким ім'ям вже існує";
    }
    elseif(!move_uploaded_file($file['tmp_name'], $newFilePath)) {
        $error = 'Помилка завантаження файлу';
    } else {
        $result = 'https://localhost/uploads' . $srcFileName;
    }
}
?>

<html>
    <head>
        <title>Завантаження файлів</title>
    </head>
    <body>

    <?php
        if (!empty($error)) {
            echo $error;
        } elseif (!empty($result)) {
            echo $result;
        }
    ?>

        <br><br>
    <form action="/upload.php" method="post" enctype="multipart/form-data">
        <input type="file" name="attachment">
        <input type="submit">
    </form>
    </body>
</html>