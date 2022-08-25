<?php
include('../data/data.php') ;
session_start();
$totalPay = 0;
$sellprice = 0;

for ($i=0; $i < count($kashimamenus); $i++) {
  if (isset($_POST[$kashimamenus[$i]->getName()])){
    $orderCount = $_POST[$kashimamenus[$i]->getName()];
    $sellprice = $orderCount * $kashimamenus[$i]->getTaxPrice();
    $kashimamenus[$i]->setOrderCount($orderCount);
    $totalPay += $kashimamenus[$i]->getTotalPrice();
    $_SESSION['img'][] = $kashimamenus[$i] -> getImage();
    $_SESSION['name'][] = $kashimamenus[$i]->getName() ;
    $_SESSION['count'][] = $orderCount ;
    $_SESSION['sell'][] = $sellprice ;
  }
}
header('location: ../data/shopbag.php')
?>
