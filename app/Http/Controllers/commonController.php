<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Intervention\Image\Facades\Image;

class CommonController extends Controller
{
    public static function save_image($image, $paths)
    {
        $filenameWithExt = $image->getClientOriginalName();
        $filename = $filenameWithExt;
        $extension = $image->getClientOriginalExtension();
        $img_name = $filename.'_'.time().'.'.$extension;
        $image->move($paths, $img_name);
        return $img_name;
    }

    public static function save_file($file, $path)
    {
        $name = pathinfo($file->getClientOriginalName(), PATHINFO_FILENAME);
        $extension=$file->getClientOriginalExtension();
        $filename=$name.time().".".$extension;
        $file->move($path, $filename);
        return $filename;
    }
}
