<?php
/*
Template Name: お問い合わせ
*/
get_header("5") ?>
<i class="fas fa-angle-double-up" id="back" onclick="back()"></i>
<div class="countainer-fluid" id="submain-00">
  <h5 class="h5 text-white fadeinmain3 ml-5 pt-3" id="moji1" style="display: none">Turn Your Vision into Reality</h5>
  <h1 id="submainp-00" class="fadeinmain1" style="display:none;">お問い合わせ</h1>
  <h5 id="submainp-06" class="fadeinmain1" style="display:none;">CONTACT</h5>
</div>
<nav aria-label="breadcrumb">
  <ol class="breadcrumb">
    <li class="breadcrumb-item"><a href=".index.php">Home</a></li>
    <li class="breadcrumb-item active" aria-current="page">製品・設備</li>
  </ol>
</nav>
<script type="text/javascript">
  $('.fadeinmain1').fadeIn(2000);
  $('.fadeinmain2').fadeIn(3000);
  $('.fadeinmain3').fadeIn(3000);
</script>

<i class="fas fa-angle-double-up" id="back" onclick="back()"></i>
<div class="container w-100" id="name-00">
  <div id="box-00" class="container">
    <div class="row">
      <div class="col-12 mt-5 mb-5">
        <h5 id="contacttitle">お客様のご要望を最大限にカタチにするため、全てのご意見ご要望に真摯にお答えします。</h5>
      </div>
    </div>
  </div>
</div>
</div>
<div class="section">
  <div class="container">
    <div class="row mb-5">
      <div class="col-lg-6">
        <div class="col-sm-12 ml-3">
          <div class="form">

            <div class="row">

              <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
                  <?php the_content(); ?>
              <?php endwhile;
              endif; ?>

            </div>
          </div>
        </div>
      </div>
      <div class="col-lg-6">
        <div class="col-sm-12">
          <div id="w-node-d66159ac9659-731473f8">
            <div class="w-layout-grid grid-30">
              <div id="w-node-45d0f11c48fb-731473f8">
                <div class="paragraph-light thick mt-3 mb-3">住所</div>
              </div>
              <div>
                <div class="paragraph-light no-padding thick mt-2">〒　214-0031<br>神奈川県川崎市多摩区東生田1丁目13-1<br>株式会社 モコム　　　担当：高橋<br></div>
              </div>
              <div>
                <div class="paragraph-light thick mt-3 mb-3">メールアドレス</div>
              </div>
              <div>
                <div class="paragraph-light no-padding thick">r-takahashi@pcbdp.co.jp
                </div>
                <div>
                  <div class="paragraph-light thick mt-3 mb-3">電話番号</div>
                </div>
                <div>
                  <div class="paragraph-light no-padding thick">TEL : 044-933-1511
                  </div>

                  <div>
                    <div class="paragraph-light no-padding thick">FAX : 044-933-1905
                    </div>
                  </div>
                  <div>
                    <div>
                      <div class="paragraph-light thick mt-3 mb-3">営業時間</div>
                    </div>
                  </div>
                  <div>
                    <div class="paragraph-light no-padding thick">平日 10:00 - 16:00</div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
  <script type="text/javascript">
    function back() {
      window.scroll({
        top: 0,
        left: 0,
        behavior: 'smooth'
      });
    }
  </script>
  <?php get_footer("5");
