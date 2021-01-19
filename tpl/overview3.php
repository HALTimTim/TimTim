top_category.php
<!DOCTYPE html>
<html lang="ja">

<head>
  <meta charset="UTF-8" />
  <title>まさる堂</title>

  <link rel="stylesheet" href="./src/css/style.css" />
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.1.0/css/all.css" integrity="sha384-lKuwvrZot6UHsBSfcMvOkWwlCMgc0TaWr+30HWe3a4ltaBwTZhyTEggF5tJv8tbt" crossorigin="anonymous" />
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous" />
  <link href="https://fonts.googleapis.com/css2?family=Damion&display=swap" rel="stylesheet" />
  <link rel="stylesheet" href="./src/css/pages/help.css">
</head>

<body>
  <div class="warp">
    <!-- headerエリア -->
    <header>
      <div class="header-content flex j-b">
        <div class="header-logo">
          <a href="./top.php">
            <img class="header-logo-img" src="./src/img/header/logo.png" alt="" />
          </a>
        </div>
        <ul class="header-list flex j-a">
          <li class="header-list-form-area">
            <form action="" class="flex">
              <input type="text" class="form-control flex" placeholder="人の名前を入力してください" />
              <input type="button" value="検索" class="btn btn-secondary" />
            </form>
          </li>
          <div class="flex j-a header-list-icons">
            <li>
              <a href=""><i class="fas fa-comment text-white" alt="通知部分"></i></a>
            </li>
            <li>
              <a href="./login.php">
                <i class="fas fa-id-badge text-white" alt="ユーザー部分"></i>
              </a>
            </li>
            <li>
              <a href="./service.php"><i class="fas fa-question-circle text-white"></i></a>
            </li>
            <li>
              <form action='' method='post'>
                <button type="submit" value='logout' name='logout' class="btn btn-danger">ログアウト</button>
              </form>
            </li>
          </div>
        </ul>
      </div>
      <nav>
        <ul class="gnav flex j-a">
          <div class="nav-left flex">
            <li>
              <a href="./reservation.php">出品者を捜す</a>
            </li>
            <li><a href="./giveaway.php">景品一覧</a></li>
          </div>
          <div class="nav-right flex">
            <li class="nav-downicon">
              <a href="">相談をする</a>
              <ul>
                <li><a href="./contact.php">お問い合わせ</a></li>
                <li><a href="./service.php">使い方ガイド</a></li>
              </ul>
            </li>
            <li class="nav-downicon">
              <a href="">販売＆投稿</a>
              <ul>
                <li><a href="./salesconfirmation.php">売上確認</a></li>
                <li><a href="./productreg.php">時間を売る</a></li>
                <li><a href="./post.php">投稿</a></li>
              </ul>
            </li>
            <li><a href="./userdetailinformation.php">マイページ</a></li>
          </div>
        </ul>
      </nav>
    </header>
    <!-- mainエリア -->
    <main>
      <div class="main-content flex j-a">
        <div class="main-left">
          <p class="main-left-title">カテゴリ別</p>
          <ul class="main-left-list">
            <li>
              <form action='top_category.php' method='post'>
                <button type="submit" class="btn btn-link" name="C1" value="C1">
                  カジュアル系
                </button>
              </form>
            </li>
            <li>
              <form action='top_category.php' method='post'>
                <button type="submit" class="btn btn-link" name="C10" value="C10">
                  モード系
                </button>
              </form>
            </li>
            <li>
              <form action='top_category.php' method='post'>
                <button type="submit" class="btn btn-link" name="C11" value="C11">
                  ストリート系
                </button>
              </form>
            </li>
            <li>
              <form action='top_category.php' method='post'>
                <button type="submit" class="btn btn-link" name="C12" value="C12">
                  渋谷系
                </button>
              </form>
            </li>
            <li>
              <form action='top_category.php' method='post'>
                <button type="submit" class="btn btn-link" name="C14" value="C14">
                  ドラッド系
                </button>
              </form>
            </li>
            <li>
              <form action='top_category.php' method='post'>
                <button type="submit" class="btn btn-link" name="C15" value="C15">
                  キジカレ系
                </button>
              </form>
            </li>
            <li>
              <form action='top_category.php' method='post'>
                <button type="submit" class="btn btn-link" name="C18" value="C18">
                  スポーティ系
                </button>
              </form>
            </li>
            <li>
              <form action='top_category.php' method='post'>
                <button type="submit" class="btn btn-link" name="C20" value="C20">
                  きれいめ系
                </button>
              </form>
            </li>
            <li>
              <form action='top_category.php' method='post'>
                <button type="submit" class="btn btn-link" name="C21" value="C21">
                  アメカジ系
                </button>
              </form>
            </li>
            <li>
              <form action='top_category.php' method='post'>
                <button type="submit" class="btn btn-link" name="C23" value="C23">
                  サーフ系
                </button>
              </form>
            </li>
            <li>
              <form action='top_category.php' method='post'>
                <button type="submit" class="btn btn-link" name="C24" value="C24">
                  サロン系
                </button>
              </form>
            </li>
            <li>
              <form action='top_category.php' method='post'>
                <button type="submit" class="btn btn-link" name="C3" value="C3">
                  コンサバ系
                </button>
              </form>
            </li>
            <li>
              <form action='top_category.php' method='post'>
                <button type="submit" class="btn btn-link" name="C5" value="C5">
                  ベーシック系
                </button>
              </form>
            </li>
            <li>
              <form action='top_category.php' method='post'>
                <button type="submit" class="btn btn-link" name="C6" value="C6">
                  フェミニン系
                </button>
              </form>
            </li>
            <li>
              <form action='top_category.php' method='post'>
                <button type="submit" class="btn btn-link" name="C7" value="C7">
                  ガーリッシュ系
                </button>
              </form>
            </li>
            <li>
              <form action='top_category.php' method='post'>
                <button type="submit" class="btn btn-link" name="C8" value="C8">
                  ボーイッシュ系
                </button>
              </form>
            </li>
            <li>
              <form action='top_category.php' method='post'>
                <button type="submit" class="btn btn-link" name="C9" value="C9">
                  セクシー系
                </button>
              </form>
            </li>
          </ul>
        </div>
        <!-- ---------------ここのdivタグの中に書いて行って--------------- -->
        <div class="main-right">
          <div class="helpSearch">
            <h2 class="titleCommon">概要</h2>
            <div class="helpCategory">
              <div class="helpCategoryTitle">
                <h2>個人情報保護方針</h2>
              </div>
              <div class="helpCategoryList">
                <p><strong>◆チーム9における個人情報保護方針について</strong><br>
                  チーム9　株式会社は、当該会社において別段の定めをしている場合を除き、事業上取扱うお客様･お取引先関係者などの特定の個人を識別できる情報（以下「個人情報」といいます）の取扱いについて、以下のとおり「個人情報保護方針」を定めその保護に努めます。
                </p><br>

                <p>
                  <strong>◆個人情報の取得について</strong><br>
                  個人情報の取得は適法かつ公正な手段によって行います。
                </p>
                <p><strong>◆個人情報の利用について</strong><br>
                  取得する個人情報の利用目的をできるだけ特定し明らかにします。<br>
                  個人情報の利用は、利用目的の範囲内で、具体的な業務に応じて権限を有する者が、業務上必要な範囲内で行います。<br>
                  個人情報を共同利用する場合は、利用目的などの必要事項をできるだけ特定し明らかにします。(共同利用対象会社のみ)</p>
                <p><strong>◆個人情報の第三者への開示・提供について</strong><br>
                  以下の場合を除き、ご本人の同意を得ることなく個人情報を第三者に開示・提供することはいたしません。<br>
                  (1) 個人を識別することができない状態（統計資料等）で開示・提供する場合<br>
                  (2) 業務上必要な範囲内で、業務委託先に開示・提供する場合<br>
                  (3) 合併、会社分割、営業譲渡その他の事由によって事業が承継される場合<br>
                  (4) 法令等に基づく場合</p><br>
                <p><strong>◆個人情報の管理(安全管理措置)について</strong><br>
                  個人情報に対する不正アクセス、個人情報の紛失、改ざん、漏洩などを防止するため、適切な安全対策を講じます。<br>
                  個人情報の取扱いを委託する場合は、委託先と安全管理措置の内容を含む適切な契約を締結し、委託先に対する管理・監督を徹底するなど必要な措置を講じます。<br>
                  個人情報の取扱いに関する規定を定め着実に実行するとともに、継続的に改善していきます。</p><br>
                <p><strong>◆個人情報の開示、訂正、利用停止などについて</strong><br>
                  自己の個人情報について、開示、訂正、利用停止などの要請があった場合には、ご本人であることを確認の上で対応いたします。<br>
                  なお、個人情報に関する質問及び苦情処理を含むお問合せは「お客様相談室」でお受けいたします。</p>

                <p><strong>◆個人情報に関するお問い合わせ</strong><br>
                  法令等の遵守<br>
                  個人情報の取扱いに関係する法令その他の規範を遵守するとともに、本個人情報保護方針の内容を継続的に見直し改善に努めます。<br>
                  利用目的について<br>
                  チーム9では、以下のような目的でお預かりした個人情報を利用させていただきます。</p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </main>
    <!-- footerエリア -->
    <footer>
      <div class="footer-content flex j-c">
        <div class="footer-left">
          <nav class="footer-list flex j-c">
            <ul>
              <div class="footer-list-box flex j-a">
                <li>
                  <h3>ヘルプ</h3>
                  <ul class="footer-list-box-list">
                    <li><a href="./contact.php">よくある質問</a></li>
                    <li><a href="./help1.php">注文変更<br>キャンセルについて</a></li>
                    <li><a href="./help2.php">ログインについて</a></li>
                    <li><a href="./help3.php">初めての方へ</a></li>
                  </ul>
                </li>

                <li>
                  <h3>メンズ人気</h3>
                  <ul class="footer-list-box-list">
                    <li>
                      <form action='top_category.php' method='post'>
                        <button type="submit" class="btn btn-link" name="C1" value="C1">
                          カジュアル系
                        </button>
                      </form>
                    </li>
                    <li>
                      <form action='top_category.php' method='post'>
                        <button type="submit" class="btn btn-link" name="C11" value="C11">
                          ストリート系
                        </button>
                      </form>
                    </li>
                    <li>
                      <form action='top_category.php' method='post'>
                        <button type="submit" class="btn btn-link" name="C20" value="C20">
                          きれいめ系
                        </button>
                      </form>
                    </li>
                  </ul>
                </li>
                <li>
                  <h3>レディース人気</h3>
                  <ul class="footer-list-box-list">
                    <li>
                      <form action='top_category.php' method='post'>
                        <button type="submit" class="btn btn-link" name="C1" value="C1">
                          カジュアル系
                        </button>
                      </form>
                    </li>
                    <li>
                      <form action='top_category.php' method='post'>
                        <button type="submit" class="btn btn-link" name="C5" value="C5">
                          ベーシック系
                        </button>
                      </form>
                    </li>
                    <li>
                      <form action='top_category.php' method='post'>
                        <button type="submit" class="btn btn-link" name="C9" value="C9">
                          セクシー系
                        </button>
                      </form>
                    </li>
                  </ul>
                </li>

                <li>
                  <h3>概要</h3>
                  <ul class="footer-list-box-list">
                    <li><a href="./overview1.php">会社概要</a></li>
                    <li><a href="./overview2.php">特定商取引法に<br>基づく表記</a></li>
                    <li><a href="./overview3.php">個人情報保護方針</a></li>
                  </ul>
                </li>
              </div>
            </ul>
          </nav>
          <div class="footer-icons">
            <ul class="footer-icons-list flex j-a">
              <li>
                <a href="">
                  <img src="./src/img/footer/line.png" alt="LINE" />
                </a>
              </li>
              <li>
                <a href="">
                  <img src="./src/img/footer/instagram.png" alt="instagram" />
                </a>
              </li>
              <li>
                <a href="">
                  <img src="./src/img/footer/facebook.png" alt="facebook" />
                </a>
              </li>
              <li>
                <a href="">
                  <img src="./src/img/footer/1495494667-jd13_84467.png" alt="Twitter" />
                </a>
              </li>
              <li>
                <a href="">
                  <img src="./src/img/footer/youtube.png" alt="youtube" />
                </a>
              </li>
              <li>
                <a href="">
                  <img src="./src/img/footer/tiktok.png" alt="tiktok" />
                </a>
              </li>
            </ul>
          </div>
        </div>
        <div class="footer-right">
          <div>
            <ul class="footer-right-lists flex j-a">
              <li>
                <a href="">
                  <img class="footer-right-icons" src="./src/img/footer/apple.png" alt="apple" />
                </a>
              </li>
              <li>
                <a href="">
                  <img class="footer-right-icons" src="./src/img/footer/google.png" alt="google" />
                </a>
              </li>
            </ul>
          </div>
          <div class="footer-right-form">
            <form action="https://goole.com" class="footer-right-forms">
              意見ご要望などあればご記入ください。
              <textarea class="form-control" id="exampleFormControlTextarea1" rows="5"></textarea>
              <input type="button" value="お問い合わせ" class="btn btn-secondary footer-right-btns" />
            </form>
          </div>
        </div>
      </div>
      <div class="footer-end">© Team Timothy "Tim" John Berners-Lee</div>
    </footer>
  </div>
</body>

</html>
