<?php 
/*
Template Name: 企業情報
*/
 get_header("3")?>


<div id="submain-00" class="countainer-fluid">
    <h1 id="submainp-00">企業情報</h1>
    <h5 id="submainp-04">CORPORATE INFORMATION</h5>
  </div>
  <nav aria-label="breadcrumb">
    <ol class="breadcrumb">
      <li class="breadcrumb-item"><a href="./index.php">Home</a></li>
      <li class="breadcrumb-item active" aria-current="page">企業情報</li>
    </ol>
  </nav>

  <div class="container mt-5 mb-5 justify-content-lg-center" id="name-00">


    <div class="row">
      <section>
        <ul class="list-group list-group-horizontal-lg ml-5 w-100">

          <div class="col-lg-2 col-sm-2">
            <li class=" btn btn-primary list-group-item" id="boxitem-00" onclick="move1()">メッセージ</li>
          </div>

          <div class="col-lg-2 col-sm-2">
            <li class="btn btn-primary list-group-item" id="boxitem-01" onclick="move2()">経営理念</li>
          </div>
          <div class="col-lg-2 col-sm-2">
            <li class="btn btn-primary list-group-item" id="boxitem-01" onclick="move3()">会社概要</li>
          </div>

          <div class="col-lg-2 col-sm-2">
            <li class=" btn btn-primary list-group-item" id="boxitem-02" onclick="move4()">沿革</li>
          </div>
          <div class="col-lg-2 col-sm-2">
            <li class=" btn btn-primary list-group-item" id="boxitem-02" onclick="move5()">主要取引先</li>
          </div>

        </ul>
      </section>
    </div>
  </div>
  <i class="fas fa-angle-double-up" id="back" onclick="back()"></i>
  <div class="container mt-5 mb-5" id="bigbox-01">
    <div class="row" id="box-002">
      <div id="box001" class="col-lg">
        <div class="row-sm">
          <div id="border-01">
            <h1 id="title01">トップメッセージ</h1>
            <h6 id="subtitle01">TOP MESSAGE</h6>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="container">
    <div class="row justify-content-center">
      <div class="col-8 m-5">
        <div id="matchbox-00">

          <div class="col mb-5" id="matchimage">

            <img src="<?php bloginfo('template_directory'); ?>/images/町山さんweh2x-p-1080.png" class="img-fluid z-depth-1" alt="Responsive image">

          </div>
          <p class="mt-5">
            現在、世界中の企業の栄枯盛衰に見られるように、昨日の成功が明日の成功を約束してくれるわけではありません。時代の変化に迅速に対応することのできる企業だけが生き残り、当面の繁栄を享受できます。そのような厳しいビジネス環境のなかでも、時代の変化に対応しながら、変わらず世の中に貢献できる企業を目指し、MOCOMグループでは3つの方針を掲げ、事業活動を行っております。
          </p>
          <h5 id="match-00" class="mt-5">1. 製品の品質を第一に考え情熱を傾ける。</h5">
            <h5 id="match-00">Devote all our Heart into Product Quality.</h5>
            <h5 id="match-00">2. お客様の生活を便利でよりよいものにする。</h5>

            <h5 id="match-00">Make Customer’s Life Convenient and Enjoyable.</h5>
            <p class="mt-5">
              この2つに込めた思いは、お客様が私たちの製品・サービス１つ１つに感動していただくことにより弊社のファンになっていただきたいということです。私たちが勝手に思いこんだ製品やサービスをお客様に押し付けるのではなく、お客様が望んでいる製品・サービスをきっちりと提供できる企業を目指すことにより達成したいと考えています。そのため社員間で目指すべき方向性に相違が生じた場合には、必ずこの2つの方針に立ち返り、軌道修正しております。
            </p>
            <h5 id="match-00" class="mt-5">3. 私達のベストな仕事で私達の幸せを築いてゆく。</h5>
            <h5 id="match-00">Build up our Happiness by our Good Work.</h5>
            <p class="mt-5">
              「幸せ」には金銭的なもの、信頼関係のある社風、学習・成長の機会がある、個性が認められなどの意味を込めております。この方針は「幸せ」は会社に与えられるものではなく、各社員が会社全体を考えながら、自分の責務を遂行するために挑戦し、最善の仕事をした結果獲得できるものであるという考え方を示しており、前記２つの方針を遂行するための根本方針となっています。
            </p class="mt-5">

            <p class="mb-5">
              私たちの提供する製品・サービスは、個性ある社員一人一人の努力の結集です。これからもMOCOMグループ各社員が３つの方針に基づいて「仕事の意義・目的」を常に意識し「お客様が望んでいる製品・サービス」の提供につながる貴重な価値を発見できるよう努めて参ります。今後とも末永くお付き合いくださいますようお願い申し上げます。
            </p>
            <h7 id="match-01" class="mt-5 w-100">モコムグループ代表
            </h7>
            <h4 id="match-02" class="mt-2 w-100">町山正成
            </h4>

        </div>
      </div>
    </div>
  </div>

  <div class="container-fluid" id="box003">
    <div class="container mt-5" id="bigbox-02">
      <div class="row">
        <div id="box002" class="col-lg ml-5 mt-5">
          <div class="row-sm">
            <div id="border-01">
              <h1 id="title02">経営理念</h1>
              <h6 id="subtitle01">VISION</h6>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="container" id="vision">
      <div class="row">

        <!-- Grid column -->
        <div class="col mb-5 mt-5" id="vimage">

          <img src="<?php bloginfo('template_directory'); ?>/images/ヘッダー画像2x-p-800.jpeg" class="img-fluid z-depth-1" alt="Responsive image">

        </div>
        <!-- Grid column -->

      </div>
    </div>
  </div>
  </div>

  <div class="container mt-5" id="bigbox-03">
    <div class="row" id="box-002">
      <div id="box005" class="col-lg ml-5">
        <div class="row-sm">
          <div id="border-01">
            <h1 id="title01">会社概要</h1>
            <h6 id="subtitle01">CORPORATE PROFILE</h6>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="container mt-5">
    <div class="row justify-content-center mt-5">
      <div id="main" class="col-9">
        <img src="<?php bloginfo('template_directory'); ?>/images/yolanda-sun-rEnH56DV2vQ-unsplash-p-500.jpeg" class="m-1 w-100">
      </div>
    </div>
  </div>
  <div class="container justify-content-center mt-5 w-75">
        <h5 class="w-100 mb-3">株式会社モコム</h5>
        <table class="table">
          <thead>
            <tr>
              <th scope="col" style="width:30%">会社名</th>
              <th scope="col" style="width:70%">株式会社モコム</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <th scope="row">代表取締役</th>
              <td>町山 正成</td>
              
            </tr>
            <tr>
              <th scope="row">設立</th>
              <td>1990年 2月</td>
              
            </tr>
            <tr>
              <th scope="row">資本金</th>
              <td>9,500万円</td>
             
            </tr>
            <tr>
              <th scope="row">主要業務</th>
              <td>海外法人会社の管理事業</td>
             
            </tr>
            <tr>
              <th scope="row">株主</th>
              <td>大杉 善信　　　町山 正成</td>
             
            </tr>
            <tr>
              <th scope="row">所在地</th>
              <td>〒　214 - 0031　神奈川県川崎市多摩区東生田1丁目13 - 1</td>
             
            </tr>
          </tbody>
        </table>
      </div>

      <div class="container justify-content-center mt-5 w-75">
        <h5 class="w-100 mb-3">株式会社PDP</h5>
        <table class="table">
          <thead>
            <tr>
              <th scope="col" style="width:30%">会社名</th>
              <th scope="col" style="width:70%">株式会社ピー・ディー・ピー</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <th scope="row">代表取締役</th>
              <td>町山 正成</td>
              
            </tr>
            <tr>
              <th scope="row">設立</th>
              <td>2006年 2月</td>
              
            </tr>
            <tr>
              <th scope="row">資本金</th>
              <td>300万円</td>
             
            </tr>
            <tr>
              <th scope="row">主要業務</th>
              <td>調達サポート事業並びにプリント基板設計・<br/>製造 他(基板実装コンサルティング含む)</td>
             
            </tr>
            <tr>
              <th scope="row">株主</th>
              <td>大杉 善信　　　町山 正成</td>
             
            </tr>
            <tr>
              <th scope="row">所在地</th>
              <td>〒　214 - 0031　神奈川県川崎市多摩区東生田1丁目13 - 3</td>
             
            </tr>
          </tbody>
        </table>
      </div>
      <div class="container justify-content-center mt-5 mb-5 w-75">
        <h5 class="w-100 mb-3">Global Mocom Transcending Inc.</h5>
        <table class="table">
          <thead>
            <tr>
              <th scope="col" style="width:30%">会社名</th>
              <th scope="col" style="width:70%">Global Mocom Transcending Inc.</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <th scope="row">代表取締役</th>
              <td>町山 正成</td>
              
            </tr>
            <tr>
              <th scope="row">設立</th>
              <td>1991年11月</td>
              
            </tr>
            <tr>
              <th scope="row">資本金</th>
              <td>4,700フィリピンペソ</td>
             
            </tr>
            <tr>
              <th scope="row">主要業務</th>
              <td>成型部門樹脂成型及び塗装・印刷組立部門SMT実装<br/>
                製品組立板金部門金属部品/筐体製作及び塗装・印刷</td>
             
            </tr>
            <tr>
              <th scope="row">株主</th>
              <td>大杉 善信　　　町山 正成</td>
             
            </tr>
            <tr>
              <th scope="row">従業員数</th>
              <td>320名</td>
             
            </tr>
            <tr>
              <th scope="row">敷地面積</th>
              <td>10,000m2</td>
             
            </tr>
            <tr>
              <th scope="row">所在地</th>
              <td>Phase 3, Block 15, Lot 15 & 16 Cavite Economic Zone<br/>
                Rosario Cavite Philippines.</td>
             
            </tr>
          </tbody>
        </table>
      </div>

