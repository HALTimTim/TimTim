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
            <h2 class="titleCommon">ヘルプ</h2>
            <div class="helpCategory">
              <div class="helpCategoryTitle">
                <h2>注文変更・キャンセルについて</h2>
              </div>
              <div class="helpCategoryList">
                <ul>
                  <li>
                    <div class="helpDropdown">
                      <label for="menu1">
                        <h3>注文のキャンセルについて</h3>
                      </label>
                      <input type="checkbox" id="menu1">
                      <ul class="dropdown1">
                        <div class="cancel">
                          <h2>※未実装</h2>
                          <li>
                            <p>一部ご注文のキャンセルが可能です。</p>
                            <p>ご注文のキャンセルが可能な場合
                              キャンセルボタンが表示されますので、以下の手順に従ってキャンセルのお手続きを行ってください。</p>
                            <p>ご注文から一定時間経過すると、「キャンセル」ボタンが非表示となりますのでご注意ください。<br>
                              ご注文のキャンセルをご希望の場合、キャンセルが可能か確認いたしますので、下部の連絡先までお問い合わせください。<br>
                            </p>
                            <p>※キャンセルの取り消しはできませんのでご注意ください。</p>
                            <p>※当日のキャンセルはできませんのでご注意ください。</p>
                            <h4>「キャンセル手順」</h4>
                            <p>１.マイページの注文履歴にアクセスします。</p>
                            <p>２.キャンセルをご希望の注文の「キャンセルする」ボタンを押してください。</p>
                            <p>３.キャンセル確認画面が表示されますので内容を確認後、確定ボタンを押して下さい。</p>
                          </li>
                        </div>
                      </ul>
                    </div>
                  </li>
                  <li>
                    <div class="helpDropdown">
                      <label for="menu2">
                        <h3>商品キャンセルによるご請求の注意事項</h3>
                      </label>
                      <input type="checkbox" id="menu2">
                      <ul class="dropdown2">
                        <div class="cancel">
                          <h2>※未実装</h2>
                          <li>
                            <p>決済後キャンセルされた場合</p>
                            <p>基本、キャンセルされた場合は販売されている方へご購入者様から6割はいただきます。</p>
                            <p>※クレジット会社へのキャンセルデータの反映には数日お時間がかかる場合がございます。</p>
                          </li>
                        </div>
                      </ul>
                    </div>
                  </li>
                  <li>
                    <div class="helpDropdown">
                      <label for="menu3">
                        <h3>ご注文内容の変更について</h3>
                      </label>
                      <input type="checkbox" id="menu3">
                      <ul class="dropdown3">

                        <div class="cancel">
                          <h2>※未実装</h2>
                          <li>
                            <p>現時点、注文内容の変更機能は実装しておりません。<br>
                              実装されるのをしばらくお待ちください。</p>
                          </li>
                        </div>

                      </ul>
                    </div>
                  </li>
                  <li>
                  <li>
                    <div class="helpDropdown">
                      <label for="menu4">
                        <h3>商品価格の変更について</h3>
                      </label>
                      <input type="checkbox" id="menu4">
                      <ul class="dropdown4">
                        <div class="cancel">
                          <h2>※未実装</h2>
                          <li>
                            <p>現時点、商品価格の変更機能は実装しておりません。<br>
                              実装されるのをしばらくお待ちください。</p>
                          </li>
                        </div>
                      </ul>
                    </div>
                  </li>
                </ul>
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
