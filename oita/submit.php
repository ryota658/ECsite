<?php
include('../data/data.php') ;
session_start();
$totalPay = 0;
$sellprice = 0;

for ($i=0; $i < count($oitamenus); $i++) {
  if (isset($_POST[$oitamenus[$i]->getName()])){
    $orderCount = $_POST[$oitamenus[$i]->getName()];
    $sellprice = $orderCount * $oitamenus[$i]->getTaxPrice();
    $oitamenus[$i]->setOrderCount($orderCount);
    $totalPay += $oitamenus[$i]->getTotalPrice();
    $_SESSION['img'][] = $oitamenus[$i] -> getImage();
    $_SESSION['name'][] = $oitamenus[$i]->getName() ;
    $_SESSION['count'][] = $orderCount ;
    $_SESSION['sell'][] = $sellprice ;
  }
}
header('location: ../data/shopbag.php')
?>
