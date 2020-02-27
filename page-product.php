<?php
/*
Template Name: 製品・設備
*/
get_header("4") ?>

<div id="submain-00" class="countainer-fluid">
    <h1 id="submainp-00" class="fadeinmain1" style="display:none;">製品・設備</h1>
    <h5 id="submainp-05" class="fadeinmain2" style="display:none;">PRODUCT & FACILITY</h5>
</div>
<nav aria-label="breadcrumb">
    <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="./index.html">Home</a></li>
        <li class="breadcrumb-item active" aria-current="page">製品・設備</li>
    </ol>
</nav>
<script type="text/javascript">
    $('.fadeinmain1').fadeIn(2000);
    $('.fadeinmain2').fadeIn(3000);
</script>


<div class="container  w-100 mt-5 mb-5">
    <div class="row justify-content-center">
        <section>
            <ul class="list-group list-group-horizontal-lg w-100">

                <div class="col-lg-6 col-sm-12">

                    <a class="btn purple-gradient list-group-item m-2" id="boxitem-00" onclick="move1()">製品情報</a>
                </div>

                <div class="col-lg-6 col-sm-12">

                    <a class="btn purple-gradient list-group-item m-2" id="boxitem-01" onclick="move2()">設備情報</a>

                </div>

            </ul>
        </section>
    </div>
</div>


<i class="fas fa-angle-double-up" id="back" onclick="back()"></i>
<div class="container mt-5 mb-5" id="bigbox-01">
    <div class="row">
        <div id="box001" class="col-lg">
            <div class="row-sm">
                <div id="border-01">
                    <h1 id="title01">製品情報</h1>
                    <h6 id="subtitle01">PRODUCT INFORMATION</h6>

                </div>

            </div>
        </div>

    </div>
</div>



<div class="contents">



</div>

</div>

