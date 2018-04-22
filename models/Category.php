<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Category
 *
 * @author User
 */
class Category {
    
    public static function getCategoriesList()
    {
        $db = Db::getConnection();
        $categoryList = array();
        $result = $db->query("SELECT id, name FROM category ORDER BY sort_order ASC");
        $i = 0;
        while($row = $result->fetch()){
            $categoryList[$i] = $row;
            $i++;
        }
        return $categoryList;
    }
}
