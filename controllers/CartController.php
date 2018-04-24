<?php


class CartController {
    public function actionAdd($id)
    {
        Cart::addProduct($id);
       // $referer = $_SERVER['HTTP_REFERER'];
       // header('Location:'.$referer);
    }
}
