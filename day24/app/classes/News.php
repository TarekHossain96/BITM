<?php
/**
 * Created by PhpStorm.
 * User: Web App Develop - PH
 * Date: 3/25/2019
 * Time: 12:32 PM
 */

namespace App\classes;
use App\Classes\Connection;


class News
{
    public function saveNewsInfo(){
        $sql ="INSERT INTO news(news_title,news_description,news_image,status) VALUES('$_POST[news_title]','$_POST[news_description]','$_POST[news_image]','$_POST[status]')";
        if (mysqli_query(Connection::dbConnection(),$sql)){
            return $message ="News Info Saved Successfully";
        }else{
                die('Query Problem'.mysqli_error());
            }

    }
}