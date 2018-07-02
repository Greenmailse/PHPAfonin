<?php
 include $_SERVER['DOCUMENT_ROOT'].'\models\Category.php'; // $_SERVER['DOCUMENT_ROOT']
 include $_SERVER['DOCUMENT_ROOT'].'\models\Product.php'; // $_SERVER['DOCUMENT_ROOT']

  class SiteController
  {
      public function actionIndex()
      {

        $categories = array();
        $categories = Category::getCategoriesList();

        $latesproduct = array();
        $latesproduct = Product::getLatestProducts(3);


         require_once(ROOT . '/views/site/index.php');

        return true;
      }
  }