<div class="container" id="companybox01">
    <h4 class="w-100 mt-5 mb-5 ml-4">委託製品</h4>
    <!-- <img src="<?php bloginfo('template_directory'); ?>/images/商品_EGRIP2x-p-800.jpeg" width="290px" height="200px">
                <h3 id="operationtitle-00">EGRIP</h3>
                <p id="operationcontents-00">xxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxx
                    xxxxxxxxxxxxx
                    xxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxx</p> -->
    <div class="row">
        <?php
        // ① ↓ 今現在のページ位置を取得
        $paged = (int) get_query_var('paged');

        $args = array(
            // ② get_option('posts_per_page') ← で管理画面で設定した、記事一覧で表示するページ数を取得
            'posts_per_page' => get_option('posts_per_page'),
            // ③ (int) get_query_var('paged') ← で取得した、$pagedを挿入
            'paged' => $paged,
            'orderby' => 'menu_order',
            'order' => 'asc',
            'post_type' => 'post',
            'post_status' => 'publish'
        );
        $the_query = new WP_Query($args);
       

        // 記事一覧のループスタート
        


        if ($the_query->have_posts()) :
            while ($the_query->have_posts()) : $the_query->the_post();
        ?>

                <!-- ここにループを回して表示させるhtmlを -->


                <div class="col-lg-4">
                    <div class="col-12-sm ml-3">
                        <div class="imgWrap">
                            <?php the_post_thumbnail(array(330, 200)); ?>
                        </div>
                        <h3 id="operationtitle-10"><?php the_title(); ?></h3>
                        <article id="operationcontents-10"><?php the_content();  ?></articlex`>
                    </div>
                </div>


        <?php

            endwhile;
        endif;

        // 記事一覧のループ終わり
        wp_reset_postdata();

        ?>
    </div>
    <!-- </div>
        </div>
        <div class="col-lg-4">
            <div class="col-12-sm ml-3">
                <img src="<?php bloginfo('template_directory'); ?>/images/樹脂成型品.jpeg" width="290px" height="200px">
                <h3 id="operationtitle-01">GMATIC</h3>
                <p id="operationcontents-01">xxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxx
                    xxxxxxxxxxxxx
                    xxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxx</p>
            </div>
        </div>
        <div class="col-lg-4">
            <div class="col-12-sm ml-3">
                <img src="<?php bloginfo('template_directory'); ?>/images/実装コンサルティング写真綱淵様.JPG" width="290px" height="200px">
                <h3 id="operationtitle-02">オートメーション</h3>
                <p id="operationcontents-02">xxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxx
                    xxxxxxxxxxxxx
                    xxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxx</p>
            </div>
        </div>


    </div>

</div> -->
    <div class="container" id="companybox00">
        <h4 class="w-100 mt-5 mb-5 ml-4">オリジナル製品</h4>
        <div class="row">

            <div class="col-lg-4">
                <div class="col-12-sm ml-3">
                    <div class="imgWrap">
                        <img src="<?php bloginfo('template_directory'); ?>/images/product_EGRIP2x.jpg" width="290px" height="200px">
                    </div>
                    <h3 id="operationtitle-00">EGRIP</h3>
                    <p id="operationcontents-00">EGRIPは当社が開発した工具です。生産ツールである【EGRIP】は、Eリング挿入・取外工具です。そのほか、様々な設計開発製造を行っております。いずれもこれまでの常識にとらわれない斬新な発想による製品です。</p>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="col-12-sm ml-3">
                    <div class="imgWrap">
                        <img src="<?php bloginfo('template_directory'); ?>/images/-EGRIP-p-500.jpeg" width="290px" height="200px">
                    </div>
                    <h3 id="operationtitle-01"> GMATIC</h3>
                    <p id="operationcontents-01">GMATICは当社が開発した工具です。
                        Eリング挿入・取外工具【EGRIP】などの生産ツール、【GMATIC】などの高強度プラスティック製品など様々な設計開発製造を行っております。いずれもこれまでの常識にとらわれない斬新な発想による製品です。またSMTライン用の基板ローダー/アンローダー装置や樹脂成型材料の自動ローディング装置、自動サンドブラスト装置など社内自動化で培ったノウハウを製品化しております。</p>
                </div>
            </div>
            <div class="col-lg-4">
            <div class="col-12-sm ml-3">
                <img src="<?php bloginfo('template_directory'); ?>/images/product_trans2x-p-800.jpeg" width="290px" height="200px">
                <h3 id="operationtitle-02">装置・治具</h3>
                <p id="operationcontents-02"></p>
            </div>
        </div>


        </div>
    </div>

        <div class="container mt-5 mb-5" id="bigbox-02">
            <div class="row">
                <div id="box002" class="col-lg">
                    <div class="row-sm">
                        <div id="border-01">
                            <h1 id="title01">設備情報</h1>
                            <h6 id="subtitle01">FACILITY INFORMATION</h6>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="container" id="companybox03">
            <div class="row">

                <div class="col-lg-4">
                    <div class="col-12-sm ml-3">
                        <div class="imgWrap">
                            <img src="<?php bloginfo('template_directory'); ?>/images/bankinequip-p-500.jpeg" width="290px" height="200px">
                        </div>
                        <h3 id="operationtitle-00">板金加工機設備</h3>
                        <p id="operationcontents-00">アマダ社製タレットパンチプレス：３台<br />
                            アマダ社製(35～50トン)プレスブレーキ：４台<br />
                            アマダ社製タッピングマシン：２台<br />
                            アイダ/アマダ社製(60トン～80トン)プレス：３台<br />
                            電元社トーア社製スポット溶接機：２台<br />
                            サンドブラストブース：３台<br />
                            TIG溶接機：２台<br />
                            MIG溶接機：２台<br /></p>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="col-12-sm ml-3">
                        <div class="imgWrap">
                            <img src="<?php bloginfo('template_directory'); ?>/images/rmfactory2-p-500.jpeg" width="290px" height="200px">
                        </div>
                        <h3 id="operationtitle-01">樹脂成型機設備</h3>
                        <p id="operationcontents-01">横型樹脂成型機 (20トン～450トン)：３５台<br />
                            縦型樹脂成型機 (40トン～100トン) ：５台<br />
                            (TOSHIBA・JSW・HISHIYA・NISSEI・TOYO)<br />
                            ユーシン社製取出ロボット：３０台<br />
                            カワタ社製除湿乾燥機：３台</p>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="col-12-sm ml-3">
                        <div class="imgWrap">
                            <img src="<?php bloginfo('template_directory'); ?>/images/iequip-p-500.jpeg" width="290px" height="200px">
                        </div>
                        <h3 id="operationtitle-02">実装組立設備</h3>
                        <p id="operationcontents-02">2SMT実装ライン：2ライン <br />(Juki,Panasonic,Yamaha,Tamura)<br />
                            自動工学検査装置 (AOI)：１台<br />
                            ネットワークアナライザー：３台<br />
                            CDMAモバイル測定器：２台<br />
                            RFコミュニケーションテスタ：６台<br />
                            LCRメーター：１台<br />
                            スペクトラムアナライザー：６台<br />
                            シグナルジェネレーター：２０台<br />
                            オシロスコープ：９台<br />
                            Keyence社製レーザーマーカー：２台<br />
                            武蔵エンジニアリング社製ディスペンサーロボット：４台</p>
                    </div>
                </div>


            </div>
            <div class="row">

                <div class="col-lg-4">
                    <div class="col-12-sm ml-3">
                        <div class="imgWrap">
                            <img src="<?php bloginfo('template_directory'); ?>/images/print.jpg" width="290px" height="200px">
                        </div>
                        <h3 id="operationtitle-00">塗装印刷機器</h3>
                        <p id="operationcontents-00">手吹き液体塗装ブース：２台<br>
                            手吹き粉体塗装ブース：３台<br>
                            日本パーカライジング社製静電粉体塗装装置<br>
                            ：３台<br>
                            半自動タンポ印刷機：２台<br>
                            手動シルク印刷：３ライン<br>
                            ATMA製半自動シルク印刷機：１台
                        </p>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="col-12-sm ml-3">
                        <div class="imgWrap">
                            <img src="<?php bloginfo('template_directory'); ?>/images/surfacet-p-500.jpeg" width="290px" height="200px">
                        </div>
                        <h3 id="operationtitle-01">表面処理設備</h3>
                        <p id="operationcontents-01">リン酸亜鉛皮膜処理（鉄・アルミ）：１ライン<br>
                            リン酸マンガン被膜処理：１ライン<br>
                            (日本パーカライジング社製薬剤使用)</p>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="col-12-sm ml-3">
                        <div class="imgWrap">
                            <img src="<?php bloginfo('template_directory'); ?>/images/mold-p2-500.jpeg" width="290px" height="200px">
                        </div>
                        <h3 id="operationtitle-02">金型製造修理設備</h3>
                        <p id="operationcontents-02">
                            ワイヤーカット放電加工機<br>
                            （三菱ファナック）：２台<br>
                            放電加工機・細穴放電加工機<br>
                            （三菱・ソデック）：３台<br>
                            レーザー溶接機（１００W）：３台<br>
                            平面研磨機、汎用旋盤、汎用フライス機<br>
                            ：８台
                        </p>
                    </div>
                </div>
                <div class="row">

                    <div class="col-lg-12">
                        <div class="col-12-sm ml-4">
                            <div class="imgWrap">
                                <img src="<?php bloginfo('template_directory'); ?>/images/mequip-p-500.jpeg" width="290px" height="200px">
                            </div>
                            <h3 id="operationtitle-01">測定機器</h3>
                            <p id="operationcontents-00">ミツトヨ社製３次元測定器<br />
                                ミツトヨ社製ビジョンスコープ：１台<br />
                                ニコン社製投影機：１台</p>
                        </div>
                    </div>
                </div>


            </div>

        </div>
    </div>
    <script type="text/javascript">
        function move1() {
            document.getElementById("bigbox-01").scrollIntoView({
                behavior: 'smooth'
            });
        };

        function move2() {
            document.getElementById("bigbox-02").scrollIntoView({
                behavior: 'smooth'
            });
        };

        function back() {
            window.scroll({
                top: 0,
                left: 0,
                behavior: 'smooth'
            });
        };
    </script>

    <?php get_footer(4);
