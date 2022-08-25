<?php
include('../data/data.php') ;
session_start();
$totalpay = 0;
if (isset($_SESSION['name'])) {
  foreach ($_SESSION['sell'] as $sell) {
    $totalpay += (int)$sell;
  }
}
?>
<!DOCTYPE html>
<html lang="ja" dir="ltr">
<head>
  <meta charset="utf-8">
  <meta name="robots" content="none,noindex,nofollow">
  <title>Jリーグオンラインストア</title>
  <link rel="stylesheet" href="../css/style.css">
  <link rel="stylesheet" href="../css/stylecolor.css">
</head>
<body>
<!-- ■■■■ ヘッダー ■■■■ -->
<header class="header">
  <div class="header_logo">
    <h1><a href="../index.php"><img src="../image/logo.png" alt="ロゴ" class="logo"></a></h1>
    <a href="../data/shopbag.php"><p><img src="../image/bag.jpg" alt="買い物かご"></p></a>
  </div>
</header>
<?php if (isset($_SESSION['name'])): ?>
  <?php if (!$_SESSION['name'] == NULL): ?>
    <div class="shop_bag">
      <div class="shop_sell">
      <?php for ($i=0; $i < count($_SESSION['name']); $i++): ?>
        <div class="shop_IMG">
          <p><img src="../<?php  print $_SESSION['img'][$i]?>"></p>
        </div>
        <div class="shop_content">
          <p><?php  print $_SESSION["name"][$i]?></p>
          <p><?php print $_SESSION['count'][$i] ?></p>
          <p>値段：<?php  print $_SESSION['sell'][$i]?>円</p>
        </div>
      <?php endfor; ?>
      </div>
      <div class="shop_total">
        <p><?php print count( $_SESSION["name"]) ?>個</p>
        <p>合計：<?php print $totalpay ?>円</p>
        <a href="finish.php"><button type="button" name="button" class="shop_total_finish">注文する。</button></a>
      </div>
    </div>
  <?php else: ?>
    <div class="shop_null">
      <p>買い物かごは空です。</p>
      <p class="top_back"><a href="../index.php">トップへ戻る</a></p>
    </div>
<?php endif; ?>
<?php else: ?>
  <div class="shop_null">
    <p>買い物かごは空です。</p>
    <p class="top_back"><a href="../index.php">トップへ戻る</a></p>
  </div>
<?php endif; ?>
<!-- ■■■■ フッター ■■■■ -->
<footer class="footer">
  <ul>
    <li><a href="../urawa/urawa.php"><img src="../image/urawa.png"></a></li>
    <li><a href="../cosaka/cosaka.php"><img src="../image/cosaka.png"></li>
    <li><a href="../kashima/kashima.php"><img src="../image/kashima.png"></a></li>
    <li><a href="../fctokyo/fctokyo.php"><img src="../image/fctokyo.png"></li>
    <li><a href="../gosaka/gosaka.php"><img src="../image/gosaka.png"></li>
    <li><a href="../hiroshima/hiroshima.php"><img src="../image/hiroshima.png"></li>
    <li><a href="../kashiwa/kashiwa.php"><img src="../image/kashiwa.png"></li>
    <li><a href="../kawasakif/kawasakif.php"><img src="../image/kawasakif.png"></li>
    <li><a href="../kobe/kobe.php"><img src="../image/kobe.png"></li>
    <li><a href="../nagoya/nagoya.php"><img src="../image/nagoya.png"></li>
    <li><a href="../oita/oita.php"><img src="../image/oita.png"></li>
    <li><a href="../sapporo/sapporo.php"><img src="../image/sapporo.png"></li>
    <li><a href="../sendai/sendai.php"><img src="../image/sendai.png"></li>
    <li><a href="../shimizu/shimizu.php"><img src="../image/shimizu.png"></li>
    <li><a href="../shonan/shonan.php"><img src="../image/shonan.png"></li>
    <li><a href="../tosu/tosu.php"><img src="../image/tosu.png"></li>
    <li><a href="../yokohamafm/yokohamafm.php"><img src="../image/yokohamafm.png"></li>
    <li><a href="../yokohamafc/yokohamafc.php"><img src="../image/yokohamafc.png"></li>
  </ul>
</footer>
</body>
</html>
