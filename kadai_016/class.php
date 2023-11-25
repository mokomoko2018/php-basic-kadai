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
    class Food {
    //プロパティを定義する
    private $name;
    private $price;

    //メソッドを定義する
    public function show_price() {
      echo $this->price . '<br>';
    }

      //コンストラクタを定義する
      public function __construct(string $name, int $price) {
        $this->name = $name;
        $this->price = $price;
      }
    }

    class Animal {
      private $name;
      private $height;
      private $weight;

      public function show_height() {
        echo $this->height . '<br>';
      }
  
        public function __construct(string $name, int $height, int $weight) {
          $this->name = $name;
          $this->height = $height;
          $this->weight = $weight;
        }
      }

    //インスタンス化する
    $Food = new Food('poteto', 100);
    $Animal = new Animal('dog', 60, 5000);

    //インスタンス$userの各プロパティの値を出力する
    print_r($Food) ;
    echo '<br>';
    print_r($Animal) ;
    echo '<br>';

    //メソッドにアクセスして実行する
    $Food->show_price();
    $Animal->show_height();
    ?>
  </P>
</body>
</html>
