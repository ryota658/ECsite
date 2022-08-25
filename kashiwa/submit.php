<?php
include('../data/data.php') ;
session_start();
$totalPay = 0;
$sellprice = 0;

for ($i=0; $i < count($kashiwamenus); $i++) {
  if (isset($_POST[$kashiwamenus[$i]->getName()])){
    $orderCount = $_POST[$kashiwamenus[$i]->getName()];
    $sellprice = $orderCount * $kashiwamenus[$i]->getTaxPrice();
    $kashiwamenus[$i]->setOrderCount($orderCount);
    $totalPay += $kashiwamenus[$i]->getTotalPrice();
    $_SESSION['img'][] = $kashiwamenus[$i] -> getImage();
    $_SESSION['name'][] = $kashiwamenus[$i]->getName() ;
    $_SESSION['count'][] = $orderCount ;
    $_SESSION['sell'][] = $sellprice ;
  }
}
header('location: ../data/shopbag.php')
?>
