<?php
namespace common\components;
 use yii\imagine\Image;  
 use Imagine\Image\Box;  
/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Util
 *
 * @author thanhlbk
 */
use Yii;
class Util {
    //put your code here
    public static function getUrlImage($image) {
        $link;
        if($image){
           $link = Yii::$app->urlManagerApi->createUrl('/uploads') . '/' . $image;
        }
        else{
            $link = Yii::$app->urlManagerApi->createUrl('/uploads') . '/' .'no-image.jpg';
        }
        return $link;
    }
    
    public static function uploadFile($file, $fileName) {
        if ($file) {
            $uploadPath = \Yii::getAlias('@uploadPath');
            Image::thumbnail($file->tempName, 300, 300)
                ->save(Yii::getAlias(Yii::getAlias($uploadPath . '/' . $fileName)), ['quality' => 80]);
            return true;
        }
        return false;
    }
    public static function deleteFile($fileName) {
        $uploadPath = \Yii::getAlias('@uploadPath');  
        @unlink(Yii::getAlias($uploadPath . '/' . $fileName));
    }
    
}
