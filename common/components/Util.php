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
            $file->saveAs(Yii::getAlias($uploadPath . '/' . $fileName));
            Image::thumbnail(Yii::getAlias($uploadPath . '/' . $fileName), 400, 250)
                ->resize(new Box(400,250))
                ->save(Yii::getAlias($uploadPath . '/' . $fileName),['quality' => 70]);
            return true;
        }
        return false;
    }
    public static function deleteFile($fileName) {
        $uploadPath = \Yii::getAlias('@uploadPath');  
        @unlink(Yii::getAlias($uploadPath . '/' . $fileName));
    }
    
}
