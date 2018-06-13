<?php
    require("config.inc.php");
    $imgs = glob(IMG_DIR . IMG_EXTENSIONS, GLOB_BRACE); //支援的图片后缀格式
    $randomImage = $imgs[array_rand($imgs)];
    
    header('Content-Type:image/jpeg');
    header('Content-Length: ' . filesize($randomImage));
    readfile($randomImage);
?>