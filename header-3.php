<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta http-equiv="x-ua-compatible" content="ie=edge">
  <title><?php bloginfo('name'); ?></title>
  <!-- Font Awesome -->
  <link rel="shortcut icon" href="http://rinkishi.sakura.ne.jp/sharemuse/wp-content/uploads/2020/02/favicon.png">
  <script
  src="https://code.jquery.com/jquery-3.4.1.min.js"
  integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo="
  crossorigin="anonymous"></script>
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css">
  <!-- Bootstrap core CSS -->
  <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/bootstrap.min.css">
  <!-- Material Design Bootstrap -->
  <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/mdb.min.css">
  
  <!-- Your custom styles (optional) -->
  <link href="<?php echo get_stylesheet_uri();?>" rel="stylesheet">

</head>

<body>


  <!-- Start your project here-->
  <header>
    <nav class="navbar navbar-expand-lg navbar-light">
      <a id="headers" class="navbar-brand" href="<?php echo home_url();?>"><img src="<?php bloginfo('template_directory'); ?>/images/MOCOMheader.png" id="headertitle" /></a>
      <button class="navbar-toggler toggler-example" type="button" data-toggle="collapse" data-target="#navbarSupportedContent1"
      aria-controls="navbarSupportedContent1" aria-expanded="false" aria-label="Toggle navigation"><span class="dark-blue-text"><i
          class="fas fa-bars fa-1x"></i></span>
      </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent1">

      <ul class="navbar-nav justify-content-end" id="ulsec">
      <li class="w-20 nav-item ">
      <a class="nav-link w-100 m-1" href="<?php echo home_url();?>">Home<span class="sr-only">(current)</span></a>
      </li>
      <!-- <li class="w-20 nav-item">
      <a class="nav-link w-100  m-1" id="links" href="page-about">事業内容</a>
      </li> -->

      <li class="w-20 nav-item dropdown">
        <a class="nav-link w-100 m-1 dropdown-toggle" id="navbarDropdownMenuLink" data-toggle="dropdown"
          aria-haspopup="true" aria-expanded="false">事業内容</a>
        <div class="dropdown-menu dropdown-primary p-2" aria-labelledby="navbarDropdownMenuLink">
          <a class="dropdown-item"  href="page-about">事業内容トップ</a>
          <a class="dropdown-item" href="page-about#bigbox-01">株式会社モコム</a>
          <a class="dropdown-item" href="page-about#bigbox-02">株式会社PDP</a>
          <a class="dropdown-item" href="page-about#bigbox-03">GlobalMocom<br/>TranscendingInc</a>
        </div>
      </li>
      <!-- <li class=" w-15 nav-item">
      <a class="nav-link w-100 m-1" id="links"  href="page-info">企業情報</a>
      </li> -->
      <li class="w-20 nav-item dropdown">
        <a class="nav-link w-100 m-1 dropdown-toggle" id="navbarDropdownMenuLink" data-toggle="dropdown"
          aria-haspopup="true" aria-expanded="false">企業情報</a>
        <div class="dropdown-menu dropdown-primary p-2" aria-labelledby="navbarDropdownMenuLink">
          <a class="dropdown-item" href="page-info">企業情報トップ</a>
          <a class="dropdown-item" href="page-info#box001">メッセージ</a>
          <a class="dropdown-item" href="page-info#box005">会社概要</a>
          <a class="dropdown-item" href="page-info#box006">沿革</a>
          <a class="dropdown-item" href="page-info#box007">主要取引先</a>
        </div>  
      </li>

      <!-- <li class="w-15 nav-item">
      <a class="nav-link w-100 m-1" id="links" href="page-product">製品・設備</a>
      </li> -->

      <li class="w-20 nav-item dropdown">
        <a class="nav-link w-100 m-1 dropdown-toggle" id="navbarDropdownMenuLink" data-toggle="dropdown"
          aria-haspopup="true" aria-expanded="false">製品設備</a>
        <div class="dropdown-menu dropdown-primary p-2" aria-labelledby="navbarDropdownMenuLink">
          <a class="dropdown-item" href="page-product">製品設備トップ</a>
          <a class="dropdown-item" href="page-product#box001">製品</a>
          <a class="dropdown-item" href="page-product#box002">設備</a>
        </div>  
      </li>

      <button type="button" class="btn btn-primary ml-1" id="mailbt" onclick="location.href='contact'">
        お問い合わせ
      </button>
      </ul>
      <?php wp_head(); ?>
  </header>
  </div>