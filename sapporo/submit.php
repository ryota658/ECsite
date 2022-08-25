<?php
include('../data/data.php') ;
session_start();
$totalPay = 0;
$sellprice = 0;

for ($i=0; $i < count($sapporomenus); $i++) {
  if (isset($_POST[$sapporomenus[$i]->getName()])){
    $orderCount = $_POST[$sapporomenus[$i]->getName()];
    $sellprice = $orderCount * $sapporomenus[$i]->getTaxPrice();
    $sapporomenus[$i]->setOrderCount($orderCount);
    $totalPay += $sapporomenus[$i]->getTotalPrice();
    $_SESSION['img'][] = $sapporomenus[$i] -> getImage();
    $_SESSION['name'][] = $sapporomenus[$i]->getName() ;
    $_SESSION['count'][] = $orderCount ;
    $_SESSION['sell'][] = $sellprice ;
  }
}
header('location: ../data/shopbag.php')
?>
