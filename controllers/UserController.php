<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of UserController
 *
 * @author M_Fayziev
 */
class UserController {
    
    public function actionRegister()
    {
        $name = '';
        $email = '';
        $password = '';
        $result = false;
        if(isset($_POST["submit"])){
            $name = $_POST["name"];
            $email = $_POST["email"];
            $password = $_POST["password"];
            
            $errors = false;
            
            if(!User::checkName($name)){
                $errors[] = 'Имя должно быть не короче 2-х символов';
            }
            
            if(!User::checkEmail($email)){
                $errors[] = 'Неправильный email';
            }
            
            if(!User::checkPassword($password)){
                $errors[] = 'Пароль должен быть не короче 6 символов';
            }
            
            if(!User::checkEmailExists($email)){
                $errors[] = 'Такой email уже используется';
            }
            
            if($errors == false){
                $result = User::register($name,$email,$password);
            }
        }
        require_once '/views/user/register.php';
        return true;
    }
    public function actionLogin()
    {
        $email = '';
        $password = '';
        
        if(isset($_POST['submit'])){
            $email = $_POST['email'];
            $password = $_POST['password'];
            $errors = false;
            if(!User::checkEmail($email)){
                $errors[] = 'Неправильный email';
            }
            
            if(!User::checkPassword($password)){
                $errors[] = 'Пароль должен быть не короче 6 символов';
            }
            $userId = User::checkUserData($email,$password);
            if($userId == false){
                $errors[] = 'Неправильные данные для входа на сайт';
            }else{
                User::auth($userId);
                header('Location:/mvcshop/cabinet/');
            }
        }
        require_once ROOT.'/views/user/login.php';
        return true;
    }
    public function actionLogout()
    {
        unset($_SESSION['user']);
        header('Location:/mvcshop/');
    }
}
    
