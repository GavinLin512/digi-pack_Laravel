<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FileController extends Controller
{
    //
    public static function imageUpload($file,$dir)
    {
        // 如果上傳檔案的資料夾不存在
        if (!is_dir('upload/')) {
            // 創造一個上傳檔案的資料夾
            mkdir('upload/');
        };
        if (!is_dir('upload/'.$dir.'/')) {
            // 創造一個上傳檔案的資料夾
            mkdir('upload/'.$dir.'/');
        };
        // 取得副檔名
        $extention = $file->getClientOriginalExtension();
        // 亂數重新命名，有很多方式，估狗“php 產生亂數”
        $filename = md5(uniqid(rand())) . '.' . $extention;
        // dd($filename . '.' . $extention);

        // 圖片儲存路徑
        $path = '/upload/'.$dir.'/'. $filename;

        // 用原始路徑：/Users/linjiamin/Documents/GitHub/Laravel-memberSystem/public 會寫死，檔案或資料夾移位就報錯了
        move_uploaded_file($file, public_path() . $path);

        // function 執行完，將路徑回傳
        return $path;
    }
}
