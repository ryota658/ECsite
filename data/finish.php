<?php
  session_start();
  $_SESSION['img'] = [];
  $_SESSION['name'] = [];
  $_SESSION['count'] = [];
  $_SESSION['sell'] = [];
 ?>
<!DOCTYPE html>
<html lang="ja" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta name="robots" content="none,noindex,nofollow">
    <title>Jリーグオンラインストア</title>
    <link rel="stylesheet" href="../css/style.css">
  </head>
  <body>
    <!-- ■■■■ ヘッダー ■■■■ -->
    <header class="header">
      <div class="header_logo">
        <a href="../index.php"><img src="../image/logo.png" alt="ロゴ" class="logo"></a>
      </div>
    </header>
    <!-- ■■■■ ナビゲーション ■■■■  -->
    <nav class="nav">
      <ul>
        <li>J1チーム</li>
        <li class="urawa"><a href="../urawa/urawa.php"><p>浦和レッズ <span>&gt;</span></p></a></li>
        <li class="kashima"><a href="../kashima/kashima.php"><p>鹿島アントラーズ<span>&gt;</span></p></a></li>
        <li class="shonan"><a href="../shonan/shonan.php"><p>湘南ベルマーレ <span>&gt;</span></p></a></li>
        <li class="sapporo"><a href="../sapporo/sapporo.php"><p>コンサドーレ札幌<span>&gt;</span></p></a></li>
        <li class="kawasaki"><a href="../kawasakif/kawasakif.php"><p>川崎フロンターレ<span>&gt;</span></p></a></li>
        <li class="gamba"><a href="../gosaka/gosaka.php"><p>ガンバ大阪<span>&gt;</span></p></a></li>
        <li class="nagoya"><a href="../nagoya/nagoya.php"><p>名古屋グランパス<span>&gt;</span></p></a></li>
        <li class="hiroshima"><a href="../hiroshima/hiroshima.php"><p>サンフレッチェ広島<span>&gt;</span></p></a></li>
        <li class="marinosu"><a href="../yokohamafm/yokohamafm.php"><p>横浜Fマリノス<span>&gt;</span></p></a></li>
        <li class="kashiwa"><a href="../kashiwa/kashiwa.php"><p>柏レイソル<span>&gt;</span></p></a></li>
        <li class="tosu"><a href="../tosu/tosu.php"><p>サガン鳥栖<span>&gt;</span></p></a></li>
        <li class="oosaka"><a href="../cosaka/cosaka.php"><p>セレッソ大阪<span>&gt;</span></p></a></li>
        <li class="shimizu"><a href="../shimizu/shimizu.php"><p>清水エスパルス<span>&gt;</span></p></a></li>
        <li class="tokyo"><a href="../fctokyo/fctokyo.php"><p>FC東京<span>&gt;</span></p></a></li>
        <li class="oita"><a href="../oita/oita.php"><p>大分トリニータ<span>&gt;</span></p></a></li>
        <li class="sendai"><a href="../sendai/sendai.php"><p>ベガルタ仙台<span>&gt;</span></p></a></li>
        <li class="yokohama"><a href="../yokohamafc/yokohamafc.php"><p>横浜FC<span>&gt;</span></p></a></li>
        <li class="kobe"><a href="../kobe/kobe.php"><p>ヴィッセル神戸<span>&gt;</span></p></a></li>
      </ul>
    </nav>
    <p>ありがとうございました。</p>
    <p class="top_back"><a href="../index.php">トップへ戻る</p>
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
   </body>
   </html>
