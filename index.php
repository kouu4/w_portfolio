<!DOCTYPE HTML>
<html lang="ja-JP">

<head prefix="og: http://ogp.me/ns# fb: http://ogp.me/ns/fb# article: http://ogp.me/ns/article#">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- from here is TDK -->
    <title>①タイトル（このページのタイトルを入力）</title>

    <!-- 検索エンジン除けのメタタグ -->
    <meta name="robots" content="noindex, nofollow">

    <meta name="description" content="②説明（このページの説明を入力）">
    <!-- to here is TDK -->
    <!-- from here is OGP -->
    <meta property="og:type" content="③サイトタイプ（article_or_website）">
    <meta property="og:description" content="②説明（このページの説明を入力）">
    <meta property="og:title" content="①タイトル（このページのタイトルを入力）">
    <meta property="og:url" content="④リンク（このページのURLを入力）">
    <meta property="og:image" content="./assets/image/ogp/ogp.jpg">
    <meta property="og:site_name" content="⑥名前（このサイトの名前）">
    <meta name="twitter:card" content="⑦表示スタイル（summary_or_summary_large_image）">
    <!-- to here is OGP -->
    <meta name="theme-color" content="⑧サイトカラー（このサイトのカラー）">
    <!-- from here is favicon -->
    <!-- <link rel="shortcut icon" href="./assets/image/favicon/favicon.ico" type="image/vnd.microsoft.icon">
    <link rel="icon" href="./assets/image/favicon/favicon.ico" type="image/vnd.microsoft.icon">
    <link rel="apple-touch-icon" sizes="180x180" href="./assets/image/favicon/apple-touch-icon.png">
    <link rel="icon" type="image/png" href="./assets/image/favicon/favicon-32x32.png" sizes="32x32">
    <link rel="icon" type="image/png" href="./assets/image/favicon/favicon-16x16.png" sizes="16x16"> -->
    <!-- to here is favicon -->
    <link rel="canonical" href="④リンク（このページのURLを入力）">
    <!-- from here is css -->
    <!-- <link rel="stylesheet" href="node_modules/ress/ress.css">
    <link rel="stylesheet" href="dist/css/style.css"> -->
    <!-- to here is css -->
    <!-- Google tag (gtag.js) -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Noto+Sans+JP:wght@100..900&family=Open+Sans:ital,wght@0,300..800;1,300..800&display=swap" rel="stylesheet">

    <?php wp_head(); ?>
</head>

