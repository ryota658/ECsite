<?php
include('../data/data.php') ;
session_start();
$totalPay = 0;
$sellprice = 0;

for ($i=0; $i < count($nagoyamenus); $i++) {
  if (isset($_POST[$nagoyamenus[$i]->getName()])){
    $orderCount = $_POST[$nagoyamenus[$i]->getName()];
    $sellprice = $orderCount * $nagoyamenus[$i]->getTaxPrice();
    $nagoyamenus[$i]->setOrderCount($orderCount);
    $totalPay += $nagoyamenus[$i]->getTotalPrice();
    $_SESSION['img'][] = $nagoyamenus[$i] -> getImage();
    $_SESSION['name'][] = $nagoyamenus[$i]->getName() ;
    $_SESSION['count'][] = $orderCount ;
    $_SESSION['sell'][] = $sellprice ;
  }
}
header('location: ../data/shopbag.php')
?>
