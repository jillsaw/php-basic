<!DOCTYPE html>
 <html lang="ja">
 
 <head>
     <meta charset="UTF-8">
     <title>PHP基礎編</title>
 </head>
 
 <body>
     <p>
       <?php
       //クラスを定義する
       class Food{
        //プロパティを定義する
        private $name;
        private $price;
        //メソッドを定義する
        public function show_price(){
          echo $this->price.'<br>';
        }
        //コンストラクタを定義する
        public function __construct(string $name,int $price){
          $this->name=$name;
          $this->price=$price;
        }
       }
       class Animal{
        //プロパティを定義する
        private $name;
        private $height;
        private $weight;
        //メソッドを定義する
        public function show_height() {
          echo $this->height . '<br>';
        }
        //コンストラクタを定義する
        public function __construct(string $name,int $height,int $weight){
          $this->name=$name;
          $this->height=$height;
          $this->weight=$weight;
        }
       }
       //インスタンス化する
       $food1= new Food('potato',250);
       $animal= new Animal('dog',60,5000);

       //結果出力
       print_r($food1);
       echo '<br>';

       print_r($animal);
       echo '<br>';

       $food1->show_price(250).'<br>';
       $animal->show_height(60);
       ?>
      </p>
  </body>
</html>
