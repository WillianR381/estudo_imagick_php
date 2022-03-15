<?php

namespace Estudo\Image\Class;


class  Utils{


    public static function bytesToMb(int $bytes) : float{
        $mb = $bytes / 1048576; 
        return number_format($mb, 3) ;
    }

    public static function bytesToKb(int $bytes) : float{
        $mb = $bytes / 1024; 
        return number_format($mb, 3) ;
    }
}