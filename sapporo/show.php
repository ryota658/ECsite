<?php
include('../data/data.php') ;
session_start();
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
<form class="form" action="submit.php" method="post">
<!-- ■■■■ セクション ■■■■ -->
<?php for ($i=0; $i < count($sapporomenus); $i++): ?>
  <?php if ($_GET['name'] == $sapporomenus[$i]->getName()):?>
    <section class="section">
      <div class="section_IMG">
        <p class="image_show"><img src="../<?php echo $sapporomenus[$i] -> getImage() ?>"></p>
      </div>
      <div class="section_contents">
        <p><img src="../image/sapporo.png"><span>北海道コンサドーレ札幌</span></p>
        <p><?php echo $sapporomenus[$i]->getName() ?></p>
        <p>価格:<span><?php echo $sapporomenus[$i]->getTaxPrice() ?>円</span>(税込み)</p>
        <p>個数:<select class="select" name=" <?php echo $sapporomenus[$i]->getName() ?>">
          <option value="1">1個</option>
          <option value="2">2個</option>
          <option value="3">3個</option>
          <option value="4">4個</option>
          <option value="5">5個</option>
        </select></p>
        <div class="btn">
          <br><input type="submit" name="" value="買い物かごに入れる" class="submit">
        </div>
      </div>
    </section>
  <?php endif; ?>
<?php endfor; ?>
</form>
<!-- ■■■■ セクション ■■■■ -->
<div class="recommended_wrap">
<h2>他のおすすめ商品</h2>
<?php foreach($sapporomenus as $sapporomenu): ?>
  <section class="recommended">
    <p><a href="show.php?name=<?php echo $sapporomenu->getName() ?>"></p>
    <p class="image_css"><img src="../<?php echo $sapporomenu -> getImage() ?>"></p>
    <p class="menu_css"><?php echo $sapporomenu->getName() ?></p>
    <p class="price_css"><?php echo $sapporomenu->getTaxPrice() ?><span>円(税込み)</span></p></a>
  </section>
<?php endforeach ?>
</div>
</div>
<!-- ■■■■ フッター ■■■■ -->
<footer class="footer">
  <ul>
    <li><a href="../urawa/urawa.php"><img src="../image/urawa.png"></a></li>
    <li><a href="../cosaka/cosaka.php"><img src="../image/cosaka.png"></li>
    <li><a href="kashima.php"><img src="../image/kashima.png"></a></li>
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
