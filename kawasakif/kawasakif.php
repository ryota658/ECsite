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
<div class="header_in header_kawasakif">
  <h1><img src="../image/kawasakif.png">川崎フロンターレ</h1>
</div>
<!-- ■■■■ スライダー ■■■■ -->
<ul class="slider">
  <li><img src="../image/header4.jpg"></li>
  <li><img src="../image/header3.png"></li>
  <li><img src="../image/header1.png"></li>
  <li><img src="../image/header.jpg"></li>
</ul>
<h2>オリジナルグッズ</h2>
  <?php foreach($kawasakifmenus as $kawasakifmenu): ?>
  <!-- ■■■■ セクション ■■■■ -->
  <section class="card">
  <p><a href="show.php?name=<?php echo $kawasakifmenu->getName() ?>"></p>
  <p class="image_css"><img src="../<?php echo $kawasakifmenu -> getImage() ?>"></p>
  <p class="menu_css"><?php echo $kawasakifmenu->getName() ?></p>
  <p class="price_css"><?php echo $kawasakifmenu->getTaxPrice() ?><span>円(税込み)</span></p></a>
  </section>
  <?php endforeach ?>
<!-- ■■■■ 公式SNS ■■■■ -->
  <div class="shop_wrap shop_kawasakif">
    <h2><span>Official Shop</span>オフィシャルグッズはここでも買える！</h2>
    <div class="shop_section">
      <section class="shop">
      <h3>オフィシャルグッズショップ「AZZURRO NERO」</h3>
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3245.0589093540343!2d139.6581423152559!3d35.57693778021873!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x6018f5773594198f%3A0xa271f5ee78956e4!2z44Ki44K644O844Ot44O744ON44Ot!5e0!3m2!1sja!2sjp!4v1612926126211!5m2!1sja!2sjp" width="400" height="300" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
        <p>所在地：〒211-0005 神奈川県川崎市中原区新丸子町1008-2</p>
        <p>open：平日　11:30～21:00／土日祝　11:30～21:00<br>※ホームゲーム、イベント開催時は営業時間が変更となる場合がございます。</p>
        <p>TEL:044-767-6111</p>
      </section>
      <section class="shop">
        <h3>スタジアム店</h3>
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3244.699522847146!2d139.6505332152561!3d35.58580758021667!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x6018f50ad7011045%3A0x3206229ba2f12791!2z562J44CF5Yqb6Zm45LiK56u25oqA5aC0!5e0!3m2!1sja!2sjp!4v1612926331029!5m2!1sja!2sjp" width="400" height="300" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
        <p>所在地：〒211-0052 神奈川県川崎市中原区等々力１−１<br>等々力競技場</p>
      </section>
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
