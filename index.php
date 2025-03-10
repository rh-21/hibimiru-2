<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset=" UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta name="robots" content="noindex" />
    <title>ショート動画制作サービス ビビミル</title>
    <meta name="description" content="サイトの概要を記入します。" />
     <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Alata&display=swap" rel="stylesheet">
    <!-- reset.css modern-css-reset -->
    <link rel="stylesheet" href="https://unpkg.com/modern-css-reset/dist/reset.min.css" />
    <!-- slick -->
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css" />
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick-theme.css">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/style.css" />
</head>


<body>
    <div class="container">
        <!-- header -->
        <header id="header">
        </header>

        <!-- fv -->
        <main>
            <div id="fv"></div>
            <!-- about -->
            <div id="about"></div>

            <!-- achievement -->
            <section id="achievement">
                <div class="inner">
                    <div class="ac-right">
                        <h3 class="section-title section-title-br">ACHIEVEMENTS</h3>
                        <div class="ac-textbox">
                            <h4 class="ac-title">ショート動画制作サービス<br class="sp_br">『ヒビミル』の実績</h4>
                            <p class="ac-text">魅力的なショート動画を制作し、お客様の大切なアカウントのリーチ数、フォロワー獲得・クリック数を伸ばします。</p>
                            <div class="slider-carsol">
                                <div class="slider-prev prev_icon"></div> <!-- 左矢印 -->
                                <ul class="slider-dots slick-dots"></ul> <!-- ドット -->
                                <div class="slider-next next_icon"></div> <!-- 右矢印 -->
                            </div>
                        </div>
                    </div>
                    <div class="slider">
                        <div>
                            <img class="sl-img" src="https://placehold.jp/3d4070/ffffff/277x488.png" alt="" />
                            <p class="sl-title">アパレル企業</p>
                        </div>
                        <div>
                            <img class="sl-img" src="https://placehold.jp/1822aa/ffffff/277x488.png" alt="" />
                            <p class="sl-title">ホテル</p>
                        </div>
                        <div>
                            <img class="sl-img" src="https://placehold.jp/277x488.png" alt="" />
                            <p class="sl-title">アパレル企業2</p>
                        </div>
                    </div>
                </div>
            </section>

            <!-- section02 -->
            <section id="merit">
                <div class="merit-wrap container">
                    <div class="merit-title-set">
                        <h3 class="section-title">MERIT</h3>
                        <span class="section-title-jp">メリット</span>
                    </div>
                    <ul class="merit-list">
                        <?php
                            //取得したい投稿記事などの条件を引数として渡す
                            $args = array(
                            // 投稿タイプ
                            'post_type'      => 'merit',
                            // 1ページに表示する投稿数
                            'posts_per_page' => 5,
                            );
                            // データの取得
                            $posts = get_posts($args);
                            ?>
                        <?php foreach ($posts as $index => $post) : ?>
                        <?php setup_postdata($post); ?>

                        <li class="merit-item">
                            <?php the_post_thumbnail( 'full', array( 'class' => 'merit-item-mainimg' ) ); ?>
<!-- 
ここのサムネイルの画像のcss指定方法がわからなかった。なぜdivで囲ってあげて反応しないのか。下の場合hightをautoにすると縦伸びする。
                             -->
                            <!-- <div class="merit-item-mainimg">
                                <?php the_post_thumbnail();?>
                            </div> -->
                            <!-- <img class="merit-item-mainimg" src="" > -->


                            <div class="merit-item-textbox">
                                <div class="merit-item-title">
                                    <img class="merit-num" src="<?php echo get_template_directory_uri(); ?>/img/merit.png" alt="Merit">
                                    <p><?php echo str_pad($index +1, 2, 0, STR_PAD_LEFT); ?></p>
                                    <h4 class="merit-title-text"><?php the_title(); ?></h4>
                                </div>
                                <p class="merit-item-text">ショート動画は気軽に視聴できるため、再生回数が多ければSNS上での拡散が容易なため多くのターゲットへの認知拡大が見込め自社商品やサービスの認知拡大が見込めます。</p>
                            </div>
                        </li>
                         <?php endforeach; ?>
                        <!-- 使用した投稿データをリセット -->
                        <?php wp_reset_postdata(); ?>

<!--                         
                        <li class="merit-item">
                            <img class="merit-item-mainimg" src="<?php echo get_template_directory_uri(); ?>/img/merit-img-02.png" alt="男性がスマートフォンを見る画像">
                            <div class="merit-item-textbox">
                                <div class="merit-item-title">
                                    <img class="merit-num" src="<?php echo get_template_directory_uri(); ?>/img/merit.png" alt="Merit">
                                    <p>02</p>
                                    <h4 class="merit-title-text">自社商品やサービス認知拡大</h4>
                                </div>
                                <p class="merit-item-text">
                                    ショート動画は気軽に視聴できるため、再生回数が多ければSNS上での拡散が容易なため多くのターゲットへの認知拡大が見込め自社商品やサービスの認知拡大が見込めます。</p>
                            </div>
                        </li>
                        <li class="merit-item">
                            <img class="merit-item-mainimg" src="<?php echo get_template_directory_uri(); ?>/img/merit-img-03.png" alt="男性がスマートフォンを見る画像">
                            <div class="merit-item-textbox">
                                <div class="merit-item-title">
                                    <img class="merit-num" src="<?php echo get_template_directory_uri(); ?>/img/merit.png" alt="Merit">
                                    <p>03</p>
                                    <h4 class="merit-title-text">自社商品やサービス認知拡大</h4>
                                </div>
                                <p class="merit-item-text">
                                    ショート動画は気軽に視聴できるため、再生回数が多ければSNS上での拡散が容易なため多くのターゲットへの認知拡大が見込め自社商品やサービスの認知拡大が見込めます。</p>
                            </div>
                        </li> -->
                    </ul>
            </section>
        </main>

        <!-- footer -->
        <footer id="footer">
            <p class="copylight"></p>
        </footer>
    </div>
    <script src="script.js"></script>
    <script src="https://code.jquery.com/jquery-3.6.1.min.js" integrity="sha256-o88AwQnZB+VDvE9tvIXrMQaPlFFSUTR+nldQm1LuPXQ=" crossorigin="anonymous"></script>
    <!-- slick-js -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"
        integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
    <script src="js/script.js"></script>
    
    <script type="text/javascript">
        $(document).ready(function () {
            $('.slider').slick({
                dots: true,
                infinite: true,
                adaptiveHeight: true,
                prevArrow: '<img src="<?php echo get_template_directory_uri(); ?>/img/prev.png" alt="" class="prev_icon">',
                nextArrow: '<img src="<?php echo get_template_directory_uri(); ?>/img/next.png" alt="" class="next_icon">',
                appendDots: $('.slick-dots'),  // ドットを移動させる
                appendArrows: $('.slider-carsol'), // 両方の矢印をまとめて移動するコンテナ
          });
        });
    </script>
</body>

</html>


