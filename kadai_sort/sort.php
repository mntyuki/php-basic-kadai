<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <title>PHP基礎編</title>
</head>

<body>
    <p>
        <?php
    
        function soft_2way($array,$order){
           if($order === true){
                echo "昇順にソートします。"."<br>";
                sort($array);

                foreach($array as $value){
                    echo $value."<br>";
                    }
           }else{    
                echo "降順にソートします。"."<br>";
                rsort($array);

                foreach($array as $value){
                    echo $value."<br>";
                    }
           }
            
        }

        $num  = [15, 4, 18, 23, 10 ];
        $order = true;
        soft_2way($num,$order);
        
        
        $order = false;
        soft_2way($num,$order);

        ?>
    </p>
</body>

</html>


