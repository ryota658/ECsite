<?php
include('../data/data.php') ;
session_start();
$totalPay = 0;
$sellprice = 0;

for ($i=0; $i < count($tosumenus); $i++) {
  if (isset($_POST[$tosumenus[$i]->getName()])){
    $orderCount = $_POST[$tosumenus[$i]->getName()];
    $sellprice = $orderCount * $tosumenus[$i]->getTaxPrice();
    $tosumenus[$i]->setOrderCount($orderCount);
    $totalPay += $tosumenus[$i]->getTotalPrice();
    $_SESSION['img'][] = $tosumenus[$i] -> getImage();
    $_SESSION['name'][] = $tosumenus[$i]->getName() ;
    $_SESSION['count'][] = $orderCount ;
    $_SESSION['sell'][] = $sellprice ;
  }
}
header('location: ../data/shopbag.php')
?>
