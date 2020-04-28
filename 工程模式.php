<?php
namespace phpdesign;
class Factory{

    static function createDateBase(){
        $db = new Database();
        return $db;
    }
}