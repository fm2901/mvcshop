<?php


class CartController {
    public function actionIndex()
    {
        $categories = false;
        $categories = Product::getCategoriesList();
        $productsInCart = false;
        $productsInCart = Cart::getProducts();
        if($productsInCart){
            $productsIds = array_keys($productsInCart);
            $products = Product::getProductsByIds($productsIds);
            $totalPrice = Cart::getTotalPrice($products);
        }
        
        require_once ROOT.'/views/cart/index.php';
        return true;
        
    }
    public function actionAdd($id)
    {
        Cart::addProduct($id);
       // $referer = $_SERVER['HTTP_REFERER'];
       // header('Location:'.$referer);
    }
    
    public function actionAddAjax($id)
    {
        echo Cart::addProduct($id);
        return true;
    }
}
