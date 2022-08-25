<?php
include('../data/data.php') ;
session_start();
$totalPay = 0;
$sellprice = 0;

for ($i=0; $i < count($gosakamenus); $i++) {
  if (isset($_POST[$gosakamenus[$i]->getName()])){
    $orderCount = $_POST[$gosakamenus[$i]->getName()];
    $sellprice = $orderCount * $gosakamenus[$i]->getTaxPrice();
    $gosakamenus[$i]->setOrderCount($orderCount);
    $totalPay += $gosakamenus[$i]->getTotalPrice();
    $_SESSION['img'][] = $gosakamenus[$i] -> getImage();
    $_SESSION['name'][] = $gosakamenus[$i]->getName() ;
    $_SESSION['count'][] = $orderCount ;
    $_SESSION['sell'][] = $sellprice ;
  }
}
header('location: ../data/shopbag.php')
?>
