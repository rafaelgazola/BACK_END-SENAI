<?php
setcookie("user","Gazola", time()+50);
if(isset($_COOKIE["user"])){
    echo "COOKIE setado com o nome " . $_COOKIE["user"] . "<br>";
} else {
   echo "O COOKIE ainda não está definido " . "<br>"; 
}
var_dump($_COOKIE);
?>