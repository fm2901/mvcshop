<?php
	return array("mvcshop/product/([0-9]+)" => "product/view/$1", // actionView в ProductController
            
            "mvcshop/catalog" => "catalog/index",
            
            "mvcshop/category/([0-9]+)/page-([0-9]+)" => "catalog/category/$1/$2",
            "mvcshop/category/([0-9]+)" => "catalog/category/$1",
            
            "mvcshop/cart/add/([0-9]+)" => "cart/add/$1",
            
            "mvcshop/user/register" => "user/register",
            "mvcshop/user/login" => "user/login",
            "mvcshop/user/logout" => "user/logout",
            
            "mvcshop/cabinet/edit" => "cabinet/edit",
            "mvcshop/cabinet" => "cabinet/index",
            
            "mvcshop/contacts" => "site/contact",
            
            "mvcshop" => "site/index",						  // actionIndex в SiteController
				 );