<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <title>PHP基礎編</title>
</head>

<body>
    <p>
        <?php
    
        function soft_2way(&$array,$order){
           if($order === true){
                echo "昇順にソートします。"."<br>";
                sort($array);
           }else{    
                echo "降順にソートします。"."<br>";
                rsort($array);
           }
            
        }

        $num  = [15, 4, 18, 23, 10 ];
        $order = true;
        soft_2way($num,$order);

        foreach($num as $value){
        echo $value."<br>";
        }
        
        
        $order = false;
        soft_2way($num,$order);

        foreach($num as $value){
            echo $value."<br>";
        }

        ?>
    </p>
</body>

</html>


