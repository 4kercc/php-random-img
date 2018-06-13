<?php
    require("config.inc.php");
    function randomSelectIndex() {
        $imgs = glob(IMG_DIR . IMG_EXTENSIONS, GLOB_BRACE);
        $selectedIndex = array_rand($imgs);
        setcookie("currentIndex", $selectedIndex);
        return $selectedIndex;
    }
    function getImgFromIndex($index) {
        $imgs = glob(IMG_DIR . IMG_EXTENSIONS, GLOB_BRACE);
        if(IMG_NO_REPEAT_CURRENT && isset($_COOKIE['currentIndex'])):
            while ($index == $_COOKIE['currentIndex']):
                $index = randomSelectIndex();
            endwhile;
        endif;

        $randomImage = $imgs[$index];
        return $randomImage;
    }
    $currentSelectedIndex = randomSelectIndex();
    $randomImage = getImgFromIndex($currentSelectedIndex);
   
    header('Content-Type:image/jpeg');
    header('Content-Length: ' . filesize($randomImage));
    readfile($randomImage);
    
?>