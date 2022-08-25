<?php
include('../data/data.php') ;
session_start();
$totalPay = 0;
$sellprice = 0;

for ($i=0; $i < count($cosakamenus); $i++) {
  if (isset($_POST[$cosakamenus[$i]->getName()])){
    $orderCount = $_POST[$cosakamenus[$i]->getName()];
    $sellprice = $orderCount * $cosakamenus[$i]->getTaxPrice();
    $cosakamenus[$i]->setOrderCount($orderCount);
    $totalPay += $cosakamenus[$i]->getTotalPrice();
    $_SESSION['img'][] = $cosakamenus[$i] -> getImage();
    $_SESSION['name'][] = $cosakamenus[$i]->getName() ;
    $_SESSION['count'][] = $orderCount ;
    $_SESSION['sell'][] = $sellprice ;
  }
}
header('location: ../data/shopbag.php')
?>
