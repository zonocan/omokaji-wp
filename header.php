<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">  
  <title>オモカジ</title>

  <!-- google-font -->
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Noto+Sans+JP&family=Roboto&display=swap" rel="stylesheet">

  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Roboto&display=swap" rel="stylesheet">
  <?php wp_head();?>
  <!--  -->  
</head>    

<body>
    <header class="header">
        <div class="inner d-fl">
            <h1 class="header-logo"><a href="#top"><img src="<?php echo get_template_directory_uri(); ?>/asset/logo.svg" alt="logo"></a></h1>
            <div class="hum-btn pc-d-none">
                <span></span>
                <span></span>
            </div>
            <nav class="sp-d-none pc-header-nav">
                <ul class="d-fl">
                <li class="pc-header-nav-link link-active"><a href="#top">TOP</a></li>
                <li class="pc-header-nav-link"><a href="#recomennd">RECOMEND</a></li>
                <li class="pc-header-nav-link"><a href="#bonus">BONUS</a></li>
                <li class="pc-header-nav-link"><a href="#search">SEARCH</a></li>
                <li class="pc-header-nav-link"><a href="#payment">PAYMENT</a></li>
                <li class="pc-header-nav-link"><a href="#guide">GUIDE</a></li>
                <li class="pc-header-nav-link"><a href="#event">EVENT</a></li>
                <li class="pc-header-nav-link"><a href="#games">GAMES</a></li>
                <li class="pc-header-nav-link"><a href="#about">ABOUT</a></li>
                <!-- <li><a href="#partenership">提携オンラインカジノ</a></li> -->
                </ul>        
            </nav>
        </div>
    </header>
    <!-- header終了 --> 

    <div class="hum-list d-none">
        <div class="inner">
            <nav>
                <ul>
                    <li class="hum-list-link-title">サイトマップ</li>
                    <li><a href="#top">TOP</a></li>
                    <li><a href="#recomennd">RECOMEND</a></li>
                    <li><a href="#bonus">BONUS</a></li>
                    <li><a href="#search">SEARCH</a></li>
                    <li><a href="#payment">PAYMENT</a></li>
                    <li><a href="#guide">GUIDE</a></li>
                    <li><a href="#event">EVENT</a></li>
                    <li><a href="#games">GAMES</a></li>
                    <li><a href="#about">ABOUT</a></li>
                    <!-- <li><a href="#partenership">提携オンラインカジノ</a></li> -->
                </ul>
            </nav>

            <nav>
                <ul>
                    <li class="hum-list-link-title">関連サイト</li>
                    <li><a href="" target="_blank">テキストテキストテキストテキストテキスト</a></li>
                    <li><a href="" target="_blank">テキストテキストテキスト</a></li>
                    <li><a href="" target="_blank">テキストテキストテキストテキスト</a></li>
                    <li><a href="" target="_blank">テキストテキストテキスト</a></li>
                </ul>
            </nav>
            
            <a href="" target="_blank" rel="noopener noreferrer" class="humlist-twitter-btn">
                <img src="<?php echo get_template_directory_uri(); ?>/asset/twitter-black.svg" alt="twitter">
            </a>    
        </div> 
    </div>
    <!-- .hum-list --> 