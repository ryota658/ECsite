<?php
include('../data/data.php') ;
session_start();
$totalPay = 0;
$sellprice = 0;

for ($i=0; $i < count($hiroshimamenus); $i++) {
  if (isset($_POST[$hiroshimamenus[$i]->getName()])){
    $orderCount = $_POST[$hiroshimamenus[$i]->getName()];
    $sellprice = $orderCount * $hiroshimamenus[$i]->getTaxPrice();
    $hiroshimamenus[$i]->setOrderCount($orderCount);
    $totalPay += $hiroshimamenus[$i]->getTotalPrice();
    $_SESSION['img'][] = $hiroshimamenus[$i] -> getImage();
    $_SESSION['name'][] = $hiroshimamenus[$i]->getName() ;
    $_SESSION['count'][] = $orderCount ;
    $_SESSION['sell'][] = $sellprice ;
  }
}
header('location: ../data/shopbag.php')
?>
