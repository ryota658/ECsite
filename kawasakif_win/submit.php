<?php
include('../data/data.php') ;
session_start();
$totalPay = 0;
$sellprice = 0;

for ($i=0; $i < count($kawasakif_winmenus); $i++) {
  if (isset($_POST[$kawasakif_winmenus[$i]->getName()])){
    $orderCount = $_POST[$kawasakif_winmenus[$i]->getName()];
    $sellprice = $orderCount * $kawasakif_winmenus[$i]->getTaxPrice();
    $kawasakif_winmenus[$i]->setOrderCount($orderCount);
    $totalPay += $kawasakif_winmenus[$i]->getTotalPrice();
    $_SESSION['img'][] = $kawasakif_winmenus[$i] -> getImage();
    $_SESSION['name'][] = $kawasakif_winmenus[$i]->getName() ;
    $_SESSION['count'][] = $orderCount ;
    $_SESSION['sell'][] = $sellprice ;
  }
}
header('location: ../data/shopbag.php')
?>
