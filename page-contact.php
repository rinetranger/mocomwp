<?php 
/*
Template Name: お問い合わせ
*/
 get_header("5")?>
<i class="fas fa-angle-double-up" id="back" onclick="back()"></i>
<div class="countainer-fluid" id="submain-00">
    <h1 id="submainp-00">お問い合わせ</h1>
    <h5 id="submainp-06">CONTACT</h5>
  </div>
  <nav aria-label="breadcrumb">
    <ol class="breadcrumb">
      <li class="breadcrumb-item"><a href=".index.php">Home</a></li>
      <li class="breadcrumb-item active" aria-current="page">製品・設備</li>
    </ol>
  </nav>
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

                      <?php if(have_posts()) : while(have_posts()) : the_post(); ?>
                      <?php the_content(); ?>
                      <?php endwhile; endif; ?>
                      <!-- <form id="email-form" name="email-form" data-name="Email Form" class="form">
                    <div><label for="name-2" class="paragraph-light thick">お名前</label><br/>
                      <input type="text" maxlength="256"
                        required="" id="node-2" placeholder="例 : モコム 太郎" ms-field="first-name"
                        class="signup-field w-input"></div>
                    <div><label for="name-2" class="paragraph-light no-padding thick">企業名・団体名</label><br/>
                      <input type="text"
                        maxlength="256" required="" id="node-2" placeholder="例 : 株式会社 モコム" ms-field="first-name"
                        class="signup-field w-input"></div>
                    <div><label for="email-2" class="paragraph-light no-padding thick">メールアドレス</label><br/>
                      <input
                        type="email" class="signup-field w-input" maxlength="256" name="Email" data-name="Email"
                        placeholder="例 : taro@mocom.co.jp" ms-field="first-name" id="Email-3" required=""></div>
                    <div><label for="email-4" class="paragraph-light no-padding thick">電話番号</label><br/>
                      <input type="text"
                        class="signup-field w-input" maxlength="256" name="Email-4" data-name="Email 4"
                        placeholder="例 : 044 - 281 - 0450" ms-field="first-name" id="Email-4" required=""></div>
                    <div><label for="email-5" class="paragraph-light no-padding thick">お問い合わせ内容</label><br/>
                      <textarea
                        placeholder="お問い合わせ内容についてご入力ください。" maxlength="5000" id="field-3" name="field-3" required=""
                        class="textarea w-input"></textarea></div><input type="submit" value="送信する"
                      data-wait="Please wait..." class="btn btn-success">
                  </form> -->
                  
                </div>
  
                <!-- Default form contact -->

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
                  <div class="paragraph-light no-padding thick mt-2">〒　214-0031<br>神奈川県川崎市多摩区東生田1丁目13-1<br>株式会社 モコム 宛て<br></div>
                </div>
                <div>
                  <div class="paragraph-light thick mt-3 mb-3">電話番号</div>
                </div>
                <div>
                  <div class="paragraph-light no-padding thick">044-281-0450</div>
                </div>
                <div>
                  <div>
                    <div class="paragraph-light thick mt-3 mb-3">営業時間</div>
                  </div>
                </div>
                <div>
                  <div class="paragraph-light no-padding thick">平日 9:00 - 17:00</div>
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
   function back(){
      window.scroll({ top: 0, left: 0, behavior: 'smooth' });
    }
  </script>
<?php get_footer("5");
  





 