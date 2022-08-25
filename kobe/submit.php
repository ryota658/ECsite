<?php
include('../data/data.php') ;
session_start();
$totalPay = 0;
$sellprice = 0;

for ($i=0; $i < count($kobemenus); $i++) {
  if (isset($_POST[$kobemenus[$i]->getName()])){
    $orderCount = $_POST[$kobemenus[$i]->getName()];
    $sellprice = $orderCount * $kobemenus[$i]->getTaxPrice();
    $kobemenus[$i]->setOrderCount($orderCount);
    $totalPay += $kobemenus[$i]->getTotalPrice();
    $_SESSION['img'][] = $kobemenus[$i] -> getImage();
    $_SESSION['name'][] = $kobemenus[$i]->getName() ;
    $_SESSION['count'][] = $orderCount ;
    $_SESSION['sell'][] = $sellprice ;
  }
}
header('location: ../data/shopbag.php')
?>
