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
<div class="header_in header_fctokyo">
  <h1><img src="../image/fctokyo.png">FC東京</h1>
</div>
<!-- ■■■■ スライダー ■■■■ -->
<ul class="slider">
  <li><img src="../image/header4.jpg"></li>
  <li><img src="../image/header3.png"></li>
  <li><img src="../image/header1.png"></li>
  <li><img src="../image/header.jpg"></li>
</ul>
<div class="wrapper">
<h2>オリジナルグッズ</h2>
  <?php foreach($fctokyomenus as $fctokyomenu): ?>
  <!-- ■■■■ セクション ■■■■ -->
  <section class="card">
  <p><a href="show.php?name=<?php echo $fctokyomenu->getName() ?>"></p>
  <p class="image_css"><img src="../<?php echo $fctokyomenu -> getImage() ?>"></p>
  <p class="menu_css"><?php echo $fctokyomenu->getName() ?></p>
  <p class="price_css"><?php echo $fctokyomenu->getTaxPrice() ?><span>円(税込み)</span></p></a>
  </section>
  <?php endforeach ?>
<!-- ■■■■ 公式SNS ■■■■ -->
  <div class="shop_wrap shop_fctokyo">
    <h2><span>Official Shop</span>オフィシャルグッズはここでも買える！</h2>
    <div class="shop_section">
      <section class="shop">
      <h3>ユーロスポーツ 味の素スタジアム店</h3>
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3241.5321785976457!2d139.52285671525843!3d35.66389608019832!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x6018e555427226e9%3A0xc2692ce706c14b9d!2z44Om44O844Ot44K544Od44O844OEIOWRs-OBrue0oOOCueOCv-OCuOOCouODoOW6lw!5e0!3m2!1sja!2sjp!4v1612927449562!5m2!1sja!2sjp" width="400" height="300" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
        <p>所在地：〒182-0032 東京都調布市西町376-3<br>ポケットガーデン内</p>
        <p>open：火～土：11：00～19：00 （ナイトゲーム開催日：11：00～試合終了後1時間）<br>
            日・祝日：10：00～19：00 （ナイトゲーム開催日：10：00～試合終了後1時間)</p>
      </section>
      <section class="shop">
        <h3>FC東京パーク小平天神</h3>
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3238.8088108284405!2d139.4951281152602!3d35.73092028018272!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x6018e67a780a7263%3A0x19443c77c078f2e5!2zRkPmnbHkuqzjg5Hjg7zjgq8g5bCP5bmz5aSp56We!5e0!3m2!1sja!2sjp!4v1612927593112!5m2!1sja!2sjp" width="400" height="300" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
        <p>所在地：〒187-0004 東京都小平市天神町3-1-1</p>
      </section>
    </div>
  </div>
</div>
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
