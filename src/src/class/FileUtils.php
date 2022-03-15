<?php

namespace Estudo\Image\Class;

use Imagick;

class FileUtils{

    private string $upload_dir ;

    public function __construct()
    {
        $this->upload_dir = dirname(__DIR__) . "/uploads/" ;
    }


    public function moveToDirUpload(string $path_file, string $name_file): bool{
        
        $dir_to_save = $this->upload_dir . basename($name_file);
        $is_save = move_uploaded_file($path_file, $dir_to_save);
     
        return $is_save;
    }

    public function writeFile( $file_to_write, $name_to_write ) {
        $path_file = $this->upload_dir . $name_to_write;
        $ifp = fopen( $path_file, "wb" ); 
        fwrite( $ifp,  $file_to_write ); 
        fclose( $ifp ); 
        return $path_file ; 
    }
    
  
    // public function encodeBase64(string $path) : array {
    //     $data = null;
    //     $msg = '';
    //     try{
    //         if(!is_file($path)){
    //             throw new \Exception("Not find the path");
    //              $msg = "Caminho não encontrado";
    //         }
    //         $img = file_get_contents($path);
    //         $data = base64_encode($img);
    //         $msg = "sucesso";
    //     } catch(\Exception $e){
    //         echo $e->getMessage();
    //         $msg = "Erro";
    //     }

    //     return [
    //         "msg" => $msg,
    //         "data" => $data,
    //     ];
    // }

    // public function decodeBase64(string $encode) : ?string {
    //     return base64_decode($encode);
    // }
}