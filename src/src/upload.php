<?php

require dirname(__DIR__) . '/vendor/autoload.php';

use Estudo\Image\Class\FileUtils;

$file_json_path = file_get_contents('./data.json');

['image' =>[
       'data' => $data,
       'mime' => $mime,
    ]
] = json_decode($file_json_path, true);


// $file_utils = new FileUtils();

// $path_img_decode = $file_utils->writeFile(base64_decode($data), 'teste.jpeg');

$path = dirname(__DIR__) . "/src/uploads/" ;


$imagick = new Imagick($path . "captura.png");

$a = new FileUtils();
// header("Content-Type: image/jpeg");
// echo  $imagick->getImageBlob();




