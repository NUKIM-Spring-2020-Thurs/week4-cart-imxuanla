<?php 

    session_start();

    if(isset($_POST["product"])){
        $_SESSION["product"]=$_POST["product"];
        $_SESSION["amount"]=$_POST["amount"];
        $id=$_POST["product"];
        switch ($id){
            case "P01":
               $_SESSION["name"]="烤透抽佐香辣XO醬義大利麵";
               $_SESSION["price"]="320";
               break;
            case "P02":
               $_SESSION["name"]="白酒干貝蛤蜊義大利麵";
               $_SESSION["price"]="320";
               break;
            case "P03":
                $_SESSION["name"]="青醬漁夫海鮮義大利麵";
                $_SESSION["price"]="320";
                break;
            case "P04":
                $_SESSION["name"]="初榨橄欖油田園鮮蔬義大利麵";
                $_SESSION["price"]="250";
                break;
            case "P05":
                $_SESSION["name"]="黑松露野菇燉飯";
                $_SESSION["price"]="270";
                break;
            case "P06":
                $_SESSION["name"]="麻油松阪豬干貝燉飯";
                $_SESSION["price"]="320";
                break;
            case "P07":
                $_SESSION["name"]="西西里番茄漁夫海鮮燉飯";
                $_SESSION["price"]="320";
                break;
            case "P08":
                $_SESSION["name"]="乳酪南瓜鮭魚燉飯";
                $_SESSION["price"]="320";
                break;
            case "P09":
                $_SESSION["name"]="安格斯帶骨牛小排9oz";
                $_SESSION["price"]="650";
                break;
            case "P10":
                $_SESSION["name"]="安格斯沙朗心牛排15oz";
                $_SESSION["price"]="960";
                break;
            case "P11":
                $_SESSION["name"]="海陸戰斧肋眼牛排17oz";
                $_SESSION["price"]="1150";
                break;
            case "P12":
                $_SESSION["name"]="滷肉飯";
                $_SESSION["price"]="30";
                break;
         }
    }
    if(isset($_SESSION["product"]))
        $date=strtotime("+7 days",time());
        $id=$_SESSION["product"];
        $name=$_SESSION["name"];
        $price=$_SESSION["price"] * $_SESSION["amount"];
        $num=$_SESSION["amount"];
        setcookie($id."[id]",$id,$date);
        setcookie($id."[name]",$name,$date);
        setcookie($id."[price]",$price,$date);
        setcookie($id."[num]",$num,$date);

    header('Location:cart.php'); 

?>