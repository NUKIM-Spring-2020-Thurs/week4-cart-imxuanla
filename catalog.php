<meta http-equiv="Content-Type" content="text/html; charset=utf8">
<title>商品清單</title>

<?php
    session_start();
    if(isset($_SESSION["login"])){
        $date=strtotime("+7 days",time());
        $uname=$_SESSION["ID"];
        setcookie("ID",$uname,$date); 
?>

        <b><h2>商品清單</h2></b>
        <form action="addcart.php" method="POST">
            選擇商品：
            <select name="product">
                <option value="P01">烤透抽佐香辣XO醬義大利麵－$320</option>
                <option value="P02">白酒干貝蛤蜊義大利麵－$320</option>
                <option value="P03">青醬漁夫海鮮義大利麵－$320</option>
                <option value="P04">初榨橄欖油田園鮮蔬義大利麵－$250</option>
                <option value="P05">黑松露野菇燉飯－$270</option>
                <option value="P06">麻油松阪豬干貝燉飯－$320</option>
                <option value="P07">西西里番茄漁夫海鮮燉飯－$320</option>
                <option value="P08">乳酪南瓜鮭魚燉飯－$320</option>
                <option value="P09">安格斯帶骨牛小排9oz－$650</option>
                <option value="P10">安格斯沙朗心牛排15oz－$960</option>
                <option value="P11">海陸戰斧肋眼牛排17oz－$1150</option>
                <option value="P12">滷肉飯－$30</option>
            </select>
            <input type=number name="amount" min="1" max="999" id="number" required>
            <input type="submit" value="加入購物車">
        </form>
        <a href='logout.php'>登出系統</a>
        <a href='cart.php'>購物車</a>

        <style>
            #number {
                width: 4em;
            }
        </style>
<?php
    }else{
        echo "非法進入<br/>";
        echo "<a href='login.php'>回首頁</a>";
    }
?>