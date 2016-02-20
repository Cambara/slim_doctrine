<?php
/**
 * Created by PhpStorm.
 * User: cambara
 * Date: 19/02/16
 * Time: 11:56
 */
namespace App\util\service;
class ClassService{

    public static function convertArrayToClass($array,$obj)
    {
        foreach($array as $key => $value){
            $set = 'set'.ucfirst($key);
            if(method_exists($obj,$set)==true){
                $obj->{$set}($value);
            }
        }
        return $obj;
    }
}