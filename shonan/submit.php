<?php
include('../data/data.php') ;
session_start();
$totalPay = 0;
$sellprice = 0;

for ($i=0; $i < count($shonanmenus); $i++) {
  if (isset($_POST[$shonanmenus[$i]->getName()])){
    $orderCount = $_POST[$shonanmenus[$i]->getName()];
    $sellprice = $orderCount * $shonanmenus[$i]->getTaxPrice();
    $shonanmenus[$i]->setOrderCount($orderCount);
    $totalPay += $shonanmenus[$i]->getTotalPrice();
    $_SESSION['img'][] = $shonanmenus[$i] -> getImage();
    $_SESSION['name'][] = $shonanmenus[$i]->getName() ;
    $_SESSION['count'][] = $orderCount ;
    $_SESSION['sell'][] = $sellprice ;
  }
}
header('location: ../data/shopbag.php')
?>