<div class="container-fluid" id="box004">
      <div class="container mt-5" id="bigbox-04">
        <div class="row" id="box-005">
          <div id="box006" class="col-lg ml-5">
            <div class="row-sm  mt-5">
              <div id="border-01">
                <h1 id="title01">沿革</h1>
                <h6 id="subtitle01">CORPORATE HISTORY</h6>
              </div>
            </div>
          </div>
        </div>
      </div>
       <div class="container justify-content-center mt-5 mb-5 w-75">
        
        <table class="table">
          <tbody>
            <tr>
              <th scope="row" style="width:30%">1990年<br/> (平成2年)</th>
              <td style="width:70%">株式会社モバイルエンジニアリングを神奈川県川崎市に設立<br/>
                資本金1,000万円にてスタート</td>
              
            </tr>
            <tr>
              <th scope="row">1991年<br/> (平成3年)</th>
              <td>商号を株式会社モコムに変更</td>
              
            </tr>
            <tr>
              <th scope="row">1993年<br/> (平成5年)</th>
              <td>NEC社製ポケットベルやアルインコ社製トランシーバーなどの通信機器製造拠点<br/>としてフィリピンのカビテ州にMocom Philippines Incを設立</td>
             
            </tr>
            <tr>
              <th scope="row">2000年<br/> (平成12年)</th>
              <td>樹脂成型、樹脂金型及び塗装・印刷を担う拠点として<br/>Global Moulding Technology Incをフィリピンのカビテ州に設立<br/>飯田電機工業社製イグニッションモジュール用部品、オムロン<br/>社製券売機用部品、富士通社製ATM用部品、車載用部品等の樹脂製品を製造</td>
             
            </tr>
            <tr>
              <th scope="row">2005年<br/> (平成17年)</th>
              <td>住友重機械工業社製の医療及び半導体関連向け装置の金属部品/<br/>筐体製造を担う拠点として
                板金事業を開始</td>
             
            </tr>
            <tr>
              <th scope="row">2015年<br/> (平成27年)</th>
              <td>NEC社製携帯電話の基板設計を担う株式会社ピー・ディー・ピーを傘下に入れる</td>
             
            </tr>
            <tr>
              <th scope="row">2016年<br/> (平成28年)</th>
              <td>Mocom Philippines Inc.とGlobal MouldingTechnology Inc.が合併</td>
             
            </tr>
            <tr>
              <th scope="row">2018年<br/> (平成30年)</th>
              <td>Global Mocom Transcending Inc (略称GMTI)に社名変更</td>
             
            </tr>
            
          </tbody>
        </table>
      </div>
    </div>

      <div class="container mt-5" id="bigbox-05">
        <div class="row" id="box-002">
          <div id="box007" class="col-lg ml-5">
            <div class="row-sm">
              <div id="border-01">
                <h1 id="title01">主要取引先</h1>
                <h6 id="subtitle01">PARTNERS</h6>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="container mb-5">
        <div class="row mt-5">
          <div class="col-lg-4">
            <div><h6 id="pname-00">アルインコ（株）</h6></div>
            <div><h6 id="pname-00">市川ゴム (株)</h6></div>
            <div><h6 id="pname-00">オムロン ソーシアル ソリューションズ(株)</h6></div>
            <div><h6 id="pname-00">サイバネットシステム (株)</h6></div>
            <div><h6 id="pname-00">シークス (株)</h6></div>
            <div><h6 id="pname-00">住友重機械工業 (株)</h6></div>
            <div><h6 id="pname-00">日本モレックス(株)</h6></div>
            <div><h6 id="pname-00">(株) プラーナー</h6></div>
          </div>
          <div class="col-lg-4">
            <div><h6 id="pname-00">飯田電気工事業 (株)</h6></div>
            <div><h6 id="pname-00">NECプラットフォームズ (株)</h6></div>
            <div><h6 id="pname-00">(株) ケーユー技研</h6></div>
            <div><h6 id="pname-00">サンリツオートメーション (株)</h6></div>
            <div><h6 id="pname-00">(株) 島津製作所</h6></div>
            <div><h6 id="pname-00">東信電気 (株)</h6></div>
            <div><h6 id="pname-00">原田工業 (株)</h6></div>
            <div><h6 id="pname-00">マーズインテル (株)</h6></div>
          </div>
          <div class="col-lg-4">
            <div><h6 id="pname-00">(株) 石井表記</h6></div>
            <div><h6 id="pname-00">(株) 光真製作所</h6></div>
            <div><h6 id="pname-00">(株) エム・コット</h6></div>
            <div><h6 id="pname-00">(株) 三球電気製作所</h6></div>
            <div><h6 id="pname-00">スミナック (株)</h6></div>
            <div><h6 id="pname-00">日本電気 (株)</h6></div>
            <div><h6 id="pname-00">富士通フロンテック (株)</h6></div>
            <div><h6 id="pname-00">ミツミ電機 (株)</h6></div>
          </div>
        </div>

      </div>
 <?php get_footer(3);