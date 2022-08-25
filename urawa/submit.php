<?php
include('../data/data.php') ;
session_start();
$totalPay = 0;
$sellprice = 0;

for ($i=0; $i < count($urawamenus); $i++) {
  if (isset($_POST[$urawamenus[$i]->getName()])){
    $orderCount = $_POST[$urawamenus[$i]->getName()];
    $sellprice = $orderCount * $urawamenus[$i]->getTaxPrice();
    $urawamenus[$i]->setOrderCount($orderCount);
    $totalPay += $urawamenus[$i]->getTotalPrice();
    $_SESSION['img'][] = $urawamenus[$i] -> getImage();
    $_SESSION['name'][] = $urawamenus[$i]->getName() ;
    $_SESSION['count'][] = $orderCount ;
    $_SESSION['sell'][] = $sellprice ;
  }
}
header('location: ../data/shopbag.php')
 ?>
