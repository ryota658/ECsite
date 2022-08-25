<?php
include('../data/data.php') ;
session_start();
$totalPay = 0;
$sellprice = 0;

for ($i=0; $i < count($kawasakifmenus); $i++) {
  if (isset($_POST[$kawasakifmenus[$i]->getName()])){
    $orderCount = $_POST[$kawasakifmenus[$i]->getName()];
    $sellprice = $orderCount * $kawasakifmenus[$i]->getTaxPrice();
    $kawasakifmenus[$i]->setOrderCount($orderCount);
    $totalPay += $kawasakifmenus[$i]->getTotalPrice();
    $_SESSION['img'][] = $kawasakifmenus[$i] -> getImage();
    $_SESSION['name'][] = $kawasakifmenus[$i]->getName() ;
    $_SESSION['count'][] = $orderCount ;
    $_SESSION['sell'][] = $sellprice ;
  }
}
header('location: ../data/shopbag.php')
?>
