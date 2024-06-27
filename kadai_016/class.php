<!DOCTYP html>
<html lang="ja">

<head>
    <meta charset="utf-8">
    <title>PHP基礎16章課題</title>
</head>
<body>
    <p>
        <?php
        // Food
        class Food {
            private $name;
            private $price;

            public function __construct(string $name, int $price) {
                $this->name = $name;
                $this->price = $price;
            }

            public function show_price() {
                echo $this->price . '<br>';
            }
        }

        $Food = new Food('potato', 250);

        print_r($Food);

        echo '<br>';

        // Animal
        class Animal {
            private $name;
            private $height;
            private $weight;

            public function __construct(string $name, int $height, int $weight ) {
                $this->name = $name;
                $this->height = $height;
                $this->weight = $weight;
            }

            public function show_height() {
                echo $this->height . '<br>';
            }
        }

        $Animal = new Animal('dog', 60, 5000);

        print_r($Animal);

        echo '<br>';

        $Food->show_price();
        $Animal->show_height();
        ?>
    </p>
</body>

</html>