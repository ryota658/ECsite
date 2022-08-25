<?php
include('../data/data.php') ;
session_start();
$totalPay = 0;
$sellprice = 0;

for ($i=0; $i < count($sendaimenus); $i++) {
  if (isset($_POST[$sendaimenus[$i]->getName()])){
    $orderCount = $_POST[$sendaimenus[$i]->getName()];
    $sellprice = $orderCount * $sendaimenus[$i]->getTaxPrice();
    $sendaimenus[$i]->setOrderCount($orderCount);
    $totalPay += $sendaimenus[$i]->getTotalPrice();
    $_SESSION['img'][] = $sendaimenus[$i] -> getImage();
    $_SESSION['name'][] = $sendaimenus[$i]->getName() ;
    $_SESSION['count'][] = $orderCount ;
    $_SESSION['sell'][] = $sellprice ;
  }
}
header('location: ../data/shopbag.php')
?>
