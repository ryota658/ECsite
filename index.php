<?php
include("data/data.php");
session_start();
 ?>
<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="utf-8">
  <meta name="robots" content="none,noindex,nofollow">
  <title>Jリーグオンラインストア</title>
  <link href="css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" type="text/css" href="css/slick.css">
  <link rel="stylesheet" type="text/css" href="css/slick-theme.css">
  <link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<body>
<!-- ■■■■ ヘッダー ■■■■ -->
<header class="header">
  <div class="header_logo">
    <h1><a href="index.php"><img src="image/logo.png" alt="ロゴ" class="logo"></a></h1>
    <a href="data/shopbag.php"><p><img src="image/bag.jpg" alt="買い物かご"></p></a>
  </div>
</header>
<!-- ■■■■ スライダー ■■■■ -->
<ul class="slider">
  <li><img src="image/header1.png"></li>
  <li><img src="image/header2.png"></li>
  <li><img src="image/header3.png"></li>
  <li><img src="image/header4.jpg"></li>
</ul>
<!-- ■■■■ ナビゲーション ■■■■  -->
  <nav class="nav">
    <ul>
      <li>J1チーム</li>
      <li class="urawa"><a href="urawa/urawa.php"><p>浦和レッズ <span>&gt;</span></p></a></li>
      <li class="kashima"><a href="kashima/kashima.php"><p>鹿島アントラーズ<span>&gt;</span></p></a></li>
      <li class="shonan"><a href="shonan/shonan.php"><p>湘南ベルマーレ <span>&gt;</span></p></a></li>
      <li class="sapporo"><a href="sapporo/sapporo.php"><p>コンサドーレ札幌<span>&gt;</span></p></a></li>
      <li class="kawasaki"><a href="kawasakif/kawasakif.php"><p>川崎フロンターレ<span>&gt;</span></p></a></li>
      <li class="gamba"><a href="gosaka/gosaka.php"><p>ガンバ大阪<span>&gt;</span></p></a></li>
      <li class="nagoya"><a href="nagoya/nagoya.php"><p>名古屋グランパス<span>&gt;</span></p></a></li>
      <li class="hiroshima"><a href="hiroshima/hiroshima.php"><p>サンフレッチェ広島<span>&gt;</span></p></a></li>
      <li class="marinosu"><a href="yokohamafm/yokohamafm.php"><p>横浜Fマリノス<span>&gt;</span></p></a></li>
      <li class="kashiwa"><a href="kashiwa/kashiwa.php"><p>柏レイソル<span>&gt;</span></p></a></li>
      <li class="tosu"><a href="tosu/tosu.php"><p>サガン鳥栖<span>&gt;</span></p></a></li>
      <li class="oosaka"><a href="cosaka/cosaka.php"><p>セレッソ大阪<span>&gt;</span></p></a></li>
      <li class="shimizu"><a href="shimizu/shimizu.php"><p>清水エスパルス<span>&gt;</span></p></a></li>
      <li class="tokyo"><a href="fctokyo/fctokyo.php"><p>FC東京<span>&gt;</span></p></a></li>
      <li class="oita"><a href="oita/oita.php"><p>大分トリニータ<span>&gt;</span></p></a></li>
      <li class="sendai"><a href="sendai/sendai.php"><p>ベガルタ仙台<span>&gt;</span></p></a></li>
      <li class="yokohama"><a href="yokohamafc/yokohamafc.php"><p>横浜FC<span>&gt;</span></p></a></li>
      <li class="kobe"><a href="kobe/kobe.php"><p>ヴィッセル神戸<span>&gt;</span></p></a></li>
    </ul>
  </nav>
  <!-- ■■■■ メインコンテンツ ■■■■ -->
  <div class="top_wrap">
    <h2>優勝記念グッズ[川崎フロンターレ]</h2>
    <?php foreach($kawasakif_winmenus as $kawasakifmenu): ?>
      <!-- ■■■■ セクション ■■■■ -->
      <section class="card card_win">
        <p><a href="kawasakif_win/show.php?name=<?php echo $kawasakifmenu->getName() ?>"></p>
        <p class="image_css"><img src=<?php echo $kawasakifmenu -> getImage() ?>></p>
        <p class="menu_css"><?php echo $kawasakifmenu->getName() ?></p>
        <p class="price_css"><?php echo $kawasakifmenu->getTaxPrice() ?><span>円(税込み)</span></p></a>
      </section>
    <?php endforeach ?>
  </div>
<!-- ■■■■ フッター ■■■■ -->
<!-- ■■■■ コンテナ ■■■■ -->
<footer class="footer">
  <div class="container">
  <div class="row">
    <div class="col-sm">
      <a href="kawasakif_win/kawasakif.php"><img src="image/header2.png" alt=""></a>
    </div>
    <div class="col-sm">
      <a href="kashima/kashima.php"><img src="image/header_kahima1.png"></a>
    </div>
    <div class="col-sm">
      <a href="hiroshima/hiroshima.php"><img src="image/header_hiroshima.jpg"></a>
    </div>
    <div class="col-sm">
      <a href="kobe/kobe.php"><img src="image/header5.jpg"></a>
    </div>
  </div>
</div>
  <ul>
    <li><a href="urawa/urawa.php"><img src="image/urawa.png"></a></li>
    <li><a href="cosaka/cosaka.php"><img src="image/cosaka.png"></li>
    <li><a href="kashima/kashima.php"><img src="image/kashima.png"></a></li>
    <li><a href="kawasakif/kawasakif.php"><img src="image/kawasakif.png"></li>
    <li><a href="fctokyo/fctokyo.php"><img src="image/fctokyo.png"></li>
    <li><a href="gosaka/gosaka.php"><img src="image/gosaka.png"></li>
    <li><a href="hiroshima/hiroshima.php"><img src="image/hiroshima.png"></li>
    <li><a href="kashiwa/kashiwa.php"><img src="image/kashiwa.png"></li>
    <li><a href="gosaka/gosaka.php"><img src="image/gosaka.png"></li>
    <li><a href="kobe/kobe.php"><img src="image/kobe.png"></li>
    <li><a href="nagoya/nagoya.php"><img src="image/nagoya.png"></li>
    <li><a href="oita/oita.php"><img src="image/oita.png"></li>
    <li><a href="sapporo/sapporo.php"><img src="image/sapporo.png"></li>
    <li><a href="sendai/sendai.php"><img src="image/sendai.png"></li>
    <li><a href="shimizu/shimizu.php"><img src="image/shimizu.png"></li>
    <li><a href="shonan/shonan.php"><img src="image/shonan.png"></li>
    <li><a href="tosu/tosu.php"><img src="image/tosu.png"></li>
    <li><a href="yokohamafm/yokohamafm.php"><img src="image/yokohamafm.png"></li>
    <li><a href="yokohamafc/yokohamafc.php"><img src="image/yokohamafc.png"></li>
  </ul>
</footer>
<script src="js/jquery-1.10.1.min.js"></script>
<script src="js/slick.js"></script>
<script>
$(document).ready(function(){
  $('.slider').slick({
    autoplay: true,
    autoplaySpeed: 3000,
    arrows: true,
    slidesToShow: 1,
    centerMode: true,
    centerPadding: '100px',
    focusOnSelect: true,
    dots: true
  });
});
</script>
</body>
</html>
