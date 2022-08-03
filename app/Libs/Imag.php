<?php

namespace App\Libs;
use Image;
use Auth;

class Imag{
    public function url($path = null, $dirrectory = null, $name = null){
        if($path != null){
            if($dirrectory != null){
                $dir = storage_path() . $dirrectory;
            }else{
                if(!Auth::guest()){
                    $dir = storage_path() . '/app/public/products/'. Auth::user()->id . '/';
                }else{
                    $dir = storage_path() . '/app/public/products/0/';
                }
                if(!file_exists($dir)){
                    mkdir($dir, 0777, true);
                }
            }

            if($name != null){
                $filename = $name;
            }else{
                $filename = date('y_m_d_h_i_s').'.jpg';
            }
            $img = Image::make($path);
            $img->resize(600, null, function ($constraint) {
                $constraint->aspectRatio();
            });
            $img->save($dir . $filename);
            $img->resize(300, null, function ($constraint) {
                $constraint->aspectRatio();
            });
            $pic_small = 's_'. $filename;
            $img->save($dir . $pic_small);
            $img->resize(100, null, function ($constraint) {
                $constraint->aspectRatio();
            });
            $pic_small2 = 'ss_'. $filename;
            $img->save($dir . $pic_small2);
            return $filename;
        }else{
            return false;
        }
    }
}

