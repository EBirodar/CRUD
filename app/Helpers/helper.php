<?php

use Illuminate\Support\Str;

function add($x, $y){
    return $x+$y;
}

function url_to_model($url){
    $model = 'App\Models\\'. str_replace(' ','', \Illuminate\Support\Str::headline(\Illuminate\Support\Str::singular($url)));
    return  $model;
}

function uploadImage($image, $directory)
{
    if (!\File::isDirectory($directory)){
        mkdir($directory);
    }
//    if ( ! file_exists($directory) ) {
//        mkdir($directory, 0777, true);
//    }
    $file = null;
//    dd($image);
    $imageName = Str::random(20) . '.'.$image->getClientOriginalExtension();
    $image->move(public_path($directory), $imageName);
    $file = $directory .'/'. $imageName;

    return $file;
}
