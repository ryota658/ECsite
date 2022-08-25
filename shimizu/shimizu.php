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
<div class="header_in header_shimizu">
  <h1><img src="../image/shimizu.png">清水エスパルス</h1>
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
  <?php foreach($shimizumenus as $shimizumenu): ?>
  <!-- ■■■■ セクション ■■■■ -->
  <section class="card">
  <p><a href="show.php?name=<?php echo $shimizumenu->getName() ?>"></p>
  <p class="image_css"><img src="../<?php echo $shimizumenu -> getImage() ?>"></p>
  <p class="menu_css"><?php echo $shimizumenu->getName() ?></p>
  <p class="price_css"><?php echo $shimizumenu->getTaxPrice() ?><span>円(税込み)</span></p></a>
  </section>
  <?php endforeach ?>
<!-- ■■■■ 公式SNS ■■■■ -->
  <div class="shop_wrap shop_shimizu">
    <h2><span>Official Shop</span>オフィシャルグッズはここでも買える！</h2>
    <div class="shop_section">
      <section class="shop">
      <h3>S-PULSE STORE</h3>
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3267.8923663550677!2d138.49107096524057!3d35.00939938035629!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x601a3144898a47f9%3A0xc88ecaf3ff7e4791!2z44Ko44K544OR44Or44K544OJ44Oq44O844Og44OP44Km44K5!5e0!3m2!1sja!2sjp!4v1613301785239!5m2!1sja!2sjp" width="400" height="300" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
        <p>所在地：静岡市清水区港町2-7-20</p>
        <p>open:2021年2月19日(金) 11:00～19:00</p>
      </section>
      <section class="shop">
        <h3>IAIスタジアム日本平</h3>
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3268.893871060395!2d138.4791115152399!3d34.984322980362656!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x601a312cff58ca07%3A0x32dcfb4a201a1e4d!2zSUFJ44K544K_44K444Ki44Og5pel5pys5bmz!5e0!3m2!1sja!2sjp!4v1613301905752!5m2!1sja!2sjp" width="400" height="300" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
        <p>所在地：〒424-0926 静岡県静岡市清水区村松３８８０−１</p>
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
