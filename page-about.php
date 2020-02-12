<?php 
/*
Template Name: 事業内容
*/
 get_header("2")?>

  <div class="w-100" class="countainer-fluid">
    <div id="submain-00">
      <h1 id="submainp-00">事業内容</h1>
      <h5 id="submainp-03">OUR SERVICE</h5>
    </div>
    <nav aria-label="breadcrumb">
      <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="./index.php">Home</a></li>
        <li class="breadcrumb-item active" aria-current="page">事業内容</li>
      </ol>
    </nav>
    <i class="fas fa-angle-double-up" id="back" onclick="back()"></i>
    <div class="container mt-5 mb-5 justify-content-center" id="name-00">


      <div class="row">
        <section>
          <ul class="list-group list-group-horizontal-lg w-100">

            <div class="col-lg-4 col-sm-12">
              <li class=" btn btn-primary list-group-item m-2" id="boxitem-00" onclick="move1()">株式会社モコム</li>
            </div>

            <div class="col-lg-4 col-sm-12">
              <li class="btn btn-primary list-group-item m-2" id="boxitem-01" onclick="move2()">株式会社PDP</li>
            </div>

            <div class="col-lg-4 col-sm-12">
              <li class=" btn btn-primary list-group-item m-2" id="boxitem-10" onclick="move3()">GLOBAL MOCOM TRSNDCENDING INC.</li>
            </div>

          </ul>
        </section>
      </div>

    </div>


  <div class="container mt-5 mb-5 w-100" id="bigbox-01">
    <div class="row">
      <div id="box001" class="col-lg">
        <div class="row-sm">
          <div id="border-01">
            <h1 id="title01">株式会社モコム</h1>
            <h6 id="subtitle01">MOCOM CO., LTD.</h6>
          </div>
        </div>
      </div>
    </div>
  </div>

  <div class="container mt-3 w-100" id="companybox">
    <div class="row">
      <div class="col-lg-6">
        <div class="col-12-sm">
          <figure class="figure">
          <img src="<?php bloginfo('template_directory'); ?>/images/海外拠点事業管理業務-p-500.png" style="height:333px" class="figure-img img-fluid">
        </figure>
          <h3 id="operationtitle-00">海外拠点事業管理業務</h3>
          <p id="operationcontents-00">持ち株会社としてGMTI社から委託している間接業務・資産管理など、併せて国内従業員並びに現地滞在者の労務管理全般を主業務として行っております。</p>
        </div>
      </div>
      <div class="col-lg-6">
        <div class="col-12-sm">
          <figure class="figure">
          <img src="<?php bloginfo('template_directory'); ?>/images/国内営業-p-500.png"  class="figure-img img-fluid">
        </figure>
          <h3 id="operationtitle-01">国内営業窓口業務</h3>
          <p id="operationcontents-01">海外への国内仕入品の輸出販売業務及びGMTI社商品の国内営業販売業務を行なっております。</p>
        </div>
      </div>


    </div>

  </div>

  <div class="container mt-5 w-100" id="bigbox-02">
    <div class="row">
      <div id="box001" class="col-lg">
        <div class="row-sm">
          <div id="border-01">
            <h1 id="title01">株式会社PDP</h1>
            <h6 id="subtitle01">PDP CO., LTD.</h6>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="container mt-3 w-100" id="companybox">
    <div class="row">
      <div class="col-lg-4">
        <div class="col-12-sm">
          <img src="<?php bloginfo('template_directory'); ?>/images/基板設計-p-500.png" width="330px" height="200px">
          <h3 id="operationtitle-00">プリント基板設計</h3>
          <p id="operationcontents-00">
            プリント基板の設計・製造の豊富な経験を生かし、通常の両面.多層基板から最新のビルドアップ基板まで、プリント基板製造の各工法に対応した最適な設計を提供させていただきます。&lt;得意とする分野：ALLEGRO
            &gt;モバイル系・車載系・通信機器の設計実績を積んでおります。ビルドアップ基板(4～12層）・貫通基板(2～8層)・フレキ基板(2層) 他</p>
        </div>
      </div>
      <div class="col-lg-4">
        <div class="col-12-sm">
          <img src="<?php bloginfo('template_directory'); ?>/images/調達サポート-p-500.jpeg" width="330px" height="200px">
          <h3 id="operationtitle-01">調達サポート業務</h3>
          <p id="operationcontents-01">
            工場消耗品・消耗工具器具備品等を主体に信頼と誠実を基に「お客様側に立った調達機能」として、多くの調達経験のノウハウを活かし「最適な価格で、より早く、よい品質」の調達サービスを提供させていただきます。&lt;強み：コスト［Ｃ］・スピード［Ｓ］・経験［Ｋ］を活かした対応力&gt;Ｃ：管理費のミニマム化（小規模運営）Ｓ：原則、当日引合案件は実働24H以内に御見積書提出（状況報告含む)Ｋ：長年の調達経験豊富（知識と安心感）
          </p>
        </div>
      </div>
      <div class="col-lg-4">
        <div class="col-12-sm">
          <img src="<?php bloginfo('template_directory'); ?>/images/実装コンサルティング写真綱淵様.JPG" width="330px" height="200px">
          <h3 id="operationtitle-02">実装コンサルティング業務</h3>
          <p id="operationcontents-02">弊社は、プリント基板実装技術に関するお悩みのご相談やセミナー・技術者育成などのご依頼につき
            ましても対応させて頂いております。以下の視点からお気軽にお問合せください。①コストダウンの相談 ②品質問題の解決 ③購入先のプリント基板の品質チェック
            ④技術者研修(社員教育)</p>
        </div>
      </div>


    </div>

  </div>
  <div class="container mt-5 w-100" id="bigbox-03">
    <div class="row">
      <div id="box001" class="col-lg">
        <div class="row-sm">
          <div id="border-01">
            <h1 id="title01">GLOBAL MOCOM TRSNDCENDING INC.</h1>
            <h6 id="subtitle01">GMTI</h6>
          </div>
        </div>
      </div>
    </div>
  </div>
  
  <div class="container mt-3 w-100" id="companybox">
    <div class="row">
      <div class="col-lg-4">
        <div class="col-12-sm">
          <img src="<?php bloginfo('template_directory'); ?>/images/板金設備-p-500.jpeg" width="330px" height="200px">
          <h3 id="operationtitle-00">金型設計・製造</h3>
          <p id="operationcontents-00">社内成形品の金型製作及び修理体制により、短納期での設計、製造、レベルアップが可能です。アジアに広がる協
            業金型メーカーとのネットワークにより、短期集中・多量の対応にも強みを発揮致しますのでご相談ください。</p>
        </div>
      </div>
      <div class="col-lg-4">
        <div class="col-12-sm">
          <img src="<?php bloginfo('template_directory'); ?>/images/金型-p-500.jpeg" width="330px" height="200px">
          <h3 id="operationtitle-01">板金加工</h3>
          <p id="operationcontents-01">
            タレットパンチ、プレスブレーキ、プレス、各種溶接機、リン酸亜鉛及びリン酸マンガン被膜処理、粉体・液体塗装、シルク印刷などほぼすべての板金加工設備を社内に有し、お客様のご要望にワンストップで対応致します。多品種の出荷にも対応するノウハウに長けているため、多品種少量のデイリー出荷も可能です。
          </p>
        </div>
      </div>
      <div class="col-lg-4">
        <div class="col-12-sm">
          <img src="<?php bloginfo('template_directory'); ?>/images/樹脂成型工場２-p-500.jpeg" width="330px" height="200px">
          <h3 id="operationtitle-02">樹脂成型</h3>
          <p id="operationcontents-02">
            20トンから450トンまでの縦型含む40台の成型機を保有し、寸法精度の厳しいメカユニットの機構部品や外観部品、印刷や塗装を要する部品など、様々な用途の成形品に対応致します。特に多品種、少量品の立上げから量産品まで、金型製造、修理を含めたトータルな能力は、お客様のご期待に存分にお答えできるものと考えております。
          </p>
        </div>
      </div>


    </div>
    <div class="row w-100">
      <div class="col-lg-4">
        <div class="col-12-sm">
          <img src="<?php bloginfo('template_directory'); ?>/images/組立.jpeg" width="330px" height="200px">
          <h3 id="operationtitle-00">製品組立</h3>
          <p id="operationcontents-00">
            SMTラインを有し、基板の実装から組立、調整、梱包までの一貫した作業が可能です。製造ラインはリレー生産方式という少人数応受援方式により、製造負荷バランスを調整しております。これにより特に機種切り替えの多い多品種少量品の生産を効率的に行うことが可能です。20年以上のアナログ高周波製品製造実績がございます。
          </p>
        </div>
      </div>
      <div class="col-lg-4">
        <div class="col-12-sm">
          <img src="<?php bloginfo('template_directory'); ?>/images/板金-p-500.jpeg" width="330px" height="200px">
          <h3 id="operationtitle-01">その他加工</h3>
          <p id="operationcontents-01">12台のCNC BROTHER TC 20Aによる小物の切削加工や、研磨機・ラッピングマシンによる硝子加工が可能です。 </p>
        </div>
      </div>
      <div class="col-lg-4">
        <div class="col-12-sm">
          <img src="<?php bloginfo('template_directory'); ?>/images/オリジナル製品01-p-800.jpeg" width="330px" height="200px">
          <h3 id="operationtitle-02">オリジナル製品製造</h3>
          <p id="operationcontents-02">
            Eリング挿入・取外工具【EGRIP】などの生産ツール、【GMATIC】などの高強度プラスティック製品など様々な設計開発製造を行っております。いずれもこれまでの常識にとらわれない斬新な発想による製品です。またSMTライン用の基板ローダー/アンローダー装置や樹脂成型材料の自動ローディング装置、自動サンドブラスト装置など社内自動化で培ったノウハウを製品化しております。今後も、皆様の「こうしたい」を形にし、喜んで使っていただける製品を開発しながら、総合製造メーカーとしての経験とノウハウを継続して商品化し、提供してまいります。
          </p>
        </div>
      </div>


    </div>

  </div>
  </div>


  
  <?php get_footer("2"); ?>