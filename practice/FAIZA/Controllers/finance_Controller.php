<?php 
require_once('../Models/Alldb.php');
session_start();
$list=finance();
function getSum(){
    $r = Sum();
    return $r;
}
?>