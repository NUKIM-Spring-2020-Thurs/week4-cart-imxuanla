<h2>User Login </h2>

<?php
    session_start();
    if(isset($_COOKIE["ID"])){
        echo "歡迎再度光臨，",$_COOKIE["ID"],"！<br/><br/>";
        setcookie("ID","",time()-3600);
    }else{
        echo "歡迎新朋友<br/><br/>";
    }
?>

<form action="check.php" method="POST">
    username: <input type="text" name="id" value="<?php echo $_COOKIE['ID']; ?>" required><br/>
    password: <input type="password" name="pwd" required><br/><br/>
    <input type="submit">
</form>