<body>
    <header class="header">

        <h1 class="alwaysVisible__logo">
            <a href="index.html" class="header__logo">
                KT PORTFOLIO
            </a>
        </h1>
        <!-- /.alwaysVisible__logo -->

        <div class="alwaysVisible__menu openbtn">
            <button id="openbtn" class="openbtn__content">
                <span></span>
                <span></span>
                <span></span>
            </button>
        </div>
        <!-- /.alwaysVisible__menu -->

        <div class="alwaysVisible__pagetop">
            <a href="#" id="pagetop" class="pagetop">
                <div class="pagetop__inner">
                    <img src="<?php echo get_template_directory_uri(); ?>/src/img/allow_up.png" alt="" class="pagetop__icon">
                </div>
                <!-- /.pagetop__inner -->
            </a>
        </div>
        <!-- /.alwaysVisible__pagetop -->

        <div id="overlay" class="overlay">
            <div class="overlay__anchor">
                <div class="overlay__elem overlayMenu">
                    <nav class="overlayMenu__nav">
                        <ul class="overlayMenu__list">
                            <li class="overlayMenu__item">
                                <a href="#" class="overlayMenu__link text__hamburgerMenu">
                                    Top
                                </a>
                            </li>
                            <li class="overlayMenu__item">
                                <a href="#topic" class="overlayMenu__link text__hamburgerMenu">
                                    topic
                                    <span class="overlayMenu__subTxt text__hamburgerMenu-sub">お知らせ</span>
                                </a>
                            </li>
                            <li class="overlayMenu__item">
                                <a href="#promiss" class="overlayMenu__link text__hamburgerMenu">
                                    promiss
                                    <span class="overlayMenu__subTxt text__hamburgerMenu-sub">お約束</span>
                                </a>
                            </li>
                            <li class="overlayMenu__item">
                                <a href="#skills" class="overlayMenu__link text__hamburgerMenu">
                                    skills
                                    <span class="overlayMenu__subTxt text__hamburgerMenu-sub">使用技術</span>
                                </a>
                            </li>
                            <li class="overlayMenu__item">
                                <a href="#work" class="overlayMenu__link text__hamburgerMenu">
                                    work
                                    <span class="overlayMenu__subTxt text__hamburgerMenu-sub">制作物</span>
                                </a>
                            </li>
                            <li class="overlayMenu__item">
                                <a href="#about" class="overlayMenu__link text__hamburgerMenu">
                                    about
                                    <span class="overlayMenu__subTxt text__hamburgerMenu-sub">自己紹介</span>
                                </a>
                            </li>
                            <li class="overlayMenu__item">
                                <a href="#faq" class="overlayMenu__link text__hamburgerMenu">
                                    faq
                                    <span class="overlayMenu__subTxt text__hamburgerMenu-sub">よくあるご質問</span>
                                </a>
                            </li>
                            <li class="overlayMenu__item">
                                <a href="#contact" class="overlayMenu__link text__hamburgerMenu">
                                    contact
                                    <span class="overlayMenu__subTxt text__hamburgerMenu-sub">お問合せ</span>
                                </a>
                            </li>
                        </ul>
                    </nav>
                </div>
                <!-- /.overlay__elem.overlayMenu -->
            </div>
            <!-- /.overlay__anchor -->
        </div>
        <!-- /#overlay.overlay -->

    </header>
    <!-- /.header -->


    <main class="main container">



        <section class="fv">
            <div class="fv__inner">
                <h2 class="fv__ttl">KT PORTFOLIO</h2>
                <figure id="js-slide" class="fv__photoFrame">
                    <img src="<?php echo get_template_directory_uri(); ?>/src/img/fv1.webp" alt="" class="fv__photo">
                    <img src="<?php echo get_template_directory_uri(); ?>/src/img/fv2.webp" alt="" class="fv__photo">
                    <img src="<?php echo get_template_directory_uri(); ?>/src/img/fv3.webp" alt="" class="fv__photo">
                    <img src="<?php echo get_template_directory_uri(); ?>/src/img/fv4.webp" alt="" class="fv__photo">
                </figure>
            </div>
            <!-- /.fv__background-parallax -->
        </section>



        <div class="bgParallax-parent">

            <div class="elevator">
                <div class="elevator__separate">

                    <section id="topic" class="elevator__topic topic">
                        <div class="topic__ttl headline__inner">
                            <h2 class="headline__ttl--orange -cl-white">
                                topic
                            </h2>
                            <div class="headline__underBox">
                                <div class="headline__decoration--white"></div>
                                <span class="headline__subttl -cl-white">お知らせ</span>
                            </div>
                            <!-- /.headline__underBox -->
                        </div>
                        <!-- /.headline__inner -->

                        <div class="topic__card card">
                            <div class="card__body">
                                <p class="card__text">
                                    稼働時間 9:00 ~ 18:00
                                    <br>些細なことでもお気軽にご相談ください！
                                    <br><span class="card__subtext -marker-orange">
                                        ※確実に対応できる時間です。 この時間以外でも随時対応いたします。
                                    </span>
                                </p>
                            </div>
                            <!-- /.card__body -->
                            <img src="<?php echo get_template_directory_uri(); ?>/src/img/clock.png" alt="coding" class="card__thumb">
                        </div>
                        <!-- /.card -->



                    </section>

                    <section id="promiss" class="elevator__promiss promiss">
                        <div class="promiss__ttl headline__inner">
                            <h2 class="headline__ttl--green -cl-white">
                                promiss
                            </h2>
                            <div class="headline__underBox">
                                <div class="headline__decoration--white"></div>
                                <span class="headline__subttl -cl-white">お約束</span>
                            </div>
                            <!-- /.headline__underBox -->
                        </div>
                        <!-- /.headline__inner -->

                        <div class="promiss__cardFrame">

                            <div class="card">
                                <div class="card__body">
                                    <h3 class="card__ttl">
                                        <span class="-line-group">
                                            <span class="-marker-green">速やか</span>で
                                        </span>
                                        <br>
                                        <span class="-line-group">
                                            <span class="-marker-green">親しみやすいサポート</span>を
                                        </span>
                                        <br>
                                        <span class="-line-group">
                                            お約束します。
                                        </span>
                                    </h3>
                                    <p class="card__description">
                                        稼働時間に頂戴しましたご連絡なら３時間以内に、
                                        稼働時間後にいただいたご連絡につきましても、
                                        翌日の午前中にはお返事をさせていただきます！
                                    </p>
                                </div>
                                <!-- /.card__body -->
                                <img src="<?php echo get_template_directory_uri(); ?>/src/img/runner.png" alt="coding" class="card__thumb">
                            </div>
                            <!-- /.card -->

                            <div class="card">
                                <div class="card__body">
                                    <h3 class="card__ttl">
                                        <span class="-line-group">
                                            <span class="-marker-green">些細やタスク</span>も
                                        </span>
                                        <br>
                                        <span class="-line-group">
                                            お任せください！
                                        </span>
                                    </h3>
                                    <p class="card__description">
                                        ご要望に応じて、柔軟に対応させていただいております。
                                        文言やデザインのちょっとした修正など
                                        些細なことでもお気軽にご相談ください！ </p>
                                </div>
                                <!-- /.card__body -->
                                <img src="<?php echo get_template_directory_uri(); ?>/src/img/repair.png" alt="coding" class="card__thumb">
                            </div>
                            <!-- /.card -->

                        </div>
                        <!-- /.promiss__cardFrame -->

                    </section>

                </div>
                <!-- /.elevator__separate -->

                <section id="skills" class="elevator__skills skills">

                    <div class="skills__ttl headline">
                        <div class="headline__inner -cl-white">
                            <h2 class="headline__ttl--orangered">
                                skills
                            </h2>
                            <div class="headline__underBox">
                                <div class="headline__decoration--white"></div>
                                <span class="headline__subttl">使用技術</span>
                            </div>
                            <!-- /.headline__underBox -->
                        </div>
                        <!-- /.headline__inner -->
                    </div>
                    <!-- /.skills__ttl -->

                    <div class="skills__cardFrame">

                        <div class="skills__card card--skl">
                            <div class="card__body">
                                <h3 class="card__ttl">
                                    HTML
                                </h3>
                                <p class="card__description">
                                    このサイトのようなコーディングが可能です。
                                    HTML /CSS /SCSS /javascript /jQuery でスライドやアコーディオン等の機能を実装することも可能です。
                                </p>
                            </div>
                            <!-- /.card__body -->
                            <img src="<?php echo get_template_directory_uri(); ?>/src/img/icon_HTML.png" alt="coding" class="card__thumb">
                        </div>
                        <!-- /.card -->

                        <div class="skills__card card--skl">
                            <div class="card__body">
                                <h3 class="card__ttl">
                                    CSS
                                </h3>
                                <p class="card__description">
                                    CSSを用いたサイトデザインが可能です。BEMを意識したCSS設計、gulpとDart Sassをつかってコーディングをしています。
                                </p>
                            </div>
                            <!-- /.card__body -->
                            <img src="<?php echo get_template_directory_uri(); ?>/src/img/icon_CSS.png" alt="coding" class="card__thumb">
                        </div>
                        <!-- /.card-->

                        <div class="skills__card card--skl">
                            <div class="card__body">
                                <h3 class="card__ttl">
                                    Javascript /jQuery
                                </h3>
                                <p class="card__description">
                                    オブジェクトにアニメーションをつけることが可能です。jQueryで書くことが多いですが、素のjavascriptにも対応可能です。
                                </p>
                            </div>
                            <!-- /.card__body -->
                            <img src="<?php echo get_template_directory_uri(); ?>/src/img/icon_JS.png" alt="coding" class="card__thumb">
                        </div>
                        <!-- /.card-->

                        <div class="skills__card card--skl">
                            <div class="card__body">
                                <h3 class="card__ttl">
                                    WordPress
                                </h3>
                                <p class="card__description">
                                    WordPressを用いたサイト作成・運用が可能です。サーバーやドメイン設定からSEOを意識したサイトの運用まで経験があります。
                                </p>
                            </div>
                            <!-- /.card -->
                            <img src="<?php echo get_template_directory_uri(); ?>/src/img/icon_wordpress.png" alt="coding" class="card__thumb">
                        </div>
                        <!-- /.card-->

                    </div>
                    <!-- /.skills__cardFrame -->

                </section>


                <section id="work" class="elevator__works gallery">

                    <div class="gallery__ttl headline__inner">
                        <h2 class="headline__ttl--blue -cl-white">
                            works
                        </h2>
                        <div class="headline__underBox">
                            <div class="headline__decoration--white"></div>
                            <span class="headline__subttl -cl-white">制作物</span>
                        </div>
                        <!-- /.headline__underBox -->
                    </div>
                    <!-- /.headline__inner -->



                    <?php 
                        $args = array(
                            'post_type' => 'works', // カスタム投稿タイプを指定
                            'posts_per_page' => -1, // 取得する投稿数（-1は全ての投稿を取得）
                        );

                        $works_query = new WP_Query($args);

                        if ( $works_query->have_posts() ) : 
                            while ( $works_query->have_posts() ) : $works_query->the_post(); ?>
                                <div class="gallery__card card-gallery">
                                    <?php get_template_part('loop', 'works'); ?>
                                </div>
                                <!-- /.gallery__card.card-gallery -->
                            <?php endwhile; 
                            wp_reset_postdata(); // カスタムクエリをリセット
                        endif;
                    ?>

                </section>

            </div>
            <!-- /.elevator -->

            <section class="about" id="about">
                <div class="about__ttl headline__inner">
                    <h2 class="headline__ttl--deepblue -cl-white">
                        about
                    </h2>
                    <div class="headline__underBox">
                        <div class="headline__decoration--white"></div>
                        <span class="headline__subttl -cl-white">自己紹介</span>
                    </div>
                    <!-- /.headline__underBox -->
                </div>
                <!-- /.headline__inner -->

                <div class="about__content">
                    <figure class="about__photoFrame">
                        <img src="<?php echo get_template_directory_uri(); ?>/src/img/630x400.png" alt="" class="about__portrait">
                    </figure>
                    <div class="about__body">
                        <table class="about__table">
                            <tr class="about__row">
                                <th class="about__head">氏名</th>
                                <td class="about__data">〇〇〇〇</td>
                            </tr>
                            <tr class="about__row">
                                <th class="about__head">居住地</th>
                                <td class="about__data">〇〇〇〇</td>
                            </tr>
                            </tr>
                            <tr class="about__row">
                                <th class="about__head">経歴</th>
                                <td class="about__data">
                                〇〇〇〇〇〇〇〇〇〇〇〇〇〇〇〇〇〇〇〇〇〇〇〇〇〇〇〇〇〇〇〇〇〇〇〇〇〇〇〇〇〇〇〇
                                </td>
                            </tr>
                            <tr class="about__row">
                                <th class="about__head">趣味</th>
                                <td class="about__data">〇〇〇〇</td>
                            </tr>
                        </table>
                    </div>
                    <!-- /.about__body -->
                </div>
                <!-- /.about__content -->
            </section>

            <section class="faq" id="faq">
                <div class="faq__ttl headline__inner">
                    <h2 class="headline__ttl--purple -cl-white">
                        faq
                    </h2>
                    <div class="headline__underBox">
                        <div class="headline__decoration--white"></div>
                        <span class="headline__subttl -cl-white">よくあるご質問</span>
                    </div>
                    <!-- /.headline__underBox -->
                </div>
                <!-- /.headline__inner -->
                <div class="faq__body accordion">
                    <div class="accordion-item">
                        <div class="accordion-title">デザインの依頼は可能でしょうか？</div>
                        <div class="accordion-content">現在、デザインのご依頼は受け付けておりません。<br>デザインカンプをご用意の上、ご依頼いただけますと幸いです。</div>
                    </div>
                    <div class="accordion-item">
                        <div class="accordion-title">地方ですが発注は可能でしょうか？</div>
                        <div class="accordion-content">もちろん可能です。<br>お気軽にお申し付けください。</div>
                    </div>
                    <div class="accordion-item">
                        <div class="accordion-title">レスポンシブデザイン対応はしていますか？</div>
                        <div class="accordion-content">はい、レスポンシブデザインに対応したwebサイトを作成しております。</div>
                    </div>
                    <div class="accordion-item">
                        <div class="accordion-title">制作期間はどのくらいですか？</div>
                        <div class="accordion-content">webサイトの規模や機能によって異なります。<br>一度お問合せくださいませ。</div>
                    </div>
                </div>
            </section>

            <section class="contact" id="contact">
                <div class="contact__ttl headline__inner">
                    <h2 class="headline__ttl--black -cl-white">
                        contact
                    </h2>
                    <div class="headline__underBox">
                        <div class="headline__decoration--white"></div>
                        <span class="headline__subttl -cl-white">お問合せ</span>
                    </div>
                    <!-- /.headline__underBox -->
                </div>
                <!-- /.headline__inner -->
                <div class="contact__body">
                    <div class="contactForm">
                        <?php echo do_shortcode('[contact-form-7 id="908dc75" title="contact"]'); ?>
                    </div>
                    <!-- /.contactForm -->

                    

                </div>
                <!-- /.contact__body -->
            </section>

        </div>
        <!-- /.bgPallax -->





    </main>

    <footer class="footer">
        <small class="footer__copyright">&copy; KT PORTFOLIO</small>
    </footer>









<?php wp_footer(); ?>

</body>


</html>




