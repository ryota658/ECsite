<?php
  class  kashima{
    private $name;
    private $price;
    private $image;
    private $orderCount = 0;
    public function __construct($name,$price,$image){
      $this -> name = $name;
      $this -> price = $price;
      $this -> image = $image;
    }
    public function getName() {
      return $this -> name;
    }
    public function getImage() {
      return $this -> image;
    }
    public function getPrice()  {
      return $this -> price;
    }
    public function getTaxPrice() {
      return $this -> taxPrice = floor($this -> price * 1.08);
    }
    public function setOrderCount($orderCount) {
    $this-> orderCount = $orderCount;
    }
    public function getTotalPrice() {
      return $this->getTaxPrice() * $this->orderCount;
    }
    }
  $menu1 = new kashima ("キーホルダー",900,"image/kashima_su.png");
  $menu2 = new kashima ("21NIKEレプリカユニフォーム",19999,"image/kashima_yu.jpg");
  $menu3 = new kashima ("マフラータオル",1650,"image/kashima_ta.jpg");
  $menu4 = new kashima ("スマホケース",2970,"image/kashima_sumaho.jpg");
  $kashimamenus = array($menu1,$menu2,$menu3,$menu4);
  ?>

  <?php
    class  urawa{
      private $name;
      private $price;
      private $image;
      private $orderCount = 0;
      public function __construct($name,$price,$image){
        $this -> name = $name;
        $this -> price = $price;
        $this -> image = $image;
      }
      public function getName() {
        return $this -> name;
      }
      public function getImage() {
        return $this -> image;
      }
      public function getPrice()  {
        return $this -> price;
      }
      public function getTaxPrice() {
        return $this -> taxPrice = floor($this -> price * 1.08);
      }
      public function setOrderCount($orderCount) {
      $this-> orderCount = $orderCount;
      }
      public function getTotalPrice() {
        return $this->getTaxPrice() * $this->orderCount;
      }
      }
    $menu1 = new urawa ("キーホルダー",900,"image/urawa_su.jpg");
    $menu2 = new urawa ("20NIKEレプリカユニフォーム",19999,"image/urawa_yu.jpg");
    $menu3 = new urawa ("マフラータオル",1650,"image/urawa_ta.jpg");
    $menu4 = new urawa ("Ｊベッド　浦和レッズ　シングル",141004,"image/urawa_bed.jpg");
    $urawamenus = array($menu1,$menu2,$menu3,$menu4);
    ?>
    <?php
      class  cosaka{
        private $name;
        private $price;
        private $image;
        private $orderCount = 0;
        public function __construct($name,$price,$image){
          $this -> name = $name;
          $this -> price = $price;
          $this -> image = $image;
        }
        public function getName() {
          return $this -> name;
        }
        public function getImage() {
          return $this -> image;
        }
        public function getPrice()  {
          return $this -> price;
        }
        public function getTaxPrice() {
          return $this -> taxPrice = floor($this -> price * 1.08);
        }
        public function setOrderCount($orderCount) {
        $this-> orderCount = $orderCount;
        }
        public function getTotalPrice() {
          return $this->getTaxPrice() * $this->orderCount;
        }
        }
      $menu1 = new cosaka ("キーホルダー",900,"image/cosaka_su.jpg");
      $menu2 = new cosaka ("2020レプリカユニフォーム",19999,"image/cosaka_yu.jfif");
      $menu3 = new cosaka ("マフラータオル",1650,"image/cosaka_ta.jpg");
      $menu4 = new cosaka ("プレイステーションバージョンパーカー",6600,"image/playstation.jpg");
      $cosakamenus = array($menu1,$menu2,$menu3,$menu4);
      ?>
      <?php
        class  fctokyo{
          private $name;
          private $price;
          private $image;
          private $orderCount = 0;
          public function __construct($name,$price,$image){
            $this -> name = $name;
            $this -> price = $price;
            $this -> image = $image;
          }
          public function getName() {
            return $this -> name;
          }
          public function getImage() {
            return $this -> image;
          }
          public function getPrice()  {
            return $this -> price;
          }
          public function getTaxPrice() {
            return $this -> taxPrice = floor($this -> price * 1.08);
          }
          public function setOrderCount($orderCount) {
          $this-> orderCount = $orderCount;
          }
          public function getTotalPrice() {
            return $this->getTaxPrice() * $this->orderCount;
          }
          }
        $menu1 = new fctokyo ("キーホルダー",900,"image/fctokyo_su.jpg");
        $menu2 = new fctokyo ("2020レプリカユニフォーム",19999,"image/fctokyo_yu.jpg");
        $menu3 = new fctokyo ("マフラータオル",1650,"image/fctokyo_ta.jpg");
        $menu4 = new fctokyo ("プレイステーションバージョンパーカー",6600,"image/playstation.jpg");
        $fctokyomenus = array($menu1,$menu2,$menu3,$menu4);
        ?>
        <?php
  class  gosaka{
    private $name;
    private $price;
    private $image;
    private $orderCount = 0;
    public function __construct($name,$price,$image){
      $this -> name = $name;
      $this -> price = $price;
      $this -> image = $image;
    }
    public function getName() {
      return $this -> name;
    }
    public function getImage() {
      return $this -> image;
    }
    public function getPrice()  {
      return $this -> price;
    }
    public function getTaxPrice() {
      return $this -> taxPrice = floor($this -> price * 1.08);
    }
    public function setOrderCount($orderCount) {
    $this-> orderCount = $orderCount;
    }
    public function getTotalPrice() {
      return $this->getTaxPrice() * $this->orderCount;
    }
    }
  $menu1 = new gosaka ("キーホルダー",900,"image/gosaka_su.jpg");
  $menu2 = new gosaka ("2020レプリカユニフォーム",19999,"image/gosaka_yu.jfif");
  $menu3 = new gosaka ("マフラータオル",1650,"image/gosaka_ta.jpg");
  $menu4 = new gosaka ("プレイステーションバージョンパーカー",6600,"image/playstation.jpg");
  $gosakamenus = array($menu1,$menu2,$menu3,$menu4);
  ?>
  <?php
  class  hiroshima{
    private $name;
    private $price;
    private $image;
    private $orderCount = 0;
    public function __construct($name,$price,$image){
      $this -> name = $name;
      $this -> price = $price;
      $this -> image = $image;
    }
    public function getName() {
      return $this -> name;
    }
    public function getImage() {
      return $this -> image;
    }
    public function getPrice()  {
      return $this -> price;
    }
    public function getTaxPrice() {
      return $this -> taxPrice = floor($this -> price * 1.08);
    }
    public function setOrderCount($orderCount) {
    $this-> orderCount = $orderCount;
    }
    public function getTotalPrice() {
      return $this->getTaxPrice() * $this->orderCount;
    }
    }
  $menu1 = new hiroshima ("キーホルダー",900,"image/hiroshima_su.jpg");
  $menu2 = new hiroshima ("2020レプリカユニフォーム",19999,"image/hiroshima_yu.jfif");
  $menu3 = new hiroshima ("マフラータオル",1650,"image/hiroshima_ta.jpg");
  $menu4 = new hiroshima ("プレイステーションバージョンパーカー",6600,"image/playstation.jpg");
  $hiroshimamenus = array($menu1,$menu2,$menu3,$menu4);
  ?>
  <?php
  class  kashiwa{
    private $name;
    private $price;
    private $image;
    private $orderCount = 0;
    public function __construct($name,$price,$image){
      $this -> name = $name;
      $this -> price = $price;
      $this -> image = $image;
    }
    public function getName() {
      return $this -> name;
    }
    public function getImage() {
      return $this -> image;
    }
    public function getPrice()  {
      return $this -> price;
    }
    public function getTaxPrice() {
      return $this -> taxPrice = floor($this -> price * 1.08);
    }
    public function setOrderCount($orderCount) {
    $this-> orderCount = $orderCount;
    }
    public function getTotalPrice() {
      return $this->getTaxPrice() * $this->orderCount;
    }
    }
  $menu1 = new kashiwa ("キーホルダー",900,"image/kashiwa_su.jpg");
  $menu2 = new kashiwa ("2020レプリカユニフォーム",19999,"image/kashiwa_yu.jpg");
  $menu3 = new kashiwa ("マフラータオル",1650,"image/kashiwa_ta.jpg");
  $menu4 = new kashiwa ("プレイステーションバージョンパーカー",6600,"image/playstation.jpg");
  $kashiwamenus = array($menu1,$menu2,$menu3,$menu4);
  ?>
  <?php
  class  kawasakif{
    private $name;
    private $price;
    private $image;
    private $orderCount = 0;
    public function __construct($name,$price,$image){
      $this -> name = $name;
      $this -> price = $price;
      $this -> image = $image;
    }
    public function getName() {
      return $this -> name;
    }
    public function getImage() {
      return $this -> image;
    }
    public function getPrice()  {
      return $this -> price;
    }
    public function getTaxPrice() {
      return $this -> taxPrice = floor($this -> price * 1.08);
    }
    public function setOrderCount($orderCount) {
    $this-> orderCount = $orderCount;
    }
    public function getTotalPrice() {
      return $this->getTaxPrice() * $this->orderCount;
    }
    }
  $menu1 = new kawasakif ("キーホルダー",900,"image/kawasakif_su.jpg");
  $menu2 = new kawasakif ("2020レプリカユニフォーム",19999,"image/kawasakif_yu.jpg");
  $menu3 = new kawasakif ("マフラータオル",1650,"image/kawasakif_ta.jpg");
  $menu4 = new kawasakif ("プレイステーションバージョンパーカー",4400,"image/playstation.jpg");
  $kawasakifmenus = array($menu1,$menu2,$menu3,$menu4);
  ?>
  <?php
  class  kawasakif_win{
    private $name;
    private $price;
    private $image;
    private $orderCount = 0;
    public function __construct($name,$price,$image){
      $this -> name = $name;
      $this -> price = $price;
      $this -> image = $image;
    }
    public function getName() {
      return $this -> name;
    }
    public function getImage() {
      return $this -> image;
    }
    public function getPrice()  {
      return $this -> price;
    }
    public function getTaxPrice() {
      return $this -> taxPrice = floor($this -> price * 1.08);
    }
    public function setOrderCount($orderCount) {
    $this-> orderCount = $orderCount;
    }
    public function getTotalPrice() {
      return $this->getTaxPrice() * $this->orderCount;
    }
    }
  $menu1 = new kawasakif_win ("シャーレクッション",4000,"image/kawasakif_win3.jpg");
  $menu2 = new kawasakif_win ("キーホルダー",1800,"image/kawasakif_su.jpg");
  $menu3 = new kawasakif_win ("マフラータオル",1650,"image/kawasakif_ta.jpg");
  $kawasakif_winmenus = array($menu1,$menu2,$menu3);
  ?>
  <?php
  class  kobe{
    private $name;
    private $price;
    private $image;
    private $orderCount = 0;
    public function __construct($name,$price,$image){
      $this -> name = $name;
      $this -> price = $price;
      $this -> image = $image;
    }
    public function getName() {
      return $this -> name;
    }
    public function getImage() {
      return $this -> image;
    }
    public function getPrice()  {
      return $this -> price;
    }
    public function getTaxPrice() {
      return $this -> taxPrice = floor($this -> price * 1.08);
    }
    public function setOrderCount($orderCount) {
    $this-> orderCount = $orderCount;
    }
    public function getTotalPrice() {
      return $this->getTaxPrice() * $this->orderCount;
    }
    }
  $menu1 = new kobe ("キーホルダー",900,"image/kobe_su.jpg");
  $menu2 = new kobe ("2020レプリカユニフォーム",19999,"image/kobe_yu.jpg");
  $menu3 = new kobe ("マフラータオル",1650,"image/kobe_ta.jpg");
  $menu4 = new kobe ("プレイステーションバージョンパーカー",6600,"image/playstation.jpg");
  $kobemenus = array($menu1,$menu2,$menu3,$menu4);
  ?>
  <?php
  class  nagoya{
    private $name;
    private $price;
    private $image;
    private $orderCount = 0;
    public function __construct($name,$price,$image){
      $this -> name = $name;
      $this -> price = $price;
      $this -> image = $image;
    }
    public function getName() {
      return $this -> name;
    }
    public function getImage() {
      return $this -> image;
    }
    public function getPrice()  {
      return $this -> price;
    }
    public function getTaxPrice() {
      return $this -> taxPrice = floor($this -> price * 1.08);
    }
    public function setOrderCount($orderCount) {
    $this-> orderCount = $orderCount;
    }
    public function getTotalPrice() {
      return $this->getTaxPrice() * $this->orderCount;
    }
    }
  $menu1 = new nagoya ("キーホルダー",900,"image/nagoya_su.jpg");
  $menu2 = new nagoya ("2020レプリカユニフォーム",19999,"image/nagoya_yu.jpg");
  $menu3 = new nagoya ("マフラータオル",1650,"image/nagoya_ta.jpg");
  $menu4 = new nagoya ("プレイステーションバージョンパーカー",6600,"image/playstation.jpg");
  $nagoyamenus = array($menu1,$menu2,$menu3,$menu4);
  ?>
  <?php
  class  oita{
    private $name;
    private $price;
    private $image;
    private $orderCount = 0;
    public function __construct($name,$price,$image){
      $this -> name = $name;
      $this -> price = $price;
      $this -> image = $image;
    }
    public function getName() {
      return $this -> name;
    }
    public function getImage() {
      return $this -> image;
    }
    public function getPrice()  {
      return $this -> price;
    }
    public function getTaxPrice() {
      return $this -> taxPrice = floor($this -> price * 1.08);
    }
    public function setOrderCount($orderCount) {
    $this-> orderCount = $orderCount;
    }
    public function getTotalPrice() {
      return $this->getTaxPrice() * $this->orderCount;
    }
    }
  $menu1 = new oita ("キーホルダー",900,"image/oita_su.jpg");
  $menu2 = new oita ("2020レプリカユニフォーム",19999,"image/oita_yu.jfif");
  $menu3 = new oita ("マフラータオル",1650,"image/oita_ta.jpg");
  $menu4 = new oita ("プレイステーションバージョンパーカー",6600,"image/playstation.jpg");
  $oitamenus = array($menu1,$menu2,$menu3,$menu4);
  ?>
  <?php
  class  sapporo{
    private $name;
    private $price;
    private $image;
    private $orderCount = 0;
    public function __construct($name,$price,$image){
      $this -> name = $name;
      $this -> price = $price;
      $this -> image = $image;
    }
    public function getName() {
      return $this -> name;
    }
    public function getImage() {
      return $this -> image;
    }
    public function getPrice()  {
      return $this -> price;
    }
    public function getTaxPrice() {
      return $this -> taxPrice = floor($this -> price * 1.08);
    }
    public function setOrderCount($orderCount) {
    $this-> orderCount = $orderCount;
    }
    public function getTotalPrice() {
      return $this->getTaxPrice() * $this->orderCount;
    }
    }
  $menu1 = new sapporo ("キーホルダー",900,"image/sapporo_su.png");
  $menu2 = new sapporo ("2020レプリカユニフォーム",19999,"image/sapporo_yu.webp");
  $menu3 = new sapporo ("マフラータオル",1650,"image/sapporo_ta.png");
  $menu4 = new sapporo ("プレイステーションバージョンパーカー",6600,"image/playstation.jpg");
  $sapporomenus = array($menu1,$menu2,$menu3,$menu4);
  ?>
  <?php
  class  sendai{
    private $name;
    private $price;
    private $image;
    private $orderCount = 0;
    public function __construct($name,$price,$image){
      $this -> name = $name;
      $this -> price = $price;
      $this -> image = $image;
    }
    public function getName() {
      return $this -> name;
    }
    public function getImage() {
      return $this -> image;
    }
    public function getPrice()  {
      return $this -> price;
    }
    public function getTaxPrice() {
      return $this -> taxPrice = floor($this -> price * 1.08);
    }
    public function setOrderCount($orderCount) {
    $this-> orderCount = $orderCount;
    }
    public function getTotalPrice() {
      return $this->getTaxPrice() * $this->orderCount;
    }
    }
  $menu1 = new sendai ("キーホルダー",900,"image/sendai_su.png");
  $menu2 = new sendai ("2020レプリカユニフォーム",19999,"image/sendai_yu.jpg");
  $menu3 = new sendai ("マフラータオル",1650,"image/sendai_ta.png");
  $menu4 = new sendai ("プレイステーションバージョンパーカー",6600,"image/playstation.jpg");
  $sendaimenus = array($menu1,$menu2,$menu3,$menu4);
  ?>
  <?php
  class  shimizu{
    private $name;
    private $price;
    private $image;
    private $orderCount = 0;
    public function __construct($name,$price,$image){
      $this -> name = $name;
      $this -> price = $price;
      $this -> image = $image;
    }
    public function getName() {
      return $this -> name;
    }
    public function getImage() {
      return $this -> image;
    }
    public function getPrice()  {
      return $this -> price;
    }
    public function getTaxPrice() {
      return $this -> taxPrice = floor($this -> price * 1.08);
    }
    public function setOrderCount($orderCount) {
    $this-> orderCount = $orderCount;
    }
    public function getTotalPrice() {
      return $this->getTaxPrice() * $this->orderCount;
    }
    }
  $menu1 = new shimizu ("キーホルダー",900,"image/shimizu_su.jpg");
  $menu2 = new shimizu ("2020レプリカユニフォーム",19999,"image/shimizu_yu.jpg");
  $menu3 = new shimizu ("マフラータオル",1650,"image/shimizu_ta.jpg");
  $menu4 = new shimizu ("プレイステーションバージョンパーカー",6600,"image/playstation.jpg");
  $shimizumenus = array($menu1,$menu2,$menu3,$menu4);
  ?>
  <?php
  class  shonan{
    private $name;
    private $price;
    private $image;
    private $orderCount = 0;
    public function __construct($name,$price,$image){
      $this -> name = $name;
      $this -> price = $price;
      $this -> image = $image;
    }
    public function getName() {
      return $this -> name;
    }
    public function getImage() {
      return $this -> image;
    }
    public function getPrice()  {
      return $this -> price;
    }
    public function getTaxPrice() {
      return $this -> taxPrice = floor($this -> price * 1.08);
    }
    public function setOrderCount($orderCount) {
    $this-> orderCount = $orderCount;
    }
    public function getTotalPrice() {
      return $this->getTaxPrice() * $this->orderCount;
    }
    }
  $menu1 = new shonan ("キーホルダー",900,"image/shonan_su.jpg");
  $menu2 = new shonan ("2020レプリカユニフォーム",19999,"image/shonan_yu.jpg");
  $menu3 = new shonan ("マフラータオル",1650,"image/shonan_ta.jpg");
  $menu4 = new shonan ("プレイステーションバージョンパーカー",6600,"image/playstation.jpg");
  $shonanmenus = array($menu1,$menu2,$menu3,$menu4);
  ?>
  <?php
  class  tosu{
    private $name;
    private $price;
    private $image;
    private $orderCount = 0;
    public function __construct($name,$price,$image){
      $this -> name = $name;
      $this -> price = $price;
      $this -> image = $image;
    }
    public function getName() {
      return $this -> name;
    }
    public function getImage() {
      return $this -> image;
    }
    public function getPrice()  {
      return $this -> price;
    }
    public function getTaxPrice() {
      return $this -> taxPrice = floor($this -> price * 1.08);
    }
    public function setOrderCount($orderCount) {
    $this-> orderCount = $orderCount;
    }
    public function getTotalPrice() {
      return $this->getTaxPrice() * $this->orderCount;
    }
    }
  $menu1 = new tosu ("キーホルダー",900,"image/tosu_su.jpg");
  $menu2 = new tosu ("2020レプリカユニフォーム",19999,"image/tosu_yu.jpg");
  $menu3 = new tosu ("マフラータオル",1650,"image/tosu_ta.jpg");
  $menu4 = new tosu ("プレイステーションバージョンパーカー",6600,"image/playstation.jpg");
  $tosumenus = array($menu1,$menu2,$menu3,$menu4);
  ?>
  <?php
  class  yokohamafc{
    private $name;
    private $price;
    private $image;
    private $orderCount = 0;
    public function __construct($name,$price,$image){
      $this -> name = $name;
      $this -> price = $price;
      $this -> image = $image;
    }
    public function getName() {
      return $this -> name;
    }
    public function getImage() {
      return $this -> image;
    }
    public function getPrice()  {
      return $this -> price;
    }
    public function getTaxPrice() {
      return $this -> taxPrice = floor($this -> price * 1.08);
    }
    public function setOrderCount($orderCount) {
    $this-> orderCount = $orderCount;
    }
    public function getTotalPrice() {
      return $this->getTaxPrice() * $this->orderCount;
    }
    }
  $menu1 = new yokohamafc ("キーホルダー",900,"image/yokohamafc_su.jpg");
  $menu2 = new yokohamafc ("2020レプリカユニフォーム",19999,"image/yokohamafc_yu.jpg");
  $menu3 = new yokohamafc ("マフラータオル",1650,"image/yokohamafc_ta.png");
  $menu4 = new yokohamafc ("プレイステーションバージョンパーカー",6600,"image/playstation.jpg");
  $yokohamafcmenus = array($menu1,$menu2,$menu3,$menu4);
  ?>
  <?php
  class  yokohamafm{
    private $name;
    private $price;
    private $image;
    private $orderCount = 0;
    public function __construct($name,$price,$image){
      $this -> name = $name;
      $this -> price = $price;
      $this -> image = $image;
    }
    public function getName() {
      return $this -> name;
    }
    public function getImage() {
      return $this -> image;
    }
    public function getPrice()  {
      return $this -> price;
    }
    public function getTaxPrice() {
      return $this -> taxPrice = floor($this -> price * 1.08);
    }
    public function setOrderCount($orderCount) {
    $this-> orderCount = $orderCount;
    }
    public function getTotalPrice() {
      return $this->getTaxPrice() * $this->orderCount;
    }
    }
  $menu1 = new yokohamafm ("キーホルダー",900,"image/yokohamafm_su.png");
  $menu2 = new yokohamafm ("2020レプリカユニフォーム",19999,"image/yokohamafm_yu.jfif");
  $menu3 = new yokohamafm ("マフラータオル",1650,"image/yokohamafm_ta.jpg");
  $menu4 = new yokohamafm ("プレイステーションバージョンパーカー",6600,"image/playstation.jpg");
  $yokohamafmmenus = array($menu1,$menu2,$menu3,$menu4);
  ?>
