<?php

/*
 * @author M_Fayziev
 */
class Cart {
     public static function addProduct($id)
     {
         $id = intval($id);
         $productsInCart = array();
         
         if(isset($_SESSION['products'])){
             $productsInCart = $_SESSION['products'];
         }
         if(array_key_exists($id,$productsInCart)){
             $productsInCart[$id]++;
         }else{
             $productsInCart[$id] = 1;
         }
         $_SESSION['products'] = $productsInCart;
         header('Location:'.$_SERVER['REQUEST_URI']);
         var_dump($productsInCart);
       
     }
      public static function countItems()
      {
          if(isset($_SESSION['products'])){
              $count = 0;
              foreach($_SESSION['products'] as $id => $cnt){
                  $count = $count + $cnt;
              }
              return $count;
          }else{
              return 0;
          }
      }
}
