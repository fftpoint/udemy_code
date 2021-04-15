<?php

class Product{
    /*
    アクセス修飾子：
    private(外からアクセスできない)
    protected（自分、継承したクラス）
    public（後悔）
    */

    // 変数
    private $product = [];

    // 関数
    // 初回
    function __construct($product)
    {
        $this->product = $product;
    }
    public function getProduct(){
        echo $this->product;
    }

    public function addProduct($item){
        $this->product .= $item;
    }

    public static function getStaticProduct($str){
        echo $str;
    }
}

$inctance = new Product('テスト');
var_dump($inctance);

$inctance->getProduct();
echo '<br>';

$inctance->addProduct('追加分');

$inctance->getProduct();
echo '<br>';

// 静的（static）メソッド クラス名::関数名
Product::getStaticProduct('静的');
echo '<br>';