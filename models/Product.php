<?php

class Product
{
    const SHOW_BY_DEAFAULT = 10;
    
    public static function getLatestProducts($count = self::SHOW_BY_DEAFAULT)
    {
        $count = intval($count);
        $db = Db::getConnection();
        $productsList = array();
        $result = $db->query("SELECT id, name, price, image, is_new  FROM product"
                . " WHERE status = 1"
                . " ORDER BY id DESC"
                . " LIMIT ".$count);
        $i = 0;
        while($row = $result->fetch()){
            $productsList[$i] = $row;
            $i++;
        }
        
        return $productsList;
    }

     public static function getProductsListByCategory($categoryId = false, $page = 1)
    {
         if($categoryId){
            $page = intval($page);
            $offset = ($page - 1)* self::SHOW_BY_DEAFAULT;
            
            $db = Db::getConnection();
            $products = array();
            $result = $db->query("SELECT id, name, price, image, is_new  FROM product"
                    . " WHERE status = 1 AND category_id = ".$categoryId
                    . " ORDER BY id DESC"
                    . " LIMIT ".self::SHOW_BY_DEAFAULT
                    ." OFFSET ".$offset);
            $i = 0;
            while($row = $result->fetch()){
                $products[$i] = $row;
                $i++;
            }
            return $products;
         }
    }
    
    public static function getTotalProductsInCategory($categoryId)
    {
        $db = Db::getConnection();
        $products = array();
        $result = $db->query("SELECT count(id) AS count FROM product"
                . " WHERE status = 1 AND category_id = ".$categoryId);

        $result->setFetchMode(PDO::FETCH_ASSOC);
        $row = $result->fetch();
        return $row["count"];
    }
    public static function getProductsByIds($idsArray)
    {
        $products = array();
        $db = Db::getConnection();
        $idsString = implode(',',$idsArray);
        $sql = "SELECT * FROM product WHERE status=1 and id in($idsString)";
        $result = $db->query($sql);
        $result->setFetchMode(PDO::FETCH_ASSOC);
        
        $i = 0;
        while($row = $result->fetch()){
            $products[$i] = $row;
            $i++;
        }
        return $products;
    }
    public static function getCategoriesList()
    {
        $categories = array();
        $db = Db::getConnection();
        $sql = 'SELECT id,name FROM category WHERE status=1';
        $result = $db->query($sql);
        while($row = $result->fetch()){
            $categories[$row['id']] = $row;
        }
        return $categories;
    }
}
?>