<?php
include('../data/data.php') ;
session_start();
$totalPay = 0;
$sellprice = 0;

for ($i=0; $i < count($shimizumenus); $i++) {
  if (isset($_POST[$shimizumenus[$i]->getName()])){
    $orderCount = $_POST[$shimizumenus[$i]->getName()];
    $sellprice = $orderCount * $shimizumenus[$i]->getTaxPrice();
    $shimizumenus[$i]->setOrderCount($orderCount);
    $totalPay += $shimizumenus[$i]->getTotalPrice();
    $_SESSION['img'][] = $shimizumenus[$i] -> getImage();
    $_SESSION['name'][] = $shimizumenus[$i]->getName() ;
    $_SESSION['count'][] = $orderCount ;
    $_SESSION['sell'][] = $sellprice ;
  }
}
header('location: ../data/shopbag.php')
?>
