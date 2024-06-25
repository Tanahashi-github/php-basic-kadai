<!DOCTYP html>
<html lang="ja">

<head>
    <meta charset="utf-8">
    <title>課題基礎編</title>
</head>

<body>
    <p>
        <?php
        $num = [15,4,18,23,10 ];

        echo '昇順にソートします。<br>';

        sort($num);
        foreach ($num as $value) {
            echo $value . '<br>';
        }
        
        echo '降順にソートします。<br>';
        rsort($num);
        foreach($num as $value) {
            echo $value . '<br>';
        }
        ?>
    </p>
    
</body>

</html>