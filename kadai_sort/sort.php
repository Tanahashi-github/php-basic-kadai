<!DOCTYP html>
<html lang="ja">

<head>
    <meta charset="utf-8">
    <title>課題基礎編</title>
</head>

<body>
    <p>
        <?php
        $array = [15,4,18,23,10 ];
        
        $order = TRUE;
        $unorder = FALSE;
        
        function sort_2way ($array, $order) {

            if($order) {
                echo '昇順にソートします。<br>';
                
                asort($array);

                foreach ($array as $value) {
                    echo $value . '<br>';
                }
                
            }else {
                echo '降順にソートします。<br>';
                
                arsort($array);
                
                foreach($array as $value) {
                    echo $value . '<br>';
                }
                }
        }
            
        sort_2way($array, $order);
        sort_2way($array, $unorder);
        
        ?>
    </p>
    
</body>

</html>