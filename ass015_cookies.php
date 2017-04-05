<?php
$value = "Hallo";
setcookie("TestCookie", $value, time()+3600);

if(isset($_COOKIE["TestCookie"])){
    $cookie1 = $_COOKIE["TestCookie"];
} else{
    echo "Geen cookie gevonden.";
}
