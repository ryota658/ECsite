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
<div class="header_in header_gosaka">
  <h1><img src="../image/gosaka.png">ガンバ大阪</h1>
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
  <?php foreach($gosakamenus as $gosakamenu): ?>
  <!-- ■■■■ セクション ■■■■ -->
  <section class="card">
  <p><a href="show.php?name=<?php echo $gosakamenu->getName() ?>"></p>
  <p class="image_css"><img src="../<?php echo $gosakamenu -> getImage() ?>"></p>
  <p class="menu_css"><?php echo $gosakamenu->getName() ?></p>
  <p class="price_css"><?php echo $gosakamenu->getTaxPrice() ?><span>円(税込み)</span></p></a>
  </section>
  <?php endforeach ?>
<!-- ■■■■ 公式SNS ■■■■ -->
  <div class="shop_wrap shop_gosaka">
    <h2><span>Official Shop</span>オフィシャルグッズはここでも買える！</h2>
    <div class="shop_section">
      <section class="shop">
      <h3>ガンバ大阪オフィシャルショップ ブルスパジオ</h3>
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3276.1280852624523!2d135.53627451523496!3d34.802719280408304!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x6000e34c253e66c5%3A0x5130ed7b84a8fc60!2z44Ks44Oz44OQ5aSn6Ziq44Kq44OV44Kj44K344Oj44Or44K344On44OD44OXIOODluODq-OCueODkeOCuOOCqg!5e0!3m2!1sja!2sjp!4v1613633469926!5m2!1sja!2sjp" width="400" height="300" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
        <p>所在地：〒565-0826 大阪府吹田市千里万博公園 3番3号</p>
        <p>open：10時00分～17時00分</p>
      </section>
      <section class="shop">
        <h3>吹田スタジアム</h3>
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1638.0629797173829!2d135.53702767668977!3d34.80277276755457!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x6000e34eb8af859b%3A0xc175dbfdd1abd06d!2z44OR44OK44K944OL44OD44Kv44K544K_44K444Ki44Og5ZC555Sw!5e0!3m2!1sja!2sjp!4v1613633612668!5m2!1sja!2sjp" width="400" height="300" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
        <p>所在地： 〒565-0826 大阪府吹田市千里万博公園３−３</p>
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
