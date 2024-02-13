<?php get_header(); ?>
    
    <main id="page-contents">
        <div id="top" class="top-section">
            <img src="<?php echo get_template_directory_uri(); ?>/asset/top-background-sp.svg" alt="トップページバナー" class="pc-d-none">
            <div class="top-content-sp pc-d-none">
                <img src="<?php echo get_template_directory_uri(); ?>/asset/top-message-bg-sp.png" alt="バックグラウンド">
                <p class="top-message-01-sp"><img src="<?php echo get_template_directory_uri(); ?>/asset/top-message01-sp.png" alt="業界No.1の"></p>
                <p class="top-message-02-sp"><img src="<?php echo get_template_directory_uri(); ?>/asset/top-message02-sp.png" alt="オンラインカジノメディア"></p>
                <p class="top-message-03-sp"><img src="<?php echo get_template_directory_uri(); ?>/asset/top-message03-sp.png" alt="ニュースサイト"></p>
            </div>
            <!-- sp -->

            <img src="<?php echo get_template_directory_uri(); ?>/asset/top-backgroung-pc.svg" alt="トップページバナー" class="sp-d-none">
            <div class="top-content-pc sp-d-none">
                <img src="<?php echo get_template_directory_uri(); ?>/asset/top-message-bg-pc.png" alt="バックグラウンド" class="sp-d-none">
                <p class="top-message-01-pc"><img src="<?php echo get_template_directory_uri(); ?>/asset/top-message01-pc.png" alt="業界No.1の"></p>
                <p class="top-message-02-pc"><img src="<?php echo get_template_directory_uri(); ?>/asset/top-message02-pc.png" alt="オンラインカジノメディア"></p>
                <p class="top-message-03-pc"><img src="<?php echo get_template_directory_uri(); ?>/asset/top-message03-pc.png" alt="ニュースサイト"></p>
            </div>  
            <!-- pc -->

        </div>
        <!-- #top -->

        <div id="recomennd" class="content-wrapper bg-white-section">
            <h2>
                <span>RECOMEND</span>
                <small>~ おすすめカジノ ~</small>
            </h2>
            <article class="recomend-posts swiper-posts">
                <div class="recomend-swiper swiper">

                    <ul class="swiper-wrapper recomend-post-wrapper">
                        <?php 
                            $recommend_posts = array(
                                'post_type' => 'recomend',
                                'posts_per_page' => 10,
                                'order' => 'DESC', 
                            );

                            $posts = get_posts($recommend_posts);
                                if( $posts ):
                                    foreach( $posts as $post):
                                        setup_postdata($post);

                                        get_template_part( 'template-parts/content', 'top-recommend' );
                                        // テンプレート

                                    endforeach; 
                                endif;
                            wp_reset_postdata();                        
                        ?>
                        <!-- recomend-post -->

                    </ul>
                    <div class="swiper-button-prev swiper-button-black"></div>
                    <div class="swiper-button-next swiper-button-black"></div>
                </div>
            </article>
        </div>    
        <!-- #recomend -->

        <div id="bonus" class="content-wrapper bg-blue-section">
            <h2>
                <span>BONUS</span>
                <small>~ 限定ボーナス ~</small>
            </h2>  
            <div class="inner bonus-inner">
                <article>
                    <ul class="pc-d-fl">
                        <?php 
                            $bonus_posts = array(
                                'post_type' => 'bonus',
                                'posts_per_page' => 6,
                                'order' => 'DESC', 
                            );       
                            $posts = get_posts($bonus_posts);   
                            if( $posts ):
                                foreach( $posts as $post):   

                                    get_template_part( 'template-parts/content', 'top-bonus' );
                                    // テンプレート
                                    endforeach; 
                                endif;
                            wp_reset_postdata();                            
                        ?>            
                    </ul>
                </article>
            </div>
        </div> 
        <!-- #bonus -->

        <div id="search" class="content-wrapper bg-white-section">
            <div class="inner search-inner">
                <h2>
                    <span>SEARCH</span>
                    <small>~ カジノ比較 ~</small>
                </h2>     
                <ul class="search-contents-wrapper pc-d-fl">
                    <li class="search-content">
                        <a href="" class="d-fl">
                            <span class="search-icons">
                                <img src="<?php echo get_template_directory_uri(); ?>/asset/search-speed.svg" alt="出金スピード">
                            </span>
                            <span class="search-text">出金スピード</span>
                        </a>
                    </li>

                    <li class="search-content">
                        <a href="" class="d-fl">
                            <span class="search-icons">
                                <img src="<?php echo get_template_directory_uri(); ?>/asset/search-bounus.svg" alt="入金不要ボーナス">
                            </span>
                            <span class="search-text">入金不要ボーナス</span>
                        </a>
                    </li>
                
                    <li class="search-content">
                        <a href="" class="d-fl">
                            <span class="search-icons">
                                <img src="<?php echo get_template_directory_uri(); ?>/asset/search-rebet.svg" alt="リベートボーナス">
                            </span>
                            <span class="search-text">リベートボーナス</span>
                        </a>
                    </li>  
                
                    <li class="search-content">
                        <a href="" class="d-fl">
                            <span class="search-icons">
                                <img src="<?php echo get_template_directory_uri(); ?>/asset/search-beginner.svg" alt="初心者向け">
                            </span>
                            <span class="search-text">初心者向け</span>
                        </a>
                    </li>  

                    <li class="search-content">
                        <a href="" class="d-fl">
                            <span class="search-icons">
                                <img src="<?php echo get_template_directory_uri(); ?>/asset/search-high.svg" alt="ハイローラー向け">
                            </span>
                            <span class="search-text">ハイローラー向け</span>
                        </a>
                    </li>    
                
                    <li class="search-content">
                        <a href="" class="d-fl">
                            <span class="search-icons">
                                <img src="<?php echo get_template_directory_uri(); ?>/asset/search-kasou.svg" alt="仮想通貨">
                            </span>
                            <span class="search-text">仮想通貨</span>
                        </a>
                    </li>              

                </ul>    
            </div>
        </div>  
        <!-- #search -->

        <div id="payment" class="content-wrapper bg-blue-section">
            <h2>
                <span>PAYMENT</span>
                <small>~ お支払い方法 ~</small>
            </h2>  
            <div class="inner payment-inner">
                <div class="payment-contents pc-d-fl">

                    <div class="payment-content">
                        <ul>
                            <li class="payment-icon"><img src="<?php echo get_template_directory_uri(); ?>/asset/payment-payz.svg" alt="ペイズ"></li>
                            <li class="payment-text-wrapper">
                                <p>
                                大定番の電子決済サービス。エコペイズさえ
                                あればほぼ全てのオンラインカジノで
                                入出金可能です。英国FCA規制のもと、
                                安全性の高いオンライン決済を実現しています。
                                </p>
                                <a href="" class="btn detail-btn d-fl">
                                    <span>詳細はこちら</span>
                                    <img src="<?php echo get_template_directory_uri(); ?>/asset/arrow-right-solid-black.svg" alt="arrow">                  
                                </a>
                            </li>
                        </ul>
                    </div>

                    <div class="payment-content">
                        <ul>
                            <li class="payment-icon"><img src="<?php echo get_template_directory_uri(); ?>/asset/payment-bank.svg" alt="ペイズ"></li>
                            <li class="payment-text-wrapper">
                                <p>
                                普段お使いの銀行から国内銀行振込で
                                入出金できます。電子決済サービスのように
                                口座開設等の手続きが不要なので気軽に
                                オンラインカジノ利用したい人におすすめ。
                                </p>
                                <a href="" class="btn detail-btn d-fl">
                                    <span>詳細はこちら</span>
                                    <img src="<?php echo get_template_directory_uri(); ?>/asset/arrow-right-solid-black.svg" alt="arrow">                  
                                </a>
                            </li>
                        </ul>
                    </div>

                    <div class="payment-content">
                        <ul>
                            <li class="payment-icon"><img src="<?php echo get_template_directory_uri(); ?>/asset/payment-card.svg" alt="ペイズ"></li>
                            <li class="payment-text-wrapper">
                                <p>
                                    手元にお金がなくても入金できるクレジットカード。
                                    多くのオンラインカジノがVISA、Mastercard、
                                    JCBに対応しています。
                                    簡単に入金できてしまう分使い過ぎに要注意。
                                </p>
                                <a href="" class="btn detail-btn d-fl">
                                    <span>詳細はこちら</span>
                                    <img src="<?php echo get_template_directory_uri(); ?>/asset/arrow-right-solid-black.svg" alt="arrow">                  
                                </a>
                            </li>
                        </ul>
                    </div>

                    <div class="payment-content">
                        <ul>
                            <li class="payment-icon"><img src="<?php echo get_template_directory_uri(); ?>/asset/payment-vega.svg" alt="ペイズ"></li>
                            <li class="payment-text-wrapper">
                                <p>
                                    エコペイズに次ぐ第二の定番決済サービス。
                                    銀行口座へ手数料無料で当日出金できます。
                                    オンラインカジノ入出金でポイントバックが
                                    つくのはベガウォレットだけです。
                                </p>
                                <a href="" class="btn detail-btn d-fl">
                                    <span>詳細はこちら</span>
                                    <img src="<?php echo get_template_directory_uri(); ?>/asset/arrow-right-solid-black.svg" alt="arrow">                  
                                </a>
                            </li>
                        </ul>
                    </div>

                    <div class="payment-content">
                        <ul>
                            <li class="payment-icon"><img src="<?php echo get_template_directory_uri(); ?>/asset/payment-sticpay.svg" alt="ペイズ"></li>
                            <li class="payment-text-wrapper">
                                <p>
                                    オンラインカジノ・ブックメーカー・海外FX業者で
                                    使えるスティックペイ。
                                    紹介する決済サービスの中で唯一専用カードに
                                    よるATM入出金ができます。
                                </p>
                                <a href="" class="btn detail-btn d-fl">
                                    <span>詳細はこちら</span>
                                    <img src="<?php echo get_template_directory_uri(); ?>/asset/arrow-right-solid-black.svg" alt="arrow">                  
                                </a>
                            </li>
                        </ul>
                    </div>    
                    
                    <div class="payment-content">
                        <ul>
                            <li class="payment-icon"><img src="<?php echo get_template_directory_uri(); ?>/asset/payment-bitcoin.svg" alt="ペイズ"></li>
                            <li class="payment-text-wrapper">
                                <p>
                                    送金スピードが早く、手数料も安い仮想通貨は
                                    オンラインカジノ入出金と相性が良いです。
                                    ビットコイン以外のアルトコイン
                                    （イーサリアム、リップル）も使用できます。
                                </p>
                                <a href="" class="btn detail-btn d-fl">
                                    <span>詳細はこちら</span>
                                    <img src="<?php echo get_template_directory_uri(); ?>/asset/arrow-right-solid-black.svg" alt="arrow">                  
                                </a>
                            </li>
                        </ul>
                    </div>    

                </div>

                <a href="" target="_blank" rel="noopener noreferrer" class="btn section-btn d-fl">
                    <span>お支払いの一覧はこちら</span>
                    <img src="<?php echo get_template_directory_uri(); ?>/asset/arrow-right-solid-black.svg" alt="arrow">
                </a>
            </div>      
        </div> 
        <!-- #payment -->

        <div class="content-wrapper bg-white-section">
            <div id="guide" class="inner guid-inner">
                <h2>
                    <span>GUIDE</span>
                    <small>~始め方ガイド~</small>
                </h2>  
                <article class="guide-contents pc-d-fl">
                    <?php 
                            $guide_posts = array(
                                'post_type' => 'guide',
                                'posts_per_page' => 6,
                                'order' => 'DESC', 
                            );       
                            $posts = get_posts($guide_posts);   
                            if( $posts ):
                                foreach( $posts as $post): 

                                    get_template_part( 'template-parts/content', 'top-guide' );
                                    // テンプレート

                                endforeach; 
                            endif;
                        wp_reset_postdata();                            
                    ?>    
                </article>   
                
                <a href="" class="btn section-btn-red d-fl">
                    <span>始め方ガイドはこちら</span>
                    <img src="<?php echo get_template_directory_uri(); ?>/asset/arrow-right-solid-white.svg" alt="arrow">
                </a>

            </div>
            <!-- guide -->

            <div id="event" class="inner event-inner">
                <h2>
                    <span>EVENT</span>
                    <small>~イベント情報~</small>
                </h2>     
                <article class="event-contents pc-d-fl">
                    <?php 
                        $event_posts = array(
                                'post_type' => 'event',
                                'posts_per_page' => 6,
                                'order' => 'DESC', 
                            );       
                            $posts = get_posts($event_posts);   
                            if( $posts ):
                                foreach( $posts as $post): 

                                    get_template_part( 'template-parts/content', 'top-event' );
                                    // テンプレート
                                endforeach; 
                            endif;
                        wp_reset_postdata();                            
                    ?> 
                </article>  
                
                <a href="" class="btn section-btn-red d-fl">
                    <span>イベント情報はこちら</span>
                    <img src="<?php echo get_template_directory_uri(); ?>/asset/arrow-right-solid-white.svg" alt="arrow">
                </a>
            </div>
        </div>        
        <!-- .content-wrapper -->

        <div id="games" class="content-wrapper bg-blue-section">
            <h2>
                <span>GAMES</span>
                <small>~ おすすめゲーム ~</small>
            </h2>  
            <div class="inner games-inner">
                <div class="games-contents d-fl">
                    <div class="games-content">
                        <a href="" target="_blank">
                            <ul>
                                <span class="games-content-inne">
                                    <li><img src="<?php echo get_template_directory_uri(); ?>/asset/games-bakara.svg" alt="バカラ"></li>
                                    <li>バカラ</li>
                                </span>
                            </ul>
                        </a>
                    </div>

                    <div class="games-content">
                        <a href="" target="_blank">
                            <ul>
                                <span class="games-content-inner">
                                    <li><img src="<?php echo get_template_directory_uri(); ?>/asset/games-blackjack.svg" alt="ブラックジャック"></li>
                                    <li>ブラックジャック</li>
                                </span>
                            </ul>
                        </a>
                    </div>

                    <div class="games-content">
                        <a href="" target="_blank">
                            <ul>
                                <span class="games-content-inner">
                                    <li><img src="<?php echo get_template_directory_uri(); ?>/asset/games-blackjack.svg" alt="スロット"></li>
                                    <li>スロット</li>
                                </span>
                            </ul>
                        </a>
                    </div>

                    <div class="games-content">
                        <a href="" target="_blank">
                            <ul>
                                <span class="games-content-inner">
                                    <li><img src="<?php echo get_template_directory_uri(); ?>/asset/games-pocker.svg" alt="ポーカー"></li>
                                    <li>ポーカー</li>
                                </span>
                            </ul>
                        </a>
                    </div>

                    <div class="games-content">
                        <a href="" target="_blank">
                            <ul>
                                <span class="games-content-inner">
                                    <li><img src="<?php echo get_template_directory_uri(); ?>/asset/games-rueret.svg" alt="ルーレット"></li>
                                    <li>ルーレット</li>
                                </span>
                            </ul>
                        </a>
                    </div>

                    <div class="games-content">
                        <a href="" target="_blank">
                            <ul>
                                <span class="games-content-inner">
                                    <li><img src="<?php echo get_template_directory_uri(); ?>/asset/games-jickpor.svg" alt="ジックポー"></li>
                                    <li>ジックポー</li>
                                </span>
                            </ul>
                        </a>
                    </div>

                    <div class="games-content">
                        <a href="" target="_blank">
                            <ul>
                                <span class="games-content-inner">
                                    <li><img src="<?php echo get_template_directory_uri(); ?>/asset/games-sportsbet.svg" alt="ジックポー"></li>
                                    <li>スポーツベット</li>
                                </span>
                            </ul>
                        </a>
                    </div>

                </div>

                <a href="" target="_blank" rel="noopener noreferrer" class="btn section-btn d-fl">
                    <span>ゲームの一覧はこちら</span>
                    <img src="<?php echo get_template_directory_uri(); ?>/asset/arrow-right-solid-black.svg" alt="arrow">          
                </a>
            </div>      
        </div>        

        <div class="content-wrapper bg-white-section">
            <div id="about">
                <h2>
                    <span>ABOUT</span>
                    <small>~ サイト概要 ~</small>
                </h2>           
                <img src="<?php echo get_template_directory_uri(); ?>/asset/top-background-sp.svg" alt="トップページバナー" class="pc-d-none about-illust-sp">
                <img src="<?php echo get_template_directory_uri(); ?>/asset/top-backgroung-pc.svg" alt="トップページバナー" class="sp-d-none about-illust-pc">
                <div class="inner about-inner">
                    <h3>業界新世代オンラインカジノメディア</h3>
                    <p>
                        オモカジ一杯は2024年から運営しているオンラインカジノ・ブックメーカー紹介サイトです。今は 一般の方々に広く認知されているオンラインカジノですが、数多くあるオンラインカジノの中で悪 質なサイトも数多く存在していました。数多くの経験を経て、編集部一同は「優良で信頼できるオ ンラインカジノを自信を込めて紹介する!」という信念を持ち活動を始めました。ご紹介する優良 オンラインカジノは多くのリサーチを経て、実際に利用し、「これなら満足していただける!」という 結果の元で厳選した内容を記事にしております。なお、当サイトはオンラインギャンブルが合法な
                        国に居住する方々に向けて提供をしております。利用者は居住国の法律を遵守しながらご利用 ください。ビックウィンを掴めるように幸運を祈ります。            
                    </p>
                </div>
            </div>  
            <!-- #about -->

            <div id="partenership">
                <h3>提携オンラインカジノ</h3>
                <article class="partenership-posts swiper-posts">
                    <div class="partenership-swiper swiper">
                        <ul class="swiper-wrapper partenership-post-wrapper">

                        <?php 
                            $partenership_posts = array(
                                'post_type' => 'partenership',
                                'posts_per_page' => 10,
                                'order' => 'DESC', 
                            );
                        
                            $posts = get_posts($partenership_posts);   
                            if( $posts ):
                                foreach( $posts as $post):  

                                    get_template_part( 'template-parts/content', 'top-partenership' );
                                    // テンプレート 
                                    endforeach; 
                                endif;
                            wp_reset_postdata();  
                            ?>
                        </ul>
                    </div>
                
                </article>
            </div> 
            <!-- #partenership -->

        </div>
        <!-- .content-wrapper -->
    </main>
    <!-- main(終了) -->

<?php get_footer();?>