<?php

    $id=$_GET["id"];
    if(isset($_COOKIE[$id])){
	    while (list($item,$value)=each($_COOKIE[$id])) {
	    	setcookie($id."[".$item."]","",time()-3600);
    	}
    }
    header('Location:cart.php');
?>