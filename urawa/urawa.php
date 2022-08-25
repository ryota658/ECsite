<?php
include('../data/data.php') ;
?>
<!DOCTYPE html>
<html lang="ja" dir="ltr">
<head>
  <meta charset="utf-8">
  <meta name="robots" content="none,noindex,nofollow">
  <title>Jリーグオンラインストア</title>
  <link rel="stylesheet" type="text/css" href="../css/slick.css">
  <link rel="stylesheet" type="text/css" href="../css/slick-theme.css">
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
<div class="header_in header_urawa">
  <h1><img src="../image/urawa.png">浦和レッズ</h1>
</div>
<!-- ■■■■ スライダー ■■■■ -->
<ul class="slider">
  <li><img src="../image/header_urawa.png"></li>
  <li><img src="../image/header_urawa2.png"></li>
  <li><img src="../image/header_urawa3.png"></li>
  <li><img src="../image/header4.jpg"></li>
</ul>
<div class="wrapper">
<h2>オリジナルグッズ</h2>
  <?php foreach($urawamenus as $urawamenu): ?>
    <!-- ■■■■ セクション ■■■■ -->
    <section class="card">
      <p><a href="show.php?name=<?php echo $urawamenu->getName() ?>"></p>
      <p class="image_css"><img src="../<?php echo $urawamenu -> getImage() ?>"></p>
      <p class="menu_css"><?php echo $urawamenu->getName() ?></p>
      <p class="price_css"><?php echo $urawamenu->getTaxPrice() ?><span>円(税込み)</span></p></a>
    </section>
  <?php endforeach ?>

<!-- ■■■■ 公式SNS ■■■■ -->
<div class="shop_wrap shop_urawa">
    <h2><span>Official Shop</span>オフィシャルグッズはここでも買える！</h2>
    <div class="shop_section">
    <section class="shop">
      <h3>レッドボルテージ</h3>
      <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3233.6181208715107!2d139.65498291526367!3d35.85836638015336!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x6018ea83905c8727%3A0x72557269e87bf8fe!2z44Os44OD44OJ44Oc44Or44OG44O844K4!5e0!3m2!1sja!2sjp!4v1611389538557!5m2!1sja!2sjp" width="400" height="300" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
      <p>所在地：〒330-0062埼玉県さいたま市浦和区高砂１丁目１６−１２　アトレ浦和WestArea1階</p>
      <p>open：10：00～22：00（年中無休）</p>
      <p>TEL：048-711-4671</p>
    </section>
    <section class="shop">
      <h3>ホームスタジアム</h3>
      <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3231.792172692267!2d139.71540891526485!3d35.90310538014318!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x6018bfc7394e4103%3A0x68e40e575524ae7!2z5Z-8546J44K544K_44K444Ki44Og77yS4peL4peL77yS!5e0!3m2!1sja!2sjp!4v1611389725629!5m2!1sja!2sjp" width="400" height="300" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
      <p>所在地：〒336-0967 埼玉県さいたま市緑区美園２丁目１ <br>埼玉スタジアム２○○２</p>
    </section>
  </div>
</div>
</div>
<!-- ■■■■ フッター ■■■■ -->
<footer class="footer">
  <ul>
    <li><a href="urawa.php"><img src="../image/urawa.png"></a></li>
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
<script src="../js/jquery-1.10.1.min.js"></script>
<script src="../js/slick.js"></script>
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
