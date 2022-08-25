<?php
include('../data/data.php') ;
session_start();
$totalPay = 0;
$sellprice = 0;

for ($i=0; $i < count($fctokyomenus); $i++) {
  if (isset($_POST[$fctokyomenus[$i]->getName()])){
    $orderCount = $_POST[$fctokyomenus[$i]->getName()];
    $sellprice = $orderCount * $fctokyomenus[$i]->getTaxPrice();
    $fctokyomenus[$i]->setOrderCount($orderCount);
    $totalPay += $fctokyomenus[$i]->getTotalPrice();
    $_SESSION['img'][] = $fctokyomenus[$i] -> getImage();
    $_SESSION['name'][] = $fctokyomenus[$i]->getName() ;
    $_SESSION['count'][] = $orderCount ;
    $_SESSION['sell'][] = $sellprice ;
  }
}
header('location: ../data/shopbag.php')
?>
