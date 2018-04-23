<?php
	return array("mvcshop/product/([0-9]+)" => "product/view/$1", // actionView в ProductController
            "mvcshop/catalog" => "catalog/index",
            "mvcshop/category/([0-9]+)/page-([0-9]+)" => "catalog/category/$1/$2",
            "mvcshop/category/([0-9]+)" => "catalog/category/$1",
            "mvcshop/user/register" => "user/register",
            "mvcshop" => "site/index",						  // actionIndex в SiteController
				 );