<?php
include('../data/data.php') ;
session_start();
$totalPay = 0;
$sellprice = 0;

for ($i=0; $i < count($yokohamafcmenus); $i++) {
  if (isset($_POST[$yokohamafcmenus[$i]->getName()])){
    $orderCount = $_POST[$yokohamafcmenus[$i]->getName()];
    $sellprice = $orderCount * $yokohamafcmenus[$i]->getTaxPrice();
    $yokohamafcmenus[$i]->setOrderCount($orderCount);
    $totalPay += $yokohamafcmenus[$i]->getTotalPrice();
    $_SESSION['img'][] = $yokohamafcmenus[$i] -> getImage();
    $_SESSION['name'][] = $yokohamafcmenus[$i]->getName() ;
    $_SESSION['count'][] = $orderCount ;
    $_SESSION['sell'][] = $sellprice ;
  }
}
header('location: ../data/shopbag.php')
?>
