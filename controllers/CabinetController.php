<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of CabinetController
 *
 * @author M_Fayziev
 */
class CabinetController {
    public function actionIndex()
    {
        $userId = User::checkLogged();
        
        $user = User::getUserById($userId);
        
        require_once '/views/cabinet/index.php';
        return true;
    }
    
    public function actionEdit()
    { 
        $userId = User::checkLogged();
        $user = User::getUserById($userId);
        
        $name = $user['name'];
        $password = $user['password'];
        
        $result = false;
        
        if(isset($_POST['submit'])){
            $name = $_POST['name'];
            $password = $_POST['password'];
            $errors = false;
           
            
            if(!User::checkName($name)){
                $errors[] = 'Имя должно быть не менее двух символов';
            }
            if(!User::checkPassword($password)){
                $errors[] = 'Пароль должен быть не короче 6 символов';
            }
            if($errors == false){
                $result = User::edit($userId, $name, $password);
            }
        }
        require_once ROOT.'/views/cabinet/edit.php';
        return true;
    }
    
}
