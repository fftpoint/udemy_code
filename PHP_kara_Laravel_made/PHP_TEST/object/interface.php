<?php

ini_set("display_errors", 1);
error_reporting(E_ALL);

// インターフェイス 変数、定数を定義できない
// 複数のインターフェイスを実装できる
interface ProductInterface {
    public function getProduct();
}

interface NewsInterface {
    public function getNews();
}

// 親クラス 基底クラス スーパークラス
class BaseProduct{
    // 変数 関数
    public function echoProduct() {
        echo '親クラスです';
    }

    // オーバーライド
    public function getProduct() {
        echo '親の関数です';
    }
}

// 子クラス 派生クラス サブクラス
// finalを付けると継承されない
final class Product implements ProductInterface, NewsInterface {
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

    // finalメソッドはオーバーライドされない
    final public function getProduct(){
        echo $this->product;
    }

    public function addProduct($item){
        $this->product .= $item;
    }

    public function getNews()
    {
        echo 'ニュースです';
    }

    public static function getStaticProduct($str){
        echo $str;
    }
}

$inctance = new Product('テスト');
var_dump($inctance);

$inctance->getProduct();
echo '<br>';

// $inctance->echoProduct();
// echo '<br>';

$inctance->addProduct('追加分');

$inctance->getProduct();
echo '<br>';

$inctance->getNews();
echo '<br>';

// 静的（static）メソッド クラス名::関数名
Product::getStaticProduct('静的');
echo '<br>';