<?php

require dirname(__DIR__) . '/vendor/autoload.php';

use Estudo\Image\Class\{FileUtils,Utils};

$file_json_path = file_get_contents('./data.json');

['image' =>[
       'data' => $data,
       'mime' => $mime,
    ]
] = json_decode($file_json_path, true);


$file_utils = new FileUtils();
$path_img_decode = $file_utils->writeFile(base64_decode($data), 'zumkenbergo.jpeg');

$path_root = dirname(__DIR__) . "/src/uploads/" ;

$name_file = "teste.jpeg";

$imagick = new Imagick($path_img_decode);
$imagick->setImageFormat("jpeg");
$imagick->blurImage(10,10);
$imagick->resizeImage(200,200,Imagick::FILTER_LANCZOS,0.5);
file_put_contents($path_root .  $name_file, $imagick);
$size_img = Utils::bytesToKb($imagick->getImageSize());

// $image_url = $imagick->getImageFilename(); 

echo "<img  class=\"teste-img\" src=\"uploads/$name_file\" alt=\"Image\">";
echo "<p>Size of image is $size_img kbs</p>";

$imagick->clear();

?>

<style>
   body{
       display: flex;
       flex-direction: column;
       align-items: center;
   }
</style>


<?php
// apenas a imagem sem html
// header("Content-Type: $mime");
// echo  $imagick->getImageBlob();
?>