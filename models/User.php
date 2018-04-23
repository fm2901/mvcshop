<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of User
 *
 * @author M_Fayziev
 */
class User {
    
    public static function register($name,$email,$password)
    {
        $db = Db::getConnection();
        $sql = 'INSERT INTO user(name,email,password) '
                .' VALUES(:name,:email,:password)';
       $result = $db->prepare($sql);
       $result->bindParam(':name', $name, PDO::PARAM_STR);
       $result->bindParam(':email', $email, PDO::PARAM_STR);
       $result->bindParam(':password', $password, PDO::PARAM_STR);
       return $result->execute();         
    }
    public static function checkName($name){
        if(strlen($name)>=2){
            return true;
        }
        return false;
    }
    public static function checkPassword($password){
        if(strlen($password)>=6){
            return true;
        }
        return false;
    }
    public static function checkEmail($email){
        /*if(filter_var($email,FILTER_VALIDATE_EMAIL)){
            return true;
        }
        return false;*/return true;
    }
    public static function checkEmailExists($email){
        $db = Db::getConnection();
        $sql = 'SELECT count(*) FROM user WHERE email=:email';
        $result = $db->prepare($sql);
        $result->bindParam(':email', $email, PDO::PARAM_STR);
        $result->execute();
        if($result->fetchColumn())
            return false;
        return true;
    }
}
