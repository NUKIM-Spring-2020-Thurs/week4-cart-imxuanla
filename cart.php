<?php
    session_start();
    if(isset($_SESSION["login"])){
?>


<html>

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf8">
    <title>購物車</title>
</head>

<body>
    <b><h2>購物車</h2></b>

    <table border="1" cellpadding="10">
    <th>編號</th><th>項目</th><th>價格</th><th>數量</th><th>編輯</th>

    <?php
        $total = 0;
        while (list($pid,$item) = each($_COOKIE)){
            if (isset($_COOKIE[$pid]) && is_array($_COOKIE[$pid])){

                $price = 0; 
                $num = 0; 

                echo "<tr>";
                while (list($item, $value)=each($_COOKIE[$pid])){
                    echo "<td>" . $value . "</td>";
                    if ($item == "price")   $price = $value;
                    if ($item == "num")     $num = $value;
                } 

                echo "<td>";
                echo "<a href='delete.php?id=".$pid."'>";
                echo "刪除</a></td></tr>";
                
                $total += $price; 
                }
            }

            if ($total != 0){  
                echo "<tr><td colspan=5>";
                echo "總金額 = NT$".$total."元</td></tr>";
            }
        if($total == 0){
            echo "<tr><td colspan=5>購物車無品項</td></tr>";
        }
    ?>

    </table><br/><br/>
    <a href='logout.php'>登出系統</a>
    <a href='catalog.php'>回商品清單</a>

</body>
</html>


<?php
    }else{
        echo "非法進入<br/>";
        echo "<a href='login.php'>回首頁</a>";
    }
?>

