<?php
include('../data/data.php') ;
session_start();
$totalPay = 0;
$sellprice = 0;

for ($i=0; $i < count($yokohamafmmenus); $i++) {
  if (isset($_POST[$yokohamafmmenus[$i]->getName()])){
    $orderCount = $_POST[$yokohamafmmenus[$i]->getName()];
    $sellprice = $orderCount * $yokohamafmmenus[$i]->getTaxPrice();
    $yokohamafmmenus[$i]->setOrderCount($orderCount);
    $totalPay += $yokohamafmmenus[$i]->getTotalPrice();
    $_SESSION['img'][] = $yokohamafmmenus[$i] -> getImage();
    $_SESSION['name'][] = $yokohamafmmenus[$i]->getName() ;
    $_SESSION['count'][] = $orderCount ;
    $_SESSION['sell'][] = $sellprice ;
  }
}
header('location: ../data/shopbag.php')
?>
